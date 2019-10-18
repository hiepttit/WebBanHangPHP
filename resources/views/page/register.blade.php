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

            <div class="wrapper-register mb-5">
        
                    <div class="container mt-5 login-acount">
                        <div class="row justify-content-center">
                          
                            <div class="col-9 ">
                                <form class="form-login">
                                    <div class="row">
                                            <div class="col-12 mt-4">
                                                    <h4 class="title">LOG IN YOUR ACOUNT</h4>
                                                  
                                            </div>
                                            <div class="col-12 mt-1 ">
                                                    <hr class="ml-4 mr-4">
                                                  
                                            </div>
                                
                                        <div class="col-12 mt-2 mb-4">
                                            <div class="row">
                                                <div class="col-3 ml-4"><label for="formGroupExampleInput">Gender</label></div>
                                                <div class="col-6 ">
                                                    <div class="row justify-content-center">
                                                            <div class="custom-control custom-radio mr-3">
                                                                    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                                    <label class="custom-control-label" for="customControlValidation2">Mr. </label>
                                                            </div>
                                                            <div class="custom-control custom-radio mb-2">
                                                                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                                                        <label class="custom-control-label" for="customControlValidation3">Mrs. </label>
                                                                        
                                                            </div>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="row">
                                                <div class="col-3 ml-4"><label for="formGroupExampleInput2">First name</label>
                                                </div>
                                                <div class="col-6">
        
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" id="formGroupExampleInput">
        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-3 ml-4"><label for="formGroupExampleInput">Last name</label>
                                                </div>
                                                <div class="col-6">
        
                                                    <div class="input-group mb-1">
                                                        <input type="text" class="form-control" id="formGroupExampleInput">
        
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
        
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-3 ml-4"><label for="formGroupExampleInput">Email</label></div>
                                                <div class="col-6">
                                                    <div class="input-group mb-1">
                                                        <input type="email" class="form-control" id="formGroupExampleInput">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <div class="row">
                                                <div class="col-3 ml-4"><label for="formGroupExampleInput2">Password</label>
                                                </div>
                                                <div class="col-6">
        
                                                    <div class="input-group mb-3">
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
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-3 ml-4"><label for="formGroupExampleInput">Address</label></div>
                                                <div class="col-6">
        
                                                    <div class="input-group mb-1">
                                                        <input type="text" class="form-control" id="formGroupExampleInput">
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="row">
                                                <div class="col-3 ml-4"><label for="formGroupExampleInput">Birthday</label>
                                                </div>
                                                <div class="col-6">
        
                                                    <div class="input-group mb-1">
                                                        <input type="date" class="form-control" id="formGroupExampleInput">
        
                                                    </div>
                                                    <div class="mt-2 mb-3 ex">(Ex: 12/08/1998)</div>
                                                    <div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customControlValidation1" required>
                                                            <label class="custom-control-label"
                                                                for="customControlValidation1">You are not a robot !!!</label>
                                                            <div class="invalid-feedback">Example invalid feedback text</div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
                                        <div class="col-12">
                                                <hr class="ml-4 mr-4">
                                        </div>
                                        <div class="col-12 button-sign-out mt-2 mb-4  pr-5">
                                            <a href="source/login.html"><button class="btn-color" type="button">SAVE</button></a>
                                        </div>
    
                                    </div>
                                </form>
        
                            </div>
        
                        </div>
                    </div>
        
                </div>
</main>
@endsection
