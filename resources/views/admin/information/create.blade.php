@extends('admin.layouts.master')
@section('title','添加资讯')
@section('content')
 <style>
                #aaa{
                    width:200px;
                    height:200px;
                    position:fixed;
                    right:20px;
                    top:20px;
                    overflow: hidden;
                }
                 #aaa img{
                     width: 100%;
                 }
                 #test1 img{
                    width: 200px;
                    position: relative;
                    right: -300px;
                 }
                 #demo1{
                    width: 200px;
                    margin-left: 109px;
                 }
            </style>
            <div id='aaa' style="width200px;height:200px;position:fixed;right:20;top:20;">
                
            </div>
    <div class="layui-fluid">
        <div class="layui-row">
           
            <form class="layui-form" method="post" action="{{route('admin.information.store')}}">
                {{ csrf_field() }}
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        资讯名称
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="name" required="" lay-verify="required"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        选择分类</label>
                    <div class="layui-input-inline">
                        <select id="shipping" name="category_id" class="valid">
                            <option value="1">公司咨询</option>
                            <option value="2">行业动态</option>
                            <option value="3">常见问答</option>
                        </select>

                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        文章封面
                    </label>
                    <button type="button" class="layui-btn" id="test1">
                        <input type="hidden" name="pic" value="">
                        <i class="layui-icon">&#xe67c;</i>上传图片
                    </button>
                    <div class="layui-upload-list">
                        <img class="layui-upload-img" id="demo1">
                        <p id="demoText"></p>
                      </div>
                  
                </div>
               

                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        标题
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_pass" name="title" required="" lay-verify="required"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        关键字
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_pass" name="keywords" required="" lay-verify="required"
                               autocomplete="off" class="layui-input">
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
                    <label for="L_pass" class="layui-form-label" >
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
                        //  $('#aaa').append('<img src="' + res.data.src + '">');
                          $('#demo1').attr('src', res.data.src);
                        layer.msg(res.msg);
                    }
                }
                ,error: function(){
                    //请求异常回调
                }
            });
        });
    </script>
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
                        window.location.reload();
                        // 可以对父窗口进行刷新
                        xadmin.father_reload();
                    });
            });
    </script>
@stop
