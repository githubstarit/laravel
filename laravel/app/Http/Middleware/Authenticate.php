<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request 请求数据
     * @param  \Closure  $next 回调下一个操作
     * @param  string|null  $guard : admin or web
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                if($guard == 'admin') {
                    return redirect()->guest('admin/login');
                }else{
                    return redirect()->guest('login');
                }
            }
        }

        return $next($request);
    }
}
