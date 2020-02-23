@extends('layouts.portal')

@section('content')
<div class="products-catagories-area clearfix">
    <!-- Product Catagories Area Start -->
    <div class="amado-pro-catagory clearfix">
        <!-- Single Catagory -->
        <?php foreach ($products as $key => $value) { ?>
            <div class="single-products-catagory clearfix">
                <a href="{{route('details')}}">
                    <img src="{{ asset('uploads/product/main/'.$value->ImageUrl)}}" alt="No Image">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>{{ $value->Price}}</p>
                        <h4>{{ $value->Name}}</h4>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
    <!-- Product Catagories Area End -->
</div>
@endsection