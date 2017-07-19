@extends('layout.root.root')

@section('top-background')
    <div class="top-background"></div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">登陆</h2>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-8 col-md-offset-3 background-img">
                    <img src="assets/images/login-background/1.png">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row login-form">
                <div class="col-md-8">
                    <div>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="bili-username" placeholder="昵称">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" id="bili-password" placeholder="请输入密码">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <button type="button" id="bili-submit" class="btn btn-primary btn-block">登陆</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="/register" class="btn btn-default btn-block">注册</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
@stop

@section('foot-assets')
    <script>
        $('#bili-submit').click(
                function () {

                    var username_login = $("#bili-username").val();

                    var password_login = $("#bili-password").val();

                    var data = "username_login=" + username_login + '&' + 'password_login=' + password_login;

//                    alert(data);

                    $.ajax({
                        type: "POST",
                        url: "/login",
                        data: data,
                        success: function (msg) {
//                            alert(msg);
                            if (msg == "200") {
                                window.location.href = "/";
                            } else {
                                alert("登陆失败");
                            }
                        }
                    });
                }
        );

    </script>
@stop