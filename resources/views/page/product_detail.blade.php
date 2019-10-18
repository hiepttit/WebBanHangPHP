@extends('master')
<link rel="stylesheet" href="{{asset('source/styles/product-detail.css')}}">
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


            <div class="product-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="image-product">
                                <img src="source/images/product/{{$sanpham->image}}" alt="" width="100%" height="">
                            </div>
                            <div class="list-images-description">
                                <div class="row pt-4">
                                    <div class="col-2 display-align-justify"> <i
                                            class="icon-left fas fa-arrow-left"></i></div>
                                    <div class="col-8 p-0">
                                        <div class="row">
                                            <div class="owl-carousel set-height">
                                                <div class="col p-2">
                                                    <img src="{{asset('source/images/1(2).jpg')}}" alt="" width="100%" height="">

                                                </div>
                                                <div class="col p-2">
                                                    <img src="{{asset('source/images/2.jpg')}}" alt="" width="100%" height="">

                                                </div>
                                                <div class="col p-2">
                                                    <img src="{{asset('source/images/3.jpg')}}" alt="" width="100%" height="">

                                                </div>
                                                <div class="col p-2">
                                                    <img src="{{asset('source/images/4.jpg')}}" alt="" width="100%" height="">

                                                </div>
                                                <div class="col p-2">
                                                    <img src="{{asset('source/images/2.jpg')}}" alt="" width="100%" height="">

                                                </div>
                                                <div class="col p-2">
                                                    <img src="{{asset('source/images/3.jpg')}}" alt="" width="100%" height="">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 display-align-justify "><i
                                            class="icon-right fas fa-arrow-right"></i></div>




                                </div>

                            </div>
                        </div>
                        <div class="col-5">
                            <div class="detail">

                                <div class="row">
                                    <div class="col-12 name">{{$sanpham->name}}</div>

                                    <div class="col-12 brand-name">Brand Name</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-2 display-align">
                                        <div class="lable-color">COLOR</div>
                                    </div>
                                    <div class="col-5">
                                        <div class="color">
                                            <i class="fas fa-circle circle-1"></i>
                                            <i class="fas fa-circle circle-2"></i>
                                            <i class="fas fa-circle circle-3"></i>
                                            <i class="fas fa-circle circle-4"></i>
                                        </div>
                                    </div>
                                    <div class="col-5 flexed-end">
                                        <div class="star inline-block">
                                            <i class="fas fa-star icon-star"></i>
                                            <i class="fas fa-star icon-star"></i>
                                            <i class="fas fa-star icon-star"></i>
                                            <i class="fas fa-star-half-alt icon-star"></i>
                                            <i class="far fa-star icon-star"></i>
                                        </div>
                                        <div class="rating inline-block">
                                            ( 27 Rating )
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-2 display-align">
                                        <div class="lable-qty">QTY</div>
                                    </div>
                                    <div class="col-5  display-align">
                                        <div class="input-qty inline-block">
                                            <div class="inline-block"><button class="btn-sub ">-</button></div>

                                            <input type="text" value="1">
                                            <button class="btn-add">+</button>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="icon flexed-end">
                                            <div class="icon-love border-icon">
                                                <i class="icon fas fa-heart"></i>
                                            </div>
                                            <div class=" icon-search border-icon">
                                                <i class="icon fas fa-search-plus"></i>
                                            </div>
                                            <div class="icon-star border-icon">
                                                <i class="icon fas fa-star"></i>
                                            </div>
                                            <div class="cart-shopping border-icon">
                                                <i class="icon fas fa-cart-plus"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col">
                                        <div class="price">Price: $ {{$sanpham->unit_price}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <div class="buy-now">
                                            <button class="btn-buy-now">BUY NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="caterogy-list">
                                <div class="title-categories">
                                    <div class="border-left-y">
                                        CATEGORY
                                    </div>
                                </div>
                                <div class="cat-treeview">
                                    <ul class="treeview">
                                            <li class="open collasable" id="item-first">
                                                    <div class="child open">Brand One</div>
                                                    <ul class="treeview item open">
                                                        <li class="open"><div>Brand 1</div></li>
                                                        <li class="open"><div>Brand 1</div></li>
                                                        <li class="open"><div>Brand 2</div></li>
                                                        <li class="open"><div>Brand 3</div></li>
                                                        <li class="open"><div>Brand 4</div></li>
                                                        <li class="open"><div>Brand 5</div></li>
                                                    </ul>
                                            </li>
                                            <li class="open collasable" id="item-first">
                                                    <div class="child open">Brand Two</div>
                                                    <ul class="treeview item open">
                                                        <li class="open"><div>Brand 1</div></li>
                                                        <li class="open"><div>Brand 1</div></li>
                                                        <li class="open"><div>Brand 2</div></li>
                                                        <li class="open"><div>Brand 3</div></li>
                                                        <li class="open"><div>Brand 4</div></li>
                                                        <li class="open"><div>Brand 5</div></li>
                                                    </ul>
                                            </li>
                                            <li class="open collasable" id="item-first">
                                                    <div class="child open">Brand Three</div>
                                                    <ul class="treeview item open">
                                                        <li class="open"><div>Brand 1</div></li>
                                                        <li class="open"><div>Brand 1</div></li>
                                                        <li class="open"><div>Brand 2</div></li>
                                                        <li class="open"><div>Brand 3</div></li>
                                                        <li class="open"><div>Brand 4</div></li>
                                                        <li class="open"><div>Brand 5</div></li>
                                                    </ul>
                                            </li>
                                            <li class="open collasable" id="item-first">
                                                    <div class="child open">Brand Four</div>
                                                    <ul class="treeview item open">
                                                        <li class="open"><div>Brand 1</div></li>
                                                        <li class="open"><div>Brand 1</div></li>
                                                        <li class="open"><div>Brand 2</div></li>
                                                        <li class="open"><div>Brand 3</div></li>
                                                        <li class="open"><div>Brand 4</div></li>
                                                        <li class="open"><div>Brand 5</div></li>
                                                    </ul>
                                            </li>
                                            <li class="open collasable" id="item-first">
                                                    <div class="child open">Brand Five</div>
                                                    <ul class="treeview item open">
                                                        <li class="open"><div>Brand 1</div></li>
                                                        <li class="open"><div>Brand 1</div></li>
                                                        <li class="open"><div>Brand 2</div></li>
                                                        <li class="open"><div>Brand 3</div></li>
                                                        <li class="open"><div>Brand 4</div></li>
                                                        <li class="open"><div>Brand 5</div></li>
                                                    </ul>
                                            </li>
                                               
                                    </ul>
                                </div>
                            </div>
                            <div class="color-list mt-4 ">
                                    <div class="title-color">
                                        <div class="title-color border-left-y">
                                            COLOR
                                        </div>
                                    </div>  
                                    <div class="item-color">
                                            <ul>
                                                    <li class=" collasable"><a href="#"><i class="fas fa-circle circle-1"></i>Red Color</a></li>
                                                    <li class=" collasable"><a href="#"> <i class="fas fa-circle circle-2"></i>Blue Colo</a></li>
                                                    <li class=" collasable"><a href="#"> <i class="fas fa-circle circle-3"></i>Greeb Colo</a></li>
                                                    <li class=" collasable"><a href="#"> <i class="fas fa-circle circle-4"></i>Yellow Colo</a></li>
                                                    <li class=" collasable"><a href="#"><i class="fas fa-circle circle-4"></i>Orange Colo</a></li>
                                            </ul>
                                            
                                    </div>

                                   
                                </div>

                                <div class="recent-product-list mt-4 ">
                                        <div class="title-recent-product">
                                            <div class="border-left-y">
                                                RECENT PRODUCTS
                                            </div>
                                        </div>  
                                        <div class="item-recent-product">
                                            <div class="row">
                                                <div class="col-4 pr-0"><img src="{{asset('source/images/2.jpg')}}" alt="" width="100%"></div>
                                                <div class="col-8">
                                                    <div class="name">Product Name</div>
                                                    <div class="price">$ 888.00</div>
                                                </div>
                                            </div>
                                                
                                        </div>
                                        <div class="item-recent-product">
                                                <div class="row">
                                                    <div class="col-4 pr-0"><img src="{{asset('source/images/3.jpg')}}" alt="" width="100%"></div>
                                                    <div class="col-8">
                                                        <div class="name">Product Name</div>
                                                        <div class="price">$ 888.00</div>
                                                    </div>
                                                </div>
                                                    
                                            </div>
                                            <div class="item-recent-product">
                                                    <div class="row">
                                                        <div class="col-4 pr-0"><img src="{{asset('source/images/1(2).jpg')}}" alt="" width="100%"></div>
                                                        <div class="col-8">
                                                            <div class="name">Product Name</div>
                                                            <div class="price">$ 888.00</div>
                                                        </div>
                                                    </div>
                                                        
                                                </div>
                                                <!-- <div class="item-recent-product">
                                                        <div class="row">
                                                            <div class="col-4 pr-0"><img src="./images/4.jpg" alt="" width="100%"></div>
                                                            <div class="col-8">
                                                                <div class="name">Product Name</div>
                                                                <div class="price">$ 888.00</div>
                                                            </div>
                                                        </div>
                                                            
                                                    </div>
     -->
                                       
                                    </div>
                        </div>
                    </div>
                </div>

            </div>

        </main>
@endsection