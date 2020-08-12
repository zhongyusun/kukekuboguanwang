<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fanganlist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FanganlistController extends Controller
{
    //方案分类
    public function index()
    {
        //获取方案分类
        $fanganlist=Fanganlist::paginate(10);
        return view('admin.fanganlist.index',compact('fanganlist'));
    }


    public function create()
    {

        return view('admin.fanganlist.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
        ]);
        $data=$request->toArray();
        Fanganlist::create($data);
        return redirect()->route('admin.fanganlist.index')->with('success','添加成功');
    }

    public function edit(Fanganlist $fanganlist)
    {

        return view('admin.fanganlist.edit',compact('fanganlist'));
    }

    public function update(Request $request, Fanganlist $fanganlist)
    {
        $this->validate($request,[
            'name'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
        ]);
        $fanganlist->name=$request->name;
        $fanganlist->keywords=$request->keywords;
        $fanganlist->title=$request->title;
        $fanganlist->description=$request->description;
        $class=$fanganlist->toArray();
        $fanganlist->update($class);
        return redirect()->route('admin.fanganlist.index')->with('success','编辑成功');
    }

    public function destroy(Fanganlist $fanganlist)
    {
        $fanganlist->delete();
        return redirect()->route('admin.fanganlist.index')->with('success', '删除成功');
    }
}
