<?php
/**
 * Created by PhpStorm.
 * User: hexing
 * Date: 16/5/22
 * Time: 下午6:37
 */

namespace App\Http\Controllers\Pc;

use App\Http\Controllers\Controller;

/**
 * pc基础类库
 * Class PcController
 * @package App\Http\Controllers\Pc
 */
class PcController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }


}