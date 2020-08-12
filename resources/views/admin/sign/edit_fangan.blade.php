@extends('admin.layouts.master')

@section('title','添加分类')
@section('content')
    <div class="layui-fluid">
        <div class="layui-row">
            <form class="layui-form" method="post" action="{{route('admin.sign.update',['sign'=>$sign])}}">
                @method('PUT')
                {{ csrf_field() }}
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        标题
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="title" required="" value="{{$si['data']['title']}}" lay-verify="required"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="phone" class="layui-form-label">
                        关键词
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="phone" name="keywords" required="" value="{{$si['data']['keywords']}}" lay-verify="required"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="phone" class="layui-form-label">
                        描述
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="phone" name="description" required="" value="{{$si['data']['description']}}" lay-verify="required"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        更新
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
                        window.location.reload();
                        xadmin.father_reload();
                    });

            });
    </script>
@stop
