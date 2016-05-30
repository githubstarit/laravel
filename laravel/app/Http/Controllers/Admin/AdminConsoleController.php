<?php

namespace App\Http\Controllers\Admin;

use Auth;

/**
 * 后台控制台
 * Class AdminConsoleController
 * @package app\Http\Controllers\Admin
 */
class AdminConsoleController extends AdminController
{

    /**
     * 控制台首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $admin = Auth::guard('admin')->user();
        $data  = [
            'user'=>$admin,
        ];
        return view('admin.console', $data);
    }
}
