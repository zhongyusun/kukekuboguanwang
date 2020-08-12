<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sign;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignController extends Controller
{

    public function edit($sign)
    {

        $si= Sign::firstOrNew(
            ['title' => $sign]
        )->toArray();

        if (!empty($si['data'])){
        }else{
            $si['data']['title']="请输入标题";
            $si['data']['keywords']="请输入关键字";
            $si['data']['description']="请输入描述";
        }

        return view('admin.sign.edit_'.$sign,compact('sign','si'));
    }


    public function update(Request $request, $sign)
    {
        $res = Sign::updateOrCreate(
            ['title' => $sign],//查询条件
            //注意:$request->all()是数组,直接写入数据表报错
            //需要借助模型属性 cates
            ['title' => $sign, 'data' => $request->all()]//更新或者添加的数据
        );
        return back()->with('success', '配置项更新成功');
    }
}
