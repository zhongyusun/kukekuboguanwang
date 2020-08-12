@extends('admin.layouts.master')

@section('title','添加分类')
@section('content')
    <div class="layui-fluid">
        <div class="layui-row">
            <form class="layui-form" method="post" action="{{route('admin.classify.update',$classify->id)}}">
                @method('PUT')
                {{ csrf_field() }}

                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        分类名称
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="name" required="" value="{{$classify->name}}" lay-verify="required"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        分类描述
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="introduce" value="{{$classify->introduce}}" required="" lay-verify="required"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        分类图片(宽: 191px; 高: 176px)
                    </label>
                    <button type="button" class="layui-btn" id="test1">
                        <input type="hidden" name="pic" value="{{$classify->pic}}">
                        <i class="layui-icon">&#xe67c;</i>上传图片
                    </button>
                    <style>
 	#demo1{
                    width: 200px;
                    margin-left: 109px;
                 }
</style>
 <div class="layui-upload-list">
                        <img class="layui-upload-img" src="{{$classify->pic}}" id="demo1">
                        <p id="demoText"></p>
                      </div>
                </div>
                <div class="layui-form-item">
                    <label for="phone" class="layui-form-label">
                        标题
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="phone" name="title" required="" value="{{$classify->title}}" lay-verify="required"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        关键字
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="keywords" value="{{$classify->keywords}}" required="" lay-verify="required"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        描述
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_pass" name="description" required="" value="{{$classify->description}}" lay-verify="required"
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
                        xadmin.father_reload();
                    });

            });
        layui.use('upload', function(){
            var upload = layui.upload;
            //执行实例
            var uploadInst = upload.render({
                elem: '#test1' //绑定元素
                ,url: '{{route('util.upload')}}' //上传接口
                ,data: {
                    '_token': "{{csrf_token ()}}",
                }
                , accept: 'images',
                done: function(res){
                    if (res.code==0){
                        $('#test1').html('<input type="hidden" name="pic" value="' + res.data.src + '">重新上传');
                         $('#demo1').attr('src', res.data.src);
                        layer.msg(res.msg);
                    }
                }
            });
        });
    </script>
@stop
