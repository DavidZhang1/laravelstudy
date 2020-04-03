<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
    li{
        width: 200px;
        height: 200px;
        border: solid 1px #abcdef;
        list-style: none;

        float: left;
    }

</style>
<body>
    <!-- for -->
        @for($i=1;$i<=100;$i++)
        {{$i}}
        @endfor
        <hr>
        <!-- foreach -->
        <ul>
        @foreach($users as $k=>$v)
        <li>
        名字：{{$v['name']}}<br>
        年龄：{{$v['age']}}<br>
        身高：{{$v['height']}}<br>
        体重：{{$v['weight']}}<br>
        </li>
        </ul>
        

        @endforeach
</body>
</html>