<div class="container">
    <div class="logo">
        <a href="{{route('admin.kukekubo')}}">库克库伯后台管理</a></div>
    <div class="left_open">
        <a><i title="展开左侧栏" class="iconfont">&#xe699;</i></a>
    </div>

    </ul>
    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">管理员</a>
            <dl class="layui-nav-child">
                <dd>
                    <a href="{{route('admin.logout')}}">退出</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item to-index">
            <a href="/">前台首页</a></li>
    </ul>
</div>
