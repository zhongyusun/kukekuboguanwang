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
            <li class="nav-item active">
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


<!-- 产品与方案 -->

<div class="max-box products-box">
    <div class="ins-box">
        <div class="ckcb-title">
            <img src="{{asset('static/phone')}}/images/canpingyufangan.png" alt="" srcset="">
        </div>



        <!-- 产品轮播图片大小为 宽: 191px; 高: 176px;-->
        <div class="swiper-container cp-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <h4>电力电容器</h4>
                    <p>系列齐全，专业定制</p>
                    <img src="{{asset('static/phone')}}/images/drq1.png" alt="" srcset="">
                    <p>—— 电容器 ——</p>
                    <a href="canpinList.html">了解更多 ></a>
                </div>
                <div class="swiper-slide">
                    <h4>滤波电抗器</h4>
                    <p>真材实料，经久耐用</p>
                    <img src="{{asset('static/phone')}}/images/drq2.png" alt="" srcset="">
                    <p>—— 电抗器 ——</p>
                    <a href="canpinList.html">了解更多 ></a>
                </div>

                <div class="swiper-slide">
                    <h4>投切开关</h4>
                    <p>简洁设计，更人性化</p>
                    <img src="{{asset('static/phone')}}/images/drq3.png" alt="" srcset="">
                    <p>—— 晶闸管 ——</p>
                    <a href="canpinList.html">了解更多 ></a>
                </div>

                <div class="swiper-slide">
                    <h4>智能控制器</h4>
                    <p>智能高效，心中有“数”</p>
                    <img src="{{asset('static/phone')}}/images/drq4.png" alt="" srcset="">
                    <p>——  控制器 ——</p>
                    <a href="canpinList.html">了解更多 ></a>
                </div>

                <div class="swiper-slide">
                    <h4>智能模块</h4>
                    <p>智能集成，功能更全</p>
                    <img src="{{asset('static/phone')}}/images/drq5.png" alt="" srcset="">
                    <p>—— 智能电容器 ——</p>
                    <a href="canpinList.html">了解更多 ></a>
                </div>

            </div>


        </div>


    </div>
</div>




<!-- 库克库伯电器 -->


<div class="max-box ckcb-dq">
    <div class="ins-box">
        <div class="ckcb-title">
            <img src="{{asset('static/phone')}}/images/dianqi.png" alt="" srcset="">
        </div>

        <ul class="ckcb-dq-ul">
            <li class="">
                <i class="iconfont icon-icon--"></i>
                <div>
                    <h6 style="margin: 10px 0;">品质</h6>
                    <p>美国电气制造商协会核心成员
                        荣获国际电工委员会认证
                        美国材料实验协会会员单位</p>
                </div>
            </li>
            <li>
                <i class="iconfont icon-weixiubanshou"></i>
                <div>
                    <h6 style="margin: 10px 0;">技术</h6>
                    <p>与美国劳伦斯伯克利国家
                        实验室及美国电气制造商协
                        会合作世界权威技术研发输出地</p>
                </div>
            </li>
            <li>
                <i class="iconfont icon-like"></i>
                <div>
                    <h6 style="margin: 10px 0;">经验</h6>
                    <p>多家用户指定的企业
                        电力设备供应商单位，
                        500 多家甲级设计院共同选择</p>
                </div>
            </li>
            <li>
                <i class="iconfont icon-xiaodengpao"></i>
                <div>
                    <h6 style="margin: 10px 0;">创新</h6>
                    <p>专注电能质量与能效管理的
                        系统研发与技术推广，积极参与
                        行业探讨，敢为人先</p>
                </div>
            </li>
        </ul>

    </div>
</div>




<!-- 公司介绍 -->

