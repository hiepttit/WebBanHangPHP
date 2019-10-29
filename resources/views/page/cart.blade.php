@extends('master')
<link rel="stylesheet" href="{{asset('source/styles/shopping-cart.css')}}">
@section('content')
<main>
            <div class="slide-advertise">
                <div class="contained-fluid">
                    <div class="row">
                        <div class="col">
                            <div id="demo" class="carousel slide" data-ride="carousel">
                                <ul class="carousel-indicators">
                                <?php $count=0?>;
                                @foreach($slide as $sl)                                
                                    @if($count==0)
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    <?php $count++?>                                   
                                    @else
                                    <li data-target="#demo" data-slide-to="{{$count}}"></li>
                                    @endif                                                                      
                                @endforeach
                                </ul>
                                <div class="carousel-inner">
                                <?php $count=0?>;
                                @foreach($slide as $sl)                                
                                    @if($count==0)
                                    <div class="carousel-item active">
                                        <img src="source/images/slide/{{$sl->image}}" alt="Los Angeles" width="100%">
                                        <div class="carousel-caption color-black">
                                            <h3>PRODUCT-ADVERTISE-X</h3>
                                            <p>Shopping Now</p>
                                        </div>
                                    </div>
                                    <?php $count++?>                                   
                                    @else
                                    <div class="carousel-item">
                                        <img src="source/images/slide/{{$sl->image}}" alt="Los Angeles" width="100%">
                                        <div class="carousel-caption color-black">
                                            <h3>PRODUCT-ADVERTISE-X</h3>
                                            <p>Shopping Now</p>
                                        </div>
                                    </div>
                                    @endif                                                                      
                                @endforeach
                                </div>                              
                                <a class="carousel-control-prev " href="#demo" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="wrapper-shopping-cart">

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-9 ">
                            <div class="product-cart">
                                <div class="row">
                                    <div class="col">
                                        <div class="title-shopping-cart">
                                            shopping cart
                                            <hr>
                                        </div>
                                    </div>
                                </div>

                                <!-- start-1-product -->

                                <!-- start-1-product -->
                                @if(Session::has('cart'))
                                @foreach(session('cart')->items as $product)
                                <div class="row product">
                                    <!-- line -->
                                    <div class="col-12">
                                        <hr>
                                    </div>

                                    <div class="col">
                                        <div class="product-image">
                                            <img src="source/images/product/{{$product['item']['image']}}" alt="" width="100%">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="product-detail">
                                            <div>
                                                <div class="product-star">

                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i>

                                                </div>
                                                <div class="product-name">{{$product['item']['name']}}</div>
                                                <div class="product-price">$ {{$product['item']['unit_price']}}</div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="quantity">
                                            <div class="input-group">
                                                <input type="text" value="0">
                                                <div class="button">
                                                    <button>+</button>
                                                    <button>-</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="product-price-sum">$ {{Session('cart')->totalPrice}}</div>
                                    </div>
                                    <div class="col-1">
                                        <div class="icon-delete">
                                            <!-- <button onclick="deleteThis({{$product['item']['id']}})"> -->
                                                <a hrefs="{{route('delCart',$product['item']['id'])}}">
                                                    <i class="fas fa-trash "></i>
                                                </a>
                                            <!-- </button> -->
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                                @endif
                                <!-- end-1-product -->
                </div>
                <script>
                    function deleteThis(id){
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            }
                        });
                        jQuery.ajax({
                            url: "./delGioHang/" + id,
                            method: 'post',
                            success: function(result){
                                jQuery('.alert').show();
                                jQuery('.alert').html(result.success);
                            }});
                        });
                    }
                </script>
                            <!--end product-cart -->

                        </div>
                        <div class="col-3">
                            <div class="product-cart">
                                <div class="row">
                                    <div class="col">
                                        <div class="title-bill">
                                            BILL
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row product-cart-items">
                                    <div class="col"><span class="float-left">Items</span></div>
                                    <div class="col "><span class="float-right">120</span></div>
                                </div>

                                <div class="row product-cart-promo-code">
                                    <div class="col float-left"><span class="float-left">Promo code</span></div>
                                    <div class="col"><span class="float-right">12.0%</span></div>
                                </div>
                                <div class="row product-cart-shipping">
                                    <div class="col float-left"><span class="float-left">Shipping</span></div>
                                    <div class="col"><span class="float-right">Free</span></div>
                                </div>
                                <hr>
                                <div class="row product-cart-total">
                                    <div class="col float-left total">Total</div>
                                    <div class="col"><span class="float-right price">$12000000.00</span></div>
                                </div>
                                <hr>
                                <div class="row product-cart-checkout">
                                    <div class="col">
                                        <button class="btn btn-dark">CHECKOUT</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
</main>
@endsection