@extends('layout.root.root')


@section('content')
    <div class="row">
        <div class="col-md-8">
            <ul class="nav nav-pills">
                <li role="presentation">
                    <a href="#" style=""><span class="glyphicon glyphicon-home"></span>
                        <div>首页</div>
                    </a>
                </li>
                <?php
                echo $categories_html
                ?>
            </ul>
        </div>
        <div class="col-md-1">
            <a href="#">
                <h4><span class="glyphicon glyphicon-road"></span>&nbsp;广场</h4>
            </a>
        </div>
        <div class="col-md-1">
            <a href="#">
                <h4><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;直播</h4>
            </a>
        </div>
        <div class="col-md-1">
            <a href="#">
                <h4><span class="glyphicon glyphicon-minus-sign"></span>黑屋</h4>
            </a>
        </div>
        <div class="col-md-1">
            <img src="/assets/images/icons/dog.gif" alt="催泪向">
        </div>
    </div>
    @yield('detail')
@stop


@section('top-background')
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
                                <input type="text" class="form-control bili-search-input" placeholder="Search for...">
<span class="input-group-btn">
    <button class="btn btn-default  bili-search-submit" role="button">Go!</button>
</span>
                            </div><!-- /input-group -->
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-6 -->
        </div>
    </div>

@stop


@section('foot-assets')
    <script>

        $(".top-background .bili-search-submit").click(function () {
            var keyword = $(".top-background .bili-search-input").val();
            var url = "/search?keyword=" + keyword;
            window.location.href = url;
        });
    </script>

@stop
