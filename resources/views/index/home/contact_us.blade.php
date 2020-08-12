@extends('index.layouts.master')
@section('title',$sign['title'])
@section('keywords',$sign['keywords'])
@section('description',$sign['description'])
@section('content')
    <link rel="stylesheet" href="{{asset('static/index')}}/css/contactUs.css">

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
                    <li ><a href="{{route('index.about_us')}}">我们的公司</a></li>
                    <li><a href="{{route('index.ue')}}">更赞的用户体验</a></li>
                    <li class="active-nav"><a href="{{route('index.contact_us')}}">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="max-box banner-box">
        <img src="{{asset('static/index')}}/images/contentUsBanner.jpg" alt="">
    </div>


    <div class="crumbs-box max-box">
        <div class="ins-box">
            当前位置：<a href="/">首页</a><span> > </span><a href="{{route('index.contact_us')}}">联系我们</a>
        </div>
    </div>

    <div class="contactUs-box max-box">
        <div class="contactUs-top">
            <div>
                <form action="{{route('index.store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="input-box">
                        <i class="iconfont icon-xingming"></i>
                        <input type="text" placeholder="姓名" name="name" id="">
                    </div>
                    <div class="input-box">
                        <i class="iconfont icon-dianhua"></i>
                        <input type="number" placeholder="电话（必须）" name="number" id="">
                    </div>
                    <div class="input-box">
                        <i class="iconfont icon-youjian1"></i>
                        <input type="email" placeholder="邮箱" name="email" id="">
                    </div>
                    <div class="input-box">
                        <i class="iconfont icon-dizhi"></i>
                        <input type="text" placeholder="地址" name="site" id="">
                    </div>
                    <div class="input-box">
                        <textarea name="content" id="" placeholder="请在此输入留言内容，我们会尽快与您联系（必填）"></textarea>
                    </div>
                    <div  class="input-box">
                        <input type="submit" value="发送信息">
                    </div>
                </form>
            </div>
            <div>
                <div class='desc'>
                    <img src="{{asset('static/index')}}/images/contact-title1.png" alt="">
                    <ul>
                        <li>电话：18702183613</li>
                        <li>E-mail：ckkb@cookekolb.com</li>
                        <li>传真：021-33321568</li>
                        <li>中国公司总部：上海市长宁区宣路300号中区</li>
                        <li>美国公司总部：1644 Sherman Street Denver Co 802030 United States</li>
                    </ul>
                    <a href="javascrip:void(0)">在线咨询</a>
                </div>
            </div>
        </div>
        <div class="map-box">
            <div id="map-container">

            </div>
            <div class="Mask">

            </div>
            <img src="{{asset('static/index')}}/images/star.png" class="star" alt="" srcset="">
        </div>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=3.0&ak=wTqG9QXAKXunvqHSSipRHqqGI5fLXOqx"></script>
        <script>
            $(function(){
                var map = new BMap.Map("map-container");
                var point = new BMap.Point(121.429269,31.223892);
                map.centerAndZoom(point, 15);
                var marker = new BMap.Marker(point);
                map.addOverlay(marker);
            })
        </script>
    </div>
    <script src="{{asset('static/admin')}}/lib/layui/layui.js" charset="utf-8"></script>
@include('layouts.messages')
@stop

