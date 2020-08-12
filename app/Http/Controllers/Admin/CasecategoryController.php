<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Casecategory;
use Illuminate\Http\Request;

class CasecategoryController extends Controller
{
    //案例分类
    public function index(){
        //        获取分类数据
        $categories=Casecategory::paginate(10);
        return view('admin.casecategory.index',compact('categories'));
    }

    public function create(){

        return view('admin.casecategory.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
            'pic'=>'required',
        ]);

        $data=$request->toArray();
        Casecategory::create($data);
        return redirect()->route('admin.casecategory.index')->with('success','添加成功');
    }

    public function edit(Casecategory $casecategory){

        return view('admin.casecategory.edit',compact('casecategory'));
    }

    public function update(Request $request,Casecategory $casecategory){
        $this->validate($request,[
            'name'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
            'pic'=>'required',
        ]);
        $casecategory->name=$request->name;
        $casecategory->keywords=$request->keywords;
        $casecategory->title=$request->title;
        $casecategory->description=$request->description;
        $casecategory->pic=$request->pic;
        $class=$casecategory->toArray();
        $casecategory->update($class);
        return redirect()->route('admin.casecategory.index')->with('success','编辑成功');
    }

    public function destroy(Casecategory $casecategory){
        $casecategory->delete();
        return redirect()->route('admin.casecategory.index')->with('success', '删除成功');
    }
}
