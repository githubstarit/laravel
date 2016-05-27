<?php

/** App 语法糖
 * Created by PhpStorm.
 * User: hexing
 * Date: 16/5/13
 * Time: 下午3:19
 */

use Illuminate\Support\Debug\Dumper;

if (! function_exists('d')) {
    /**
     * Dump the passed variables
     *
     * @param  mixed
     * @return void
     */
    function d()
    {
        array_map(function ($x) {
            (new Dumper)->dump($x);
        }, func_get_args());
    }
}