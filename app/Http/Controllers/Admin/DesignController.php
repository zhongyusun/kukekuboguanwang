<?php

namespace App\Http\Controllers\Admin;

use App\Models\Design;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    //补偿方案
    public function index()
    {

        //获取所有的方案
        $designs=Design::all();
        return view('admin.design.index',compact('designs'));
    }


    public function create()
    {

        return view('admin.design.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'describe'=>'required',
            'pic'=>'required',
            'content'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
        ]);

        $data=$request->toArray();
        Design::create($data);
        return redirect()->route('admin.design.index')->with('success','添加成功');
    }


    public function edit(Design $design)
    {

        return view('admin.design.edit',compact('design'));
    }


    public function update(Request $request, Design $design)
    {
        $this->validate($request,[
            'name'=>'required',
            'describe'=>'required',
            'pic'=>'required',
            'content'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
        ]);
        $design->name=$request->name;
        $design->describe=$request->describe;
        $design->content=$request->content;
        $design->pic=$request->pic;
        $design->keywords=$request->keywords;
        $design->title=$request->title;
        $design->description=$request->description;
        $class=$design->toArray();
        $design->update($class);
        return redirect()->route('admin.design.index')->with('success','编辑成功');
    }


    public function destroy(Design $design)
    {
        $design->delete();
        return redirect()->route('admin.design.index')->with('success', '删除成功');
    }
}
