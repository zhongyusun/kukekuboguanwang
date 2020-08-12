@extends('index.layouts.master')
@section('title',"$fangan->title")
@section('keywords',"$fangan->keywords")
@section('description',"$fangan->description")
@section('content')
    <link rel="stylesheet" href="{{asset('static/index')}}/css/IndustryCases.css">
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
        <img src="{{asset('static/index')}}/images/fanganBanner'.jpg" alt="" style="width:100%">
    </div>


    <div class="crumbs-box max-box">
        <div class="ins-box">
            当前位置：<a  href="/">首页</a><span> > </span><a href="{{route('index.fanganlist')}}">无功补偿装置方案</a>
            <span> > </span><a href="{{route('index.fanganlist',$fangan->fanganlist->id)}}">{{$fangan->fanganlist->name}}</a>
            <span> > </span><a href="{{route('index.fangan_info',$fangan->id)}}">{{$fangan->name}}</a>
        </div>
    </div>

    <div class="max-box">
        <div class="ins-box  case-box">
            <style>
                .case-left-box {
                    display: block;
                }
                .left-title{
                    width: 100%;
                }
                .left-title > h2{
                    text-align: center;
                }
                .left-title > hr{
                    background-color:#e6e6e6;
                    height: 1px;
                    width:100%;
                    border: none;
                    margin: 20px auto;
                }
                .left-title ul{
                    display: flex;
                    justify-content: space-between;
                }
                .left-title ul li{
                    font-size: 14px;
                }
                .left-title ul li a{
                    display: inline-block;
                    color: #878787;
                    background: #eeeeee;
                    padding: 6px 15px;
                    border-radius: 5px;
                }
                .desc-box{
                    margin: 20px 0;
                    box-sizing: border-box;
                    padding:10px;
                    font-size: 14px;
                    padding-bottom:50px;
                    border-bottom:1px solid #e6e6e6;
                    line-height: 24px;
                }
                .next{
                    color: #878787;
                    display: block;
                    margin-bottom: 10px;
                }
            </style>
            <div class="case-bottom-box" style="margin-bottom:50px">
                <div class="case-left-box">
                    <div class="left-title">
                        <h2>{{$fangan->name}}</h2>
                        <hr>
                        <ul>
                            <li>发布日期： {{$fangan->created_at}}</li>
                            <li>
                                <a href="{{route('index.fanganlist',$fangan->fanganlist_id)}}">返回列表</a>
                            </li>
                        </ul>
                    </div>
                    <div class='desc-box'>
                      {!! $fangan->content !!}
                    </div>
{{--                    <a class="next" href="javascript:;">下一篇：已经是最后一篇了</a>--}}
{{--                    <a class="next" href="javascript:;">上一篇：已经是最后一篇了已经是最后一篇了已经是最后一篇了</a>--}}
                </div>
                <div class="case-right-box">
                    <div class="right-title">库克库伯推荐产品</div>

                    <div class="hot-products">
                        @foreach($products as $v)
                        <a href="{{route('index.product_info',$v->id)}}">
                            <img src="{{$v->pic}}" alt="" srcset="">
                            <!-- 建议图片尺寸248*210 -->
                            <p>{{$v->name}}</p>
                        </a>
                        @endforeach
                    </div>

                    <div class="right-title" style="margin-top: 40px;">相关方案</div>

                    <div class="QAbox">

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($fangans as $v)

                                <div class="swiper-slide">
                                    <a href="{{route('index.fangan_info',$v->id)}}">
                                        <h2>{{$v->name}}</h2>
                                        <p>{{$v->content}}</p>
                                    </a>
                                </div>
                               @endforeach
                            </div>
                        </div>
                        <script>
                            var mySwiper = new Swiper ('.swiper-container', {
                                direction: 'vertical', // 垂直切换选项
                                height:550,
                                loop: true, // 循环模式选项
                                slidesPerView : 5,
                                // loopedSlides: 5,
                                autoplay:true,
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


