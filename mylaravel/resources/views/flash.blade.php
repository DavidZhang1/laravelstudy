<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>闪存表单</title>
</head>
<body>
    <form action="/flash" method="post">
       用户名： <input type="text" name="username" value="{{old('username')}}"><br>
        密码：<input type="text" name="password" value="{{old('password')}}"><br>
        年龄：<input type="text" name="age" value="{{old('age')}}"><br>
        {{csrf_field()}}
        <button>点击提交</button>
     
 
    </form>
</body>
</html>