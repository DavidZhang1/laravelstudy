<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete请求</title>
</head>
<body>
   <form action="/del" method="post">
    用户名：<input type="text" name="username"> <br>
    密码： <input type="password" name="password"> <br>
    <input type="hidden" name="_method" value="DELETE">
     <button>点击提交</button>
     {{csrf_field()}}
   </form>
</body>
</html>