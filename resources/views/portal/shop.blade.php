@extends('layouts.portal')

@section('content')
<div class="shop_sidebar_area">

</div>
<style>
    @media only screen and (max-width: 600px) {
        #productInfo {
            width: 46%;
        }
    }
</style>
<div class="amado_product_area">
    <div class="container-fluid">
        <div class="row">
            <!-- Single Product Area -->
            <?php foreach ($products as $key => $value) { ?>
                <div id="productInfo" style="display: block; position: relative; float: left; height: auto; margin-left: 4px; margin-right: 4px; margin-top: 10px; padding: 5px; border: 1px solid #ddd;">
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{ asset('uploads/product/main/'.$value->ImageUrl)}}" alt="No Image" style="height: 200px; width: 210px; margin-left: auto; margin-right: auto;">
                            <!-- Hover Thumb -->
                            <a href="{{ route('details',$value->ProductID) }}" data-toggle="tooltip" data-placement="left" title="For Order">
                            <img class="hover-img" src="{{ asset('uploads/product/sub/'.$value->SubImageUrl1)}}" alt="No Image" style="height: 200px; width: 210px; margin-left: auto; margin-right: auto;">
                            </a>
                        </div>
                        <div style="height: 50px; width: 210px; color: #fff; background-color: #17a2b8; vertical-align: middle; text-transform: uppercase; padding-left: 5px; ">
                            <a href="{{ route('details',$value->ProductID) }}"> {{ $value->Name}} </a>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description d-flex align-items-center justify-content-between">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="">৳ {{ $value->Price}}</p>
                            </div>
                            <!-- Ratings & Cart -->
                            <div class="ratings-cart text-right">
                                <div class="ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="cart">
                                    <a href="{{ route('details',$value->ProductID) }}" data-toggle="tooltip" data-placement="left" title="For Order">
                                        <button class="btn btn-success"><i class="fa fa-shopping-cart">Details</i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
@endsection