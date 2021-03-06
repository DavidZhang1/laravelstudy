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

        //
        public function response(){

            //返回字符串类型
            // return 'iloveyou';
            //返回并设置cookie
            // return response('') -> withCookie('name','兄弟连',10);
            //返回json字符串    在线解析json  网址 http://json.parser.online.fr/
            // return response()->json(['name'=>'兄弟连','age'=>11,'position'=>'昌平区']);
            
            //下载文件  相对路径:脚本中的相对路径是相对当前正在请求的文件 绝对路径
            // return response()->download('./images/404.png');

            //页面跳转   网站内部路径
            // return redirect('/form');
            //页面跳转   外部跳转
            // return redirect('http://www.baidu.com');

            //模板解析
            // return view('response');

            //设置响应头
            // return response('123')->header('name','lamp兄弟连');

            //设置返回内容并跳转
            return '支付成功！<script>
            setTimeout(function(){
                location.href="/form"
            },3000)
            
             
            </script>';
               
        }

        //模板解析
        public function view(){
            //解析模板
            // return view('xdl');
            //划分目录
            // return view('user.index');
            $arr = ['name'=>'xdl','age'=>11,'position'=>'北京昌平区'];
            return view('user.xdl',['xdl'=>$arr]);
        }

        //blade的使用
        public function blade(){
           //这里的路径分割要使用.
            return view('admin.user.index',[
                'title'=>'用户的列表页',
                'username'=>'张衍波',
                'page'=>'<a href="/1.html">1</a><a href="/2.html">2</a><a href="/3.html">3</a>'
                ]);
        }

        public function page(){
           //解析模板
           return view('page.index',['title'=>'首页']);
        }

        public function cart(){
            //解析模板
            return view('page.cart',['title'=>'购物车页面']);
        }

        public function layout(){
            return view('layout.index');
        }

        public function extend(){
            return view('layout.extend');
        }

        public function liucheng(){
            return view('control.liucheng',['total'=>65,'momeny'=>125,'sex'=>1]);
        }

        public function xunhuan(){
            return view('control.xunhuan',[
                'users'=>[
                    ['name'=>'张衍波','age'=>'21','height'=>'181cm','weight'=>'75kg'],
                    ['name'=>'龚烁宇','age'=>'20','height'=>'178cm','weight'=>'65kg'],
                    ['name'=>'张洪林','age'=>'20','height'=>'179cm','weight'=>'70kg'],

                ]
            ]);
        }
         
}