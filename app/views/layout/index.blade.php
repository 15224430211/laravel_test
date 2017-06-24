@extends('layout.root.root_with_navs')



@section('bili-ranking-panel')
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
@stop





@section('detail')
    <div class="row">
        <div class="col-md-5">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="assets/images/preview/gintama.png" class="carousel-inner img-responsive img-rounded">

                        <div class="carousel-caption"></div>
                    </div>
                    <div class="item">
                        <img src="assets/images/preview/naruto.png" class="carousel-inner img-responsive img-rounded">

                        <div class="carousel-caption"></div>
                    </div>
                    <div class="item">
                        <img src="assets/images/preview/Yu-Gi-Oh!.png" class="carousel-inner img-responsive img-rounded">

                        <div class="carousel-caption"></div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-7">
            <div class="row">
                <?php
                echo $title_html;
                ?>
            </div>
        </div>
    </div>
    <?php
    echo $bili_video_ranking_html;
    ?>
@stop




@section('foot-assets')
    <script>
        var video_list;


        $(".bili-item-img").mouseover(function () {

            $(this).siblings(".bili-item-mask").css("display", "block");
        });
        $(".bili-item-mask").mouseleave(function () {
            $(this).css("display", "none");
        });


        $(".bili-video-mask").mousemove(function (e) {
//     enter_position_left
//        元素_position
            var ratio = Math.round((e.pageX - $(this).offset().left ) / $(this).innerWidth() * 10000) / 100;
            var background_index = parseInt(ratio / 10);
            var video_id = $(this).parents().data("video-id");
//        alert(video_id);
            $(this).find(".progress-bar").width(ratio + "%");
            $(this).siblings(".bili-video-background").find("img").prop("src", "assets/images/videoshot/" + video_id + "/" + background_index + ".png");

//        alert(background_index);
        });

        $(".bili-video-img").mouseover(function () {
            $(this).siblings(".bili-video-mask,.bili-video-background").css("display", "block");
        });
        $(".bili-video-mask").mouseleave(function () {
            $(this).css("display", "none");
            $(this).siblings(".bili-video-background").css("display", "none");
        });


        $(".bili-ranking-media").mouseover(function () {

            var video_id = $(this).parents().data("video-id");
            bili_ranking_panel(video_id);

            var left = $(this).parents().offset().left;
            var top = $(this).offset().top;
            $(".bili-ranking-panel").css("display", "block");
            $(".bili-ranking-panel").offset(
                    {
                        top: top - $(".bili-ranking-panel").height(), left: left
                    }
            );

        });

        $(".bili-ranking-panel").mouseleave(function () {
            $(this).css("display", "none");
            $(this).siblings(".bili-ranking-media").css("display", "none");
        });


        $.post("bili-video", function (data) {
            video_list = $.parseJSON(data);
        });


        function bili_ranking_panel(video_id) {
            $(".bili-ranking-panel-name").text(video_list[video_id]['name']);
            $(".bili-ranking-panel-img").prop("src", "assets/images/cover/" + video_list[video_id]['image_name'] + ".png");
            $(".bili-ranking-panel-detail").text(video_list[video_id]['detail']);
            $(".bili-ranking-panel-click-count").text(video_list[video_id]['click_count']);
            $(".bili-ranking-panel-comment-count").text(video_list[video_id]['comment_count']);
            $(".bili-ranking-panel-fav-count").text(video_list[video_id]['fav_count']);
            $(".bili-ranking-panel-coin-count").text(video_list[video_id]['coin_count']);
        }
    </script>
@stop