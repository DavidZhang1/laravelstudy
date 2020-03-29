<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // 显示功能
    public function show(){
        echo 'I love you! And you?';
    }

   // 用户的修改操作
   public function edit($id){
       echo '这是用户的修改操作....要修改的用户id'.$id;
   }
   
   public function delete($id){
       //通过别名来创建url
      echo route('udelete',[$id]);
    }

    //用户的升级操作
    public function shengji(){
       echo '这里是用户的升级操作....';
    }
//用户的禁用操作
    public function jinyong(){
        echo '这里是禁用操作....';
    }

    public function qingqiu(Request $request){
        //请求方法的获取
        // $method = $request->method();
        //检测请求方式
        // $res = $request->isMethod('post');
        //请求的路径
        // $path = $request->path();
        //获取完整的url
        // $url = $request->url();
        //获取请求的ip
        // $ip = $request->ip();
        //获取端口
        // $port = $request->getPort();
        // var_dump($port);


        //参数的获取
        $username = $request->input('username');
        $password = $request->input('password');
        // var_dump($username);
        // var_dump($password);
    }
    public function form(){

        return view('user');
    }
    
    public function  insert(Request $request){
        //获取请求的post参数
        $username = $request->input('username');
        $password = $request->input('password');
    }
}