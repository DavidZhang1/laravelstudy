1.路由
     路由：是将信息从源地址传递到目的地角色
     文件位置  app/Http/routes.php
2.注意点  
     Route::get('/', function () {
});    //这里别把分号丢了

3.报错信息
MethodNotAllowedHttpException in RouteCollection.php line 218:
  说明当前的请求方式和路由规则的请求方式不匹配

4.laravel框架中所有的模板文件都是存放在 recources/views中

5.模板文件的后缀名是 .blade.php

6.错误信息
TokenMismatchException in VerifyCsrfToken.php line 53:
     说明：当前的post请求中缺少验证信息 (get请求不受限制)
     在每一个post表单中需要添加隐藏域来完成请求

7.模拟put和delete请求
   <form action="/update" method="post">
    用户名：<input type="text" name="username"> <br>
    密码： <input type="password" name="password"> <br>
    <input type="hidden" name="_method" value="PUT">
     <button>点击提交</button>
     {{csrf_field()}}
   </form>

8.错误信息
   NotFoundHttpException in RouteCollection.php line 161:
   说明 路由规则没有能匹配上请求路径

9.当前路由规则中的参数名  可以跟匿名函数或者方法中的参数名  不保持一致
   潜规则保持一致

10 中间件文件的默认存放目录  app/http/middleware

11.$request 是 laravel框架对请求报文做的封装

12.$request 中的方法列表查看（还有别的对象的请求方法）
     https://learnku.com/docs/laravel-cheatsheet

13.php创建控制器 
   在命令行中进入laracel文件中输入命令
   php artisan make:controller TestController  //创建名为TestController的控制器文件，文件中带各种类
   php artisan make:controller UserController --plain  //不带 各种类 

14.错误信息  Method [show] does not exist.
   当前控制器下  没有声明该方法。

15  在larevel中是可以使用return的方式向客户端返回内容的

16. 隐式控制器的使用方式
    a）创建路由规则
       Route::controller('goods','GoodsController')
    b）GET  /goods/add  HTTP/1.1
       这个时候会执行 GoodsController下的getAdd方法
      POST  /goods/insert HTTP/1.1
        这个时候会执行 GoodsController下的postInsert方法

17. restful控制器
    GET          /pothos             index
    GET          /pothos/create      create
    POST         /pothos             store
    GET          /pothos/{id}        show
    GET          /pothos/{id}/edit   edit   
    PUT/PATCH    /pothos/{id}        update
    DELETE       /pothos/{id}        destory
