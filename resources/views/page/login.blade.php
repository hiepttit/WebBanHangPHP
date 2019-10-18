@extends('master')
<link rel="stylesheet" href="{{asset('source/styles/login.css')}}">
@section('content')
<main>
            <div class="slide-advertise">
                <div class="contained-fluid">
                    <div class="row">
                        <div class="col">
                            <div id="demo" class="carousel slide" data-ride="carousel">
                                <ul class="carousel-indicators">
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo" data-slide-to="1"></li>

                                </ul>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('source/images/slide-product.PNG')}}" alt="Los Angeles" width="100%">
                                        <div class="carousel-caption color-black">
                                            <h3>PRODUCT-ADVERTISE-X</h3>
                                            <p>Shopping Now</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('source/images/slide-product.PNG')}}" alt="Chicago" width="100%">
                                        <div class="carousel-caption color-black">
                                            <h3>PRODUCT-ADVERTISE-Y</h3>
                                            <p>Shopping Now</p>
                                        </div>
                                    </div>
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

            <div class="wrapper-login mb-5">

                <div class="container mt-5 login-acount">
                    <div class="row justify-content-center">
                      
    
                        <div class="col-9 ">
                            <form class="form-login">
                                <div class="row mt-2">
                                        <div class="col-12 mt-4">
                                                <h4 class="title">LOG IN YOUR ACOUNT</h4>
                                  
                                            </div>
                                    <div class="col-12 mt-4 mb-4">
                                        <div class="row">
                                            <div class="col-3 ml-4 center"><label for="formGroupExampleInput">Email</label></div>
                                            <div class="col-6 input-group">
                                                <input type="email" class="form-control" id="formGroupExampleInput">
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <div class="col-3 ml-4 center"><label for="formGroupExampleInput2">Password</label>
                                            </div>
                                            <div class="col-6">
    
                                                <div class="input-group">
                                                    <input type="password" class="form-control"
                                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary btn-show"
                                                            type="button">SHOW</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-12 forgot-password">
                                    <a href="#" class="">Forgot your password?</a>
                                </div>
                                <div class="col-12 button-sign-in mt-3 mb-4">
                                    <button class="btn-color" type="button">SIGN IN</button>
                                </div>
                                <div class="col-12">
                                        <hr class="ml-4 mr-4">
                                </div>
                                
    
                                <div class="col-12 create-account mt-3 mb-5">
                                    <a href="source/register.html">No account? Create one here</a>
                                </div>
                            </form>
    
                        </div>
    
                    </div>
                </div>
    
            </div>
        </main>
@endsection