<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/9
 * Time: 15:06
 */

namespace DesignPatterns\Creational;

class Singleton
{
    private static $instance;

    public static function getInstance(){
        if( empty(static::$instance) ){
            static::$instance = new static;
        }
        return static::$instance;
    }

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}