@extends('layout.root.root_with_navs')

@section('detail')

    <div class="row">
        <div class="col-md-8">
            <?php

            echo $video_title_html;

            ?>

            <div class="row">
                <div class="col-md-4">
                    <ol class="breadcrumb" style="padding:0;">
                        <li><a href="#">主页</a></li>
                        <li><a href="#">番剧</a></li>
                        <li class="active">完结动画</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <?php
                    echo $video_update_time_html;
                    ?>
                </div>
                <div class="col-md-4">
                    <P>稿件投诉</p>
                </div>
            </div>
            <?php
            echo $video_fav_html;
            ?>
        </div>
        <div class="col-md-1">
            <?php
            echo $video_author_html;
            ?>
        </div>
        <div class="col-md-3">

            <p>高桥凌月</p>

            <p>第一次发视频，敬请原谅(展开)</p>

            <p style="color: #99a2aa;">投稿：1 &nbsp;&nbsp;粉丝：3</p>

            <button type="button" class="btn btn-primary  btn-default btn-xs">&nbsp;+关注&nbsp;</button>

            <button type="button" class="btn btn-primary btn-default btn-xs">&nbsp;+1&nbsp;</button>


        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-8">
            <video controls="autoplay" width="680px" height="440px">
                <source src="assets/video/assian.mp4" type="video/mp4">
            </video>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-7">观看人数+弹幕数
                </div>
                <div class="col-md-5">
                    <span class="glyphicon glyphicon-cog btn-lg" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-option-vertical btn-lg" aria-hidden="true"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>推荐视频</p>
                </div>
                <div class="col-md-4">
                    <p>弹幕列表</p>
                </div>
                <div class="col-md-4">
                    <p>屏蔽设定</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">时间</div>
                <div class="col-md-6">弹幕内容</div>
                <div class="col-md-3">发送时间</div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table .table-condensed bili-detail-comment-table">
                        <tr>
                            <td class="active">时间</td>
                            <td class="success">弹幕内容</td>
                            <td class="warning">发送时间</td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>
    </div>

    <div class="row ">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <button class="btn btn-default" style="float: left; margin: 5px;">分享</button>
                            <div
                                    style="float: left;height:40px; width: 40px; background:  url('assets/images/profile/icons.png') no-repeat;
                        background-position-x:-1357px;background-position-y: -586px;">

                            </div>
                            <div
                                    style="float: left;height:40px; width: 40px; background:  url('assets/images/profile/icons.png') no-repeat;
                        background-position-x:-1427px;background-position-y: -726px;">

                            </div>
                            <div
                                    style="float: left;height:40px; width: 40px; background:  url('assets/images/profile/icons.png') no-repeat;
                        background-position-x:-1427px;background-position-y: -796px;">

                            </div>
                            <div>
                    <span>
                        <i style="float: left;height:40px; width: 40px; background:  url('assets/images/profile/icons.png') no-repeat;
                        background-position-x:-1357px;background-position-y: -656px;"></i>
                    </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="anim-fav"
                                         style=" float: left;height:80px; width: 80px; background:  url('assets/images/profile/anim-fav.png') no-repeat;
                        background-position-x:0px;background-position-y: 0px;">

                                    </div>
                                    <div>
                                        <p>收藏</p>

                                        <p>1111</p>
                                    </div>


                                </div>
                                <div class="col-md-4">
                                    <div class="anim-coin"
                                         style="float: left;height:80px; width: 80px; background:  url('assets/images/profile/anim-coin.png') no-repeat;
                        background-position-x:0px;background-position-y: 0px;">

                                    </div>
                                    <div>
                                        <p>收藏</p>

                                        <p>1111</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="anim-watch-later"
                                         style="float: left;height:80px; width: 80px; background:  url('assets/images/profile/anim-watch-later.png') no-repeat;
                        background-position-x:0px;background-position-y: 0px;">
                                    </div>
                                    <div>
                                        <p>收藏</p>

                                        <p>1111</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">1</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12 bili-video-detail-tag">
                    <span class="label label-default">12345</span>
                    <span class="label label-default">234567</span>
                    <span class="label label-default">1234567</span>
                    <span class="label label-default">1234678</span>
                    <span class="label label-default">123456789</span>
                    <span class="label label-default">1234567898</span>
                    <span class="label label-default">123456789987</span>
                    <span class="label label-default">12346789876</span>
                    <span class="label label-default">12345612312313</span>
                    <span class="label label-default">123132132131321313</span>
                    <span class="label label-default">132123131321313132132</span>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <p>《蕉忍♂疾风传》改编自日暮里漫画家岸本♂齐湿的同名漫画，于2069年6月9日在东茎电视台放送首勃♂。故事以蕉之国金刚村为起点，讲述主人翁那撸♂多（中译：旋涡蕉人）一步一步困难重重成为最强摔跤忍者“蕉影”的故事。该动画播出之际，世界掀起了一股摔跤浪潮，无数无数的青少年，甚至足不出户的阿宅们，都勇敢地迈向健身房提高自身身体素质并交流哲学思想，甚至有部分政府把“忍♂术”设为青少年必修课程。该动画被联合国誉为“动画界的圣经”，某动画公司深受救赎，借鉴了此作品。
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <?php
                echo $video_recommend_html;
                ?>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">全部评论</button>
                                <button type="button" class="btn btn-default">按热度排序</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <nav aria-label="Page navigation">

                                <ul class="pagination">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <img src="assets/images/cover/1.png" style="height: 74px;width: 80px;border-radius: 50%;">
                </div>
                <div class="col-md-8" style="padding: 0;">
                    <textarea class="form-control comment-panel" rows="3"></textarea>

                    <div class="row">
                        <div class="col-md-2">
                            <textarea class="form-control" rows="1">表情</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <textarea class="form-control" rows="3" style="background-color: #555555;">发表评论</textarea>
                </div>
            </div>
        </div>
    </div>


