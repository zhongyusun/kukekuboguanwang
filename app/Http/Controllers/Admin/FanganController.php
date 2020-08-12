<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fangan;
use App\Http\Controllers\Controller;
use App\Models\Fanganlist;
use Illuminate\Http\Request;

class FanganController extends Controller
{
    //方案详情
    public function index()
    {
        //获取方案
        $fangan=Fangan::paginate(10);
        return view('admin.fangan.index',compact('fangan'));
    }


    public function create()
    {
        //获取分类
        $fanganlist=Fanganlist::all();
        return view('admin.fangan.create',compact('fanganlist'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'pic'=>'required',
            'fanganlist_id'=>'required',
            'content'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
        ]);

        $data=$request->toArray();
        Fangan::create($data);
        return redirect()->route('admin.fangan.index')->with('success','添加成功');
    }

    public function edit(Fangan $fangan)
    {
        //获取分类
        $fanganlist=Fanganlist::all();
        return view('admin.fangan.edit',compact('fangan','fanganlist'));
    }

    public function update(Request $request, Fangan $fangan)
    {
        $this->validate($request,[
            'name'=>'required',
            'pic'=>'required',
            'content'=>'required',
            'fanganlist_id'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
        ]);
        $fangan->name=$request->name;
        $fangan->pic=$request->pic;
        $fangan->content=$request->content;
        $fangan->fanganlist_id=$request->fanganlist_id;
        $fangan->keywords=$request->keywords;
        $fangan->title=$request->title;
        $fangan->description=$request->description;
        $class=$fangan->toArray();
        $fangan->update($class);
        return redirect()->route('admin.fangan.index')->with('success','编辑成功');
    }


    public function destroy(Fangan $fangan)
    {
        $fangan->delete();
        return redirect()->route('admin.fangan.index')->with('success','删除成功');
    }
}
