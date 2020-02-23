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
            <h3 class="box-title">Create New Product</h3>
            <div class="box-tools pull-right">
                <a href="{{ url('admin/products') }}" class="btn btn-primary" title="Home Sliders List"><i class="fa fa-backward"></i> Back</a>
            </div>
        </div>
        <!-- /.box-header -->
        <form action="{{ url('admin/products') }}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Product Type <span style="color: red"> *</span></label>
                            <select class="form-control" name="productType" id="productTypeID" required="required">
                                <option value="">Select Type</option>
                                <option value="1">Mail</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Product Code <span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="code" placeholder="Enter..." required="required">
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Product Name <span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Enter..." required="required">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Product Price <span style="color: red"> *</span></label>
                            <input type="text" class="form-control" name="price" placeholder="Enter..." required="required">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Discount %</label>
                            <input type="text" class="form-control" name="discount" placeholder="Enter...">
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Product Image <span style="color: red"> *</span></label>
                                <input type="file" name="ProductImage" class="form-control" id="ProductImage" required="required" onchange="loadFile1(event)">
                            </div>
                            <div class="col-md-6">
                                <img id="output1"  style="width: 80px;height: 80px;border-width: 1px 1px 1px 1px;border-style: solid;border-color: #ccc;" src="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Sub Image 1</label>
                                <input type="file" name="SubImage[]" class="form-control" id="SubImage1" onchange="loadFile2(event)">
                            </div>
                            <div class="col-md-6">
                                <img id="output2"  style="width: 80px;height: 80px;border-width: 1px 1px 1px 1px;border-style: solid;border-color: #ccc;" src="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Sub Image 2</label>
                                <input type="file" name="SubImage[]" class="form-control" id="SubImage2" onchange="loadFile3(event)">
                            </div>
                            <div class="col-md-6">
                                <img id="output3"  style="width: 80px;height: 80px;border-width: 1px 1px 1px 1px;border-style: solid;border-color: #ccc;" src="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Sub Image 3</label>
                                <input type="file" name="SubImage[]" class="form-control" id="SubImage3" onchange="loadFile4(event)">
                            </div>
                            <div class="col-md-6">
                                <img id="output4"  style="width: 80px;height: 80px;border-width: 1px 1px 1px 1px;border-style: solid;border-color: #ccc;" src="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Description <span style="color: red"> *</span></label>
                            <textarea id="editor1" name="Description" rows="10" cols="80" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                <label>Active Status</label>
                                <input type="checkbox" name="ActiveStatus" value="1" class="checkbox" checked>
                            </div>
                            <div class="col-md-3" style="text-align: center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer" style="text-align: center">
            </div>
        </form>
    </div>
</section>

@endsection

<script>
    var loadFile1 = function (event) {
        var output = document.getElementById('output1');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
    var loadFile2 = function (event) {
        var output = document.getElementById('output2');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
    var loadFile3 = function (event) {
        var output = document.getElementById('output3');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
    var loadFile4 = function (event) {
        var output = document.getElementById('output4');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>