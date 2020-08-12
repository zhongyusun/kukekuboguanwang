@extends('admin.layouts.master')
@section('title','案列列表')
@section('content')
    <div class="x-nav">
            <span class="layui-breadcrumb">
                <a href="#">首页</a>
                <a href="#">留言管理</a>
                <a>
                    <cite>留言列表</cite></a>
            </span>
    </div>
    <div class="layui-fluid">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-body ">
                        <table class="layui-table layui-form">
                            <thead>
                            <tr>
                                <th></th>
                                <th>姓名</th>
                                <th>电话</th>
                                <th>邮箱</th>
                                <th>地址</th>
                                <th>留言内容</th>
                                <th>留言时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($messages)>0)
                                @foreach($messages as $message)
                                    <tr>
                                        <td>{{$message['id']}}</td>
                                        <td>{{$message['name']}}</td>
                                        <td>{{$message['number']}}</td>
                                        <td>{{$message['email']}}</td>
                                        <td>{{$message['site']}}</td>
                                        <td>{{$message['content']}}</td>
                                        <td>{{$message['created_at']}}</td>
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
                            {!! $messages->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

