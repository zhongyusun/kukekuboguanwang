<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')">
    <link rel="stylesheet" href="{{asset('static/phone')}}/css/iconfont.css">
    <link rel="stylesheet" href="{{asset('static/phone')}}/css/swiper.css">
    <link rel="stylesheet" href="{{asset('static/phone')}}/css/public.css">
    <link rel="stylesheet" href="{{asset('static/phone')}}/css/index.css">
    <link rel="stylesheet" type="text/css"href="https://cdn.jsdelivr.net/gh/alphardex/aqua.css/dist/aqua.min.css"/>
    <script src="{{asset('static/phone')}}/js/jquery.js"></script>
    <script src="{{asset('static/phone')}}/js/swiper.js"></script>
    <script src="{{asset('static/phone')}}/js/index.js"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>

<style>
    .nav-item{
        border-bottom: 1px solid #eee;
    }
</style>
<body>

@yield('content')


<footer class="max-box footer-box">

    <div class="footer-bottom max-box">
        <div class="ins-box">
            <p>版权所有</p>
            <p><a href="http://beian.miit.gov.cn/state/outPortal/loginPortal.action">备案号：沪ICP备15047724号-25</a></p>
        </div>
    </div>
    <style>
        .footer-bottom > div {
            background: #0d407e;
            height: 80px;
            display: block;
            color: #fff;
            font-size: 12px;
        }
        .footer-bottom p, .footer-bottom a{
            text-align: center;
            font-size: 12px;

        }

        .qa-list-active >div:first-child{
            background: #fff !important;
        }
        .qa-list-active a{
            color: #424242 !important;
        }

    </style>
</footer>
</body>
</html>
