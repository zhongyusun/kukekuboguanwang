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
                    <img src="{{$config['site_logo']}}" alt="" srcset="">
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

    <!-- banner -->
    <div class="swiper-container max-box banner-box">
        <div class="swiper-wrapper">
            @foreach($banners as $v)
            <div class="swiper-slide">
                <a href="{{$v->link}}">
                    <img src="{{$v->pic}}" alt="" srcset="" style="height:680px">
                </a>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>


    <div class="max-box slogan-box">
        <div class="ins-box">
            @foreach($banner_down as $v)
            <div>
                <h3>{{$v['data']['title']}}</h3>
                <p>{{$v['data']['introduce']}}</p>
            </div>
            <div>
                <ul>
                    <li>全国24小时服务热线</li>
                    <li>{{$v['data']['phone']}}</li>
                    <li>{{$v['data']['number']}}</li>
                </ul>
            </div>
                @endforeach
        </div>
    </div>

    <!-- 产品与方案 -->
    <div class="max-box products-box">
        <div class="ins-box">
            <div class="ckcb-title">
                <img src="{{asset('static/index')}}/images/canpingyufangan.png" alt="" srcset="">
            </div>

            <div class="products-nav">
            <span>
                <i class="iconfont icon-weibiaoti1"></i>产品
            </span>
                <ul>
                    @foreach($classifies as $classify)
                        <li><a href="{{route('index.product_list',$classify['id'])}}">{{$classify['name']}}</a></li>
                    @endforeach
                </ul>
                <a href="{{route('index.product_list')}}" class="more">MORE ></a>
            </div>

            <div class="products-nav">
            <span>
                <i class="iconfont icon-zhaobiaofangan"></i>方案
            </span>
                <ul>
                    @foreach($fanganlist as $v)
                    <li><a href="{{route('index.fanganlist',$v->id)}}">{{$v->name}}</a></li>
                    @endforeach
                </ul>

                <a href="{{route('index.fanganlist')}}" class="more">MORE ></a>
            </div>


            <!-- 产品轮播图片大小为 宽: 191px; 高: 176px;-->
            <div class="swiper-container cp-list">
                <div class="swiper-wrapper">
                    @foreach($classifies as $classify)
                        <div class="swiper-slide">
                            <h3>{{$classify['name']}}</h3>
                            <p>{{$classify['introduce']}}</p>
                            <img src="{{$classify['pic']}}" alt="" srcset="">
                            <p>—— {{$classify['name']}} ——</p>
                            <a href="{{route('index.product_list',$classify->id)}}">了解更多 ></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- 库克库伯电器 -->
    <div class="max-box ckcb-dq">
        <div class="ins-box">
            <div class="ckcb-title">
                <img src="{{asset('static/index')}}/images/dianqi.png" alt="" srcset="">
            </div>
            <ul class="ckcb-dq-ul">
                <li class="">
                    <i class="iconfont icon-icon--"></i>
                    <div>
                        <h3>品质</h3>
                        <p>美国电气制造商协会核心成员
                            荣获国际电工委员会认证
                            美国材料实验协会会员单位</p>
                    </div>
                </li>
                <li>
                    <i class="iconfont icon-weixiubanshou"></i>
                    <div>
                        <h3>技术</h3>
                        <p>与美国劳伦斯伯克利国家
                            实验室及美国电气制造商协
                            会合作世界权威技术研发输出地</p>
                    </div>
                </li>
                <li>
                    <i class="iconfont icon-like"></i>
                    <div>
                        <h3>经验</h3>
                        <p>多家用户指定的企业
                            电力设备供应商单位，
                            500 多家甲级设计院共同选择</p>
                    </div>
                </li>
                <li>
                    <i class="iconfont icon-xiaodengpao"></i>
                    <div>
                        <h3>创新</h3>
                        <p>专注电能质量与能效管理的
                            系统研发与技术推广，积极参与
                            行业探讨，敢为人先</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <style>
    .about-box > .ins-box > .about-us {
        width: 40%;
        height: 431px;
        padding-right: 20px;
        box-sizing: border-box;
    }
        .about-box > .ins-box {
            position: relative;
            overflow: visible !important;
        }
        .about-box > .ins-box > .video-box{
            position: absolute;
            right: 0;
            top: 0;
            z-index: 99;
        }
        .about-box > .ins-box > .video-box img{
            height: 90%;
        }
        .about-box > .ins-box > .video-box video {
            border: 10px solid #fff;
            width: 97%;
            height: 88%;

        }
        .about-box{
             position: relative;
        }
        .video{
            position: absolute;
            right: 0;
            top: 0;
            width: 960px;
            height: 100%;
            overflow: hidden;
            background: #fff;
        }
        .video video{
            width: 100%;
            height: 100%;
        }

    </style>

    <!-- 公司介绍 -->
    <div class="max-box about-box">
        <div class="video">
             <video src="http://ckkbdrq.com/static/index/images/video.mp4" muted autoplay="false" poster="http://ckkbdrq.com/static/index/images/lanbai1.jpg"  controls="controls" id="video"> </video>
        </div>

        <div class="ins-box">
            @foreach($company as $v)
            <div class="about-us">
                <img src="{{asset('static/index')}}/images/jieshao.png" alt="" srcset="">
                <p>{!! $v['data']['introduce'] !!}</p>
                <ul>
                    <li><a href="{{$v['data']['qq']}}">立即咨询</a></li>
                    <li><a href="{{route('index.about_us')}}">了解更多 ></a></li>
                </ul>
            </div>
            <div class="video-box">
                <img src="{{$v['data']['logo']}}" alt="" srcset="">
                <!--<video src="{{asset('static/index')}}/images/video.mp4" autoplay="true" poster="{{$v['data']['logo']}}" controls="controls"></video>-->
            </div>
