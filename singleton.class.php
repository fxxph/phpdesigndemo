<?php

/**
 * 单例模式
 * 保证一个类仅有一个实例,并提供一个访问它的全局访问点
 */
class Singleton
{
    public static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }

    function sayHi()
    {
        return "The Class is saying hi to u " . rand(000, 999);
    }
}

// $obj = new Singleton(); // 声明不能成功

//调用
echo Singleton::getInstance()->sayHi();
echo '<br>';
echo Singleton::getInstance()->sayHi();
