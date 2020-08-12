@extends('index.layouts.master')
@section('title',$sign['title'])
@section('keywords',$sign['keywords'])
@section('description',$sign['description'])
@section('content')
    <link rel="stylesheet" href="{{asset('static/index')}}/css/ProductList.css">

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
                    <li><a href="{{route('index.news')}}">新闻中心</a></li>
                    <li><a href="{{route('index.about_us')}}">我们的公司</a></li>
                    <li class="active-nav"><a href="{{route('index.ue')}}">更赞的用户体验</a></li>
                    <li><a href="{{route('index.contact_us')}}">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="max-box banner-box">
        <img src="{{asset('static/index')}}/images/yohnghutiyanBanner.jpg" alt="">
    </div>


    <div class="crumbs-box max-box">
        <div class="ins-box">
            当前位置：<a href="/">首页</a><span> > </span><a href="{{route('index.ue')}}">更赞的用户体验</a>
        </div>
    </div>

    <div class="product-title-box max-box" style="margin-bottom:60px;border-bottom: none;">
        <img src="{{asset('static/index')}}/images/yonghutiyanTitle.png" alt="" srcset="">
    </div>


    <style>
        .ueTitle{
            font-size: 18px;
            color: #333333;
            text-align: center;
        }
        .ueTitle::before{
            content: '';
            display: inline-block;
            width: 5px;
            height: 15px;
            background: #015ca5;
            margin-right: 15px;
            vertical-align: middle;
        }
        .ueTitle::after{
            content: '';
            display: inline-block;
            width: 5px;
            height: 15px;
            background: #015ca5;
            margin-left: 15px;
            vertical-align: middle;
        }
        .item-box{
            display: flex;
            justify-content: space-around;
            flex-wrap: nowrap;
            margin: 60px 0;
        }
        .item{
            width: 588px;
            height: 450px;
            overflow: hidden;
            position: relative;
        }
        .item img{
            width: 100%;
            height: 100%;
        }
        .text-box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            z-index: 99;
            text-align: center;
        }
        .item .mask{
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: .6;
        }
        .text-box h1{
            font-size: 36px;
            color: #fff;
            white-space: nowrap;

        }
        .text-box a{
            color: #fff;
            font-size: 14px;
            padding: 5px 15px;
            border-radius: 15px;
            display: inline-block;
            margin-top: 10px;
        }
    </style>

    <div class="max-box">
        <div class="ins-box">
            <h4 class="ueTitle">库克库伯最大程度了解我们的客户，安装人员，维修人员，渠道合作伙伴，设计出更贴心周到，更专业高效的产品和服务。</h4>
            <div class="item-box">
                <div class="item">
                    <img src="{{asset('static/index')}}/images/fanan1.jpg" alt="" srcset="">
                    <!-- 588*450 -->
                    <div class="text-box">
                        <h1>多样化的产品设计</h1>
                        <a href="{{route('index.product_list')}}" style="background: #3c7443;">了解更多 ></a>
                    </div>
                    <div class="mask" style="background: #015ca5;"></div>
                </div>
                <div class="item">
                    <img src="{{asset('static/index')}}/images/fangan2.jpg" alt="" srcset="">
                    <div class="text-box">
                        <h1>特定工况的解决方案</h1>
                        <a href="{{route('index.case')}}" style="background: #e9ad0c;">了解更多 ></a>
                    </div>
                    <div class="mask" style="background: #3c7443;"></div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .fa-box{
            display: flex;
            justify-content: space-around;
            flex-wrap: nowrap;
            margin: 60px auto;
        }
        .fa-box > div {
            width: 590px;
            position: relative;
        }
        .fa-box > .fa-left{
            border: 10px solid #fff;
            width: 580px;
            height: 430px;
        }
        .fa-box > .fa-left img{
            width: 100%;
            height: 100%;
        }
        .fa-box > .fa-left .text{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            z-index: 99;
            text-align: center;
            font-size: 36px;
            color: #fff;
            font-weight: bolder;
            background: #015ba59f;
            display: block;
            white-space: nowrap;
            width: 100%;
            padding: 20px 0;
        }
        .fa-box > .fa-right {
            padding: 80px 0 0 60px;
        }
        .fa-box > .fa-right img {
            margin-bottom: 15px;
        }
        .fa-box > .fa-right p{
            font-size: 14px;
            color: #333333;
        }
        .fa-box > .fa-right a{
            color: #fff;
            font-size: 14px;
            padding: 5px 15px;
            border-radius: 15px;
            display: inline-block;
            background: #3e9a5c;
            margin-top: 50px;
        }
    </style>
    <div class="max-box" style="background:#f2f2f2;">
        <div class="ins-box fa-box">
            <div class="fa-left">
                <img src="{{asset('static/index')}}/images/fanan3.jpg" alt="" srcset="">
                <!-- 580*430 -->
                <div class="text">
                    更易用，更高效的解决方案
                </div>
            </div>
            <div class="fa-right">
                <img src="{{asset('static/index')}}/images/fanganshejititle2.png" alt="" srcset="">
                <p>库克库伯创新产品设计方案，无论是面向工业企业，建筑楼宇，港口码头，
                    矿山油田，还是轨道交通设施，库克库伯都将从工艺设计与使用工况以结合到一起，
                    提供完整的无功补偿解决方案。</p>
                <a href="{{route('index.design')}}">快速准确的解决技术问题</a>

            </div>
        </div>
    </div>

    <div class="max-box" >
        <div class="ins-box fa-box">
            <div class="fa-right" style="padding-right: 10px;">
                <img src="{{asset('static/index')}}/images/fanganT2.png" alt="" srcset="">
                <p style="width:80%">库克库伯根据用户的需求可向用户推荐几种实用的、效果较好的无功补偿方案，供用户根据实际的工况参考并使用。。</p>
                <a href="{{route('index.fanganlist')}}">快速准确的解决技术问题</a>
            </div>

            <div class="fa-left" style="border: none;">
                <img src="{{asset('static/index')}}/images/chuangxin.jpg" alt="" srcset="">
                <!-- 580*430 -->

            </div>

        </div>
    </div>

    <style>
        .list-box{
            padding: 100px;
        }
        .list-box > ul{
            display: flex;
            justify-content: space-around;
            flex-wrap: nowrap;
            margin: 60px auto;
        }
        .list-box > ul li{
            position: relative;
            width: 292px;
            height: 308px;
        }
        .list-box > ul li img {
            width: 100%;
            height: 100%;
        }
        .list-box > ul li a{
            display: block;
            color: #fff;
            background: #015ca5;
            font-size: 16px;
            width: 185px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            position: absolute;
            left: 50%;
            transform: translate(-50%);
            bottom: -20px;
        }
        .list-box > ul li a::before{
            content: "";
            display: inline-block;
            width: 5px;
            height: 10px;
            background: url('{{asset('static/index')}}/images/sjleft.png');
            background-size: contain;
            margin-right: 5px;
            opacity: .5;
        }
        .list-box > ul li a::after{
            content: "";
            display: inline-block;
            width: 5px;
            height: 10px;
            background: url('{{asset('static/index')}}/images/sjright.png');
            background-size: contain;
            margin-left: 5px;
            opacity: .5;
        }
        .listMask{
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: .6;
            background: #015ca5;
        }
    </style>
    <div class="max-box" style="background:#f2f2f2;">
        <div class="ins-box list-box">
            <h4 class="ueTitle">我们的解决方案应用于多个领域中</h4>
            <ul>
                @foreach($cases as $v)
                <li class="listItem">
                    <img src="{{$v->pic}}" alt="" srcset="">
                    <div class="listMask"></div>
                    <a href="{{route('index.case',$v->id)}}">{{$v->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <script>
        $(function(){
            let item = $('.list-box > ul >li')
            console.log(item)
            item.hover(function(){
                $(this).find('.listMask').stop().fadeOut()
                $(this).find('a').css('background','#3e9a5c')
            },function(){
                $(this).find('.listMask').stop().fadeIn()
                $(this).find('a').css('background','#015ca5')
            })
        })
    </script>
@stop
