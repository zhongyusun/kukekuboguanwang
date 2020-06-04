@extends('admin.layouts.master')
@section('title','首页')
@section('content')
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo">
            <a href="{{route('admin.kukekubo')}}">库克库伯后台管理</a></div>
        <div class="left_open">
            <a><i title="展开左侧栏" class="iconfont">&#xe699;</i></a>
        </div>

        </ul>
        <ul class="layui-nav right" lay-filter="">
            <li class="layui-nav-item">
                <a href="javascript:;">管理员</a>
                <dl class="layui-nav-child">
                    <dd>
                        <a href="{{route('admin.logout')}}">退出</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item to-index">
                <a href="/">前台首页</a></li>
        </ul>
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
    <!-- 左侧菜单开始 -->
@include('admin.admin._leftmenu')
    <!-- <div class="x-slide_left"></div> -->
    <!-- 左侧菜单结束 -->
    <!-- 右侧主体开始 -->
    <div class="page-content">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
            <ul class="layui-tab-title">
                <li class="home">
                    <i class="layui-icon">&#xe68e;</i>我的桌面</li></ul>
            <div class="layui-unselect layui-form-select layui-form-selected" id="tab_right">
                <dl>
                    <dd data-type="this">关闭当前</dd>
                    <dd data-type="other">关闭其它</dd>
                    <dd data-type="all">关闭全部</dd></dl>
            </div>
{{--            <div class="layui-tab-content">--}}
{{--                <div class="layui-tab-item layui-show">--}}
{{--                    <iframe src='{{asset('static/admin')}}/welcome.html' frameborder="0" scrolling="yes" class="x-iframe"></iframe>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div id="tab_show"></div>
        </div>
    </div>
    <div class="page-content-bg"></div>
    <style id="theme_style"></style>
    <!-- 右侧主体结束 -->
    <!-- 中部结束 -->

    @stop


