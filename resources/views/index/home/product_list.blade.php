@extends('index.layouts.master')
@section('title',$sign['title'])
@section('keywords',$sign['keywords'])
@section('description',$sign['description'])
@section('content')
    <link rel="stylesheet" href="{{asset('static/index')}}/css/productList.css">

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

            当前位置：<a href="/">首页</a>
            @if($id)
                <span> > </span><a href="{{route('index.product_list',$id)}}">{{$sign['name']}}</a>
               @else
                <span> > </span><a href="{{route('index.product_list')}}">产品中心</a>
            @endif
        </div>
    </div>

    <div class="product-title-box max-box">
        <img src="{{asset('static/index')}}/images/products-list.png" alt="" srcset="">
    </div>

    <div class="max-box">
        <div class="ins-box info">
            <div class="info-left">

                <ul class="info-nav">
                    @foreach($classifies as $classify)
                        <li><a href="{{route('index.product_list',$classify->id)}}">> {{$classify->name}}</a></li>
                    @endforeach
                </ul>
                <div class="news-box">
                    <div class="info-title">相关咨询</div>

                    <div class="QAbox">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($art as $v)
                                <div class="swiper-slide">
                                    <a href="{{route('index.new_info',$v->id)}}">
                                        <h2>{{$v->name}}</h2>
                                        <p>{{$v->content}}</p>
                                    </a>
                                </div>
@endforeach
                            </div>
                        </div>
                    </div>

                    <div class="info-title" style="margin-top:30px">产品小问答</div>
                    <div class="QAbox">
                        <div class="swiper-container1">
                            <div class="swiper-wrapper">
                                @foreach($arts as $v)
                                    <div class="swiper-slide">
                                        <a href="{{route('index.new_info',$v->id)}}">
                                            <h2>{{$v->name}}</h2>
                                            <p>{{$v->content}}</p>
                                        </a>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>

                    <script>
                        var mySwiper = new Swiper('.swiper-container', {
                            direction: 'vertical', // 垂直切换选项
                            height: 550,
                            loop: true, // 循环模式选项
                            slidesPerView: 5,
                            autoplay: true,
                        })
                        var mySwiper = new Swiper('.swiper-container1', {
                            direction: 'vertical', // 垂直切换选项
                            height: 550,
                            loop: true, // 循环模式选项
                            slidesPerView: 5,
                            autoplay: true,
                        })
                    </script>
                </div>
            </div>
            <div class="info-right">
                <ul>
                    @foreach($products as $product)
                        <li>
                            <a href="{{route('index.product_info',$product->id)}}">
                                <!-- 图片建议 width: 282px;height: 239px;-->
                                <div class="img-box">
                                    <img src="{{$product->pic}}" alt="">
                                </div>
                                <p>{{$product->name}}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop
