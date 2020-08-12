@extends('admin.layouts.master')
@section('title','分类列表')
@section('content')
<div class="x-nav">
            <span class="layui-breadcrumb">
                <a href="#">首页</a>
                <a href="#">产品</a>
                <a>
                    <cite>产品分类列表</cite></a>
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
                    <button class="layui-btn" onclick="xadmin.open('添加用户','{{route('admin.classify.create')}}',800,600)">
                        <i class="layui-icon"></i>添加</button></div>
                <div class="layui-card-body ">
                    <table class="layui-table layui-form">
                        <thead>
                        <tr>
                            <th></th>
                            <th>分类名称</th>
                            <th>分类描述</th>
                            <th>图片</th>
                            <th>标题</th>
                            <th>关键字</th>
                            <th>描述</th>
                            <th>添加时间</th>
                            <th>操作</th
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($classifies)>0)
                        @foreach($classifies as $classify)
                        <tr>
                            <td>{{$classify['id']}}</td>
                            <td>{{$classify['name']}}</td>
                            <td>{{$classify['introduce']}}</td>
                            <td>
                                
                                <img src="{{$classify['pic']}}">
                            </td>
                            <td>{{$classify['title']}}</td>
                            <td>{{$classify['keywords']}}</td>
                            <td>{{$classify['description']}}</td>
                            <td>{{$classify['created_at']}}</td>
                            <td class="td-manage">
                                <a title="编辑" onclick="xadmin.open('编辑','{{route('admin.classify.edit',$classify['id'])}}')" href="javascript:;">
                                    <i class="layui-icon">&#xe63c;</i></a>
                                <form class="layui-form" method="post" onsubmit="return confirm('您确定要删除吗？');" action="{{route('admin.classify.destroy',$classify['id'])}}">
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
                        {!! $classifies->render() !!}
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
