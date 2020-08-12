@extends('admin.layouts.master')
@section('title','产品列表')
@section('content')
    <div class="x-nav">
            <span class="layui-breadcrumb">
                <a href="#">首页</a>
                <a href="#">产品</a>
                <a>
                    <cite>产品详情列表</cite></a>
            </span>
    </div>
    <style>
     .layui-table td {
            height:50px;
        }
       
</style>
    <div class="layui-fluid">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-card">

                    <div class="layui-card-header">
                        <button class="layui-btn" onclick="xadmin.open('产品详情','{{route('admin.product.create')}}',800,600)">
                            <i class="layui-icon"></i>添加</button></div>
                    <div class="layui-card-body ">
                        <table class="layui-table layui-form">
                            <thead>
                            <tr>
                                <th></th>
                                <th>产品名称</th>
                                <th>产品图片</th>
                                <th>产品图列</th>
                                <th>所属分类</th>
                                <!--<th>产品特点</th>-->
                                <!--<th>技术参数</th>-->
                                <th>造型指南</th>
                                
                                <th>方案图</th>
                                <th>标题</th>
                                <th>关键字</th>
                                <th>描述</th>
                                <th>添加时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($products)>0)
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product['id']}}</td>
                                        <td>{{$product['name']}}</td>
                                        
                                        <td> 
                                            <img src="{{$product['pic']}} "/>
                                        </td>
                                        <td>
                                         
                                            {{$product['pics']}}
                                        </td>
                                        
                                        <td>{{$product->classify->name}}</td>
                                        <!--<td>{{$product['trait']}}</td>-->
                                        <!--<td>{{$product['parameter']}}</td>-->
                                        <td>
                                            <img src="{{$product['pic']}}">    
                                            
                                        </td>
                                        <td>
                                             <img src=" {{$product['pic_list']}}">    
                                            
                                        </td>
                                        <td>{{$product['title']}}</td>
                                        <td>{{$product['keywords']}}</td>
                                        <td>{{$product['description']}}</td>
                                        <td>{{$product['created_at']}}</td>
                                        <td class="td-manage">
                                            <a title="编辑" onclick="xadmin.open('编辑','{{route('admin.product.edit',$product['id'])}}')" href="javascript:;">
                                                <i class="layui-icon">&#xe63c;</i></a>
                                            <form class="layui-form" method="post" onsubmit="return confirm('您确定要删除吗？');" action="{{route('admin.product.destroy',$product['id'])}}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button title="删除" onclick="del(this)">
                                                    <i class="layui-icon"  lay-filter="delete">&#xe640;</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr> <h1>暂无数据</h1></tr>

                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="layui-card-body ">

                        <div class="page">
                            {!! $products->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        layui.use(['laydate', 'form'],
            function() {
                var laydate = layui.laydate;

                //执行一个laydate实例
                laydate.render({
                    elem: '#start' //指定元素
                });

                //执行一个laydate实例
                laydate.render({
                    elem: '#end' //指定元素
                });
            });

        function del(obj){
            layui.use(['form','layer'],
                function () {
                    var form=layui.form;
                    //发异步删除数据
                    form.on('submit(delete)');
                }
            )
        }
    </script>
@stop