@endforeach
            <script>

                    let about = $('.video')
                    let img = $('.about-box .video-box')
                    let video = document.getElementById('video')
                    console.log(about,img)
                $('.video').hover(
                  function () {
                    console.log('1')
                    // 640
                   video.play()
                   img.stop().animate({ right: "640px",}, 500 )

                  },
                  function () {
                   console.log('2')
                   video.pause()
                   img.stop().animate({  right: "0px", }, 500 )
                  }
                );

            </script>

        </div>
    </div>

    <!-- 合作案例 -->
    <div class="max-box case-box">
        <div class="ins-box">
            <div class="ckcb-title">
                <img src="{{asset('static/index')}}/images/hezuoanli.png" alt="" srcset="">
            </div>
            <div class="case-tab">
                <ul>
                    @foreach($caseCategories as $caseCategory)
                        <li><a href="{{route('index.case',$caseCategory['id'])}}">{{$caseCategory['name']}}</a></li>
                    @endforeach
                </ul>

                <div class="case-item">
                   @foreach($caseCategories as $k=>$caseCategory)
                        <div class="item-box ">
                            <div>
                                <h2>{{$caseCategory['file']['name']}}</h2>
                                {!! $caseCategory['file']['content'] !!}
                                <a href="{{route('index.case')}}">了解更多 ></a>
                            </div>
                            <div>
                                <div class="swiper-container case-swiper">
                                    <div class="swiper-wrapper">
                                        @foreach($pic_lists as $pic_list)
                                            <div class="swiper-slide">
                                                <img src="{{$pic_list}}" alt="" srcset="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <!-- 八大优势 -->
    <div class="max-box advantage-box">
        <div class="ins-box">
            <div class="ckcb-title">
                <img src="{{asset('static/index')}}/images/73.png" alt="" srcset="">
            </div>

            <ul class="advantage-list">
                @foreach($advantages as $v)
                    <a href="{{route('index.advantage',$v->id)}}">

                <li>
                    <div>{{$v->sort}}</div>
                    <div>
                        <h5>{{$v->name}}</h5>
                        <p>{{$v->into}}</p>
                    </div>
                </li>
                    </a>
                @endforeach
                <li>
                <span>
                   ————————————品质因专注而：“坚不可摧”———————
                </span>
                </li>
            </ul>

        </div>
    </div>

    <!-- 问答中心 -->
    <div class="max-box">
        <div class="ins-box">
            <div class="ckcb-title">
                <img src="{{asset('static/index')}}/images/75.png" alt="" srcset="">
            </div>
            <div class="qa-box">
                <ul>
                    <li class="qa-active"><a href="javascrip:void(0)">公司资讯</a></li>
                    <li><a href="javascrip:void(0)">行业资讯</a></li>
                    <li><a href="javascrip:void(0)">常见问答</a></li>
                </ul>

                <div class="qa-item">
                    <div class="qa-show">
                        <div>
                            <div class="swiper-container qa-swiper">
                                <div class="swiper-wrapper">
                                    @foreach($arti as $v)
                                        <div class="swiper-slide">
                                            <a href="{{route('index.new_info',$v->id)}}">
                                                <img src="{{$v->pic}}" alt="" srcset="">
                                                <div>
                                                    <h3>{{$v->name}}</h3>
                                                    <p>{{$v->content}}
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- 如果需要分页器 -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div>
                            <ul class="qa-list">
                                @foreach($articles as $v)
                                    <li class="">
                                        <div class="date">

                                            <span>{{$v->created_at}}</span>
                                            <p>2019/12</p>
                                        </div>
                                        <div>
                                            <a href="{{route('index.new_info',$v->id)}}">
                                                <h3>{{$v->name}}</h3>
                                                <p>{!! $v->content !!}</p>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <script>
                    $(function(){

                        setTimeout(()=>{

                             var date = $('.date > span')[0].innerHTML
                            console.log(date)
                            var year = date.substring(8,11)
                            var yue = date.substring(0,7)
                            console.log(year,yue)
                            $('.date > span').text(year)
                            $('.date > p').text(yue)


                         },500)


                    })


                    </script>
                    <div>
                        <div>
                            <div class="swiper-container qa-swiper">
                                <div class="swiper-wrapper">
                                    @foreach($artic as $v)
                                        <div class="swiper-slide">
                                            <a href="{{route('index.new_info',$v->id)}}">
                                                <img src="{{$v->pic}}" alt="" srcset="">
                                                <div>
                                                    <h3>{{$v->name}}</h3>
                                                    <p>{!! $v->content !!}
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- 如果需要分页器 -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div>
                            <ul class="qa-list">
                                @foreach($art as $v)
                                    <li class="">
                                        <div class="date1">

                                            <span>{{$v->created_at}}</span>
                                            <p>2019/12</p>
                                        </div>
                                        <div>
                                            <a href="{{route('index.new_info',$v->id)}}">
                                                <h3>{{$v->name}}</h3>
                                                <p>{!! $v->content !!}</p>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                     <script>
                    $(function(){

                        setTimeout(()=>{

                             var date1 = $('.date1 > span')[0].innerHTML
                            // console.log(date)
                            var year1 = date1.substring(8,11)
                            var yue1 = date1.substring(0,7)
                            // console.log(year,yue)
                            $('.date1 > span').text(year1)
                            $('.date1 > p').text(yue1)

                         },500)

                    })


                    </script>

                    <div>
                        <div>
                            <div class="swiper-container qa-swiper">
                                <div class="swiper-wrapper">
                                    @foreach($articl as $v)
                                        <div class="swiper-slide">
                                            <a href="{{route('index.new_info',$v->id)}}">
                                                <img src="{{$v->pic}}" alt="" srcset="">
                                                <div>
                                                    <h3>{{$v->name}}</h3>
                                                    <p>{!! $v->content !!}
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- 如果需要分页器 -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div>
                            <ul class="qa-list">
                                @foreach($arts as $v)
                                    <li class="">
                                        <div class="date2">

                                            <span>{{$v->created_at}}</span>
                                            <p>2019/12</p>
                                        </div>
                                        <div>
                                            <a href="{{route('index.new_info',$v->id)}}">
                                                <h3>{{$v->name}}</h3>
                                                <p>{!! $v->content !!}</p>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                     <script>
                    $(function(){

                        setTimeout(()=>{

                             var date2 = $('.date2 > span')[0].innerHTML
                            // console.log(date)
                            var year2 = date2.substring(8,11)
                            var yue2 = date2.substring(0,7)
                            console.log(year2,yue2)
                            $('.date2 > span').text(year2)
                            $('.date2 > p').text(yue2)

                         },500)

                    })


                    </script>

                </div>
            </div>
        </div>
    </div>

    <!-- 联系方式 -->
    <div class="max-box us-box">
        <div class="ins-box">
            @foreach($company as $v)
            <ul>
                <li>
                    <h2><i class="iconfont icon-dianhua"></i>服务热线</h2>
                    @foreach($banner_down as $vv)
                    <p>电话：{{$vv['data']['phone']}}</p>
                    @endforeach
                    <p>{{$v['data']['phone']}}</p>
                    <p>传真：{{$v['data']['fax']}}</p>

                    <a href="{{$v['data']['qq']}}">在线咨询</a>

                </li>
                <li>
                    <h2><i class="iconfont icon-dizhi"></i>公司地址</h2>
                    <p>中国公司总部: {{$v['data']['site']}}</p>
                    <p>美国公司总部: {{$v['data']['usa_site']}}</p>
                    <a href="{{route('index.contact_us')}}">请给我们留言</a>

                </li>
                <li>
                    <h2><i class="iconfont icon-weixin"></i>微信公众号</h2>
                    <span>
                    <img src="{{asset('static/index')}}/images/ewm1.jpg" alt="">
                    <p>公众平台二维码</p>
                </span>
                    <span>
                    <img src="{{asset('static/index')}}/images/ewm2.jpg" alt="">
                    <p>微信二维码</p>
                </span>
                </li>
            </ul>
                @endforeach
        </div>
    </div>
@stop
