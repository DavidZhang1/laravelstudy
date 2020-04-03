<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <div style="height: 100px;background:#aefcdb"></div>
    
    @section('content')
    <div style="height: 400px;background:#123456"></div>
    @show

    @section('footer')
    <div style="height: 100px;background:#abcdef"></div>
    @show
    
    @section('js')
    @show
</body>
</html>