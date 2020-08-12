@extends('admin.layouts.master')
@section('title','添加分类')
@section('content')
<style>
    
     .layui-anim-upbit dl {
            z-index: 999999 !important;
        }
</style>
<div class="layui-fluid">
    <div class="layui-row">
        <form class="layui-form" method="post" action="{{route('admin.fanganlist.store')}}">
            {{ csrf_field() }}
            <div class="layui-form-item">
                <label for="username" class="layui-form-label">
                    分类名称
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="username" name="name" required="" lay-verify="required"
                           autocomplete="off" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label for="phone" class="layui-form-label">
                   标题
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="phone" name="title" required="" lay-verify="required"
                           autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_email" class="layui-form-label">
                    关键字
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_email" name="keywords" required="" lay-verify="required"
                           autocomplete="off" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item" style="z-index:999999">
                <label for="L_pass" class="layui-form-label">
                    描述
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_pass" name="description" required="" lay-verify="required"
                           autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_repass" class="layui-form-label">
                </label>
                <button  class="layui-btn" lay-filter="add" lay-submit="">
                    增加
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    layui.use(['form', 'layer'],
        function() {
            $ = layui.jquery;
            var form = layui.form,
                layer = layui.layer;

            //监听提交
            form.on('submit(add)',
                function(data) {
                            //关闭当前frame
                            xadmin.close();
                            // 可以对父窗口进行刷新
                            xadmin.father_reload();
                            window.location.reload();
                });

        });
</script>

@stop
