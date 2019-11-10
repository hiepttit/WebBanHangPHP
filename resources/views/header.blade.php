<header>
            <div class="header-first">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-6">Phone: 0123456789</div>
                        <div class="col-6">
                            <div class="inline-block float-right">
                                @if(Session::has('cusUser'))
                                <i class="icon-account fas fa-user-circle"></i>
                                <div id="my-account" class="my-account inline-block"> {{Session::get('cusUser')->name}}</div>
                                <span class="m-2">|</span>
                                <a style="color:white" href="{{route('vlogout')}}">Logout</a>
                                @else
                                <!-- <i class="icon-wish fas fa-heart"></i> -->
                                <div class="wish-list inline-block"><a style="color:white" href="{{route('getRegister')}}">Đăng ký</a></div>
                                <span class="m-2">|</span>
                                <!-- <i class="icon-login fas fa-lock"></i> -->
                                <div class="login inline-block"><a style="color:white" href="{{route('getLogin')}}">Đăng nhập</a></div>
                                <div id="div"></div>
                                @endif
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
                                    <a href="{{route('trang-chu')}}"><img src="source/images/logo.png" alt="logo"/></a> 
                            </div>
                        </div>

                        <div class="col-6 text-center">
                            <div class="menu mt-3">
                                <ul>
                                    <li class="one" id="home"><a href="{{route('trang-chu')}}">Home</a> </li>
                                    <li class="two" id="product"><a>Product</a></li>
                                    <li class="three" id="news"><a>News</a></li>
                                    <li class="four" id="about"><a >About Us</a></li>
                                    <li class="five"><a>Contact</a></li>
                                    <hr />
                                </ul>
                            </div>

                        </div>
                        <div class="col-3 display-align search-cart">
                            <div>
                                <div class="inline-block search">
                                    <form role="search" method="get" id="searchform" action="{{route('search')}}">
                                        <input class="ipt-search"" type="text" name="key" placeholder="Search" aria-label="Search">
                                        <button type="submit" id="searchsubmit" class="btn-search">
                                            <i class="fas fa-search"></i>
                                        </button>
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
                                <div class="row bg-white">
                                @foreach($loaiSP as $loai)
                                    <div class="col-4"><a href="{{route('loaiSP',$loai->id)}}">{{$loai->name}}</a><hr></div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
      