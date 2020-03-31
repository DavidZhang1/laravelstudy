<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <style type="text/css">
    #pages a{
        display: block;
        width: 30px;
        height: 30px;
        border: solid 1px #ddd;
        float: left;
        text-align: center;
        line-height: 30px;
        margin-right: 10px;
    } 

    </style>
</head>
<body>
    <!-- 使用函数 -->
    当前时间：<span style="color: red">{{time()}}</span><br>
    格式化字符串：<span style="color: green">{{date('Y-m-d H:i:s')}}</span><br>
    字符串截取:<span style="color: yellow">{{mb_substr($title,0,2)}}</span><br>
    <!-- 使用默认值 -->    
    欢迎您回来:{{$username or '阿波'}}<br>
    <!-- html代码显示 -->
    分页的代码：<div id="pages">{!!$page!!}</div>
</body>
</html>