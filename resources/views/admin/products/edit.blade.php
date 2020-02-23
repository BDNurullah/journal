@extends('layouts.admin')

@section('content')
    <section class="content">

        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Create Home Slider</h3>
                    <div class="float-right"><a href="{{ url('admin/homesliders') }}" class="btn btn-primary" title="Home Sliders List"><i class="fas fa-backward"></i> Back</a> </div></i>
                </div>
                <!-- /.card-header -->
                <form action="{{ url('admin/homesliders/'.$editHomeSlider->HomeSliderID) }}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="Title" value="{{ $editHomeSlider->Title }}">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>File</label>
                                    <input type="file" name="ImageUrl" class="form-control" id="ImageUrl" onchange="loadFile(event)" value="{{ old($editHomeSlider->ImageUrl)}}">
                                    <div style="margin-top: 20px;">
                                        <img id="output"  style="width: 100px;height: 100px;border-width: 4px 4px 4px 4px;border-style: solid;border-color: #ccc;" src="{{ asset('/uploads/home-slider-image/'.$editHomeSlider->ImageUrl) }}" />
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="Description" id="description" class="form-control" rows="1">{{ $editHomeSlider->Description }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Active Status</label>
                            <input type="checkbox" name="ActiveStatus" value="1" @if($editHomeSlider->ActiveStatus == 1) checked @endif class="checkbox">
                        </div>
                    </div>
                    <div class="card-footer" style="text-align: center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
        </form>
        <script>
            CKEDITOR.replace( 'description' );
        </script>
    </section>

@endsection

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>


