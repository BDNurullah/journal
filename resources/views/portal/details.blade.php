@extends('layouts.portal')

@section('content')
<!-- Product Details Area Start -->
<div class="single-product-area section-padding-100">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url({{ asset('uploads/product/main/'.$products->ImageUrl)}});"></li>
                            @if($products->SubImageUrl1 !='')
                            <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url({{ asset('uploads/product/sub/'.$products->SubImageUrl1)}});"></li>
                            @endif
                            @if($products->SubImageUrl2 !='')
                            <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url({{ asset('uploads/product/sub/'.$products->SubImageUrl2)}});"></li>
                            @endif
                            @if($products->SubImageUrl3 !='')
                            <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url({{ asset('uploads/product/sub/'.$products->SubImageUrl3)}});"></li>
                            @endif
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="gallery_img" href="{{ asset('uploads/product/main/'.$products->ImageUrl)}}">
                                    <img style="height: 300px; width: 200px;" class="d-block w-100" src="{{ asset('uploads/product/main/'.$products->ImageUrl)}}" alt="First slide">
                                </a>
                            </div>
                            @if($products->SubImageUrl1 !='')
                            <div class="carousel-item">
                                <a class="gallery_img" href="{{ asset('uploads/product/sub/'.$products->SubImageUrl1)}}">
                                    <img style="height: 300px; width: 200px;" class="d-block w-100" src="{{ asset('uploads/product/sub/'.$products->SubImageUrl1)}}" alt="Second slide">
                                </a>
                            </div>
                            @endif
                            @if($products->SubImageUrl2 !='')
                            <div class="carousel-item">
                                <a class="gallery_img" href="{{ asset('uploads/product/sub/'.$products->SubImageUrl2)}}">
                                    <img style="height: 300px; width: 200px;" class="d-block w-100" src="{{ asset('uploads/product/sub/'.$products->SubImageUrl2)}}" alt="Third slide">
                                </a>
                            </div>
                            @endif
                            @if($products->SubImageUrl3 !='')
                            <div class="carousel-item">
                                <a class="gallery_img" href="{{ asset('uploads/product/sub/'.$products->SubImageUrl3)}}">
                                    <img style="height: 300px; width: 200px;" class="d-block w-100" src="{{ asset('uploads/product/sub/'.$products->SubImageUrl3)}}" alt="Fourth slide">
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="short_overview">
                    <h3>৳ {{ $products->Price}}
                        <button>
                            <a class="btn amado-btn" href="{{route('cart',$products->ProductID)}}">Order Now</a>
                        </button>
                    </h3>
                    <label class="label-info"><h5>Terms & Conditions</h5></label>
                    <p>
                        আমরা সারা বাংলাদেশে ফ্রী হোম ডেলিভারী দিয়ে থাকি।
                        আমাদের কোন ডেলিভারী চার্জ নেই।
                        ঢাকা শহরের ভেতরে ৩ ঘন্টার মধ্যে নিশ্চিত ডেলিভারী করা হয়।
                        পন্য অর্ডারে আমরা ২০০ টাকা আগ্রীম বিকাশ নিয়ে থাকি।
                        এই আগ্রীম ২০০ টাকা পন্যের মূল দাম থেকে কর্তন করা হবে।
                        ক্যাশ-অন ডেলিভারীর ক্ষেত্রে কোন মূল্য ফেরত দেবার সুযোগ নেই।
                        আমরাই দিতে পারি আপনাকে একমাএ অর্জিনিয়াল প্রোডার্ক্ট এর নিশ্চিয়তা।
                        পন্য অর্ডার করতে কল করুন : 01313597212 / 01893100899 
                        আমাদের বিকাশ পার্সোনাল নাম্বার : 01819896750
                        পণ্য ডেলিভারীর সময় সঠিক পণ্য দেখে-বুঝে নেওয়ার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।
                        নষ্ট বা ক্ষতিগ্রস্ত পণ্য গ্রহন না করে পণ্যবাহকের কাছে পণ্য ফেরত দেবার জন্য বলা হচ্ছে।
                        আপনাদের সুখী জীবনই আমাদের কাম্য।
                        হট  কেক পরিবারের সাথে থাকার জন্য আপনাকে অসংখ্য ধন্যবাদ জানানো হচ্ছে।
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="single_product_desc">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price">৳ {{ $products->Price}}</p>
                        <a href="#">
                            <h6 style="text-transform: uppercase;">{{ $products->Name}}</h6>
                        </a>
                        <!-- Ratings & Review -->
                        <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                            <div class="review">
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <h5>Product Description</h5>
                        {!! $products->Description !!}
                    </div>
                    <h3>৳ {{ $products->Price}}
                        <button>
                            <a class="btn amado-btn" href="{{route('cart',$products->ProductID)}}">Order Now</a>
                        </button>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details Area End -->
@endsection