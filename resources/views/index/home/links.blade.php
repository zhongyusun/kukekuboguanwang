@extends('index.layouts.master')
@section('title',$sign['title'])
@section('keywords',$sign['keywords'])
@section('description',$sign['description'])
@section('content')
    <link rel="stylesheet" href="{{asset('static/index')}}/css/contactUs.css">
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
                    <li ><a href="/">首页</a></li>
                    <li><a href="{{route('index.product_list')}}">产品中心</a></li>
                    <li><a href="{{route('index.news')}}">新闻中心</a></li>
                    <li><a href="{{route('index.about_us')}}">我们的公司</a></li>
                    <li><a href="{{route('index.ue')}}">更赞的用户体验</a></li>
                    <li class="active-nav"><a href="{{route('index.contact_us')}}">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>

<div class="max-box banner-box">
    <img src="{{asset('static/index')}}/images/contentUsBanner.jpg" alt="">
</div>


<div class="crumbs-box max-box">
    <div class="ins-box">
        当前位置：<a href="#">首页</a><span> > </span><a href="#">申请友情链接</a>
</div>
</div>

<div class="contactUs-box max-box" style="margin-bottom: 150px;">
    <div class="contactUs-top">
        <div>
            <form action="{{route('index.link_post')}}" method="post">
                {{ csrf_field() }}
                <div class="input-box">
                    <i class="iconfont icon-diqiu"></i>
                    <input type="text" placeholder="网站名称" name="site" id="">
                </div>
                <div class="input-box">
                    <i class="iconfont icon-gongsi"></i>
                    <input type="text" placeholder="网址(请遵守http协议)" name="link" id="">
                </div>

                <div class="input-box">
                    <i class="iconfont icon-xingming"></i>
                    <input type="text" placeholder="联系人姓名" name="name" id="">
                </div>
                <div class="input-box">
                    <i class="iconfont icon-dianhua"></i>
                    <input type="text" placeholder="联系电话" name="phone" id="">
                </div>
                <div class="input-box">
                    <i class="iconfont icon-youjian1"></i>
                    <input type="text" placeholder="站长Email" name="email" id="">
                </div>
                <div class="input-box">
                    <i class="iconfont icon-xiaoxi"></i>
                    <input type="text" placeholder="联系QQ" name="qq" id="">
                </div>

                <div  class="input-box">
                    <input type="submit" value="提交">
                </div>
            </form>
        </div>
        <div>
            <div class='desc'>
                <img src="{{asset('static/index')}}/images/contact-title1.png" alt="">
                <ul>
                    <li>电话：18702183613</li>
                    <li>E-mail：ckkb@cookekolb.com</li>
                    <li>传真：021-33321568</li>
                    <li>中国公司总部：上海市长宁区宣路300号中区</li>
                    <li>美国公司总部：1644 Sherman Street Denver Co 802030 United States</li>
                </ul>
                <a href="javascrip:void(0)">在线咨询</a>
            </div>
        </div>
    </div>

</div>




<!-- 回到顶部 -->

<div class="gotop">
    <img src="{{asset('static/index')}}/images/top.png" alt="" srcset="">
</div>

<script>
    // 回到顶部

    var gotop = $('.gotop');
    $(window).scroll(()=>{
        // console.log($(window).scrollTop())

        if ($(window).scrollTop()>800) {
            gotop.fadeIn()
        } else {
            gotop.fadeOut()

        }

    });
    gotop.click(()=>{
        $('html').animate({'scrollTop':0},1000)
    })
</script>



@stop