@stop


@section('foot-assets')
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        });


        var animation_interval;
        function start_animation_interval(fuck) {

            if (fuck.is(":nth-last-child(3)")) {
                var position_x_max = -1120
            }
            else if (fuck.is(":nth-last-child(2)")) {
                var position_x_max = -640
            }
            else if (fuck.is(":nth-last-child(1)")) {
                var position_x_max = -960
            }


            animation_interval = setInterval(function () {
                var position_x = fuck.css("background-position-x").replace("px", "") - 80;
//        alert(position_x);
                if (position_x <= position_x_max) {
                    position_x = 0;
                }
                fuck.css("background-position-x", position_x + "px")

            }, 10)
        }


        $(".anim-fav,.anim-coin,.anim-watch-later").mouseenter(function () {
            start_animation_interval($(this));
//        $(".icons").css("background-position-x", "-960px");
        });

        $(".anim-fav,.anim-coin,.anim-watch-later").mouseleave(function () {
            clearInterval(animation_interval);
        })

        $.ajax({
            type: "GET",
            url: "http://comment.bilibili.com/18221667.xml",
            cache: false,
            success: function (html) {
                $("#results").append(html);
                console.log(html);
                var danmu = $(html).find('d');
//1 5

                for (var i = 0; i < 50; i++
                ) {


                    var a = '<tr>' +
                            '<td>' + parseInt($(danmu[i]).attr('p').split(",")[0]) + '</td>' +
                            '<td>' + $(danmu[i]).text() + '</td > ' +
                            '<td>' + new Date(parseInt($(danmu[i]).attr('p').split(",")[4])*1000) + '</td>' +
                            '</tr>';

                    $('.bili-detail-comment-table').append(a);
                }


                var xml = '<rss version="2.0"><channel><title>RSS Title</title></channel></rss>',
                        xmlDoc = $.parseXML(html),
                        $xml = $(xmlDoc),
                        $title = $xml.find('d');
                console.log(danmu);// append "RSS Title" to #someElement
                $('#someElement').append($title.text());	    // change the title to "XML Title"
                $title.text('XML Title');    // append "XML Title" to #anotherElement
                $('#anotherElement').append($title.text());
            }


        });


    </script>
@stop

