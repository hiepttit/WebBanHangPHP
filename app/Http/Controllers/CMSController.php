<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use DB;
use  App\Product;
use  App\Customer;
use  App\User;
use Session;
class CMSController extends Controller
{
    public function Index(){
        if(!Session::has('cmsUser'))
            return redirect()->route('viewLogin');
        return view('cms.pages.index');
    }
    public function GetLogin(){
        return view('cms.pages.login');
    }
    public function PostLogin(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user != null)
            if($request->password == $user->password){
                $user->password = "";
                Session::put('cmsUser',$user);
                return redirect()->route('cmsIndex');
            }
        return redirect()->back()->with('message','Đăng nhập thất bại!');
    }
    public function LogOut(Request $request){
        if(Session::has('cmsUser'))
            Session::forget('cmsUser');
        return redirect()->route('viewLogin');
    }
    public function ManageProduct($page = 1){
        if(!Session::has('cmsUser'))
            return redirect()->route('viewLogin');
        $per_page = 10;
        if($page > 1)
            $from = $per_page * ($page - 1);
        else $from = 0;
        $to = $per_page * $page;
        $maxPage = Product::count()/$per_page;
        if($maxPage>intval($maxPage))
            $maxPage = intval($maxPage)+1;
        $products = Product::all();//DB::select( DB::raw("SELECT * FROM products order by id limit :f , :t"), array('f' => $from, 't'=>$to ));
        return view('cms.pages.manageProduct',compact('products','maxPage'));
    }
    public function EditProduct(Request $request){
        if(!Session::has('cmsUser'))
            return redirect()->route('viewLogin');
        $product = Product::find($request->productsID);
        if($product!=null){
            $product->name=$request->productsName;
            $product->id_type=$request->productsType;
            $product->description=$request->productsDescription;
            $product->unit_price=$request->productsPrice;
            $product->image=$request->productsImg;
            //$product->name=$request->productsID;
            $product->save();
        }
        return redirect()->back();
    }
    public function GetInfo(int $id){
        if(!Session::has('cmsUser'))
            return redirect()->route('viewLogin');
        return Product::find($id);
    }
    public function ManageCustomer($page = 1){
        if(!Session::has('cmsUser'))
            return redirect()->route('viewLogin');
        $per_page = 10;
        if($page > 1)
            $from = $per_page * ($page - 1);
        else $from = 0;
        $to = $per_page * $page;
        $maxPage = Customer::count()/$per_page;
        if($maxPage>intval($maxPage))
            $maxPage = intval($maxPage)+1;
        $customers = Customer::all();//DB::select( DB::raw("SELECT * FROM products order by id limit :f , :t"), array('f' => $from, 't'=>$to ));
        return view('cms.pages.manageCustomer',compact('customers','maxPage'));
    }
    public function EditCustomer(Request $request){
        if(!Session::has('cmsUser'))
            return redirect()->route('viewLogin');
        $customer = Customer::find($request->customerID);
        if($customer!=null){
            $customer->name=$request->customerName;
            $customer->gender=$request->customerGender;
            $customer->email=$request->customerEmail;
            $customer->address=$request->customerAddress;
            $customer->phone_number=$request->customerPhone;
            $customer->save();
        }
        return redirect()->back();
    }
    public function GetCustomerInfo(int $id){
        if(!Session::has('cmsUser'))
            return redirect()->route('viewLogin');
        return Customer::find($id);
    }
}