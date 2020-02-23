@extends('layouts.admin')

@section('content')
    <section class="content">

        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">View Home Slider</h3>
                    <div class="float-right"><a href="{{ url('admin/homesliders') }}" class="btn btn-primary" title="Home Sliders List"><i class="fas fa-backward"></i> Back</a> </div></i>
                </div>
                <style>
                    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
                        border: none;
                    }
                </style>
                <div class="col-md-12">
                    <div class="error-container">
                        <h4 class="center text-success">Home Slide Details</h4>
                        <div class="row table-responsive">
                            <div class="col-md-6">
                                <table class="table">
                                    <tr>
                                        <th>Title</th>
                                        <th> :</th>
                                        <td>{{$showHomeSlider->Title}}</td>
                                        <th>Image</th>
                                        <th> :</th>
                                        <td>
                                            <img
                                                    src="{{ asset('/uploads/home-slider-image/'.$showHomeSlider->ImageUrl) }}"
                                                    style="width: 50px;height: auto">
                                        </td>
                                    </tr>
                                    {{--<tr>--}}
                                    {{--<th>{{ trans('user.designation') }} </th>--}}
                                    {{--<th> :</th>--}}
                                    {{--<td>{{$userView->designation}}</td>--}}
                                    {{--<th>{{ trans('user.email') }} </th>--}}
                                    {{--<th> :</th>--}}
                                    {{--<td>{{$userView->email}}</td>--}}


                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<th>{{ trans('user.contact_no') }}</th>--}}
                                    {{--<th> :</th>--}}
                                    {{--<td>--}}
                                    {{--{{$userView->contact_no}}--}}
                                    {{--</td>--}}
                                    {{--<th>{{ trans('user.address') }}</th>--}}
                                    {{--<th> :</th>--}}
                                    {{--<td>--}}
                                    {{--{{$userView->address}}--}}
                                    {{--</td>--}}

                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<th>Center</th>--}}
                                    {{--<th> :</th>--}}
                                    {{--<td>--}}
                                    {{--{{$userView->ASSOCIATION_NAME}}--}}
                                    {{--</td>--}}
                                    {{--<th>{{ trans('user.remark') }}</th>--}}
                                    {{--<th> :</th>--}}
                                    {{--<td>--}}
                                    {{--{{$userView->remarks}}--}}
                                    {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<th>{{ trans('user.image') }}</th>--}}
                                    {{--<th> :</th>--}}
                                    {{--<td>--}}
                                    {{--<img src="{{asset($userView->user_image)}}" class="image-responsive" height="80px" width="90px">--}}
                                    {{--</td>--}}
                                    {{--<th>{{ trans('user.signature') }}</th>--}}
                                    {{--<th> :</th>--}}
                                    {{--<td>--}}
                                    {{--<img src="{{ asset('/'.$userView->user_signature) }}" height="80px" width="90px">--}}
                                    {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<th>{{ trans('user.status') }} </th>--}}
                                    {{--<th> :</th>--}}
                                    {{--<td>--}}
                                    {{--@if($userView->active_status==1)--}}
                                    {{--<span class="label label-md label-info arrowed arrowed-righ"> Active </span>--}}
                                    {{--@else--}}
                                    {{--<span class="label label-md label-danger arrowed arrowed-righ"> Inactive </span>--}}
                                    {{--@endif--}}
                                    {{--</td>--}}
                                    {{--</tr>--}}

                                </table>
                            </div>

                        </div>

                        <div class="space"></div>
                    </div>
                </div>
                <!-- /.card-header -->
            </div>
        </div>
    </section>
@endsection