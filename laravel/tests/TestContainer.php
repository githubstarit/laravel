<?php

use Illuminate\Container\Container;
/**
 * Class TestContainer
 */
class TestContainer extends PHPUnit_Framework_TestCase
{

    /**
     * 测试容器
     */
    public function testContainer(){
        $Container = new Container();
        d($Container);
    }
}
