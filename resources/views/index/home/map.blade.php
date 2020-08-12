@extends('index.layouts.master')
@section('title',$sign['title'])
@section('keywords',$sign['keywords'])
@section('description',$sign['description'])
@section('content')
    {{--导航栏--}}
    <div class="max-box nav-box">
        <div class="ins-box">
            <div class="logo-box">
                <a href="/">
                    <img src="{{asset('static/index')}}/images/logo.jpg" alt="" srcset="">
                </a>
            </div>
            <div class="nav-list">
                <ul>
                    <li><a href="/">首页</a></li>
                    <li ><a href="{{route('index.product_list')}}">产品中心</a></li>
                    <li ><a href="{{route('index.news')}}">新闻中心</a></li>
                    <li class="active-nav"><a href="{{route('index.about_us')}}">我们的公司</a></li>
                    <li><a href="{{route('index.ue')}}">更赞的用户体验</a></li>
                    <li><a href="{{route('index.contact_us')}}">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>

        <link rel="stylesheet" href="{{asset('static/index')}}/css/iconfont.css">
        <link rel="stylesheet" href="{{asset('static/index')}}/css/swiper.css">
        <link rel="stylesheet" href="{{asset('static/index')}}/css/public.css">
        <link rel="stylesheet" href="{{asset('static/index')}}/css/ProductList.css">
        <script src="{{asset('static/index')}}/js/jquery.js"></script>
        <script src="{{asset('static/index')}}/js/swiper.js"></script>


    <div class="max-box banner-box">
        <img src="{{asset('static/index')}}/images/mapbanner.jpg" alt="">
    </div>


    <div class="crumbs-box max-box">
        <div class="ins-box">
            当前位置：<a href="">首页</a><span> > </span><a href="">网站地图</a><span>
        </div>
    </div>
    <style>
        a{
            color: #333333;
        }
        .map-box {
            margin-bottom: 50px;
        }
        .map-box h3{
            display: block;
            font-size: 18px;
            font-weight: bold;
            margin: 20px 0;
        }
        .map-box ul{
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
            /* padding: 10px; */
            border: 1px solid #f9f9f9;
        }
        .map-box ul li{
            width: 25%;
            margin: 10px 0;

        }
    </style>
    <div class="max-box">
        <div class="ins-box map-box">
            <h3><a href="/">首页</a></h3>
            <ul>
                <li><a href="/" title="首页" target="_blank">首页</a></li>
                <li><a href="{{route('index.about_us')}}" title="关于库克库伯" target="_blank">关于库克库伯</a></li>
                <li><a href="{{route('index.product_list')}}" title="产品中心" target="_blank">产品中心</a></li>
                <li><a href="" title="无功补偿装置方案" target="_blank">无功补偿装置方案</a></li>
                <li><a href="" title="经典案例" target="_blank">经典案例</a></li>
                <li><a href="{{route('index.news')}}" title="新闻资讯" target="_blank">新闻资讯</a></li>
                <li><a href="{{route('index.contact_us')}}" title="联系我们" target="_blank">联系我们</a></li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
{{--        <div class="ins-box map-box">--}}
{{--            <h3><a href="">产品中心</a></h3>--}}
{{--            <ul>--}}
{{--                <li><a href="" title="首页" target="_blank">首页</a></li>--}}
{{--                <li><a href="" title="关于库克库伯" target="_blank">关于库克库伯</a></li>--}}
{{--                <li><a href="" title="产品中心" target="_blank">产品中心</a></li>--}}
{{--                <li><a href="" title="无功补偿装置方案" target="_blank">无功补偿装置方案</a></li>--}}
{{--                <li><a href="" title="经典案例" target="_blank">经典案例</a></li>--}}
{{--                <li><a href="" title="新闻资讯" target="_blank">新闻资讯</a></li>--}}
{{--                <li><a href="" title="联系我们" target="_blank">联系我们</a></li>--}}
{{--                <li><a href="" title="联系我们" target="_blank">联系我们</a></li>--}}

{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="ins-box map-box">--}}
{{--            <h3><a href="">帮助中心</a></h3>--}}
{{--            <ul>--}}
{{--                <li><a href="" title="首页" target="_blank">首页</a></li>--}}
{{--                <li><a href="" title="关于库克库伯" target="_blank">关于库克库伯</a></li>--}}
{{--                <li><a href="" title="产品中心" target="_blank">产品中心</a></li>--}}
{{--                <li><a href="" title="无功补偿装置方案" target="_blank">无功补偿装置方案</a></li>--}}
{{--                <li><a href="" title="经典案例" target="_blank">经典案例</a></li>--}}
{{--                <li><a href="" title="新闻资讯" target="_blank">新闻资讯</a></li>--}}
{{--                <li><a href="" title="联系我们" target="_blank">联系我们</a></li>--}}
{{--                <li><a href="" title="联系我们" target="_blank">联系我们</a></li>--}}

{{--            </ul>--}}
{{--        </div>--}}
    </div>

@stop

