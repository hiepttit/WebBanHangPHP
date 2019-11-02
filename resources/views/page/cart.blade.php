@extends('master')
<link rel="stylesheet" href="{{asset('source/styles/shopping-cart.css')}}">
@section('content')
<main>
    {{csrf_token()}}
    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
    </script>
    
    <script>
        function deleteThis(id){
            //console.log(id);
            //return;
            var _token = $('input[name="_token"]').val();
            jQuery.ajax({
            url: "delGioHang/" + id,
            type: 'get',
            data:{_token:_token},
            success: function(result){
                alert("Đã xóa!");
                if(result!="OK")
                    return;
                var element = document.getElementById("products_"+id);
                element.parentNode.removeChild(element);
                //alter("result");
            }});
            };
        
                </script>
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
            @if(Session::has('message'))
            <script>
                alert("{{Session::get('message')}}");
            </script>
            @endif
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
                                @foreach($lstPro as $product)
                                <div id="products_{{$product->id}}" class="row product">
                                    <!-- line -->
                                    <div class="col-12">
                                        <hr>
                                    </div>

                                    <div class="col">
                                        <div class="product-image">
                                            <img src="source/images/product/{{$product->image}}" alt="" width="100%">
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
                                                <div class="product-name">{{$product->name}}</div>
                                                <div class="product-price">$ {{$product->unit_price}}</div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="quantity">
                                            <div class="input-group">
                                                <input type="text" value="{{Session('cart')->listProducts['0'.$product->id]}}">
                                                <div class="button">
                                                    <button>+</button>
                                                    <button>-</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="product-price-sum">$ {{Session('cart')->listProducts['0'.$product->id]*$product->unit_price}}</div>
                                    </div>
                                    <div class="col-1">
                                        <div class="icon-delete">
                                            <button onclick="deleteThis({{$product->id}})">
                                                <!-- <a hrefs="{{route('delCart',$product->id)}}"> -->
                                                    <i class="fas fa-trash "></i>
                                                <!-- </a> -->
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                                @endif
                                <!-- end-1-product -->
                </div>
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
                                    <div class="col "><span class="float-right">{{Session('cart')->totalQty??0}}</span></div>
                                </div>

                                <!-- <div class="row product-cart-promo-code">
                                    <div class="col float-left"><span class="float-left">Promo code</span></div>
                                    <div class="col"><span class="float-right">12.0%</span></div>
                                </div> -->
                                <div class="row product-cart-shipping">
                                    <div class="col float-left"><span class="float-left">Shipping</span></div>
                                    <div class="col"><span class="float-right">Free</span></div>
                                </div>
                                <hr>
                                <div class="row product-cart-total">
                                    <div class="col float-left total">Total</div>
                                    <div class="col"><span class="float-right price">{{Session('cart')->totalPrice??0}}</span></div>
                                </div>
                                <hr>
                                <div class="row product-cart-checkout">
                                    <div class="col">
                                        <button class="btn btn-dark" data-toggle="modal" data-target="#myModal">CHECKOUT</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                    <form action="{{route('checkOut')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Modal Header</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="max-height: 600px; overflow: auto;">
                            
                            <div class="form-group">
                                <label>Tên<label>
                                <input class="form-control" name="customerName" id="customerName"/>
                            </div>
                            <div class="form-group">
                                <label>Giới tính<label>
                                <input class="form-control" name="customerGender" id="customerGender"/>
                            </div>
                            <div class="form-group">
                                <label>Email<label>
                                <input class="form-control" name="customerEmail" id="customerEmail"/>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ<label>
                                <input class="form-control" name="customerAddress" id="customerAddress"/>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại<label>
                                <input class="form-control" name="customerPhone" id="customerPhone"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Số lượng hàng<label>
                                <input class="form-control" value="{{Session::get('cart')->totalQty??0}}" readonly/>
                            </div>
                            
                            <div class="form-group">
                                <label>Tổng số tiền<label>
                                <input class="form-control" value="{{Session::get('cart')->totalPrice??0}}" readonly/>
                            </div>
                            <div class="form-group">
                                <label>Hình thức thanh toán<label>
                                <input class="form-control" name="typePayment" id="typePayment"/>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Thanh toán</button>
                                <button style="background-color:#ddd" type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
</main>
@endsection