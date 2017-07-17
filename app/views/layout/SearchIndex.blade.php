@extends('layout.root.root')



@section('content')
    <hr>
    <div class="row">
        <div class="col-md-2 col-md-offset-2">
            <a href="#">
                <img src="assets/images/icons/search.png" style="width: 100%;">
            </a>
        </div>
        <div class="col-lg-5">
            <div class="input-group input-group-lg">
                <input id="bili-search-input" type="text" class="form-control" placeholder="Search for..." value="{{$_GET['keyword'] or ''}}">
      <span class="input-group-btn">
          <button id="bili-search-submit" class="btn btn-info" type="button">
              <span class="glyphicon glyphicon-search"></span>&nbsp;Search
          </button>
      </span>
            </div>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="bili-search-filter">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills bili-search-filter-order">
                            <li role="presentation"><a data-filter="fuck" href="javascript:;">
                                    <small>综合排序</small>
                                </a></li>
                            <li role="presentation"><a data-filter="click_count" href="javascript:;">
                                    <small>最多点击</small>
                                </a></li>
                            <li role="presentation"><a data-filter="update_time" href="javascript:;">
                                    <small>最新发布</small>
                                </a></li>
                            <li role="presentation"><a data-filter="comment_count" href="javascript:;">
                                    <small>最多弹幕</small>
                                </a></li>
                            <li role="presentation"><a data-filter="fav_count" href="javascript:;">
                                    <small>最多收藏</small>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills bili-search-filter-duration">
                            <li role="presentation"><a data-filter="0" href="javascript:;">
                                    <small>全部时长</small>
                                </a></li>
                            <li role="presentation"><a data-filter="1" href="javascript:;">
                                    <small>10分钟以下</small>
                                </a></li>
                            <li role="presentation"><a data-filter="2" href="javascript:;">
                                    <small>10-30分钟</small>
                                </a></li>
                            <li role="presentation"><a data-filter="3" href="javascript:;">
                                    <small>30-60分钟</small>
                                </a></li>
                            <li role="presentation"><a data-filter="4" href="javascript:;">
                                    <small>60分钟以上</small>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills bili-search-filter-categories">
                            <?php
                            echo $categories_html;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bili-search-detail">
        <?php
        echo $search_html;
        ?>
    </div>
    <hr>
    <div class="col-md-12 text-center">
        <nav aria-label="Page navigation">
            <ul class="pagination bili-search-page">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php
                echo $page_html;
                ?>
                <li><a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@stop

@section('foot-assets')
    <script>

        $("#bili-search-submit").click(function () {
            var keyword = $("#bili-search-input").val();
            var url = "/search?keyword=" + keyword;
            window.location.href = url;
        });

        function GetRequest() {
            var url = location.search;
            var theRequest = {};
            if (url.indexOf("?") != -1) {
                var str = url.substr(1);
                var strs = str.split("&");
                for (var i = 0; i < strs.length; i++) {
                    theRequest[strs[i].split("=")[0]] = decodeURI(strs[i].split("=")[1]);
                }
            }
            return theRequest;
        }

        $(".bili-search-filter-order > li > a").click(function () {
            event.preventDefault();
            var param = GetRequest();
            param.order = $(this).data('filter');
            param.page = 1;
            var str = jQuery.param(param);
            window.location.href = location.pathname + '?' + str;
        });

        $(".bili-search-page > li > a").click(function () {
            event.preventDefault();
            var param = GetRequest();
            param.page = $(this).data('filter');
            var str = jQuery.param(param);
            window.location.href = location.pathname + '?' + str;
        });


        $(".bili-search-filter-duration > li > a").click(function () {
            event.preventDefault();
            var param = GetRequest();
            param.duration = $(this).data('filter');
            param.page = 1;
            var str = jQuery.param(param);
            window.location.href = location.pathname + '?' + str;
        });


        $(".bili-search-filter-categories > li > a").click(function () {
            event.preventDefault();
            var param = GetRequest();
            param.categories = $(this).data('filter');
            param.page = 1;
            var str = jQuery.param(param);
            window.location.href = location.pathname + '?' + str;
        });


        $(document).ready(function () {
            var param = GetRequest();
            if (typeof (param.order) != "undefined") {
                $(".bili-search-filter-order > li ").removeClass("active");
                $(".bili-search-filter-order > li > a[data-filter='" + param.order + "']").parents().addClass("active");
            } else {
                $(".bili-search-filter-order > li:first").addClass("active");
            }
        });


        $(document).ready(function () {
            var param = GetRequest();
            if (typeof (param.duration) != "undefined") {
                $(".bili-search-filter-duration > li ").removeClass("active");
                $(".bili-search-filter-duration > li > a[data-filter='" + param.duration + "']").parents().addClass("active");
            } else {
                $(".bili-search-filter-duration > li:first").addClass("active");
            }
        });


        $(document).ready(function () {
            var param = GetRequest();
            if (typeof (param.categories) != "undefined") {
                $(".bili-search-filter-categories > li ").removeClass("active");
                $(".bili-search-filter-categories > li > a[data-filter='" + param.categories + "']").parents().addClass("active");
            } else {
                $(".bili-search-filter-categories> li:first").addClass("active");
            }
        });


        $(document).ready(function () {
            var param = GetRequest();
            if (typeof (param.page) != "undefined") {
                $(".bili-search-page > li ").removeClass("active");
                $(".bili-search-page > li > a[data-filter='" + param.page + "']").parents().addClass("active");
            } else {
                $(".bili-search-page> li:first").addClass("active");
            }
        });


    </script>
@stop