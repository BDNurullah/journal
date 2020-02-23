@extends('layouts.admin')

@section('content')
<section class="content">

    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header">
                <h3 class="box-title">Edit Product Type</h3>
                <div class="float-right"><a href="{{ url('admin/productType') }}" class="btn btn-primary" title="Product Type List"><i class="fa fa-backward"></i> Back</a> </div></i>
            </div>
            <!-- /.box-header -->
            <form action="{{ url('admin/productType/'.$editProductType->ProductTypeID) }}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!--                @method('PUT')-->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Type</label>
                                <input type="text" class="form-control" name="Type" value="{{ $editProductType->Type }}">
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Active Status</label>
                                <input type="checkbox" name="ActiveStatus" value="1" @if($editProductType->ActiveStatus == 1) checked @endif class="checkbox">
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class="box-footer" style="text-align: center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection