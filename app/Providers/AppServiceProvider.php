<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loaiSP=ProductType::all();
            // if(Session('cart')){
            //     $oldCart=Session::get('cart');
            //     $cart=new Cart($oldCart);
            // }
            $view->with('loaiSP',$loaiSP);
            //$view->with(['loaiSP',$loaiSP,'cart'=>Session::get('cart'),'product_cart'=>$cart->item,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
        });

        
    }
}
