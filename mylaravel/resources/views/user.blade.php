<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/form" method="post">
       <input type="text" name="username">
       <input type="text" name="password">
        {{csrf_field()}}
       <button>点击提交</button>

</form>
</body>
</html>