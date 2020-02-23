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
            <h3 class="box-title">Create Home Slider</h3>
            <div class="box-tools pull-right">
                <a href="{{ url('admin/homesliders') }}" class="btn btn-primary" title="Home Sliders List"><i class="fa fa-backward"></i> Back</a>
            </div>
        </div>
        <!-- /.box-header -->
        <form action="{{ url('admin/homesliders') }}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="Title" placeholder="Enter...">
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" name="ImageUrl" class="form-control" id="ImageUrl" onchange="loadFile(event)">
                            <div style="margin-top: 20px;">
                                <img id="output"  style="width: 100px;height: 100px;border-width: 4px 4px 4px 4px;border-style: solid;border-color: #ccc;" src="" />
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="editor1" name="Description" rows="10" cols="80"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Active Status</label>
                        <input type="checkbox" name="ActiveStatus" value="1" class="checkbox" checked>
                    </div>
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

<script>
    var loadFile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>