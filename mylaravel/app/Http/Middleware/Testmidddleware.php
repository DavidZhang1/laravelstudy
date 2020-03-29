<?php

namespace App\Http\Middleware;

use Closure;

class Testmidddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //[2019-10-10 10:10:10]127.0.0.1------/Admin/User/index
        //记录该请求的路径
         $path = $request->path();
         $str = '['.date('Y-m-d H:i:s').']'.$request->ip().'-----'.$request->path();
         //将字符串路径存入到日志文件中-
         file_put_contents('request.log' , $str."\r\n", FILE_APPEND);
        //进入下一层的代码执行
         return $next($request); 
    }
}
