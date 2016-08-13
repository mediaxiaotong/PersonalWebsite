<?php

namespace App\Http\Middleware;

use Closure;

class UserLogin
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
        if(session('isLogin') != 1)
        {
            return back()->with('errors',' <div class="alert alert-danger">请登录账号，在留言！！点击导航登陆可注册登录哦。</div>');
        }

        return $next($request);
    }
}
