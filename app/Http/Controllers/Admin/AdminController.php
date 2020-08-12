<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //后台首页
    public function index(){

        return view('admin.admin.index');
    }
    //留言列表
    public function message(){

        //获取所有的消息
        $messages=Contact::paginate(30);
        return view('admin.admin.message',compact('messages'));
    }
}
