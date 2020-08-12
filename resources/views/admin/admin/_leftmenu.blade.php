<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="留言管理">&#xe6b8;</i>
                    <cite>留言管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('留言列表','{{route('admin.message')}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>留言列表</cite></a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="方案设计">&#xe6b8;</i>
                    <cite>方案设计</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('方案设计','{{route('admin.design.index')}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>方案设计</cite></a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="友链管理">&#xe6b8;</i>
                    <cite>友链管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('友链列表','{{route('admin.link.index')}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>友联列表</cite></a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="产品">&#xe723;</i>
                    <cite>产品</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('产品分类列表','{{route('admin.classify.index')}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>产品分类列表</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('产品详情列表','{{route('admin.product.index')}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>产品详情列表</cite></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="优势管理">&#xe723;</i>
                    <cite>优势管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('优势管理列表','{{route('admin.advantage.index')}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>优势管理列表</cite></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="资讯管理">&#xe723;</i>
                    <cite>资讯管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('资讯列表','{{route('admin.information.index')}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>资讯列表</cite></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="合作案例">&#xe723;</i>
                    <cite>合作案例</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('行业分类','{{route('admin.casecategory.index')}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>行业分类</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('案例列表','{{route('admin.case.index')}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>案例列表</cite></a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="公司管理">&#xe6ce;</i>
                    <cite>网站标签管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('首页','{{route('admin.sign.edit',['sign'=>'shouye'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>首页</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('产品和服务','{{route('admin.sign.edit',['sign'=>'product'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>产品和服务</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('新闻中心','{{route('admin.sign.edit',['sign'=>'news'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>新闻中心</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('我们的公司','{{route('admin.sign.edit',['sign'=>'about'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>我们的公司</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('更赞的用户体验','{{route('admin.sign.edit',['sign'=>'ue'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>更赞的用户体验</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('联系我们','{{route('admin.sign.edit',['sign'=>'us'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>联系我们</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('网站地图','{{route('admin.sign.edit',['sign'=>'map'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>网站地图</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('方案列表','{{route('admin.sign.edit',['sign'=>'fangan'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>方案列表</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('案例列表','{{route('admin.sign.edit',['sign'=>'case'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>案例列表</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('方案设计','{{route('admin.sign.edit',['sign'=>'design'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>方案设计</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('优势列表','{{route('admin.sign.edit',['sign'=>'advantage'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>优势列表</cite></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="banner图管理">&#xe6ce;</i>
                    <cite>banner图管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('banner图管理','{{route('admin.banner.index')}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>banner图列表</cite></a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="方案设置">&#xe6ce;</i>
                    <cite>方案设置</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('方案分类','{{route('admin.fanganlist.index')}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>方案分类</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('方案列表','{{route('admin.fangan.index')}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>方案列表</cite></a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont left-nav-li" lay-tips="图标字体">&#xe6b4;</i>
                    <cite>网站设置</cite>
                    <i class="iconfont nav_right">&#xe697;</i></a>
                <ul class="sub-menu">
                    <li>
                        <a onclick="xadmin.add_tab('网站基础设置','{{route('admin.config.edit',['config'=>'site'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>网站基础设置</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('公司设置','{{route('admin.config.edit',['config'=>'company'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>公司设置</cite></a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('banner下','{{route('admin.config.edit',['config'=>'banner'])}}')">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>banner下</cite></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
