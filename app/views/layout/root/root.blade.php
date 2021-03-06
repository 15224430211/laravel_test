<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My bilibili</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="//static.hdslb.com/images/favicon.ico">
    <script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/style.css"/>
    <style></style>
</head>
<body>
<nav class="navbar navbar-default" style="margin-bottom:0px;">
    <div class="container">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#"><span class="glyphicon glyphicon-star"></span>&nbsp;主站</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;画友</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-equalizer"></span>&nbsp;游戏中心</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-expand"></span>&nbsp;直播</a></li>
                <li><a href="#">周边</a></li>
                <li><a href="#">移动端</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Session::has('user'))
                    <li><a href="#">{{Session::get('user.0')->username}}</a></li>
                    <li><a href="/logout">退出</a></li>
                @else
                    <li><a href="/login">登录</a></li>
                    <li><a href="/register">注册</a></li>
                @endif
                <li><a href="#">投稿</a></li>
            </ul>
        </div>
    </div>
</nav>


@yield('bili-ranking-panel')


@yield('top-background')


<div class="container">
    @yield('content')
</div>

<div class="bili-footer">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div>bili</div>
                <div class="row">
                    <div class="col-md-4">
                        <div><a href="#"><p>关于我们</p></a></div>
                        <div><a href="#"><p>友情链接</p></a></div>
                    </div>
                    <div class="col-md-4">
                        <div><a href="#"><p>哔哩周边</p></a></div>
                        <div><a href="#"><p>联系我们</p></a></div>
                    </div>
                    <div class="col-md-4">
                        <div><a href="#"><p>加入我们</p></a></div>
                        <div><a href="#"><p>官方认证</p></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>传送门</div>
                <div class="row">
                    <div class="col-md-4">
                        <div><a href="#"><p>帮助中心</p></a></div>
                        <div><a href="#"><p>侵权申诉</p></a></div>
                        <div><a href="#"><p>用户反馈</p></a></div>
                    </div>
                    <div class="col-md-4">
                        <div><a href="#"><p>高级弹幕</p></a></div>
                        <div><a href="#"><p>分院帽</p></a></div>
                        <div><a href="#"><p>壁纸站</p></a></div>
                    </div>
                    <div class="col-md-4">
                        <div><a href="#"><p>活动专题</p></a></div>
                        <div><a href="#"><p>活动中心</p></a></div>
                        <div><a href="#"><p>名人堂</p></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4">
                    <img src="/assets/images/icons/download.png">
                    <a href="#"><p>手机端下载</p></a>
                </div>
                <div class="col-md-4">
                    <img src="/assets/images/icons/weibo.png">
                    <a href="#"><p>新浪微博</p></a>
                </div>
                <div class="col-md-4">
                    <img src="/assets/images/icons/wechat.png">
                    <a href="#"><p>官方微信</p></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Copyright © 2017 By Lemon</p>
            </div>
        </div>
    </div>

</div>


<script src="/assets/jquery.min.js"></script>
<script src="/assets/bootstrap.min.js"></script>


@yield('foot-assets')
</body>
</html>