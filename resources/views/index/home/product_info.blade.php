
@extends('index.layouts.master')
@section('title',"$product->title")
@section('keywords',"$product->keywords")
@section('description',"$product->description")
@section('content')

    <link rel="stylesheet" href="{{asset('static/index')}}/css/ProductInfo.css">
     <script src="{{asset('static/index')}}/js/jquery-1.8.3.min.js"></script>
    <script src="{{asset('static/index')}}/js/jquery.elevatezoom.js"></script>
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
                    <li class="active-nav"><a href="{{route('index.product_list')}}">产品中心</a></li>
                    <li><a href="{{route('index.news')}}">新闻中心</a></li>
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
            当前位置：<a href="/">首页</a><span> > </span><a href="{{route('index.product_list',$product->classify->id)}}">{{$product->classify->name}}</a><span> > </span><a href="{{route('index.product_info',$product->id)}}">{{$product->name}}</a>
        </div>
    </div>

    <div class="product-title-box max-box">
        <img src="{{asset('static/index')}}/images/products-title1.png" alt="" srcset="">
    </div>
    <div class="product-info-box max-box">
        <div class="ins-box">
            <div class="info-left">
                <div style='width:500px;overflow:hidden;'>
                    <h2 class="info-title">{{$product->name}}</h2>

                    <div id="container">
                        <div id="imgwrapper">
                            <img id="zoom_03" src="{{$product->pic}}" data-zoom-image="{{$product->pic}}"/>
                        </div>
                        <div id="pics">
                            @foreach($pics as $pic)
                                <a href="#" data-image="{{$pic}}"
                                   data-zoom-image="{{$pic}}">
                                    <img src="{{$pic}}"/>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <style>
                        #container {
                            width: 498px;
                            border-radius: 5px;
                        }

                        #container img {
                            /* box-shadow: 0px 0px 10px #999; */
                            border-radius: 5px;
                        }

                        #imgwrapper {
                            margin: 0 auto;
                            width: 100%;
                        }

                        #pics {
                            margin: 0 auto;
                            width: 100%;
                        }

                        #pics > a {
                            display: inline-block;
                            width: 20%;

                        }
                    </style>
                    <script>
                        $(function () {
                            console.log($("#zoom_03"))
                            $("#zoom_03").elevateZoom({
                                gallery: 'pics', //缩略图id
                                lensColour: '#fede4f',//放大镜背景颜色
                                cursor: 'move',//悬浮在放大镜鼠标形状
                                borderSize: '1',//右侧放大镜边框尺寸
                                borderColour: '#dddddd' //右侧放大镜边框颜色
                            });
                        })
                    </script>
                </div>
            </div>
            <div class="info-right">
                <ul class="info-item">
                    <li class="info-active">
                        <h3>产 品 特 点</h3>
                        <span>Product features</span>
                    </li>
                    <li>
                        <h3>技 术 参 数</h3>
                        <span>Technical Parameters</span>
                    </li>
                </ul>
                <div class="info-desc-box">
                    <div>
                        {!! $product->trait !!}
                    </div>
                    <div>
                        {!! $product->parameter !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function () {
            var infoItem = $('.info-item >li');
            var infoDescBox = $('.info-desc-box > div');
            $.each(infoItem, function (indexInArray, valueOfElement) {
                $(this).click(function () {
                    infoItem.eq(indexInArray).addClass('info-active').siblings().removeClass('info-active');
                    infoDescBox.eq(indexInArray).show().siblings().hide()
                });
            });
        })

    </script>

    <div class="product-down max-box">
        <div class="ins-box">
            <div class="down-left">
                <h2>专注低压29年</h2>
                <p>库克库伯电气（上海）有限公司一直秉承中国可持续发展战略，致力用户节约电能，<br>
                    减少电能浪费，从而为中国低碳环保做出贡献。</p>
                <h1>
                    规格与安装尺寸 <br>
                    <span>Specification and Installation Dimension</span>
                </h1>
                <span>文件下载</span>

                <div class="down">
                    <div>
                        <p>CKKB-A系列.pdf</p>
                        <span>2.9MB</span>
                    </div>

                </div>

            </div>
            <div class="down-right">
                <img src="{{asset('static/index')}}/images/products-img2.jpg" alt="" srcset="">
            </div>
        </div>
    </div>

    <div class="max-box guide-box">
        <div class="ins-box">
            <div class="product-title">
                <h2>产品优势</h2>
                <p>Product advantages</p>
            </div>
            <div style="width: 100%;overflow: hidden;margin-bottom: 50px;">

            </div>
        </div>
    </div>

    <div class="max-box guide-box">
        <div class="ins-box">
            <div class="product-title">
                <h2>选型指南</h2>
                <p>Selection Guide</p>
            </div>
            <div class="guide-content">
                <img src="{{$product->picture}}" alt="">
            </div>
        </div>
    </div>


    <div class="max-box programme-box">
        <div class="ins-box">
            <div class="product-title">
                <h2>方案图</h2>
                <p>Blueprint</p>
            </div>
            <div class="programme">
                @foreach($pic_lists as $pic_list)
                    <div class="item">
                        <img src="{{$pic_list}}" alt="">
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@stop

