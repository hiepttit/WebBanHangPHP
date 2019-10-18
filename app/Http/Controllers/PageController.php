<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use Session;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slide=Slide::all();
        $new_product=Product::where('new',1)->get();
        $hot_product=Product::where('promotion_price','<>',0)->get();
        // dd($new_product);
        // print_r($slide);
        // exit;
        //return view('page.trangchu',['slide'=>$slide]);
        return view('page.trangchu',compact('slide','new_product','hot_product'));
    }
    public function getLogin(){
        return view('page.login');
    }
    public function getCategory($type){
        $slide=Slide::all();
        $sp_type=Product::where('id_type',$type)->get();
        $type=ProductType::all();
        return view('page.loaiSP',compact('slide','sp_type','type'));
    }
    public function getProductDetail(Request $req){
        $slide=Slide::all();
        $sanpham=Product::where('id',$req->id)->first();
        return view('page.Product_detail',compact('slide','sanpham'));
    }
    public function getRegister(){
        return view('page.register');
    }
    public function getAddCart(Request $req,$id){
        $product=Product::find($id);
        $oldCart=Session::get('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);

        $cart->add($product,$id);
        $req->session()->put('cart',$cart);

        
        return redirect()->back();
    }
    public function getCart(){
        $slide=Slide::all();
        return view('page.cart',compact('slide'));
    }
    public function getDelCart($id){
        $oldCart=Session::get('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
}
