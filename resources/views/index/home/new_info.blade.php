@extends('index.layouts.master')
@section('title',"$information->title")
@section('keywords',"$information->keywords")
@section('description',"$information->description")
@section('content')
    <link rel="stylesheet" href="{{asset('static/index')}}/css/IndustryCases.css">

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
        <img src="{{asset('static/index')}}/images/newsCenterBanner.jpg" alt="" style="width:100%">
    </div>


    <div class="crumbs-box max-box">
        <div class="ins-box">
            当前位置：<a href="/">首页</a><span> > </span><a href="{{route('index.news')}}">新闻中心</a>
            @if($information->category_id=='1')
                <span> > </span> <a href="{{route('index.news',1)}}"> 公司资讯</a>
            @elseif($information->category_id=='2')
                <span> > </span> <a href="{{route('index.news',2)}}"> 行业资讯</a>
            @elseif($information->category_id=='3')
                <span> > </span> <a href="{{route('index.news',3)}}"> 常见问答</a>
            @endif
            <span> > </span><a href="{{route('index.new_info',$information->id)}}">{{$information->name}}</a>
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
                 .QAbox a{
  display: block;
  color: #333333;
  font-size: 14px;
  border-bottom: 1px solid #e5e5e5;
  margin-bottom: 20px;
}
.QAbox a:hover{
  color: #3e995c !important;
}
.QAbox a > h2{
  font-size:14px;
  margin-bottom: 10px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.QAbox a >p{
  /* color: #666666; */
  margin-bottom: 24px;
  line-height: 20px;
  text-overflow: -o-ellipsis-lastline;
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  line-clamp: 2;
  -webkit-box-orient: vertical;
}
            </style>
            <div class="case-bottom-box" style="margin-bottom:50px">
                <div class="case-left-box">
                    <div class="left-title">
                        <h2>{{$information->name}}</h2>
                        <hr>
                        <ul>
                            <li>发布日期： {{$information->created_at}}</li>
                            <li>
                                <a href="{{route('index.news')}}">返回列表</a>
                            </li>
                        </ul>
                    </div>
                    <div class='desc-box'>
                       {!! $information->content !!}
                    </div>
                    @foreach($list as $v)
                        @if($information->id > $v->id)
                    <a class="next" href="{{route('index.new_info',$v->id)}}">上一篇：{{$v->name}}</a>
                        @else
                            <a class="next" href="{{route('index.new_info',$v->id)}}">下一篇：{{$v->name}}</a>
@endif
                            @endforeach
                </div>
                <div class="case-right-box">
                    <div class="right-title">热门产品</div>

                    <div class="hot-products">
                        @foreach($products as $v)
                            <a href="{{route('index.product_info',$v)}}">
                                <img src="{{$v->pic}}" alt="" srcset="">
                                <!-- 建议图片尺寸248*210 -->
                                <p>{{$v->name}}</p>
                            </a>
                        @endforeach
                    </div>

                    <div class="right-title" style="margin-top: 40px;">产品小问答</div>

                    <div class="QAbox">

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($articles as $v)
                                    <div class="swiper-slide">
                                        <a href="javascript:void(0)">
                                            <h2>{{$v->name}}</h2>
                                            <p>{!! $v->content !!}</p>
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

