@extends('admin.layouts.master')
@section('title','分类列表')
@section('content')
<div class="x-nav">
            <span class="layui-breadcrumb">
                <a href="#">首页</a>
                <a href="#">产品</a>
                <a>
                    <cite>banner图列表</cite></a>
            </span>
</div>
<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">

                <div class="layui-card-header">
                    <button class="layui-btn" onclick="xadmin.open('添加图片','{{route('admin.banner.create')}}',800,600)">
                        <i class="layui-icon"></i>添加</button></div>
                <div class="layui-card-body ">
                    <table class="layui-table layui-form">
                        <thead>
                        <tr>
                            <th></th>
                            <th>banner</th>
                            <th>链接</th>
                            <th>添加时间</th>
                            <th>操作</th
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($banners)>0)
                        @foreach($banners as $v)
                        <tr>
                            <td>{{$v['id']}}</td>
                            <td>
                                
                                <img src="{{$v['pic']}}">
                            </td>
                            <td>{{$v['link']}}</td>
                            <td>{{$v['created_at']}}</td>
                            <td class="td-manage">
                                <a title="编辑" onclick="xadmin.open('编辑','{{route('admin.banner.edit',$v['id'])}}')" href="javascript:;">
                                    <i class="layui-icon">&#xe63c;</i></a>
                                <form class="layui-form" method="post" onsubmit="return confirm('您确定要删除吗？');" action="{{route('admin.banner.destroy',$v['id'])}}">
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
                        {!! $banners->render() !!}
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
