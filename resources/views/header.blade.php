<header>
            <div class="header-first">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-6">+84 384 352 233</div>
                        <div class="col-6">
                            <div class="inline-block float-right">
                                <i class="icon-account fas fa-user-circle"></i>
                                <div id="my-account" class="my-account inline-block"></div>
                                <span class="m-2">|</span>
                                <i class="icon-wish fas fa-heart"></i>
                                <div class="wish-list inline-block"></div>
                                <span class="m-2">|</span>
                                <i class="icon-login fas fa-lock"></i>
                                <div class="login inline-block"></div>
                                <div id="div"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header-second">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-3 display-align">
                            <div class="logo">
                                <img src="source/images/logo.png" alt="">
                            </div>
                        </div>

                        <div class="col-6 ">
                            <div class="menu mt-3">
                                <ul>
                                    <li class="one" id="home"><a href="{{route('trang-chu')}}">Home</a> </li>
                                    <li class="two" id="element"><a>Element</a></li>
                                    <li class="three" id="product"><a>Product</a></li>
                                    <li class="four" id="page"><a >Page</a></li>
                                    <li class="five"><a href="#">Blog</a></li>
                                    <li class="six"><a href="#">About Us</a></li>
                                    <li class="seven"><a href="#">Contact</a></li>
                                    <hr />
                                </ul>
                            </div>

                        </div>
                        <div class="col-3 display-align search-cart">
                            <div>
                                <div class="inline-block search">
                                    <form role="search" method="get" id="searchform" action="{{route('search')}}">
                                        <input class="active-pink-3 active-pink-4 mb-4" type="text" name="key" placeholder="Search" aria-label="Search">
                                        <button class="fas fa-search" type="submit" id="searchsubmit"></button>
                                    </form>
                                </div>
                                
                                <div class="inline-block brick m-3 ">
                                    |
                                </div>
                                <div class="inline-block shopping-cart">
                                    <a href="{{route('Cart')}}"><i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="header-third">
                <div class="dropdown-items">
                    <div class="add-product-hide">
                        <div class="dropdown-product">

                            <div class="container">
                                <div class="row bg-warning">
                                @foreach($loaiSP as $loai)
                                    <div class="col-4  bg-danger"><a href="{{route('loaiSP',$loai->id)}}">{{$loai->name}}</a></div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
      