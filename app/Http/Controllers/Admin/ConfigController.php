<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function edit($config){
        $con = Config::firstOrNew(
            ['title' => $config]
        )->toArray();
        if (!empty($con['data'])){
        }else{
            $con['data']['site_name']="请输入网站名称";
            $con['data']['site_logo']="请添加logo";
            $con['data']['site_icp']="请输入备案信息";
            $con['data']['name']="";
            $con['data']['logo']="";
            $con['data']['phone']="";
            $con['data']['fax']="";
            $con['data']['email']="";
            $con['data']['usa_site']="";
            $con['data']['site']="";
            $con['data']['qq']="";
            $con['data']['china']="";
            $con['data']['mission']="";
            $con['data']['introduce']="";
            $con['data']['title']="";
            $con['data']['introduce']="";
            $con['data']['phone']="";
            $con['data']['phone1']="";
            $con['data']['phone2']="";
            $con['data']['qq']="";
            $con['data']['number']="";
        }
        return view('admin.config.edit_'.$config,compact('con','config'));
    }

    public function update(Request $request,$config){

        $res = Config::updateOrCreate(
            ['title' => $config],//查询条件
            //注意:$request->all()是数组,直接写入数据表报错
            //需要借助模型属性 cates
            ['title' => $config, 'data' => $request->all()]//更新或者添加的数据
        );
        return back()->with('success', '更新成功');
    }
}
