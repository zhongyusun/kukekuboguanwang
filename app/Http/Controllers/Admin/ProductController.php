<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Classify;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //产品详情列表
    public function index(){
        $products=Product::paginate(10);
        return view('admin.product.index',compact('products'));
    }

    public function create(){
        //获取分类
        $classifies=Classify::all();
        return view('admin.product.create',compact('classifies'));
    }

    public function store(ProductRequest $request){
        $date=$request->all();
        //将josn转为数组
        $date['pic_list']=json_encode($date['pic_list'],true);
        $date['pics']=json_encode($date['pics'],true);
        Product::create($date);
        return redirect()->route('admin.product.index')->with('success','添加成功');
    }

    public function edit(Product $product){
        //获取分类数据
        $classifies=Classify::all();
        $pic_list=$product['pic_list'];
        $pic_list=json_decode($pic_list);
        $pics=json_decode($product['pics']);
        return view('admin.product.edit',compact('product','classifies','pic_list','pics'));
    }

    public function update(ProductRequest $request, Product $product){
        $product->name=$request->name;
        $product->classify_id=$request->classify_id;
        $product->picture=$request->picture;
        $product->trait=$request->trait;
        $product->parameter=$request->parameter;
        $product->pic=$request->pic;
        $product->pics=$request->pics;
        $product->pic_list=$request->pic_list;
        $product->title=$request->title;
        $product->keywords=$request->keywords;
        $product->description=$request->description;
        $data=$product->toArray();
        $product->update($data);
        return redirect()->route('admin.product.index')->with('success','更新成功');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('admin.product.index')->with('success','删除成功');
    }
}
