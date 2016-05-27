<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.console');
    }
}
