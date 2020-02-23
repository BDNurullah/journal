@extends('layouts.website')

@section('content')
<div id="content">
    <div id="content_slide">
        <div id="slide">
            <div class="box_skitter box_skitter_large">
                <ul>
                    <li><a href="#"><img src="{{asset('assets/website/baner-3.png')}}" class="cube"/></a></li>
                    <li><a href="#"><img src="{{asset('assets/website/slider-4.jpg')}}" class="cube"/></a></li>
                    <li><a href="#"><img src="{{asset('assets/website/slider-him.jpg')}}" class="cube"/></a></li>
                    <li><a href="#"><img src="{{asset('assets/website/slider-kabo.jpg')}}" class="cube"/></a></li>
                    <li><a href="#"><img src="{{asset('assets/website/slider-ortho.jpg')}}" class="cube"/></a></li>					
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div id="search" class="search">
        <form method="GET" action="http://hotcak/search">
            <input type="search" name="q" id="search_query" value="" placeholder="Keyword Search" autocomplete="off"/>
            <button type="submit">Search</button>
        </form>
    </div>

    <div class="clear"></div>

    <div id="content_hotdeals">
        <h3 class="feature">HOT DEALS!</h3>
        <div class="hot_bg" id="p_pic">
            <h3 class="product_name">Handsome Up Penis Enlargement Pump</h3>
            <h2 style="position:absolute;margin-left:40px;margin-top:140px;color:#F60;text-shadow:0 0 0.5em #000, 0 0 0.5em #000, 0 0 0.5em #000">+13 days Left</h2>
            <a href="{{ route('details') }}" target="_blank">
                <img src="{{ asset('uploads/product/1/1.png') }}" alt="Handsome Up Penis Enlargement Pump" style="height:170px;width:100%;margin-left:auto;margin-right:auto;"/>
            </a>
            <div class="discount discount_bg">Discount<br/>BDT 3500</div>
            <div class="clear"></div>
            <div class="current_bg">
                <div class="curnt_price">BDT 3500<strong class="prev_price">BDT 7000</strong></div>
            </div>
            <div class="order" style="cursor:pointer;">
                <a href="{{ route('order') }}" target="_blank">Order Now</a>
            </div>
            <div class="view">
                <a href="{{ route('details') }}" target="_blank">View Details</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="hot_bg" id="p_pic">
            <h3 class="product_name">Dildo Sex Toy Penis (Real Skin Penis)</h3>
            <h2 style="position:absolute;margin-left:40px;margin-top:140px;color:#F60;text-shadow:0 0 0.5em #000, 0 0 0.5em #000, 0 0 0.5em #000">+13 days Left</h2>
            <a href="{{ route('details') }}" target="_blank">
                <img src="{{ asset('uploads/product/2/1.jpg') }}" alt="Dildo Sex Toy Penis (Real Skin Penis)" style="height:170px;width:100%;margin-left:auto;margin-right:auto;"/>
            </a>
            <div class="discount discount_bg">Discount<br/>BDT 4000</div>
            <div class="clear"></div>
            <div class="current_bg">
                <div class="curnt_price">BDT 4000<strong class="prev_price">BDT 8000</strong></div>
            </div>
            <div class="order" style="cursor:pointer;">
                <a href="{{ route('order') }}" target="_blank">Order Now</a>
            </div>
            <div class="view">
                <a href="{{ route('details') }}" target="_blank">View Details</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="hot_bg" id="p_pic">
            <h3 class="product_name">Sex Flesh Light</h3>
            <h2 style="position:absolute;margin-left:40px;margin-top:140px;color:#F60;text-shadow:0 0 0.5em #000, 0 0 0.5em #000, 0 0 0.5em #000">+13 days Left</h2>
            <a href="{{ route('details') }}" target="_blank">
                <img src="{{ asset('uploads/product/3/1.jpeg') }}" alt="Sex Flesh Light" style="height:170px;width:100%;margin-left:auto;margin-right:auto;"/>
            </a>
            <div class="discount discount_bg">Discount<br/>BDT 4500</div>
            <div class="clear"></div>
            <div class="current_bg">
                <div class="curnt_price">BDT 4500<strong class="prev_price">BDT 9000</strong></div>
            </div>
            <div class="order" style="cursor:pointer;">
                <a href="{{ route('order') }}" target="_blank">Order Now</a>
            </div>
            <div class="view">
                <a href="{{ route('details') }}" target="_blank">View Details</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="hot_bg" id="p_pic">
            <h3 class="product_name">Dildo Sex Toy Belt Penis (Real Skin Peni)</h3>
            <h2 style="position:absolute;margin-left:40px;margin-top:140px;color:#F60;text-shadow:0 0 0.5em #000, 0 0 0.5em #000, 0 0 0.5em #000">+13 days Left</h2>
            <a href="{{ route('details') }}" target="_blank">
                <img src="{{ asset('uploads/product/4/1.jpeg') }}" alt="Dildo Sex Toy Belt Penis (Real Skin Peni)" style="height:170px;width:100%;margin-left:auto;margin-right:auto;"/>
            </a>
            <div class="discount discount_bg">Discount<br/>BDT 5500</div>
            <div class="clear"></div>
            <div class="current_bg">
                <div class="curnt_price">BDT 5500<strong class="prev_price">BDT 11000</strong></div>
            </div>
            <div class="order" style="cursor:pointer;">
                <a href="{{ route('order') }}" target="_blank">Order Now</a>
            </div>
            <div class="view">
                <a href="{{ route('details') }}" target="_blank">View Details</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="hot_bg" id="p_pic">
            <h3 class="product_name">Hand Pussy</h3>
            <h2 style="position:absolute;margin-left:40px;margin-top:140px;color:#F60;text-shadow:0 0 0.5em #000, 0 0 0.5em #000, 0 0 0.5em #000">+13 days Left</h2>
            <a href="{{ route('details') }}" target="_blank">
                <img src="{{ asset('uploads/product/5/1.jpeg') }}" alt="Hand Pussy" style="height:170px;width:100%;margin-left:auto;margin-right:auto;"/>
            </a>
            <div class="discount discount_bg">Discount<br/>BDT 2500</div>
            <div class="clear"></div>
            <div class="current_bg">
                <div class="curnt_price">BDT 2500<strong class="prev_price">BDT 5000</strong></div>
            </div>
            <div class="order" style="cursor:pointer;">
                <a href="{{ route('order') }}" target="_blank">Order Now</a>
            </div>
            <div class="view">
                <a href="{{ route('details') }}" target="_blank">View Details</a>
            </div>
            <div class="clear"></div>
        </div>	
    </div>

    <div class="clear"></div>

    <div id="content_middle">
        <div id="products">
            <h3 class="feature">Hot Products</h3>
            <div class="product_bg gap" id="p_pic">
                <a href="{{ route('details') }}" target="_blank">
                    <img src="{{ asset('uploads/product/6/1.jpeg') }}" alt="Sandhi Sudha Plus"/></a>
                <div class="featured_pro_name">
                    <h3 class="pro_name">Sandhi Sudha Plus</h3>
                </div>
                <h3 class="price">BDT 3490</h3>
                <div id="button">
                    <div class="pro_order" style="cursor:pointer;"><a href="{{ route('order') }}" target="_blank">Order Now</a></div>
                    <a class="pro_view_a" href="{{ route('details') }}" target="_blank">
                        <div class="pro_view" style="padding-top:8px;"><span style="padding-top:15px;">View Details</span></div>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="product_bg gap" id="p_pic">
                <a href="{{ route('details') }}" target="_blank">
                    <img src="{{ asset('uploads/product/7/1.jpeg') }}" alt="Fat Cutter"/></a>
                <div class="featured_pro_name">
                    <h3 class="pro_name">Fat Cutter</h3>
                </div>
                <h3 class="price">BDT 3490</h3>
                <div id="button">
                    <div class="pro_order" style="cursor:pointer;"><a href="{{ route('order') }}" target="_blank">Order Now</a></div>
                    <a class="pro_view_a" href="{{ route('details') }}" target="_blank">
                        <div class="pro_view" style="padding-top:8px;"><span style="padding-top:15px;">View Details</span></div>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="product_bg gap" id="p_pic">
                <a href="{{ route('details') }}" target="_blank">
                    <img src="{{ asset('uploads/product/8/1.jpeg') }}" alt="Hot Shapers"/></a>
                <div class="featured_pro_name">
                    <h3 class="pro_name">Hot Shapers</h3>
                </div>
                <h3 class="price">BDT 2490</h3>
                <div id="button">
                    <div class="pro_order" style="cursor:pointer;"><a href="{{ route('order') }}" target="_blank">Order Now</a></div>
                    <a class="pro_view_a" href="{{ route('details') }}" target="_blank">
                        <div class="pro_view" style="padding-top:8px;"><span style="padding-top:15px;">View Details</span></div>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="product_bg gap" id="p_pic">
                <a href="{{ route('details') }}" target="_blank">
                    <img src="{{ asset('uploads/product/9/1.jpeg') }}" alt="Nutri Slim Plus"/></a>
                <div class="featured_pro_name">
                    <h3 class="pro_name">Nutri Slim Plus</h3>
                </div>
                <h3 class="price">BDT 3990</h3>
                <div id="button">
                    <div class="pro_order" style="cursor:pointer;"><a href="{{ route('order') }}" target="_blank">Order Now</a></div>
                    <a class="pro_view_a" href="{{ route('details') }}" target="_blank">
                        <div class="pro_view" style="padding-top:8px;"><span style="padding-top:15px;">View Details</span></div>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="product_bg gap" id="p_pic">
                <a href="{{ route('details') }}" target="_blank">
                    <img src="{{ asset('uploads/product/5/1.jpeg') }}" alt="Spy Camera Pen (32GB Memory)"/></a>
                <div class="featured_pro_name">
                    <h3 class="pro_name">Spy Camera Pen (32GB Memory)</h3>
                </div>
                <h3 class="price">BDT 2490</h3>
                <div id="button">
                    <div class="pro_order" style="cursor:pointer;"><a href="{{ route('order') }}" target="_blank">Order Now</a></div>
                    <a class="pro_view_a" href="{{ route('details') }}" target="_blank">
                        <div class="pro_view" style="padding-top:8px;"><span style="padding-top:15px;">View Details</span></div>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
@endsection