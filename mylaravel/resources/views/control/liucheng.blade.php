<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程控制</title>
</head>
<body>
    <!-- if -->
    给你买一个
    @if($total >=90 && $total <= 100)
      游戏机
    @elseif($total >=80 && $total < 90)
    望远镜
    @elseif($total >=70 && $total < 80)
    钢笔
    @else 
    锤子
    @endif
<hr>
    @if($momeny >= 5 && $momeny <=10)
    把我当什么人
    @elseif($momeny > 10 && $momeny <=50)
    我不是那样的人
    @elseif($momeny > 50 && $momeny <=200)
    今晚我是你的人
    @endif

    <hr>

    性别：
    <input type="radio" name="sex" value="1" @if($sex == 1) checked="checked" @endif>男
    <input type="radio" name="sex" value="0" @if($sex == 0) checked="checked" @endif>女
</body>
</html>