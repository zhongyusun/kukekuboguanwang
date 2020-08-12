<?php

namespace App\Http\Controllers\Admin;

use App\Models\Advantage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
//    优势
    public function index()
    {
        //获取所有的数据
        $advantages=Advantage::paginate(10);

        return view('admin.advantage.index',compact('advantages'));
    }


    public function create()
    {

        return view('admin.advantage.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'into'=>'required',
            'content'=>'required',
            'pic'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
            'sort'=>'required'
        ]);

        $data=$request->toArray();
        Advantage::create($data);
        return redirect()->route('admin.advantage.index')->with('success','添加成功');
    }


    public function edit(Advantage $advantage)
    {

        return view('admin.advantage.edit',compact('advantage'));
    }


    public function update(Request $request, Advantage $advantage)
    {
        $this->validate($request,[
            'name'=>'required',
            'into'=>'required',
            'content'=>'required',
            'pic'=>'required',
            'title'=>'required|max:140',
            'keywords'=>'required|max:255',
            'description'=>'required',
            'sort'=>'required',
        ]);
        $advantage->name=$request->name;
        $advantage->into=$request->into;
        $advantage->content=$request->content;
        $advantage->pic=$request->pic;
        $advantage->keywords=$request->keywords;
        $advantage->title=$request->title;
        $advantage->description=$request->description;
        $advantage->sort=$request->sort;
        $class=$advantage->toArray();
        $advantage->update($class);
        return redirect()->route('admin.advantage.index')->with('success','编辑成功');
    }


    public function destroy(Advantage $advantage)
    {
        $advantage->delete();
        return redirect()->route('admin.advantage.index')->with('success', '删除成功');
    }
}
