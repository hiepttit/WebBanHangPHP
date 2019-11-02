@extends('master')
<link rel="stylesheet" href="{{asset('source/styles/product-detail.css')}}">
<link rel="stylesheet" href="{{asset('source/styles/categories.css')}}">
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


            <div class="categories">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-3">
                            <div class="caterogy-list">
                                <div class="title-categories">
                                    <div class="border-left-y">
                                        CATEGORY
                                    </div>
                                </div>
                                <div class="cat-treeview">
                                    <ul class="treeview">

                                        @foreach($type as $loai)
                                        <li class="open collasable" id="item-first">
                                            <div class="child open"><a href="{{route('loaiSP',$loai->id)}}">{{$loai->name}}</a></div>
                                            <!-- <ul class="treeview item open">
                                                <li class="open">
                                                    <div>Brand 1</div>
                                                </li>
                                                <li class="open">
                                                    <div>Brand 1</div>
                                                </li>
                                                <li class="open">
                                                    <div>Brand 2</div>
                                                </li>
                                                <li class="open">
                                                    <div>Brand 3</div>
                                                </li>
                                                <li class="open">
                                                    <div>Brand 4</div>
                                                </li>
                                                <li class="open">
                                                    <div>Brand 5</div>
                                                </li>
                                            </ul> -->
                                        </li>
                                        @endforeach
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
                                        <li class=" collasable"><a href="#"><i class="fas fa-circle circle-1"></i>Red
                                                Color</a></li>
                                        <li class=" collasable"><a href="#"> <i class="fas fa-circle circle-2"></i>Blue
                                                Colo</a></li>
                                        <li class=" collasable"><a href="#"> <i class="fas fa-circle circle-3"></i>Greeb
                                                Colo</a></li>
                                        <li class=" collasable"><a href="#"> <i
                                                    class="fas fa-circle circle-4"></i>Yellow Colo</a></li>
                                        <li class=" collasable"><a href="#"><i class="fas fa-circle circle-4"></i>Orange
                                                Colo</a></li>
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

                            <div class="operating-system-list mt-4">
                                <div class="title-operating-system">
                                    <div class="border-left-y">
                                        OPERATING SYSTEM
                                    </div>
                                </div>
                                <div class="items-operating-system">
                                    <ul>
                                        <li class="item-operating-system">
                                            <div class="form-check">
                                                <input class="form-check-input item-checkbox" type="checkbox"
                                                    id="autoSizingCheck1">
                                                <label class="form-check-label item-name" for="autoSizingCheck1">
                                                    Windows XP
                                                </label>
                                            </div>
                                        </li>
                                        <li class="item-operating-system">
                                            <div class="form-check">
                                                <input class="form-check-input item-checkbox" type="checkbox"
                                                    id="autoSizingCheck2">
                                                <label class="form-check-label item-name" for="autoSizingCheck2">
                                                    Windows 8
                                                </label>
                                            </div>
                                        </li>
                                        <li class="item-operating-system">
                                            <div class="form-check">
                                                <input class="form-check-input item-checkbox" type="checkbox"
                                                    id="autoSizingCheck3">
                                                <label class="form-check-label item-name" for="autoSizingCheck3">
                                                    Windows 7
                                                </label>
                                            </div>
                                        </li>
                                        <li class="item-operating-system">
                                            <div class="form-check">
                                                <input class="form-check-input item-checkbox" type="checkbox"
                                                    id="autoSizingCheck4">
                                                <label class="form-check-label item-name" for="autoSizingCheck4">
                                                    Windows 11
                                                </label>
                                            </div>
                                        </li>
                                        <li class="item-operating-system">
                                            <div class="form-check">
                                                <input class="form-check-input item-checkbox" type="checkbox"
                                                    id="autoSizingCheck5">
                                                <label class="form-check-label item-name" for="autoSizingCheck5">
                                                    Windows 2000
                                                </label>
                                            </div>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-9">

                            <div class="feature-product">
                                <div class="container">
                                    <div class="row">
                                        @foreach($sp_type as $sp)
                                        <div class="col-4 pr-2 pl-2">
                                            <div class="cart">
                                            <a href="{{route('ProductDetail',$sp->id)}}">
                                                <div class="cart-header"><img src="source/images/product/{{$sp->image}}" alt=""
                                                        width="100%"></div>

                                                <div class="cart-body ">
                                                    <div class="product-name display-justify"><span class="name">{{$sp->name}}</span>
                                                    </div>
                                                    <div class="display-justify icon-star">
                                                        <i class="fas fa-star star"></i>
                                                        <i class="fas fa-star star"></i>
                                                        <i class="fas fa-star star"></i>
                                                        <i class="fas fa-star-half-alt star"></i>
                                                        <i class="far fa-star star"></i>
                                                    </div>
                                                    <div class="display-justify"><span class="price">$ {{$sp->unit_price}}</span>
                                                    </div>                                          
                                            </div>
                                            </a>

                                                <div class="cart-footer">
                                                    <div class="icon display-align-justify">
                                                        <div class="icon-love border-icon">
                                                            <i class="icon fas fa-heart"></i>
                                                        </div>
                                                        <div class=" icon-search border-icon" data-toggle="modal"
                                                            data-target="#id">
                                                            <i class="icon fas fa-search-plus"></i>
                                                        </div>
                                                        <div class="icon-star border-icon">
                                                            <i class="icon fas fa-star"></i>
                                                        </div>
                                                        <div class="cart-shopping border-icon">
                                                            <a onclick="addSPToCart({{$sp->id}})"><i class="icon fas fa-cart-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end -->
                                        @endforeach
                                    </div>
                                    <div class="owl-carousel"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                </script>
            </div>

</main>
@endsection