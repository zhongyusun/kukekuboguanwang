@extends('admin.layouts.master')

@section('title','添加友链')
@section('content')
    <div class="layui-fluid">
        <div class="layui-row">
            <form class="layui-form" method="post" action="{{route('admin.link.update',$link->id)}}">
                @method('PUT')
                {{ csrf_field() }}
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        友链名称
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="name" required="" value="{{$link->name}}" lay-verify="required"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        友情链接
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="link" required="" value="{{$link->link}}" lay-verify="required"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        编辑
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
                    });

            });

    </script>

@stop
