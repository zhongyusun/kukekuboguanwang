@extends('admin.layouts.master')

@section('title','添加产品')
@section('content')
    <div class="layui-fluid">
        <div class="layui-row">
            <form class="layui-form" method="post" action="{{route('admin.case.store')}}">
                {{ csrf_field() }}
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        案列标题
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

                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        产品图片
                    </label>
                    <button type="button" class="layui-btn" id="test1">
                        <input type="hidden" name="pic" value="">
                        <i class="layui-icon">&#xe67c;</i>上传图片
                    </button>
                    <style>
 	#demo1{
                    width: 200px;
                    margin-left: 109px;
                 }
                 .layui-upload-list li{
                     width: 20px;
                    display: inline;
                    margin: 15px;
                 }
                 .layui-form-selected dl {
    display: block;
    z-index: 999999999;
}
</style>
 <div class="layui-upload-list">
                        <img class="layui-upload-img" id="demo1">
                        <p id="demoText"></p>
                      </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        图列
                    </label>
                    <div class="layui-upload">
                        <button type="button" class="layui-btn" id="test3">多图片上传</button>
                        <blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px; overflow: hidden">
                            <div class="layui-upload-list" id="demo2">
                            </div>
                        </blockquote>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        选择分类</label>
                    <div class="layui-input-inline">
                        <select id="shipping" name="casecategory_id" class="valid">
                            @foreach($categories as $category)
                            <option value={{$category->id}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        描述
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_pass" name="description" required="" lay-verify="required"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        文章内容
                    </label>
                    <div class="layui-input-inline" style="width:80%;background:#fff">
                        <!--<textarea class="layui-textarea" id="demo" name="content" style="display: none"></textarea>-->
                        <script id="container" name="content" type="text/plain">

                        </script>
                        <script type="text/javascript">
                            var ue = UE.getEditor('container',{initialFrameWidth:'100%',initialFrameHeight:400,serverUrl:"{{asset('static/admin/js/php/controller.php')}}" });
                        </script>
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
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        layui.use('layedit', function () {
            var layedit = layui.layedit;
            layedit.set({
                uploadImage: {
                    url: "{{route('util.upload')}}"
                    ,type: 'post'
                    ,data: {
                        '_token': "{{csrf_token()}}",
                    }
                }
            });
            layedit.build('demo');
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

        layui.use('upload', function(){
            var upload = layui.upload;
            //多图片上传
            upload.render({
                elem: '#test3'
                ,url: '{{route('util.upload')}}' //改成您自己的上传接口
                ,multiple: true
                ,accept: 'images' //指定允许上传时校验的文件类型，可选值有：images（图片）、file（所有文件）、video（视频）、audio（音频）
                ,done: function(res){
                    //上传完毕
                    if (res.code == 0) {
                        $('#demo2').append('<li><span onclick="delImage(this)" class="mdi mdi-close"></span><img src="' + res.data.src + '" alt="" width="100px" class="layui-upload-img"><input type="hidden" name="pic_list[]" value="' + res.data.src + '"></li>')
                    } else {
                        layer.msg(res.msg, function () {

                        })
                    }
                }
            });
        });



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