<div class="max-box about-box">
    <div class="ins-box">
        <div class="about-us">
            <img src="{{asset('static/phone')}}/images/jieshao.png" alt="" srcset="">
            <p>美国库克库伯电气公司(USA Cooke kolb Electric co.)于1990年成立，总部位于美国科罗拉多州[1990年在科罗拉多州成立.库克库伯依托于美国劳伦斯伯克利实验室的科研成果转化组建了库克库伯的科研团队，致力于电力领域介电材料的研发，无功补偿及电能质量产品的设计与开发，拥有多项技术专利，为客户提供长期的服务和潜在的增长价值。</p>

            <ul>
                <li><a href="">立即咨询</a></li>
                <li><a href="">了解更多 ></a></li>
            </ul>

        </div>
    </div>
</div>




<!-- 合作案例 -->

<div class="max-box case-box">
    <div class="ins-box">
        <div class="ckcb-title">
            <img src="{{asset('static/phone')}}/images/hezuoanli.png" alt="" srcset="">
        </div>

        <div class="case-tab">

            <ul>
                <li  class="case-active"><a href="newsList.html">汽车、机械制造行业</a></li>
                <li><a href="newsList.html">水泥、化工行业</a></li>
                <li><a href="newsList.html">化纤、纺织行业</a></li>
                <li><a href="newsList.html">食品、饮料行业</a></li>
                <li><a href="newsList.html">采矿、冶金行业</a></li>
                <li><a href="newsList.html">纸浆、造纸行业</a></li>
                <li><a href="newsList.html">轮胎、橡胶行业</a></li>
                <li><a href="newsList.html">港口码头</a></li>
                <li><a href="newsList.html">水/污水处理</a></li>
            </ul>


        </div>


    </div>
</div>


<!-- 八大优势 -->

<div class="max-box advantage-box">
    <div class="ins-box">
        <div class="ckcb-title">
            <img src="{{asset('static/phone')}}/images/73.png" alt="" srcset="">
        </div>

        <ul class="advantage-list">
            <li>
                <div>01</div>
                <div>
                    <h5>聚丙烯 金属化膜</h5>
                    <p>银锌铝金属化膜，边缘加厚工艺</p>
                </div>
            </li>
            <li>
                <div>02</div>
                <div>
                    <h5>放电电阻</h5>
                    <p>内置放电电阻,更安全可靠</p>
                </div>
            </li>
            <li>
                <div>03</div>
                <div>
                    <h5>自愈合能力</h5>
                    <p>良好的自愈能力,损耗低</p>
                </div>
            </li>
            <li>
                <div>04</div>
                <div>
                    <h5>双重保护</h5>
                    <p>过电压拉断和过电流保护</p>
                </div>
            </li>
            <li>
                <div>05</div>
                <div>
                    <h5>密封工艺</h5>
                    <p>三重封口密封工艺，无泄漏风险</p>
                </div>
            </li>
            <li>
                <div>06</div>
                <div>
                    <h5>良好的接线端子</h5>
                    <p>接线端子耐高温等级良好，无压痕</p>
                </div>
            </li>
            <li>
                <div>07</div>
                <div>
                    <h5>无油结构</h5>
                    <p>全干式无油结构，无漏油着火风险</p>
                </div>
            </li>
            <li>
                <div>08</div>
                <div>
                    <h5>一体外壳</h5>
                    <p>特制铝壳无压痕一体化铝制外壳，密封好,散热快,耐腐蚀，永不生锈</p>
                </div>
            </li>
            <li>
                <span>
                    ——————————品质因专注而：“坚不可摧
                </span>
            </li>
        </ul>

    </div>
</div>



<!-- 问答中心 -->


<div class="max-box">
    <div class="ins-box">
        <div class="ckcb-title">
            <img src="{{asset('static/phone')}}/images/75.png" alt="" srcset="">
        </div>


        <div class="qa-box">

            <ul>
                <li class="qa-active"><a href="javascrip:void(0)">公司咨询</a></li>
                <li><a href="javascrip:void(0)">行业动态</a></li>
                <li><a href="javascrip:void(0)">常见问答</a></li>
            </ul>


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
                        </ul>
                    </div>

                </div>
                <div>2</div>
                <div>3</div>
            </div>
        </div>
    </div>
</div>



<!-- 联系方式 -->

<div class="max-box us-box">
    <div class="ins-box">
        <ul>
            <li>
                <h2><i class="iconfont icon-dianhua"></i>服务热线</h2>
                <p>电话：400-607-8886</p>
                <p>18702183613</p>
                <p>传真：021-33321568</p>
                <a href="tel:18702183613">在线咨询</a>
            </li>
            <li>
                <h2><i class="iconfont icon-weixin"></i>微信公众号</h2>
                <span>
                    <img src="{{asset('static/phone')}}/images/ewm1.jpg" alt="">
                    <p>公众平台二维码</p>
                </span>
                <span>
                    <img src="{{asset('static/phone')}}/images/ewm2.jpg" alt="">
                    <p>微信二维码</p>
                </span>
            </li>
        </ul>
    </div>
</div>
@stop
