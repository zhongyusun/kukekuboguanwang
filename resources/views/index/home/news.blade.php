@extends('index.layouts.master')
@section('title',$sign['title'])
@section('keywords',$sign['keywords'])
@section('description',$sign['description'])
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
        <img src="{{asset('static/index')}}/images/newsCenterBanner.jpg" alt="">
    </div>


    <div class="crumbs-box max-box">
        <div class="ins-box">
            当前位置：<a href="/">首页</a><span> > </span> <a href="{{route('index.news')}}"> 新闻中心</a>
            @if($id=='1')
                <span> > </span> <a href="{{route('index.news',1)}}"> 公司资讯</a>
                @elseif($id=='2')
                <span> > </span> <a href="{{route('index.news',2)}}"> 行业资讯</a>
            @elseif($id=='3')
                <span> > </span> <a href="{{route('index.news',3)}}"> 常见问答</a>
            @endif
        </div>
    </div>

    <div class="max-box">
        <div class="ins-box  case-box">
            <div class="ckcb-title">
                <img src="{{asset('static/index')}}/images/newsTitle.png" width="274px" height="74px"  alt="" srcset="">
            </div>

            <style>
                .ckcb-title > img{
                    width: 274px;
                }
                .news-top{
                    display: flex;
                    justify-content: flex-start;
                    flex-wrap: nowrap;
                }
                .news-top > .news-left{
                    box-sizing: border-box;
                    width: 300px;
                    height: 390px;
                    background: #f2f2f2;
                    margin-right: 10px;
                    padding: 12px;
                }
                .case-top-box{
                    width: 890px;
                    height: 390px;
                }
                .case-top-box > div:first-child{
                    width: 450px;
                }
                .case-top-box > div{
                    height: 390px;
                }
                .case-top-box > div:last-child > p {
                    color: #4c4c4c;
                    font-size: 13px;
                    margin: 45px 0;
                    line-height: 14px;
                    line-height: 24px;
                }
                .case-top-box > div:last-child{
                    width: 533px;
                }
                .news-top > .news-left li{
                    padding:20px;
                    border-bottom: 1px dashed #e6e6e6;
                }
                .news-top > .news-left li a{
                    color: #4c4c4c;
                }
                .news-top > .news-left >div{
                    margin-top: 10px;
                    font-size: 12px;
                    line-height: 20px;
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
.case-content{
    display: inline-block;
    height: 514px;
    margin-right: 14px;
}

.case-content > p {
     text-overflow: -o-ellipsis-lastline;
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  line-clamp: 3;
  -webkit-box-orient: vertical;
  height:58px;
}
.case-left-box {
  width: 845px;
    display: block;

}
.case-content > p {
    color: #4c4c4c;
    font-size: 14px;
    margin-top: 5px;
    margin-bottom: 30px;
}
.case-content > .content-img > img {
    width: 100%;
    height: 100%;
}
            </style>
            <div class="ins-box news-top">
                <div class="news-left">
                    <ul>
                        <li><a href="{{route('index.news',1)}}">> 公司资讯</a></li>
                        <li><a href="{{route('index.news',2)}}">> 行业资讯</a></li>
                        <li><a href="{{route('index.news',3)}}">> 常见问答</a></li>
                    </ul>
                    <div>
                        <p>24小时服务热线：</p>
                        <p>400-607-8886</p>
                        <p>18702183613（微信同号）</p>
                        <p>18702186953</p>
                        <p>QQ：3299066989</p>
                        <p>邮箱：ckkb@cookekolb.com</p>
                        <p>中国公司总部：上海市长宁区宣化路300号华宁国际广场</p>
                    </div>
                </div>
                @foreach($article as $v)
                <div class="case-top-box">
                    <div>
                        <img src="{{$v->pic}}" alt="" srcset="">
                    </div>
                    <div>
                        <h1>{{$v->name}}</h1>
                        <span>{{$v->created_at}}</span>
                        <p>{{$v->content}}
                        </p>
                        <a href="{{route('index.new_info',$v->id)}}">MORE></a>
                    </div>
                </div>
                    @endforeach
            </div>


            <div class="case-bottom-box">
                <div class="case-left-box">
                    @foreach($articles as $v)
                    <div class="case-content">
                        <div class="content-img">
                            <img src="{{$v->pic}}" alt="">
                            <!-- 图片是405*305的 -->
                        </div>
                        <h2>{{$v->name}}</h2>
                        <span>{{$v->created_at}}</span>
                        <p>{{$v->content}}</p>
                        <a href="{{route('index.new_info',$v->id)}}">MORE ></a>
                    </div>
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
                                    <div class="swiper-slide" style="overflow:hidden">
                                        <a href="{{route('index.new_info',$v->id)}}">
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

            <div class="paging-box">
                {!! $articles->render() !!}
            </div>


        </div>
    </div>

@stop

