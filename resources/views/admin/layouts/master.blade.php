
<!doctype html>
<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','首页')库克库伯后台管理</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="{{asset('static/admin')}}/css/font.css">
    <link rel="stylesheet" href="{{asset('static/admin')}}/css/xadmin.css">
<!-- <link rel="stylesheet" href="{{asset('static/admin')}}/css/theme5.css"> -->
    <script src="{{asset('static/admin')}}/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="{{asset('static/admin')}}/js/xadmin.js"></script>
    
    <script type="text/javascript" src="{{asset('static/admin')}}/js/ueditor.config.js"></script>
    <script type="text/javascript" src="{{asset('static/admin')}}/js/ueditor.all.js"></script>
    
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        // 是否开启刷新记忆tab功能
        // var is_remember = false;
    </script>
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body class="index">
@yield('content')
@include('layouts.messages')
</body>
</html>