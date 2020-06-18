<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\admin;

class AdminLv3Middleware
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
        if($level < 3){
            return redirect()->back()->with('warning','Tài khoản không đủ thẩm quyền thực hiện hành động này !');
        }
        return $next($request);
    }
}
