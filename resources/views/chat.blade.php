<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新天聊天</title>
    <link rel="stylesheet" href="{{URL::asset('assets/third/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/chat/style.css')}}">
</head>
<body>
<div class="wrapper">
    <div class="main">
        <div class="logo">
            <img  src="images/icon-rounded.png">
        </div>
        <div class="slogan">
            <h2>new sky</h2>
        </div>
        <div class="button">
            <input id="start_button" type="button" value="开始聊天" >
        </div>
    </div>
    <div class="sendBox">
        <div class="changeButton">
            <input type="button" value="离开">
        </div>
        <div class="sendText">
            <input type="text" placeholder="输入信息">
        </div>
        <div class="sendButton">
            <input type="button" value="发送">
        </div>
    </div>
</div>

<script src="{{URL::asset('assets/third/jquery/jquery.js')}}"></script>
<script src="{{URL::asset('assets/third/bootstrap/js/bootstrap.js')}}" type="text/javascript" ></script>
<script src="{{URL::asset('assets/chat/main.js')}}"></script>
</body>
</html>