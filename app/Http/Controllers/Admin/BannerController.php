<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //banner
    public function index()
    {
        //获取全部数据
        $banners=Banner::paginate(10);
        return view('admin.banner.index',compact('banners'));
    }


    public function create()
    {

        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'pic'=>'required',
            'link'=>'required|max:140',
        ]);
        $data=$request->toArray();
        Banner::create($data);
        return redirect()->route('admin.banner.index')->with('success','添加成功');
    }


    public function edit(Banner $banner)
    {

        return view('admin.banner.edit',compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $this->validate($request,[
            'pic'=>'required',
            'link'=>'required|max:140',
        ]);
        $banner->pic=$request->pic;
        $banner->link=$request->link;

        $class=$banner->toArray();
        $banner->update($class);
        return redirect()->route('admin.banner.index')->with('success','编辑成功');
    }


    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('admin.banner.index')->with('success', '删除成功');
    }
}
