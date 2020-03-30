<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// use Symfony\Component\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    echo '快乐的一天';
});
Route::get('/admin/user', function () {
    echo 'z这是用户详情';
});
//get形式的路由
Route::get('/erliu',function(){
   echo '今天二十六号';
});
//post形式的路由
Route::post('/insert',function(){
    echo '这是一个添加操作。。。。。';
});

//显示html表单页路由
Route::get('/form',function(){

     return view('form');
});

//put请求
Route::get('/put',function(){

    return view('put');
});
Route::put('/update',function(){

    echo '这是一个put请求';
});

//delete请求
Route::get('/delete',function(){
     return view('delete');
});
Route::delete('/del',function(){
    echo '这是一个delete请求'; 
});


//后台的路由规则
Route::group([],function(){
    
//带参数的路由规则
// Route::get('/article/{id}',function($id){
//     echo '这是文章的详情..当前文章的id为' .$id;  
// });

//限制参数的类型
Route::get('/goods/{id}',function($id){
    echo '商品详情页的id为'.$id;
})->where('id','\d');

//多个参数
// Route::get('/{type}-{id}',function($type,$id){
//     echo '当前的类型为'.$type.',当前的id为'.$id;
// });

//
Route::get('/Admin/User/index',[
    'as' => 'ulist',
    'uses' => function(){
        // echo '这里是后台的用户显示';
       echo route('ulist');//route是一个函数，通过路由别名来快速创建完整url
    }  
    ]
   );

Route::get('/login',function(){

    echo '这里是用户的登录页面';
});

Route::get('/setting',[
      'middleware' => 'login',
      'uses' => function(){
        echo '这里是网站的设置页面';
    } 
   ]
 );
 //网站的后台
Route::get('/admin',function(){
    echo '这里是网站的后台页面。。。';
})->middleware('login');
 //写入session uid
Route::get('/session',function(){
    
    session(['uid'=>10]);
});

// Route::get('/404',function(){
//     abort(404);
// });


//当用户请求服务器上的  /controller路时，会执行UserController控制器文件中的show方法
Route::get('/controller','UserController@show');

// 用户的修改
Route::get('/user/edit/{id}','UserController@edit');

//用户的删除操作
Route::get('/admin/user/delete/{id}',[
    'as' => 'udelete',
    'uses' => 'UserController@delete'
]);

//用户的升级操作
Route::get('/user/shengji',[
    'middleware' => 'login',
    'uses' => 'UserController@shengji'
]);

Route::get('user/jinyong','UserController@jinyong')->middleware('login');

});

//隐式控制器  如果是goods开头的路径  都是交给GoodsController来实现
Route::controller('goods','Goodscontroller');

//restful控制器路由规则
Route::resource('article','ArticleController');

//
 Route::get('/request','UserController@qingqiu');

//显示一个form表单
Route::get('/user-form','UserController@form');

Route::post('/form','UserController@insert');

Route::get('/file','UserController@show');

Route::post('/upload','UserController@upload');

//cookie操作
Route::get('/cookie','UserController@cookie');

//闪存操作
Route::get('/flash','UserController@flash');
Route::get('/old','UserController@old');
Route::get('/flash_1','UserController@flash_1');
Route::get('/get_flash','UserController@get_flash');

Route::post('/flash','UserController@doflash');


