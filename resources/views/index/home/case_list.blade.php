@extends('index.layouts.master')
@section('title',$label['title'])
@section('keywords',$label['keywords'])
@section('description',$label['description'])
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
    <style>
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

  overflow: hidden;
  text-overflow: ellipsis;
   white-space: nowrap;
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


    <div class="max-box banner-box">
        <img src="{{asset('static/index')}}/images/caseBanner.jpg" alt="">
    </div>

    <div class="crumbs-box max-box">
        <div class="ins-box">
            当前位置：<a href="/">首页</a><span> > </span><a href="{{route('index.case')}}">行业案例</a>
            @if($id)
            <span> > </span> <a href="{{route('index.case',$label['id'])}}">{{$label['name']}}</a>
            @endif
        </div>
    </div>

    <div class="max-box">
        <div class="ins-box  case-box">
            <div class="ckcb-title">
                <img src="{{asset('static/index')}}/images/IndustryCase-title.png" height="67px" alt="" srcset="">
            </div>
            <style>
                .ckcb-title > img {
                    width: 689px;
                }
            </style>
            <ul class="case-list">
                @foreach($caseCategories as $v)
                    <li class="@if($v->id==$id) case-active @endif"><a
                            href="{{route('index.case',$v->id)}}">{{$v->name}}</a></li>
                @endforeach
            </ul>
            @foreach($case as $v)
                <div class="case-top-box">
                    <div>
                        <img src="{{$v->pic}}" alt="" srcset="">
                    </div>
                    <div>
                        <h1>{{$v->name}}</h1>
                        <span>{{$v->created_at}}</span>
                        <p>{!! $v->content !!}
                        </p>
                        <a href="{{route('index.case_info',$v->id)}}">MORE></a>
                    </div>
                </div>
            @endforeach
            <div class="case-bottom-box">
                <div class="case-left-box">
                    @foreach($cases as $v)

                        <div class="case-content">
                            <a href="javascript:void(0)">
                            <div class="content-img">
                                <img src="{{$v->pic}}" alt="">
                                <!-- 图片是405*305的 -->
                            </div>
                            <h2>{{$v->name}}</h2>
                            <span>{{$v->created_at}}</span>
                            <p>{!! $v->content !!}</p>
                            </a>
                            <a class="a1" href="{{route('index.case_info',$v->id)}}">MORE ></a>

                        </div>
                    @endforeach
                </div>
                <style>
                .case-content > a {
  display: block;
  color: #3e995c;
  border: none;
  border-radius: none;
  font-size: 14px;
  padding: 0;
  transition: all 0.8s;
}
.case-content > a:hover {
  background: none;

}
          .case-content {
  width: 405px;
  margin-bottom: 35px;
  overflow: hidden;
}
.case-content  .content-img {
  width: 405px;
  height: 305px;
  overflow: hidden;
}
.case-content  .content-img > img {
  width: 100%;
}
.case-content  h2 {
  color: #333333;
  font-size: 16px;
  margin-top: 15px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.case-content  span {
  font-size: 12px;
  color: #666666;
}
.case-content  p {
  color: #4c4c4c;
  font-size: 14px;
  margin-top: 9px;
  margin-bottom: 13px;
}
.case-content  .a1 {
  display: inline-block;
  color: #3e995c;
  border: 1px solid #3e995c;
  border-radius: 25px;
  font-size: 14px;
  padding: 10px 18px;
  transition: all 0.8s;
}
.case-content  .a1:hover {
  background: #3e995c;
  color: #ffffff;
}
                </style>
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
                            var mySwiper = new Swiper('.swiper-container', {
                                direction: 'vertical', // 垂直切换选项
                                height: 550,
                                loop: true, // 循环模式选项
                                slidesPerView: 5,
                                // loopedSlides: 5,
                                autoplay: true,

                            })
                        </script>
                    </div>
                </div>
            </div>

            <div class="paging-box">
                {!!  $cases->render() !!}
            </div>
        </div>
    </div>
@stop
