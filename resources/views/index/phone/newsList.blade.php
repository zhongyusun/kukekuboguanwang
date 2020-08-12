@extends('index.phone.layouts.master')
@section('title',$sign['title'])
@section('keywords',$sign['keywords'])
@section('description',$sign['description'])
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">
            <img src="{{asset('static/phone')}}/images/logo.jpg" width="150" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/">首页 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('index.product_list')}}">产品中心 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index.news')}}">新闻中心</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index.case')}}">相关案例</a>
                </li>
            </ul>

        </div>
    </nav>
    <style>
        .telbox a{
            width: 50px;
            height: 50px;
            position: fixed;
            right: 0;
            bottom: 100px;
            background: #0d407e;
            color: #fff;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            text-decoration: none;

        }
    </style>
    <div class="telbox">
        <a href="tel:18702183613">
            <i class="iconfont icon-web-icon-" style="color:#fff;font-size:40px"></i>
        </a>
    </div>
    <!-- banner -->
    <div class="swiper-container max-box banner-box">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#">
                    <img src="{{asset('static/phone')}}/images/banner1.jpg" alt="" srcset="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <img src="{{asset('static/phone')}}/images/banner1.jpg" alt="" srcset="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <img src="{{asset('static/phone')}}/images/banner1.jpg" alt="" srcset="">
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>


    <div class="max-box slogan-box">
        <div class="ins-box">
            <div>
                <h3>库克库伯电气专注低压电力电容器行业30余年</h3>
                <p>质保三年，正常使用寿命长达15年</p>
            </div>
        </div>
    </div>



    <style>
        .qa-list-active >div:first-child{
            background: #fff !important;
        }
        .qa-list-active a{
            color: #424242 !important;
        }
    </style>


    <!-- 问答中心 -->


    <div class="max-box">
        <div class="ins-box">



            <div class="qa-box">

                <div class="qa-item">
                    <div class="qa-show">
                        <div>
                            <ul class="qa-list">
                                <li class="">
                                    <div>
                                        <a href="newInfo.html">
                                            <h3>滤波电容器适用于谐波污染或者补偿困难的场所</h3>
                                            <p>高次谐波的存在实在是对系统造成了致命的损坏，不仅阻碍了设备的正常运行，
                                                还毁坏了很多电气设备。针对于谐波含量以及类型的不同....</p>
                                        </a>
                                    </div>
                                </li>
                                <li>

                                    <div>
                                        <a href="newInfo.html">
                                            <h3>滤波电容器适用于谐波污染或者补偿困难的场所</h3>
                                            <p>高次谐波的存在实在是对系统造成了致命的损坏，不仅阻碍了设备的正常运行，
                                                还毁坏了很多电气设备。针对于谐波含量以及类型的不同....</p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="newInfo.html">
                                            <h3>滤波电容器适用于谐波污染或者补偿困难的场所</h3>
                                            <p>高次谐波的存在实在是对系统造成了致命的损坏，不仅阻碍了设备的正常运行，
                                                还毁坏了很多电气设备。针对于谐波含量以及类型的不同....</p>
                                        </a>
                                    </div>
                                </li>
                                <li>

                                    <div>
                                        <a href="newInfo.html">
                                            <h3>滤波电容器适用于谐波污染或者补偿困难的场所</h3>
                                            <p>高次谐波的存在实在是对系统造成了致命的损坏，不仅阻碍了设备的正常运行，
                                                还毁坏了很多电气设备。针对于谐波含量以及类型的不同....</p>
                                        </a>
                                    </div>
                                </li>
                                <li>


                                    <div>
                                        <a href="newInfo.html">
                                            <h3>滤波电容器适用于谐波污染或者补偿困难的场所</h3>
                                            <p>高次谐波的存在实在是对系统造成了致命的损坏，不仅阻碍了设备的正常运行，
                                                还毁坏了很多电气设备。针对于谐波含量以及类型的不同....</p>
                                        </a>
                                    </div>
                                </li>
                                <li>


                                    <div>
                                        <a href="newInfo.html">
                                            <h3>滤波电容器适用于谐波污染或者补偿困难的场所</h3>
                                            <p>高次谐波的存在实在是对系统造成了致命的损坏，不仅阻碍了设备的正常运行，
                                                还毁坏了很多电气设备。针对于谐波含量以及类型的不同....</p>
                                        </a>
                                    </div>
                                </li>
                                <li>


                                    <div>
                                        <a href="newInfo.html">
                                            <h3>滤波电容器适用于谐波污染或者补偿困难的场所</h3>
                                            <p>高次谐波的存在实在是对系统造成了致命的损坏，不仅阻碍了设备的正常运行，
                                                还毁坏了很多电气设备。针对于谐波含量以及类型的不同....</p>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div style="display: flex;justify-content: center;margin: 10px auto;">
        <nav aria-label="Page navigation example" >
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

@stop
