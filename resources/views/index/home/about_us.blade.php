@extends('index.layouts.master')
@section('title',$sign['title'])
@section('keywords',$sign['keywords'])
@section('description',$sign['description'])
@section('content')
    <link rel="stylesheet" href="{{asset('static/index')}}/css/aboutUs.css">

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
                    <li ><a href="{{route('index.news')}}">新闻中心</a></li>
                    <li class="active-nav"><a href="{{route('index.about_us')}}">我们的公司</a></li>
                    <li><a href="{{route('index.ue')}}">更赞的用户体验</a></li>
                    <li><a href="{{route('index.contact_us')}}">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="max-box banner-box">
        <img src="{{asset('static/index')}}/images/aboutUs.jpg" alt="">
    </div>


    <div class="crumbs-box max-box">
        <div class="ins-box">
            当前位置：<a href="/">首页</a><span> > </span><a href="{{route('index.about_us')}}">我们的公司</a>
        </div>
    </div>
    <div class="max-box introduce-box">
        <div class="ins-box">
            <div class="ckkb-title">
                <img src="{{asset('static/index')}}/images/about-t1.png" alt="库克库伯在中国" title="库克库伯在中国" srcset="">
            </div>

            <p class="text-content" style="margin-bottom: 200px;">
                随着在中国业务深入开展，我们先后参与了南水北调、西电东送、青藏铁路、北京奥运会场馆、上海世博会场馆等众多国家级项目的建设。
                经过几年的快速发展，我们在中国的业务得到全面提升。2014年库克库伯电气(上海)有限公司成立，根据中国电网情况，本地创新、本地研发、把库克库伯在中国的业务推向一个新高度。我们根据中国无功补偿行业现状，结合多年行业案例及运行经验，提出应针对不同使用环境设计不同的电容器的概念，研发出不同系列电容器并得到广泛运用。从一定程度上避免了因产品质量、选型不当、系统谐波等问题导致的电容器出现的寿命短、鼓肚、漏油、着火、爆炸等问题。
            </p>

            <div class="bgbox">
                <img src="{{asset('static/index')}}/images/aboutbg1.jpg" alt="" srcset="">
            </div>
        </div>
    </div>



    <div class="max-box mission-box">
        <div class="ins-box">
            <div class="ckkb-title" style="margin-top: 360px;">
                <img src="{{asset('static/index')}}/images/about-t2.png" alt="我们的使命" title="我们的使命" srcset="">
            </div>
            <p class="text-content">
                提高运营效率，为我们的客户提供安全可靠高效可持续的解决方案，帮助我们的客户改善收益、提升产品竞争力和降低总拥有成本,实现商业成功。
                让我们的员工成为主人，为我们的员工创造机会；与我们的合作伙伴互惠互利，共谋发展；肩负社会责任，推动社会进步。我们不断寻找多方共享共赢的方案，始终以道德和责任为核心。持续提高我们所在国家或者地区的可持续发展水平，应对全球气候变暖给人类经济和社会带来不利影响，减少二氧化碳的排放和节能环保，改善当地环境，促进当地社会发展是我们孜孜以求的使命。

            </p>
        </div>
    </div>



    <div class="max-box contact-box">
        <div class="ins-box">
            <div>
                <p>电话：18702183613</p>
                <p>E-mail：ckkb@cookekolb.com</p>
                <p>传真：021-33321568</p>
                <p>中国公司总部：上海市长宁区宣路300号中区</p>
                <p>美国公司总部：1644 Sherman Street Denver Co 802030 United States</p>
            </div>
        </div>
    </div>


    <div class="max-box timeline-box">
        <div class="ins-box">
            <div class="ckkb-title" style="margin-top: 100px;">
                <img src="{{asset('static/index')}}/images/about-t3.png" alt="" srcset="">
            </div>

            <div class="timeline">
                <div>
                    <span class="iconfont icon-shengri"></span>
                    <div>
                        <p>1939年库克·库伯（Cooke kolb）
                            <br>
                            出生于美国俄亥俄州克利夫兰市</p>
                    </div>
                </div>
                <div>

                    <div>
                        <p>
                            1970年库克·库伯（Cooke kolb）<br>
                            获得美国加州理工学院物理和数学博士学位
                        </p>
                    </div>
                    <span class="iconfont icon-jiangpaipaiming"></span>

                </div>

                <div>
                    <span class="iconfont icon-xueshimao"></span>

                    <div>
                        <p>1975年起担任劳伦斯伯克利国家实验室的<br>
                            资深物理学家</p>
                    </div>
                </div>


                <div>
                    <div>
                        <p>
                            1982年研制出干式环保型电力电容器
                        </p>
                    </div>
                    <span class="iconfont icon-2"></span>
                </div>


                <div>
                    <span class="iconfont icon-gongsi"></span>

                    <div>
                        <p>
                            1990年美国库克库伯电气公司成立，依托劳伦斯伯克利实验室<br>
                            成立电气制造工厂，成为美国电容器领域的专业化公司
                        </p>
                    </div>
                </div>


                <div>
                    <div>
                        <p>
                            1995年美国库克库伯电气公司<br>
                            随着自身结构的调整和发展战略的推进，先后收购了 <br>
                            美国BMK电气公司，美国SYCO材料公司等多家企业 </p>
                    </div>
                    <span class="iconfont icon-qian2"></span>

                </div>



                <div>
                    <span class="iconfont icon-weibiaoti1"></span>

                    <div>
                        <p>
                            1999年库克库伯电气公司开始朝着产品多样化发展，实现<br>
                            全部关键元器件自主生产
                        </p>
                    </div>
                </div>


                <div>

                    <div>
                        <p>
                            2003年库克库伯产品在全球90多个国家得到广泛运用 </p>
                    </div>
                    <span class="iconfont icon-diqiu"></span>
                </div>

                <div>
                    <span class="iconfont icon-zhongguoditu"></span>

                    <div>
                        <p>
                            2007年库克库伯开始为中国用户服务，进入中国<br>
                            电力电容器市场
                        </p>
                    </div>
                </div>

                <div>


                    <div>
                        <p>
                            2012年库克库伯凭借其先进的技术和完善的解决方案 <br>
                            在中国已经参与了南水北调、西电东送、青藏铁路 <br>
                            北京奥运会和上海世博会场馆等众多国家级项目的建设 </p>
                    </div>
                    <span class="iconfont icon-gongchengjianshe"></span>

                </div>


                <div>
                    <span class="iconfont icon-zuanshi"></span>

                    <div>
                        <p>
                            2014年在中国上海设立库克库伯电气(上海)有限公司，<br>
                            专注于低压电力电容器安全与稳定。
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop

