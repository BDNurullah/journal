<header class="header-area clearfix">
    <!-- Close Icon -->
    <div class="nav-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <!-- Logo -->
    <div class="logo" style="margin-bottom: 10px !important;">
        <a href="{{route('index')}}"><img src="{{ asset('assets/logo/logo.png')}}" alt="No Image" width="200" height="200"></a>
    </div>
    <!-- Amado Nav -->
    <nav class="amado-nav">
        <ul>
            <li class="active"><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('shop') }}">Product</a></li>
<!--            <li><a href="product-details.html">Product</a></li>
            <li><a href="cart.html">Cart</a></li>
            <li><a href="checkout.html">Checkout</a></li>-->
        </ul>
    </nav>
    <!-- Button Group -->
    <div class="amado-btn-group mt-30 mb-100">
        <a href="#" class="btn btn-info mb-15" title="Order by a Phone Call">Order: 01313597212</a>
        <a href="#" class="btn btn-warning" title="Only for Bkash">Bkash: 01819896750</a>
    </div>
    <!-- Cart Menu -->
<!--    <div class="cart-fav-search mb-100">
        <a href="cart.html" class="cart-nav"><img src="{{ asset('assets/portal/img/core-img/cart.png')}}" alt=""> Cart <span>(0)</span></a>
        <a href="#" class="fav-nav"><img src="{{ asset('assets/portal/img/core-img/favorites.png')}}" alt=""> Favourite</a>
        <a href="#" class="search-nav"><img src="{{ asset('assets/portal/img/core-img/search.png')}}" alt=""> Search</a>
    </div>-->
    <!-- Social Button -->
    <div class="social-info d-flex justify-content-between">
        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </div>
</header>