@extends('layout.root.root')

@section('top-background')
    <div class="top-background">
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">注册</h2>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="bili-username" placeholder="昵称">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="bili-password" placeholder="密码（6-16个字符组成，区分大小写）">
                    </div>
                </div>
                {{--<div class="form-group">--}}
                {{--<div class="col-sm-offset-2 col-sm-10">--}}
                {{--<div class="checkbox">--}}
                {{--<label>--}}
                {{--<input type="checkbox"> Remember me--}}
                {{--</label>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <hr>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="button" id="bili-submit" class="btn btn-primary btn-block">注册</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('foot-assets')
    <script>


        $('#bili-submit').click(
                function () {

                    var username_register = $("#bili-username").val();

                    var password_register = $("#bili-password").val();

                    var data = "username_register=" + username_register + '&' + 'password_register=' + password_register;

//                    alert(data);

                    $.ajax({
                        type: "POST",
                        url: "/register",
                        data: data,
                        success: function (msg) {

                            if (msg == "200") {
                                window.location.href = "/";
                            } else {
                                alert("注册失败");
                            }
                        }
                    });
                }
        );
    </script>
@stop