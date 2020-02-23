<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homeslider;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;
use File;

class HomeslidersController extends Controller
{
    const UPLOAD_DIR = '/uploads/home-slider-image/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeSlides = Homeslider::indexHomeslide();
        return view('admin.homesliders.index',compact('homeSlides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homesliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            //'Title' => 'required|max:255',
            'Description' => 'required',
             //'ImageUrl' => 'required|mimes:jpeg,png,jpg',
        ]);

        if($request->hasFile('ImageUrl')){
            $homeSlideImage = $this->upload($request->ImageUrl, 'home-slider-image');
        }else{
            $homeSlideImage = "";
        }
        $data = array([
            'Title' => $request->input('Title'),
            'Description' => $request->input('Description'),
            'ActiveStatus' => $request->input('ActiveStatus')?:0,
            'ImageUrl' => $homeSlideImage,
            'CreateBy' => Auth::user()->id
        ]);

        Homeslider::insertHomeSlide($data);

        session()->flash('message', 'Home slider Inserted Successfully');
        return redirect('admin/homesliders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showHomeSlider = Homeslider::showHomeSlider($id);
        return view('admin.homesliders.show',compact('showHomeSlider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editHomeSlider = Homeslider::editHomeslider($id);
        return view('admin.homesliders.edit',compact('editHomeSlider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Title' => 'required|max:255',
            'Description' => 'required',
            'ImageUrl' => 'required|mimes:jpeg,png,jpg',
        ]);
        if($request->hasFile('ImageUrl')){
            $homeSlideImage = $this->upload($request->ImageUrl, 'home-slider-image');
        }


        Homeslider::updateHomeSlider($request, $id,$homeSlideImage);

        session()->flash('message', 'Home slider Updated Successfully');
        return redirect('admin/homesliders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Homeslider::deleteHomeSlide($id);

        session()->flash('message', 'Post Deleted Successfully');
        return redirect('admin/homesliders');
    }

    private function upload($file, $title ='')
    {
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());//formatting the name for unique and readable
        $file_name = $timestamp .'-'.$title .'.'. $file->getClientOriginalExtension();
        Image::make($file)->save(public_path() . self::UPLOAD_DIR . $file_name);
//        ->resize(300,300)
        return $file_name;
    }
}
