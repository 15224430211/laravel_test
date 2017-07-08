@extends('layout.root.root_with_navs')

@section('detail')
    <div class="row">
        <div class="col-md-7">
            <?php

            echo $video_title_html;

            ?>

            <div class="row">
                <div class="col-md-4">
                    <ol class="breadcrumb" style="padding:0;">
                        <li><a href="#" style="color: #6d757a;">主页</a></li>
                        <li><a href="#" style="color: #6d757a;">番剧</a></li>
                        <li><a href="#" style="color: #6d757a;">完结动画</a></li>
                    </ol>
                </div>
                <div class="col-md-8">
                    <?php
                    echo $video_update_time_html;
                    ?>
                </div>

            </div>
            <?php
            echo $video_fav_html;
            ?>
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
            <?php
            echo $video_id_html;
            ?>
        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-3" style="float:left;color: #6d757a;font-size: 12px;">
                    <p>???人正在观看</p>
                </div>
                <div class="col-md-4" style="float: left;color: #6d757a;">???条弹幕</div>
                <div class="col-md-5" style="float: left;">
                    <span class="glyphicon glyphicon-cog btn-lg" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-option-vertical btn-lg" aria-hidden="true"></span>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <table class="table table-condensed bili-detail-comment-table">
                        <tr>
                            <th class="active">时间
                            </th>
                            <th class="success" style="width: 50%;word-break: break-all; overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">弹幕内容</th>
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
                        <div style="margin-top: 15px;">
                            <div style="float: left;height:40px; width: 40px; background:  url('assets/images/profile/icons.png') no-repeat;
                        background-position-x:-1357px;background-position-y: -586px;"></div>
                            <div style="float: left;height:40px; width: 40px; background:  url('assets/images/profile/icons.png') no-repeat;
                        background-position-x:-1427px;background-position-y: -726px;"></div>
                            <div style="float: left;height:40px; width: 40px; background:  url('assets/images/profile/icons.png') no-repeat;
                        background-position-x:-1427px;background-position-y: -796px;"></div>
                            <div style="float: left;height:40px; width: 40px; background:  url('assets/images/profile/icons.png') no-repeat;
                        background-position-x:-1357px;background-position-y: -656px;"></div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="anim-fav"
                                             style="height:60px; width: 80px; background:
                                         url('assets/images/profile/anim-fav.png') no-repeat;
                        background-position-x:0px;background-position-y: 0px;">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <span style="line-height: 30px;">收藏</span>
                                        <br>
                                        <span style="line-height: 30px;">1111</span>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="anim-coin"
                                             style="height:60px; width: 80px; background:  url('assets/images/profile/anim-coin.png') no-repeat;
                        background-position-x:0px;background-position-y: 0px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <span style="line-height: 30px;">硬币</span>
                                        <br>
                                        <span style="line-height: 30px;">1111</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="anim-watch-later"
                                             style="margin-top: 20px;height:60px; width: 80px; background:  url('assets/images/profile/anim-watch-later.png') no-repeat;
                        background-position-x:0px;background-position-y: 0px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <span style="line-height: 30px;">稍后看</span>
                                        <br>
                                        <span style="line-height: 30px;">马克一下~</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3"></div>
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
                    <textarea name="content" style="margin-bottom: 5px;" class="form-control" rows="3"
                              maxlength="140" placeholder="111"></textarea>

                    <div class="row">
                        <div class="col-md-2">
                            <textarea class="form-control" rows="1">表情</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <textarea class="form-control" rows="3">发表评论</textarea>
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <img src="assets/images/cover/1.png" style="height: 74px;width: 80px;border-radius: 50%;">
                </div>
                <div class="col-md-10">
                    <p>透明奶昔君</p>
                    {{--用户名--}}
                    <h6>一身信仰为你荣光加冕，你于荣耀巅峰永不落幕！</h6>
                    {{--评论内容--}}


                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div style="float: left;padding: 0;">
                            <h6>#11</h6>
                            <h6>来自安卓客户端</h6>
                            <h6>2017-06-24 08:25</h6>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <button class="btn btn-default btn-sm" type="submit">点赞</button>
                        <button class="btn btn-default btn-sm" type="submit">回复</button>
                        <button class="btn btn-default btn-sm" type="submit">举报</button>
                    </div>
                </div>

                <hr>
            </div>
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

                for (var i = 0; i < 12; i++
                ) {

//                    (new Date(parseInt($(danmu[i]).attr('p').split(",")[4]) * 1000)).Format("MM-DD HH:mm")
                    var a = '<tr>' +
                            '<td>' + parseInt($(danmu[i]).attr('p').split(",")[0]) + '</td>' +
                            '<td>' + $(danmu[i]).text() + '</td > ' +
                            '<td>' + (new Date(parseInt($(danmu[i]).attr('p').split(",")[4]) * 1000)).Format('MM-dd hh:mm') + '</td>' +
                            '</tr>';


//                        if(/(y+)/.test(fmt))
//                            fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));
//                        for(var k in o)
//                            if(new RegExp("("+ k +")").test(fmt))
//                                fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));
//                        return fmt;
//                    }

                    $('.bili-detail-comment-table').append(a);


                    console.log(new Date(parseInt($(danmu[i]).attr('p').split(",")[4]) * 1000));
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

