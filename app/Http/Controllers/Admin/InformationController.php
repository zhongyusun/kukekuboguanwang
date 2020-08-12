<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InformationRequest;
use App\Models\Information;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //资讯
    public function index()
    {
        $informations=Information::paginate(10);
        return view('admin.information.index',compact('informations'));
    }


    public function create()
    {
        return view('admin.information.create');
    }


    public function store(InformationRequest $request)
    {
        $date=$request->all();
        Information::create($date);
        return redirect()->route('admin.information.index')->with('success','添加成功');
    }



    public function edit(Information $information)
    {
        return view('admin.information.edit',compact('information'));
    }


    public function update(InformationRequest $request, Information $information)
    {
        $information->category_id=$request->category_id;
        $information->name=$request->name;
        $information->title=$request->title;
        $information->keywords=$request->keywords;
        $information->pic=$request->pic;
        $information->content=$request->content;
        $information->description=$request->description;
        $data=$information->toArray();
        $information->update($data);
        return redirect()->route('admin.information.index')->with('success','修改成功');
    }

    public function destroy(Information $information)
    {
        $information->delete();
        return redirect()->route('admin.information.index')->with('success', '删除成功');
    }
}
