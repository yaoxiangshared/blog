<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>全部模板</title>

    <link rel="stylesheet" href="{{URL::asset('assets/third/bootstrap/css/bootstrap.min.css')}}" />
    <!-- Referencing Bootstrap CSS that is hosted locally -->
</head>

<body>
<div class="container">
    <h3>
        模板列表
    </h3>
    <div class="col-md-12 column">
        <div class="jumbotron well">
            <h1>
                全部模板
            </h1>
            <p>
                这里是模板列表
            </p>
        </div>
    </div>
    <div class="row clearfix">
        @foreach($resumeList as $resume)
        <div class="col-md-4 column">
            <div style="height: 195px;overflow: hidden">
                <img alt="140x140" src="http://static.500d.me/upload/image/201601/b800d900-96bd-47b0-8879-08854fb7ce97.jpg" class="img-rounded" />
            </div>
            <span>{{$resume->name}}</span>
        </div>
        @endforeach
    </div>
    <ul class="pagination pagination-lg" style="padding-left: 150px" >
        <li>
            <a href="#">上一页</a>
        </li>
        <li>
            <a href="#">1</a>
        </li>
        <li>
            <a href="#">2</a>
        </li>
        <li>
            <a href="#">3</a>
        </li>
        <li>
            <a href="#">4</a>
        </li>
        <li>
            <a href="#">5</a>
        </li>
        <li>
            <a href="#">下一页</a>
        </li>
    </ul>
</div>

<script src="{{URL::asset('assets/third/jquery/jquery.js')}}"></script>
<script src="{{URL::asset('assets/third/bootstrap/js/bootstrap.js')}}" type="text/javascript" ></script>
<!-- Referencing Bootstrap JS that is hosted locally -->
</body>
</html>