<?php
/**
 * Created by PhpStorm.
 * User: hexing
 * Date: 16/5/22
 * Time: 下午6:37
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * 后台基础类库
 * Class AuthController
 * @package App\Http\Controllers\Admin
 */
class AdminController extends Controller{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


}