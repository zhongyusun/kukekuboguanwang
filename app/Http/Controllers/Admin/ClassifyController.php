<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classify;
use Illuminate\Http\Request;

class ClassifyController extends Controller
{
    //分类

    public function index(){

        $classifies=Classify::paginate(10);

        return view('admin.classify.index',compact('classifies'));

    }

    public function create(){

        return view('admin.classify.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'introduce'=>'required',
            'pic'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
        ]);

        $data=$request->toArray();
        Classify::create($data);
       return redirect()->route('admin.classify.create')->with('success','添加成功');

    }

    public function edit(Classify $classify){

        return view('admin.classify.edit',compact('classify'));
    }

    public function update(Request $request,Classify $classify){
        $this->validate($request,[
            'name'=>'required',
            'introduce'=>'required',
            'pic'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
        ]);
        $classify->name=$request->name;
        $classify->introduce=$request->introduce;
        $classify->pic=$request->pic;
        $classify->keywords=$request->keywords;
        $classify->title=$request->title;
        $classify->description=$request->description;
        $class=$classify->toArray();
        $classify->update($class);
        return redirect()->route('admin.classify.edit',$classify->id)->with('success','编辑成功');
    }

    public function destroy(Classify $classify){

        $classify->delete();
        return redirect()->route('admin.classify.index')->with('success', '删除成功');
    }
}
