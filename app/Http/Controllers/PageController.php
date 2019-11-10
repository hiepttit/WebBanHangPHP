<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use App\Customer;
use App\Bill;
use App\Account;
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
        if(Session::has('cusUser'))
            return redirect()->route('trang-chu');
        return view('page.login');
    }
    public function postLogin(Request $request){
        if(Session::has('cusUser'))
            return redirect()->route('trang-chu');
        $account = Account::where('username',$request->username)->first();
        if($account!=null){
            if($account->PASSWORD == $request->password){
                $customer=Customer::find($account->customerID);
                Session::put('cusUser',$customer);
                return redirect()->route('trang-chu');
            }
        }
        return redirect()->route('getLogin')->with("messageC","Đăng nhập thất bại!");
    }
    public function getRegister(){
        if(Session::has('cusUser'))
            return redirect()->route('trang-chu');
        return view('page.register');
    }
    public function logout(){
        if(Session::has('cusUser'))
            Session::forget('cusUser');
        return redirect()->route('trang-chu');
    }
    public function postRegister(Request $request){
        if(Session::has('cusUser'))
            return redirect()->route('trang-chu');
        $account = Account::where('username',$request->email)->first();
        if($account != null)
            return redirect()->route('getRegister')->with("messageC","Đăng ký thất bại!");
        $customer = Customer::where('email',$request->email)->first();
        if($customer == null){
            $customer->email = $request->email;
            $customer->name = $request->name;
            $customer->gender = $request->gender;
            $customer->address = $request->address;
            $customer->phone_number = $request->phone_number;
            $customer->save();
        }
        else{
            $customer->name = $request->name;
            $customer->gender = $request->gender;
            $customer->address = $request->address;
            $customer->phone_number = $request->phone_number;
            $customer->save();
        }
        $account = new Account();
        $account->username = $request->email;
        $account->PASSWORD = $request->password;
        $account->customerID = $customer->id;
        $account->save();
        return redirect()->route('getLogin')->with("messageC","Đăng ký thành công!");
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
        if(Session::has('cusUser')){
            $customer = Customer::find(Session::get('cusUser')->id);
        }
        else{
            $customer = new Customer();
            $customer->name=$request->customerName;
            $customer->gender=$request->customerGender;
            $customer->email=$request->customerEmail;
            $customer->address=$request->customerAddress;
            $customer->phone_number=$request->customerPhone;
            $customer->save();
        }
        if($customer->id == null)
            return "Lỗi tạo customer!";
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
        if($bill->id == 0)
            return "Lỗi tạo bill";
        $bill->SetBillDetail($cart->listProducts);
        Session::forget('cart');
        return redirect()->back()->with("message","Đã thanh toán");
    }
}
