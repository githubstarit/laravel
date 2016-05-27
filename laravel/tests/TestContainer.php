<?php

use Illuminate\Container\Container;
use Illuminate\Foundation\Application;
/**
 * Class TestContainer
 */
class TestContainer extends PHPUnit_Framework_TestCase
{

    /**
     * 测试容器
     */
    public function testContainer(){
        $container = new Container();

        d($container);
    }

    /**
     * 项目实例
     */
    public function testApplication(){
        $app_construct_argument = realpath(__DIR__.'/../app/');

        d($app_construct_argument);

        $app = new Application(
            $app_construct_argument
        );

        d($app);
    }
}
