<!DOCTYPE html>
<html>
<head>
    <title>登录页</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/third/bootstrap/css/bootstrap.css')}}" />
    <style type="text/css">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }

        select,
        textarea,
        input[type="text"],
        input[type="password"],
        input[type="datetime"],
        input[type="datetime-local"],
        input[type="date"],
        input[type="month"],
        input[type="time"],
        input[type="week"],
        input[type="number"],
        input[type="email"],
        input[type="url"],
        input[type="search"],
        input[type="tel"],
        input[type="color"],
        .uneditable-input {
            /*display: inline-block;*/
            /*height: 20px;*/
            /*padding: 4px 6px;*/
            /*margin-bottom: 10px;*/
            /*font-size: 14px;*/
            /*line-height: 20px;*/
            /*color: #555555;*/
            /*vertical-align: middle;*/
            /*-webkit-border-radius: 4px;*/
            /*-moz-border-radius: 4px;*/
            border-radius: 4px;
            border: 1px solid #cccccc;
        }
    </style>

</head>
<body>
<div class="container">
    <form class="form-signin">
        <h2 class="form-signin-heading">登录页</h2>
        <input type="text" class="input-block-level" placeholder="邮箱">
        <input type="password" class="input-block-level" placeholder="密码">
        <label class="checkbox">
            <input type="checkbox" value="remember-me">自动登录
        </label>
        <button class="btn btn-large btn-primary" type="submit">登录</button>
    </form>

</div>
<script src="{{URL::asset('assets/third/jquery/jquery.js')}}"></script>
<script src="{{URL::asset('assets/third/bootstrap/js/bootstrap.js')}}" type="text/javascript" ></script>
</body>
</html>