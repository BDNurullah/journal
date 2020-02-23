@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Home Slide</h3>
            <div class="box-tools pull-right">
                <a href="{{ url('admin/homesliders/create') }}" class="btn btn-primary" title="Add Home Sliders"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            @if(session('message'))
            <p class="alert alert-success">{{ session('message') }}</p>
            @endif
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#Sl</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Activity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($homeSlides as $sl=>$homeSlide)
                    <tr>
                        <td>{{ $sl }}</td>
                        <td>{{ $homeSlide->Title }}</td>
                        <td>{!! \Illuminate\Support\Str::words($homeSlide->Description, 2,'....')  !!}</td>
                        <td>
                            <img src="{{ asset('/uploads/home-slider-image/'.$homeSlide->ImageUrl) }}" style="width: 50px;height: auto">
                        </td>
                        <td>
                            @if ($homeSlide->ActiveStatus == 1)
                            <span class="btn btn-sm btn-success">Active</span>
                            @else
                            <span class="btn btn-sm btn-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{ url('/admin/homesliders/'.$homeSlide->HomeSliderID) }}" class="btn btn-sm btn-primary" title="View Home Slider"><i class="fa fa-eye"></i> </a> </li>
                                <li class="list-inline-item"><a href="{{ url('/admin/homesliders/'.$homeSlide->HomeSliderID.'/edit') }}" class="btn btn-sm btn-warning" title="Edit Home Slider"><i class="fa fa-edit"></i> </a> </li>
                                <li class="list-inline-item">
                                    {!! Form::open([
                                    'url'=> ['admin/homesliders', $homeSlide->HomeSliderID],
                                    'method'=> 'delete'
                                    ]) !!}
                                    {!! Form::button("<i class ='fa fa-trash'></i>", [
                                    'type'=>'submit',
                                    'onClick'=>"return confirm('Are You Sure Want To Delete $homeSlide->Title ?')",
                                    'class' => 'btn btn-sm btn-danger'
                                    ]) !!}
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#Sl</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Activity</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer"></div>
    </div>
</section>
@endsection