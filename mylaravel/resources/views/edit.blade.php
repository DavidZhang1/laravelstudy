<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文章的提交</title>
</head>
<body>
    <form action="/article/20" method="post">
        <input type="text" name="username">
        <input type="hidden" name="_method" value="PUT">
        {{csrf_field()}}
        <button>点击修改</button> 
    </form>
    <form action="/article/30" method="post">
        <input type="text" name="username">
        <input type="hidden" name="_method" value="delete">
        {{csrf_field()}}
        <input type="submit" value="点击删除">
    </form>
</body>
</html>