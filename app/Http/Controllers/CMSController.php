<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use DB;
use  App\Product;
use  App\Customer;

class CMSController extends Controller
{
    public function Index(){
        return view('cms.pages.index');
    }
    public function GetLogin(){
        return view('cms.pages.login');
    }
    public function PostLogin(Request $request){
        
    }
    public function ManageProduct($page = 1){
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
        return Product::find($id);
    }
    public function ManageCustomer($page = 1){
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
        return Customer::find($id);
    }
}