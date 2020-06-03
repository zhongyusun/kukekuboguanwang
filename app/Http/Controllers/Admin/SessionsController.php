<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //登录页面
    public function create(){


        return view('admin.sessions.create');
    }
}
