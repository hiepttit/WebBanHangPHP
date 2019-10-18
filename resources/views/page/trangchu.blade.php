@extends('master')
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
            <div class="feature-product">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="title">NEW PRODUCT</div>
                            <hr>
                            <div class="description">There are {{count($new_product)}} new products.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="owl-carousel">
                            @foreach($new_product as $new)
                            <div class="col pr-2 pl-2">
                                <div class="cart">
                                    <a href="{{route('ProductDetail',$new->id)}}">
                                    <div class="cart-header"><img src="source/images/product/{{$new->image}}" alt="" width="100%"></div>

                                    <div class="cart-body ">
                                        <div class="product-name display-justify"><span class="name">{{$new->name}}</span>
                                        </div>
                                        <div class="display-justify icon-star">
                                            <i class="fas fa-star star"></i>
                                            <i class="fas fa-star star"></i>
                                            <i class="fas fa-star star"></i>
                                            <i class="fas fa-star-half-alt star"></i>
                                            <i class="far fa-star star"></i>
                                        </div>
                                        <div class="display-justify"><span class="price">$ {{$new->unit_price}}</span> </div>
                                    </div>
                                    </a>

                                    <div class="cart-footer">
                                        <div class="icon display-align-justify">
                                            <div class="icon-love border-icon">
                                                <i class="icon fas fa-heart"></i>
                                            </div>
                                            <div class=" icon-search border-icon" data-toggle="modal" data-target="#modalProduct">
                                                <i class="icon fas fa-search-plus"></i>
                                            </div>
                                            <div class="icon-star border-icon">
                                                <i class="icon fas fa-star"></i>
                                            </div>
                                            <div class="cart-shopping border-icon">
                                                <a href="{{route('AddCart',$new->id)}}"><i class="icon fas fa-cart-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->
                            @endforeach
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <div class="title">HOT PRODUCT</div>
                            <hr>
                            <div class="description">There are {{count($hot_product)}} hot products.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="owl-carousel">
                            @foreach($hot_product as $hot)
                            <div class="col pr-2 pl-2">
                                <div class="cart">
                                    <div class="cart-header"><img src="source/images/product/{{$hot->image}}" alt="" width="100%"></div>

                                    <div class="cart-body ">
                                        <div class="product-name display-justify"><span class="name">{{$hot->name}}</span>
                                        </div>
                                        <div class="display-justify icon-star">
                                            <i class="fas fa-star star"></i>
                                            <i class="fas fa-star star"></i>
                                            <i class="fas fa-star star"></i>
                                            <i class="fas fa-star-half-alt star"></i>
                                            <i class="far fa-star star"></i>
                                        </div>
                                        <div class="display-justify"><span class="price">$ {{$hot->unit_price}}</span> </div>
                                    </div>

                                    <div class="cart-footer">
                                        <div class="icon display-align-justify">
                                            <div class="icon-love border-icon">
                                                <i class="icon fas fa-heart"></i>
                                            </div>
                                            <div class=" icon-search border-icon" data-toggle="modal" data-target="#id">
                                                <i class="icon fas fa-search-plus"></i>
                                            </div>
                                            <div class="icon-star border-icon">
                                                <i class="icon fas fa-star"></i>
                                            </div>
                                            <div class="cart-shopping border-icon">
                                                <a href="{{route('AddCart',$hot->id)}}"><i class="icon fas fa-cart-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->
                            @endforeach
                        </div>
                    </div>
            </div>
        </main>

        <div class="modal-bstr">
            <div class="container">
                <!-- The Modal -->
                <div class="modal" id="modalProduct">
                    <div class="modal-dialog modal-dialog-scrollable modal-width-margin">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <!-- <h1 class="modal-title">Modal Heading</h1> -->
                                <button type="button" class="close" data-dismiss="modal">
                                    <div class="x">×</div>
                                </button>
                            </div>


                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-5">
                                        <img src="source/images/2.jpg" alt="" width="100%">
                                    </div>
                                    <div class="col-7">
                                        <div class="cart-body ">

                                            <div class="product-name" id="name"><span class="name">PRODUCT NAME</span>
                                            </div>
                                            <hr>
                                            <div class="inline-block"><span class="price inline-block">$ 869.00</span>
                                            </div>
                                            <div class="inline-block"><span class="price-old inline-block">$
                                                    888.00</span> </div>
                                            <hr>
                                            <div class=" inline-block">
                                                <div class="input-qty inline-block">
                                                    <div class="inline-block"><button class="btn-sub ">-</button></div>

                                                    <input type="text" value="1">
                                                    <button class="btn-add">+</button>
                                                </div>
                                            </div>
                                            <div class="buy-now inline-block">
                                                <button class="btn-buy-now">ADD TO CARD</button>
                                            </div>
                                            <hr>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, provident
                                                facilis nostrum autem excepturi nihil distinctio eligendi dolorum neque,
                                                culpa voluptatem repudiandae quo ipsum, similique numquam. Corrupti est
                                                sunt dolorum.</p>
                                            <hr>
                                        </div>

                                        <div class="cart-footer">
                                            <div class="share">
                                                Share this product
                                            </div>
                                            <div class="icon-share display-align-justify">
                                                <div class="icon-fb ">
                                                    <i class="fab fa-facebook-f"></i>
                                                </div>
                                                <div class=" icon-insta ">
                                                    <i class="fab fa-instagram"></i> </div>
                                                <div class="icon-twitter ">
                                                    <i class="fab fa-twitter"></i> </div>
                                                <div class="icon-google ">
                                                    <i class="fab fa-google-plus-g"></i> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

@endsection