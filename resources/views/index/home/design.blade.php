@extends('index.layouts.master')
@section('title',$sign['title'])
@section('keywords',$sign['keywords'])
@section('description',$sign['description'])
@section('content')
    <link rel="stylesheet" href="{{asset('static/index')}}/css/iconfont.css">
    <link rel="stylesheet" href="{{asset('static/index')}}/css/swiper.css">
    <link rel="stylesheet" href="{{asset('static/index')}}/css/public.css">
    <link rel="stylesheet" href="{{asset('static/index')}}/css/ProductList.css">
    <script src="{{asset('static/index')}}/js/jquery.js"></script>

    <script src="{{asset('static/index')}}/js/swiper.js"></script>
    <div class="max-box nav-box">
        <div class="ins-box">
            <div class="logo-box">
                <a href="/">
                    <img src="{{asset('static/index')}}/images/logo.jpg" alt="" srcset="">
                </a>
            </div>

            <div class="nav-list">
                <ul>
                    <li class="active-nav"><a href="/">首页</a></li>
                    <li><a href="{{route('index.product_list')}}">产品中心</a></li>
                    <li><a href="{{route('index.news')}}">新闻中心</a></li>
                    <li><a href="{{route('index.about_us')}}">我们的公司</a></li>
                    <li><a href="{{route('index.ue')}}">更赞的用户体验</a></li>
                    <li><a href="{{route('index.contact_us')}}">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="max-box banner-box">
        <img src="{{asset('static/index')}}/images/fanganBanner'.jpg" alt="">
    </div>
    <div class="crumbs-box max-box">
        <div class="ins-box">
            当前位置：<a href="/">首页</a><span> > </span> <a href="{{route('index.ue')}}">更赞的用户体验</a><span> > </span> <a href="{{route('index.design')}}">方案设计</a>
        </div>
    </div>

    <div class="product-title-box max-box" style="margin-bottom:60px;border-bottom: none;">
        <img src="{{asset('static/index')}}/images/fanganTitle.png" alt="" srcset="">
    </div>

    <style>
        .tab-box{
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-around;
        }
        .tab-box li{
            width: 380px;
        }
        .tab-box li div{
            width: 100%;
            height: 255px;
            background: #ffffff;
            overflow: hidden;
        }
        .tab-box li div img{
            width: 100%;
        }
        .tab-box li a{
            display: block;
            color: #ffffff;
            background: #1671a6;
            margin-top: 5px;
            text-align: center;
        }
        .tab-box li a h3{
            font-size: 20px;
            padding: 5px 0;
        }
        .tab-box li a p{
            font-size: 14px;
            padding-bottom: 5px;
        }
        .tab-box li span{
            display: block;
            text-align: center;
            margin: 10px 0;
            opacity: 0;
        }
        .tabActive a{
            background: #3e995c !important;
        }
        .tabActive span{
            display: block;
            opacity: 1 !important;
        }
        .item-box{
            background: #f2f2f2;
        }
        .item-box > div{
            display: none;
            padding: 40px 60px;
            margin-bottom: 80px;
        }
        .item-box > div:first-child{
            display: block;
        }
        .item-box > div p{
            margin: 10px 0;
        }
    </style>
    <div class="max-box">
        <div class="ins-box">
            <ul class="tab-box">
@foreach($designs as $v)
{{--                class="tabActive"--}}
                <li >
                    <a href='{{route('index.design',$v->id)}}'>
                        <div>
                            <img src="{{$v->pic}}" alt="">
                            <!-- 380*255 图片大小 -->
                        </div>
                        <a href="{{route('index.design',$v->id)}}">
                            <h3>{{$v->name}}</h3>
                            <p>{{$v->describe}}</p>
                        </a>
                        <span>
                <img src="{{asset('static/index')}}/images/sanjiao.png" alt="" srcset="">
              </span>
                    </a>
                </li>
               @endforeach
            </ul>
            <div class="item-box">
                @foreach($designs as $v)
                <div>
                  {!! $v->content !!}
                </div>
               @endforeach
            </div>
        </div>
    </div>
    <script>
         let tab = $('.tab-box > li')
      let item = $('.item-box > div')
      console.log(tab,item)
      $.each(tab, function (indexInArray, valueOfElement) { 
         $(this).hover(()=>{
           tab.eq(indexInArray).addClass('tabActive').siblings().removeClass('tabActive')
           item.eq(indexInArray).show().siblings().hide()
         })
      });
    </script>

@stop
