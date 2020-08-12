<?php

namespace App\Http\Controllers\Admin;

use App\Models\Link;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    //友链管理
    public function index()
    {
        $links=Link::paginate(20);
        return view('admin.link.index',compact('links'));
    }


    public function create()
    {

        return view('admin.link.creat');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'link'=>'required'
        ]);
        $data=$request->toArray();
        Link::create($data);
        return redirect()->route('admin.link.index')->with('success','添加成功');
    }



    public function edit(Link $link)
    {

        return view('admin.link.edit',compact('link'));
    }


    public function update(Request $request, Link $link)
    {
        $this->validate($request,[
            'name'=>'required',
            'link'=>'required'
        ]);
        $link->name=$request->name;
        $link->link=$request->link;
        $data=$link->toArray();
        $link->update($data);
        return redirect()->route('admin.link.index')->with('success','编辑成功');
    }


    public function destroy(Link $link)
    {
        $link->delete();
        return redirect()->route('admin.link.index')->with('success', '删除成功');
    }
}
