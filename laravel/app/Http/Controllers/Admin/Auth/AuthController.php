<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Admin;

use Validator;

use App\Http\Controllers\Admin\AdminController;

use Illuminate\Foundation\Auth\ThrottlesLogins;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

/**
 * 后端验证
 * Class AuthController
 * @package App\Http\Controllers\Admin\Auth
 */
class AuthController extends AdminController
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo           = '/admin';             // 登陆后的跳转地址
    protected $redirectAfterLogout  = 'admin/login';        // 退出后跳转地址
    protected $guard                = 'admin';              // guard
    protected $loginView            = 'admin.auth.login';   // 登陆视图

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'getLogout']);
    }

    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|confirmed|min:6',
        ]);

    }

    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

    }

}