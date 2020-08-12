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
                    <li class="active-nav"><a href="{{route('index.news')}}">新闻中心</a></li>
                    <li><a href="{{route('index.about_us')}}">我们的公司</a></li>
                    <li><a href="{{route('index.ue')}}">更赞的用户体验</a></li>
                    <li><a href="{{route('index.contact_us')}}">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="max-box banner-box">
        <img src="{{asset('static/index')}}/images/cpBanner.jpg" alt="">
    </div>


    <div class="crumbs-box max-box">
        <div class="ins-box">
            当前位置：<a href="/">首页</a><span> > </span>库克库伯电力电容器八大优势
        </div>
    </div>

    <div class="product-title-box max-box" style="margin-bottom:60px">
        <img src="{{asset('static/index')}}/images/badayoushi.png" alt="" srcset="">
    </div>
    <style>
        .info > .info-left {
            width: 245px;
            /* background: #f2f2f2; */
        }
        .info-nav::before{
            border: 1px solid #e5e5e5;
        }
        .usBox{
            padding:10px 30px;
            background: #f2f2f2;
        }
        .usBox > li {
            margin: 0 0 15px;
        }
        .usBox >li >p{
            color: #666666;
            font-size: 14px;
        }
        .usBox >li >p:last-child{
            font-size: 16px;
            color: #333333;
            margin-top:8px;
        }
        .info-right .adList-box{
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .info-right .adList-box li{
            width: 440px;
            height: 310px;
            margin: 0;
            margin-bottom: 60px;
            position: relative;
        }
        .info-right .adList-box li .img-box{
            width: 440px;
            height: 310px;
            overflow: hidden;
        }
        .info-right .adList-box li .img-box img{
            width: 100%;
            height: 310px;
        }
        .info-right .adList-box li a{
            display: inline-block;
            color: #fff;
            font-size: 21px;
            font-weight: bold;
            background: #1671a6;
            white-space: nowrap;
            padding: 12px 50px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -25px;
            transition: all .5s;
        }
        .info-right .adList-box li .mask{
            display: none;
            width: 100%;
            height: 100%;
            background: rgba(22, 113, 166, 0.61);
            position: absolute;
            top: 0;
            left: 0;
        }
        .title{
            font-size: 30px;
            font-weight: bold;
            color: #333333;
            vertical-align: middle;
        }
        .title span{
            display: inline-block;
            vertical-align: middle;

        }
        .title hr{
            display: inline-block;
            width: 84%;
            height: 1px;
            background: #e5e5e5;
            vertical-align: middle;
        }
        .hotList-box {
            display: flex;
            justify-content: space-between !important;
            flex-wrap: nowrap;
            margin-top: 50px;
        }
        .hotList-box > li{
            margin: 0 !important;
            width: 215px;
            /* border: 1px solid #424242; */
        }
        .hotList-box > li .hotimg{
            display: block;
            width: 100%;
            height: 185px;
        }
        .hotList-box > li .hotimg img{
            width: 100%;
            height: 100%;
            background: #fff;
        }
        .hotList-box > li a{
            font-size: 14px;
            color: #333333;
            text-align: center;
        }
        .newsList-box{
            display: flex;
            justify-content: space-around;
            flex-wrap: nowrap;
            margin-top: 35px;
        }
        .newsList-box > li{
            width: 283px;
            overflow: hidden;
            margin: 0;
        }
        .newsList-box > li .newsimg{
            width: 283px;
            height: 188px;
            overflow: hidden;
        }
        .newsList-box > li .newsimg img{
            width: 100%;
            height: 100%;
        }
        .newsList-box > li h2{
            font-size: 14px;
            color: #333333;
            overflow: hidden;/*超出部分隐藏*/
            text-overflow:ellipsis;/* 超出部分显示省略号 */
            white-space: nowrap;/*规定段落中的文本不进行换行 */
            margin: 5px 0 0;
        }
        .newsList-box > li span{
            font-size: 12px;
            color: #666666;
            overflow: hidden;/*超出部分隐藏*/
            text-overflow:ellipsis;/* 超出部分显示省略号 */
            white-space: nowrap;/*规定段落中的文本不进行换行 */
        }
        .newsList-box > li p{
            color: #4c4c4c;
            font-size: 14px;
            　　overflow : hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .text-list{
            background: #f2f2f2;
            padding: 30px 0;
        }
        .text-list li{
            margin: 15px 5% !important;
        }
        .text-list a{
            border-bottom: 1px solid #dcdcdc;
            padding-bottom: 5px;
        }
        .text-list li{
            width: 40%;
        }
        .text-list h2{
            font-size: 16px;
            color: #333333;
            overflow: hidden;/*超出部分隐藏*/
            text-overflow:ellipsis;/* 超出部分显示省略号 */
            white-space: nowrap;/*规定段落中的文本不进行换行 */
            margin: 5px 0 0;
        }
        .text-list span{
            font-size: 12px;
            color: #666666;
            overflow: hidden;/*超出部分隐藏*/
            text-overflow:ellipsis;/* 超出部分显示省略号 */
            white-space: nowrap;/*规定段落中的文本不进行换行 */
        }
    </style>
    <div class="max-box">
        <div class="ins-box info">
            <div class="info-left">
                <ul class="info-nav" style="margin-bottom: 0;">
                    <li><a href="javascript:;">> 关于库克伯克</a></li>
                    <li><a href="javascript:;">> 荣誉资质</a></li>
                    <li><a href="javascript:;">> 企业文化</a></li>
                    <li><a href="javascript:;">> 联系我们</a></li>
                </ul>
                <div style="background: #f2f2f2;height:50px"> </div>
                <ul class="usBox">
                    <li>
                        <p>24小时服务热线:</p>
                        <p>400-607-8886</p>
                    </li>
                    <li>
                        <p>北方区:</p>
                        <p>18702183613(微信同号)</p>
                    </li>
                    <li>
                        <p>南方区:</p>
                        <p>18702186953(微信同号)</p>
                    </li>
                    <li>
                        <p>联系传真:</p>
                        <p>021-33321568</p>
                    </li>
                    <li>
                        <p>QQ:</p>
                        <p>3299066989</p>
                    </li>
                    <li>
                        <p>邮箱:</p>
                        <p>ckkb@cookekilb.com</p>
                    </li>
                    <li>
                        <p>中国公司总部</p>
                        <p>上海市长宁区宣化路300号华宁国际广场南塔2701室</p>
                    </li>
                </ul>

            </div>
            <script>
                $(function(){
                    let adList = $('.adList-box >li')
                    adList.hover(function(){
                        $(this).find('.mask').stop().fadeIn()
                        $(this).find('a').css('background','#3e9a5c')
                    },function(){
                        $(this).find('.mask').stop().fadeOut()
                        $(this).find('a').css('background','#1671a6')
                    })
                })
            </script>
            <div class="info-right">
                <ul class="adList-box">
                    @foreach($advantages as $v)
                    <li>
                        <div class="mask"></div>
                        <div class="img-box">
                            <img src="{{$v->pic}}" alt="">
                        </div>
                        <a href="{{route('index.advantage',$v->id)}}">{{$v->name}}</a>
                    </li>
                   @endforeach
                </ul>
                <div class="title">
                    <span>热门产品</span>
                    <hr>
                </div>
                <ul class="hotList-box">
                    @foreach($products as $v)
                    <li>
                        <a class="hotimg" href="{{route('index.product_info',$v->id)}}">
                            <img src="{{$v->pic}}" alt="" srcset="">
                        </a>
                        <a href="{{route('index.product_info',$v->id)}}" style="margin: 10px 0;">{{$v->name}}</a>
                    </li>
                    @endforeach
                </ul>
                <div class="title" style="margin-top: 50px;">
                    <span>推荐资讯</span>
                    <hr>
                </div>
                <ul class="newsList-box">
                    @foreach($article as $v)
                        <a href="{{route('index.new_info',$v->id)}}">
                    <li>
                        <div class="newsimg">
                            <img src="{{$v->pic}}" alt="">
                        </div>
                        <h2>{{$v->name}}</h2>
                        <span>{{$v->created_at}}</span>
                        <p>{{$v->content}}</p>
                    </li>
                        </a>
                    @endforeach
                </ul>
                <ul class="text-list">
                    @foreach($articles as $v)
                    <li>
                        <a href="{{route('index.new_info',$v->id)}}">
                            <h2>{{$v->name}}</h2>
                            <span>{{$v->created_at}}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop
