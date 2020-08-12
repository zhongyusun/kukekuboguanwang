<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //只让未登录用户访问登录页面：
    public function __construct(){

        $this->middleware('guest',[
            'only' =>['create'],
        ]);
    }


    //登录页面
    public function create(){


        return view('admin.sessions.create');
    }

    //处理登陆逻辑
    public function store(Request $request){
        //登录验证
        $credentials = $this->validate($request,[
            'username'=>'required|max:255',
            'password' => 'required'
        ]);
        //判断登录用户的邮箱和密码
        if (\Auth::attempt($credentials,$request->has('remember'))){
                session()->flash('success','欢迎回来！');
                return redirect()->route('admin.kukekubo');
        }else{

            return redirect()->back()->with('danger','密码或用户名不正确');
        }
    }


    //退出
    public function logout(){
        \Auth::logout();
        return redirect()->route('admin.login')->with('success','您已成功退出');
    }
}
