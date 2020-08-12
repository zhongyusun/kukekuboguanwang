<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('static/index')}}/images/ico.ico" />
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')">
    <link rel="stylesheet" href="{{asset('static/index')}}/css/iconfont.css">
    <link rel="stylesheet" href="{{asset('static/index')}}/css/swiper.css">
    <link rel="stylesheet" href="{{asset('static/index')}}/css/public.css">
    <link rel="stylesheet" href="{{asset('static/index')}}/css/index.css">
    <!-- <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script> -->
    <script src="{{asset('static/index')}}/js/jquery.js"></script>
    <script src="{{asset('static/index')}}/js/swiper.js"></script>
    <script src="{{asset('static/index')}}/js/index.js"></script>
</head>
<body>
{{--顶部--}}
<div class="max-box top-nav">
    <div class="ins-box ">
        <div class="left-top-nav">
            您好，欢迎来到库克库伯电气（上海）有限公司！
        </div>
        <ul class="right-top-nav">
            @foreach($banner_down as $v)
            <li>
                全国免费咨询热线：{{$v['data']['phone']}} / {{$v['data']['number']}}
            </li>
            @endforeach
            <li>
                <a href="{{route('index.contact_us')}}"> <i class="iconfont icon-xiaoxi"></i>在线留言</a>
            </li>
        </ul>
    </div>
</div>

@yield('content')


<style>
    .paging-box{
  margin: 70px auto;
  color: #8c8c8c;
  text-align: center;
}
.paging-box ul{
  display: inline-block;
}
.paging-box ul >li{
  display: inline-block;
  border: 1px solid #e8ebed;
  padding: 15px 20px;
  border-radius: 50%;
  margin-right: 10px;
  background: #ffffff;
}
.paging-box ul >li a{
    color: #8c8c8c;
}
.paging-box ul >li>span{
  color: #8c8c8c;
}
.paging-box .active{
  background: #3e995c !important;
}
.paging-box .active span{
  color: #ffffff !important;
}
</style>

<!-- 回到顶部 -->

<div class="gotop">
    <img src="{{asset('static/index')}}/images/top.png" alt="" srcset="">
</div>


<footer class="max-box footer-box">
    <div class="ins-box footer-list">
        <div style=" box-sizing: border-box;padding-right: 60px; background: none;">
            <a>
                <img src="{{asset('static/index')}}/images/logo-bai.png" alt="">
            </a>
            <p>
                库克库伯电气专业生产低压电力电容器30余年，可以根据您的需求为您量身定制高品质的电力电容器。
            </p>
        </div>
        <div>
            <ul>
                <li><a href="{{route('index.contact_us')}}">关于库克库伯</a></li>
                <li><a href="{{route('index.about_us')}}">公司介绍</a></li>
                <li><a href="{{route('index.case')}}">合作案例</a></li>
                <li><a href="{{route('index.news')}}">新闻中心</a></li>
                <li><a href="{{route('index.map')}}">网站地图</a></li>
            </ul>
        </div>
        <div>
            <ul>
                <li><a href="">产品服务中心</a></li>
                <li><a href="">特定工况解决方案</a></li>
                <li><a href="">产品方案设计</a></li>
                <li><a href="">产品使用说明下载</a></li>
            </ul>
        </div>
        <div>
            <ul>
                @foreach($classifies as $v)
                <li><a href="{{route('index.product_list',$v->id)}}">{{$v->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="footer-bottom max-box">
        <div class="ins-box">
            <div>
                友情链接：
                @foreach($links as $v)
                <a href="{{$v->link}}" target="_blank">
                    {{$v->name}}
                </a>
                    @endforeach
            </div>
            <div>
                <a href="{{route('index.links')}}">
                    申请友情链接入口+
                </a>
            </div>
        </div>
        <div class="ins-box" style="text-align:center;display: block;">
            备案号：<a href="http://beian.miit.gov.cn/state/outPortal/loginPortal.action;jsessionid=7jdUlgGgnM5RnGuNGlZFP-YSNiJ6hUTGkmpUG_abl90Z6hjoFQvU!659493483">{{$config['site_icp']}}</a>
        </div>
    </div>
</footer>
</body>
</html>

