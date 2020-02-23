@extends('layouts.portal')

@section('content')
<div class="cart-table-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cart-title mt-50">
                    <h2>Your Purchase</h2>
                </div>
                <form action="{{action('SiteController@order')}}" method="post">
                    {{csrf_field()}}
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart_product_img">
                                        <a href="#"><img src="{{ asset('uploads/product/main/'.$products->ImageUrl)}}" alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>{{$products->Name}}</h5>
                                        <input type="hidden" name="product" id="productID" value="{{$products->ProductID}}">
                                    </td>
                                    <td class="qty">
                                        <div class="qty-btn d-flex">
                                            <input type="number" name="quantity" id="qty" required="required" step="1" min="1" maxlength="3" max="300"  value="1" style="text-align: center;">
                                        </div>
                                    </td>
                                    <td class="price">
                                        ৳ <span id="showPrice">{{$products->Price}}</span>
                                        <input type="hidden" name="Price" id="Price" value="{{ $products->Price }}">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="checkout_details_area">
                        <div class="cart-title">
                            <h4>Receive Info</h4>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <input type="text" name="fullName" class="form-control" placeholder="Full Name" required="required"/>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="number" name="mobile" class="form-control" placeholder="Mobile" required="required"/>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="email"  name="email" class="form-control" placeholder="Email"/>
                            </div>
                            <div class="col-12 mb-3">
                                <textarea name="address" class="form-control w-100" cols="30" rows="2" placeholder="Product Receive Address" required="required"></textarea>
                            </div>
                        </div>
                        <div class="payment-method">
                            <!-- Cash on delivery -->
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="cod" checked>
                                <label class="custom-control-label" for="cod">Courier Delivery</label>
                            </div>
                            <!-- Paypal -->
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="paypal">
                                <label class="custom-control-label" for="paypal">Agree With Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="cart-btn" style="text-align: center;">
                            <button type="submit" class="btn btn-info mb-15 ">Submit Order</button>
                        </div>
                    </div>            
                </form>
            </div>
            <div class="col-12 col-lg-4 cart-summary"></div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
    $(document).on('keyup blur', '#qty', function () {
        var productQty = $(this).val();
        var price = $('#Price').val();
        var totalPrice = productQty * price;
        $("#showPrice").text(totalPrice);
    });
</script>
@endsection