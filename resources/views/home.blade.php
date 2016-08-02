<!DOCTYPE html>
<html>
<head>
        <title>home</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                /*font-size: 96px;*/
                display: block;
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    <label for="user_name">用户名:</label>
                    <input id="user_name" type="text"/>
                </div>
                <div class="title">
                    <label  for="pass_word">密码:</label>
                    <input id="pass_word" type="password"/>
                </div>
                <input class="title" type="button" value="登陆"/>
            </div>
        </div>
    </body>
</html>