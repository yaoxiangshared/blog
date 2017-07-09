<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新天聊天</title>
    <link rel="stylesheet" href="{{URL::asset('assets/third/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/chat/style.css')}}">
    <script src="{{URL::asset('assets/third/vue/vue.js')}}" type="text/javascript" ></script>
</head>
<body>
<div class="wrapper">
    <div class="main" style="">
        <div class="logo">
            <img  src="{{URL::asset('assets/chat/images/icon-rounded.png')}}">
        </div>
        <div class="slogan">
            <h2>new sky</h2>
        </div>
        <div class="button">
            <input id="start_button" type="button" value="开始聊天" >
        </div>
        <div class="message" style="display: none">
            <blockquote id="chat_message">
                <div class="start"> <span>开始聊天吧。。。</span> </div>

                <div v-for="sentence in sentences" v-bind:class="sentence.speaker" v-text="sentence.content"></div>
                {{--<div class="me"> <span>你好1</span> </div>--}}
                {{--<div class="stranger">  <span>你好2</span> </div>--}}
                {{--<div class="me"> <span>你好1</span> </div>--}}
                {{--<div class="me"> <span>你好1</span> </div>--}}
                {{--<div class="me"> <span>你好1</span> </div>--}}
                {{--<div class="me"> <span>你好1</span> </div>--}}
                {{--<div class="stranger">  <span>你好2</span> </div>--}}
                {{--<div class="me"> <span>你好1</span> </div>--}}
                {{--<div class="stranger">  <span>你好2</span> </div>--}}
                {{--<div class="me"> <span>你好1</span> </div>--}}
                {{--<div class="stranger">  <span>你好2</span> </div>--}}
                {{--<div class="me"> <span>你好1</span> </div>--}}
                {{--<div class="stranger">  <span>你好2</span> </div>--}}
                {{--<div class="me"> <span>你好1</span> </div>--}}
                {{--<div class="stranger">  <span>你好2</span> </div>--}}
            </blockquote>
        </div>
    </div>

    <div class="sendBox">
        <div class="changeButton">
            <input type="button" id="quit" value="离开">
        </div>
        <div class="sendText">
            <input type="text" id="msg" placeholder="输入信息">
        </div>
        <div class="sendButton">
            <input type="button" id="sendMsg" value="发送">
        </div>
    </div>
</div>

<script src="{{URL::asset('assets/third/jquery/jquery.js')}}"></script>
<script src="{{URL::asset('assets/third/bootstrap/js/bootstrap.js')}}" type="text/javascript" ></script>
<script src="{{URL::asset('assets/chat/main.js')}}"></script>
</body>
</html>