<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文章的添加页面</title>
</head>
<body>
    <form action="/article" method="post">

    <input type="text" name="username">
    {{csrf_field()}}
    <button>点击添加</button>
    </form>

</body>
</html>