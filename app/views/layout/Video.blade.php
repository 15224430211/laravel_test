@extends('layout.root.root_with_navs')

@section('detail')
    <div class="row">
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12">
                    <h4>{{$video_info->name}}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <ol class="breadcrumb" style="padding:0;">
                        <li><a href="#" style="color: #6d757a;">主页</a></li>
                        <li><a href="#" style="color: #6d757a;">番剧</a></li>
                        <li><a href="#" style="color: #6d757a;">完结动画</a></li>
                    </ol>
                </div>
                <div class="col-md-8">
                    <p style="color: #6d757a;">
                        {{$video_info->update_time}}
                    </p>

                </div>

            </div>


            <div class="row">
                <div class="col-md-2" style="color: #6d757a;    white-space: nowrap;
    overflow: hidden;">
                    <span class="glyphicon glyphicon-play"></span>&nbsp;{{$video_info->click_count}}</div>
                <div class="col-md-2" style="color: #6d757a;    white-space: nowrap;
    overflow: hidden;">
                    <span class="glyphicon glyphicon-comment"></span>&nbsp;{{$video_info->comment_count}}</div>
                <div class="col-md-2" style="color: #6d757a;    white-space: nowrap;
    overflow: hidden;">
                    <span class="glyphicon glyphicon-stats"></span>&nbsp;排名&nbsp;???
                </div>
                <div class="col-md-3" style="color: #6d757a;    white-space: nowrap;
    overflow: hidden;">
                    <span class="glyphicon glyphicon-heart"></span>&nbsp;硬币&nbsp;{{$video_info->coin_count}}</div>
                <div class="col-md-3" style="color: #6d757a;    white-space: nowrap;
    overflow: hidden;">
                    <span class="glyphicon glyphicon-star"></span>&nbsp;收藏&nbsp;{{$video_info->fav_count}}</div>
            </div>
        </div>
        <div class="col-md-1">

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
        <div class="col-md-7" style="margin-top: 15px;">
            <video controls="autoplay" width="680px" height="440px">
                <source src="/assets/video/{{$video_info->id}}.mp4">
            </video>
        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-5" style="float: left;">
                    <span class="glyphicon glyphicon-cog btn-lg" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-option-vertical btn-lg" aria-hidden="true"></span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-condensed bili-detail-comment-table">
                        <tr>
                            <th class="active">时间</th>
                            <th class="success">弹幕内容</th>
                            <th class="warning">发送时间</th>
                        </tr>

                    </table>
                </div>
            </div>

        </div>
    </div>
    <div class="row ">
        <div class="col-md-12">
            <div class="panel panel-default" style="padding: 0;">

                <div class="row">
                    <div class="col-md-3">
                        <div style="margin-top: 30px;    margin-left: 20px;">
                            <div style="float: left;height:40px; width: 40px; background:  url(/assets/images/profile/icons.png) no-repeat;
                        background-position-x:-1357px;background-position-y: -586px;"></div>
                            <div style="float: left;height:40px; width: 40px; background:  url(/assets/images/profile/icons.png) no-repeat;
                        background-position-x:-1427px;background-position-y: -726px;"></div>
                            <div style="float: left;height:40px; width: 40px; background:  url(/assets/images/profile/icons.png) no-repeat;
                        background-position-x:-1427px;background-position-y: -796px;"></div>
                            <div style="float: left;height:40px; width: 40px; background:  url(/assets/images/profile/icons.png) no-repeat;
                        background-position-x:-1357px;background-position-y: -656px;"></div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="anim-fav">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="margin-top: 20px;">
                                        <span style="line-height: 30px;">收藏</span>
                                        <br>
                                        <span style="line-height: 30px;">1111</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="anim-coin"></div>
                                    </div>
                                    <div class="col-md-6" style="margin-top: 20px;">
                                        <span style="line-height: 30px;">硬币</span>
                                        <br>
                                        <span style="line-height: 30px;">1111</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="anim-watch-later"></div>
                                    </div>
                                    <div class="col-md-6" style="margin-top: 20px;">
                                        <span style="line-height: 30px;">稍后看</span>
                                        <br>
                                        <span style="line-height: 30px;">马克一下~</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <div class="col-md-8 col-md-offset-4">
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
                <div class="col-md-2 author-img">
                    <img src="/assets/images/cover/1.png">
                </div>
                <div class="col-md-8">
                    <textarea name="content" class="form-control" rows="1" maxlength="140" placeholder="请输入要发布的内容" style="margin-top: 30px;"></textarea>
                </div>
                <div class="col-md-2" style="padding: 0;">
                    <button class="btn btn-default btn-info" type="submit" style="margin-top: 30px;">发表评论</button>
                </div>
            </div>
            <hr>
            {{--@foreach($key as $value)--}}
            {{--@endforeach--}}
            <div class="row">
                <div class="col-md-2 user-img">
                    <img src="/assets/images/cover/1.png">
                </div>
                <div class="col-md-10">
                    <p>Username</p>
                    {{--用户名--}}
                    <h6>comment</h6>
                    {{--评论内容--}}
                    <div class="row">
                        <div class="col-md-6">
                            <div style="float: left;padding: 0;">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h6>#id</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <h6>2017-06-24 08:25</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn  btn-xs btn-info comment" href="#">回复</a>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <hr>
        </div>
    </div>
@stop

@section('foot-assets')
    <script>

        Date.prototype.Format = function () {
            var o = {
                "M+": this.getMonth() + 1,                 //月份
                "d+": this.getDate(),                    //日
                "h+": this.getHours(),                   //小时
                "m+": this.getMinutes()              //分
            };
            var fmt = (this.getMonth() + 1) + '-' + this.getDate() + ' ' + this.getHours() + ':' + this.getMinutes();

            return fmt;
        };

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
        });

        $.ajax({
            type: "GET",
            url: "http://comment.bilibili.com/18221667.xml",
            cache: false,
            success: function (html) {
                $("#results").append(html);
                console.log(html);
                var danmu = $(html).find('d');
                for (var i = 0; i < 12; i++
                ) {
                    var a = '<tr>' +
                            '<td>' + parseInt($(danmu[i]).attr('p').split(",")[0]) + '</td>' +
                            '<td>' + $(danmu[i]).text() + '</td > ' +
                            '<td>' + (new Date(parseInt($(danmu[i]).attr('p').split(",")[4]) * 1000)).Format('MM-dd hh:mm') + '</td>' +
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

        $('a.show-comment').click(function () {
            if ($(this).parent().next().is(':hidden')) {
                $(this).parent().nextAll('div.media:hidden,#comment-div:hidden').show();
            } else if ($(this).parent().next().is(':visible')) {
                $(this).parent().nextAll('div.media:visible,#comment-div:visible').hide();
            } else {
                var mid = $(this).attr('mid');
                installComment(mid);
            }
        });
    </script>
    @parent
@stop

