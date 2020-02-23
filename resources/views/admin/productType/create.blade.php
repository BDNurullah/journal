@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="box box-primary">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="box-header with-border">
            <h3 class="box-title">Create New Product Type</h3>
            <div class="box-tools pull-right">
                <a href="{{ url('admin/productType') }}" class="btn btn-primary" title="All Product Type"><i class="fa fa-backward"></i> Back</a>
            </div>
        </div>
        <!-- /.box-header -->
        <form action="{{ url('admin/productType') }}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control" name="Type" placeholder="Enter..." required="required">
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-offset-1 col-md-4">
                        <div class="form-group">
                            <label>Active Status</label>
                            <input type="checkbox" name="ActiveStatus" value="1" class="checkbox" checked>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer" style="text-align: center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection