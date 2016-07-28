<?php

namespace App\Http\Controllers\home;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function getIndex()
    {

        return view('/home/login');
    }
    public function postIndex(Request $request)
    {
        dd($request->session()->get('VCode'));
        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username',$username)->first();
        

        if(empty($user)){
            return back()->with('error','无效的用户名!');
        }

        $upass = $user->password;
        if(Hash::check($password,$upass)){
            session(['uid'=>$user->id]);
            session(['pic'=>$user->pic]);
            return redirect('/');
        }
        return back()->with('error','密码错误!');

    }

    public function getRegister()
    {
        return view('home.register');
    }
    public function postRegister(Requests\RegisterRequest $request)
    {

        $user = new User();
        $data = $request->only('username','password','email','');
        $user->password = Hash::make($data['password']);
        $user->status = 1;
        $user->username = $data['username'];
        $user->email = $data['email'];

        if($user->save()){
            return redirect('/login');
        }else{
            return back()->with('error','添加失败');
        }

    }
    public function getPassword()
    {
        return view('home.password');
    }
    public function postPassword(Request $request)
    {
        $username = $request->input('username');
        $email = $request->input('email');

        $user = User::where('username',$username)->first();


        if(empty($user)){
            return back()->with('error','无效的用户名!');
        }

        $e = $user->email;
        if($email==$e){
            //发邮件
            
            //模态框弹出 a邮箱 跳转login
        }
        return back()->with('error','邮箱不匹配!');
    }


   
}
