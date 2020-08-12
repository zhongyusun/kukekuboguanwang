<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Casecategory;
use App\Models\Cases;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    //案例
    public function index(){
        //获取所有的案列
        $cases=Cases::paginate(10);
        return view('admin.case.index',compact('cases'));
    }

    public function create(){
        //获取所有的分类
        $categories=Casecategory::all();
        return view('admin.case.create',compact('categories'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'pic'=>'required',
            'pic_list'=>'required',
            'casecategory_id'=>'required',
            'content'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
        ]);

        $data=$request->toArray();
        $data['pic_list']=json_encode($data['pic_list'],true);
        Cases::create($data);
        return redirect()->route('admin.case.index')->with('success','添加成功');
    }
    public function edit(Cases $case){
        //获取分类数据
        $categories=Casecategory::all();
        $pic_list=$case['pic_list'];
        $pic_list=json_decode($pic_list);
        return view('admin.case.edit',compact('case','pic_list','categories'));
    }

    public function update(Request $request,Cases $case){
        $this->validate($request,[
            'name'=>'required',
            'pic'=>'required',
            'pic_list'=>'required',
            'content'=>'required',
            'casecategory_id'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
        ]);
        $case->name=$request->name;
        $case->pic=$request->pic;
        $case->pic_list=$request->pic_list;
        $case->content=$request->content;
        $case->casecategory_id=$request->casecategory_id;
        $case->keywords=$request->keywords;
        $case->title=$request->title;
        $case->description=$request->description;
        $class=$case->toArray();
        $case->update($class);
        return redirect()->route('admin.case.index')->with('success','编辑成功');
    }

    public function destroy(Cases $case){
        $case->delete();
        return redirect()->route('admin.case.index')->with('success','删除成功');
    }
}
