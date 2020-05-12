<?php

namespace App\Http\Middleware;

use Closure;

class AdminLv2Middleware
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
        $id = Auth::guard('admin')->user()->id;
        $admin = admin::find($id);
        $level = $admin['level'];
        if($level < 2){
            return back()->with('phanquyen','Tài khoản không đủ thẩm quyền thực hiện hành động này !');
        }
        return $next($request);
    }
}
