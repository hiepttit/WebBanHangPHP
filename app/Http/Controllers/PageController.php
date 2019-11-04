<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use App\Customer;
use App\Bill;
use Session;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slide=Slide::paginate(4);
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
        if($product == null)
            return "Thêm thất bại";
        $oldCart=Session::get('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        //$cart->add($product,$id);
        $cart->addProduct($id);
        $req->session()->put('cart',$cart);
        return "Thêm thành công";
        //return redirect()->back();
    }
    public function getCart(){
        $slide=Slide::all();
        $oldCart=Session::get('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $lstPro = $cart->toListProducts();
        return view('page.cart',compact('slide','lstPro'));
    }
    public function getDelCart($id){
        $oldCart=Session::get('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        //$cart->removeItem($id);
        $cart->removeProduct($id);
        //Session::put('cart',$cart);
        if(count($cart->listProducts) > 0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return "OK";
    }
    public function getSearch(Request $req){
        $slide=Slide::all();
        if($req->key==""){
            return redirect()->back();
        }
        else{
            $product=Product::where('name','like','%'.$req->key.'%')
            //->orWhere('unit_price',$req->key)
            ->get();
        }
        
        return view('page.search',compact('slide','product'));
    }
    public function CheckOut(Request $request){
        
        return redirect()->back()->with("message","Đã thanh toán");
        $customer = new Customer();
        $customer->name=$request->customerName;
        $customer->gender=$request->customerGender;
        $customer->email=$request->customerEmail;
        $customer->address=$request->customerAddress;
        $customer->phone_number=$request->customerPhone;
        $customer->save();

        $oldCart=Session::get('cart')?Session::get('cart'):null;
        if($oldCart == null)
            return "can't create";
        $cart = new Cart($oldCart);
        $bill = new Bill();
        $bill->id_customer = $customer->id;
        $bill->total = $cart->totalPrice;
        $bill->payment = $request->typePayment;
        $bill->note = "Chưa chuyển hàng";
        $bill->save();
        $bill->SetBillDetail($cart->listProducts);
        Session::forget('cart');
        return redirect()->back()->with("message","Đã thanh toán");
    }
}
