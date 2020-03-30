<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // 显示功能
    // public function show(){
    //     echo 'I love you! And you?';
    // }

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
        // $username = $request->input('username');
        // $password = $request->input('password');
        // var_dump($username);
        // var_dump($password);
        
        //设置默认置
        // $res = $request->input('vip',10);  //I('get.name','xiaohigh)
      
        //检测请求参数
         // $res = $request->has('username');

         //获取所有的请求参数
        //  $res = $request->all();
        
        //获取其中一部分请求的参数
        // $res = $request->only(['username','a']);
        
        //获取剔除不需要的参数
        //   $res = $request->except('username','a');
        
        //获取请求头的信息
        // $res = $request->header('Connection');
        // $res = $request->header('Accept-Encoding');
        // $res = $request->header('Cache-Control');
        $res = $request->header('Cookie');


        var_dump($res);


    }
    public function form(){

        return view('user');
    }
    
    public function  insert(Request $request){
        //获取请求的post参数
        $username = $request->input('username');
        $password = $request->input('password');
        var_dump($username);
        var_dump($password);
    }

    //显示form表单
    public function show(){
        return view('upload');
    }
    //文件上传操作
    public function upload(Request $request){
        // echo 'iloveyou.....';

        //检测文件是否有上传
        // $res = $request->hasFile('profile');
        //php脚本中的相对路径，都是相对于当前正在请求的文件
        if($request->hasFile('profile')){
            //file_get_contents(filename)
            //file_put_contents(filename,data)
            //fopen(filename,mode)
            //include
            $request->file('profile')->move('./upload','liuyan.jpg');
        }
    }

    
        //    cookie操作
        public function cookie(Request $request){
            //写入cookie  setcookie
            //  \Cookie::queue('name','xdl',20);//时间单位为分钟  不是秒
            // return response('')->withCookie('xiongdilian','zhenbang',5);

            //读取
            // $res = \Cookie::get('name');

            //获取
            $res = $request->cookie('xiongdilian');
     

            var_dump($res);
        }

       //闪存的演示
       public function flash(){

          return view('flash');

       }
       public function doflash(Request $request){

        // var_dump($request->all());
        $request->flash();//将请求过来的参数  都闪存起来    
        //跳转到原来的页面
        return back();
       }
       public function old(){
        var_dump(old('username'));

       }

       //自定义闪存
       public function flash_1(){
           //手动闪存数据
           \Session::flash('name','xiaohigh');
           

       }
        //读取闪存
        public function get_flash(){
            echo session('name');
        }

}