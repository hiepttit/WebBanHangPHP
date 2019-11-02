<?php
namespace App\Http\Controllers;
use App\User;
use Auth;
use Session;
use Illuminate\Http\Request;
//use Request;

class AdminController extends Controller
{
    public function getLogin()
    {
        return View('adminPage.login');
    }
    public function postLogin(Request $request){
        // $this->validate($request,
        // [
        //     'email'=>'required',
        //     'password'=>'required'
        // ],[
        //     'email.required'=>'Vui lòng nhập email',
        //     'password.required'=>'Vui lòng nhập password'
        // ]);
        $arr = array('email'=>$request->email,'password'=>$request->pwd);
        //return $credentials;
        if(Auth::attempt($arr)){
            dd('OK');
            //$temp = ['flag'=>'success','message'=>'Đăng nhập thành công'];
        }
        else {
            dd('S');// "faild";
            //$temp = ['flag'=>'danger','message'=>'Đăng nhập thất bại'];
        }
        //$request->session->push($temp);
        //dd($request->session);
        //$data = Request::input('name');
        //return response()->json($data);
        // $email = $request->input("email");
        // $pass = $request->input("pwd");
        // $user = User::whereEmail($email)->first();
        // if($pass == $user->password)
        //     dd($user->password);
        
        // if($pass == $user->password)
        //     return "OK";
        // return "Sai";
        //dd($request->all());
    }
    public function getCreateAccount(){
        $a = new User;
        $a->email = "b@g.c";
        $a->password = "1";
        $a->full_name = "Nguyễn B";
        $a->save();
        return "OK";
    }
}