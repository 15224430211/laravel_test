@extends('layout.index')
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My bilibili</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="//static.hdslb.com/images/favicon.ico">
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/style.css"/>
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
                <li><a href="#">登录</a></li>
                <li><a href="#">注册</a></li>
                <li><a href="#">投稿</a></li>
            </ul>
        </div>
    </div>
    <div>

    </div>
</nav>

<div class="container bili-ranking-panel">
    <div class="row">
        <div class="col-md-4">
            <div class="alert alert-warning" role="alert">
                <div class="row">
                    <div class="col-md-12 bili-ranking-panel-name"><b></b></div>
                </div>
                <hr style="margin-top: 10px;">
                <div class="row">
                    <div class="col-md-5">
                        <img class="bili-ranking-panel-img" src="" alt="fuck">
                    </div>
                    <div class="col-md-7">
                        <p class="bili-ranking-panel-detail"></p>
                    </div>
                </div>
                <hr style="margin-bottom: 10px;">
                <div class="row">
                    <div class="col-md-3">
                        <span class="glyphicon glyphicon-expand"></span>&nbsp;<b class="bili-ranking-panel-click-count"></b>
                    </div>
                    <div class="col-md-3">
                        <span class="glyphicon glyphicon-comment"></span>&nbsp;<b class="bili-ranking-panel-comment-count"></b>
                    </div>
                    <div class="col-md-3">
                        <span class="glyphicon glyphicon-heart-empty"></span>&nbsp;<b class="bili-ranking-panel-fav-count"></b>
                    </div>
                    <div class="col-md-3">
                        <span class="glyphicon glyphicon-usd"></span>&nbsp;<b class="bili-ranking-panel-coin-count"></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="top-background">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-8">
                <div class="row">
                    <div class="col-md-4">
                        <a class="btn btn-default btn-block" href="#" role="button">
                            <span class="glyphicon glyphicon glyphicon-stats"></span>&nbsp;排行榜
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
<span class="input-group-btn"><button class="btn btn-default" type="button">Go!
    </button></span>
                        </div><!-- /input-group -->
                    </div>
                </div>
            </div>
        </div><!-- /.col-lg-6 -->
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <ul class="nav nav-pills">
                <li role="presentation">
                    <a href="#" style="text-align: center;"> <span class="glyphicon glyphicon-home"></span>

                        <div>首页</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-1">
            <a href="#">
                <h4><span class="glyphicon glyphicon-road"></span>&nbsp;广场
                </h4>

            </a>
        </div>
        <div class="col-md-1">
            <a href="#">
                <h4><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;直播
                </h4>

            </a>
        </div>
        <div class="col-md-1">
            <a href="#">
                <h4><span class="glyphicon glyphicon-minus-sign"></span>黑屋</h4>
            </a>
        </div>
        <div class="col-md-1">
            <img src="//i2.hdslb.com/bfs/active/74952c377ad1a128b8f1c6da171366e826207848.gif" alt="催泪向">
        </div>
    </div>
    <div class="info">
        @parent
        @yield("1")
        {{--@stop--}}
    </div>
    <div>
        <video controls="autoplay" width="500px" height="500px">
            <source src="video/gintama.mkv" type="video/mkv">
        </video>
    </div>

    <div class="bili-footer" style="background-color: #CCCCFF;">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div style="margin-bottom: 20px;">bili</div>
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
                <div class="col-md-4" style="border-left: solid 1px #e5e9ef;border-right:solid 1px #e5e9ef;">
                    <div style="margin-bottom: 20px;">传送门</div>

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
                        <img src="assets/images/icons/download.png">
                        <a href="#"><p>手机端下载</p></a>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/icons/weibo.png">
                        <a href="#"><p>新浪微博</p></a>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/icons/wechat.png">
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
@yield('footer')

    <script src="assets/jquery.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
</body>
</html>