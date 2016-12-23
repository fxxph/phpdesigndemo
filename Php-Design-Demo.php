<?php
namespace fxxph\Php_Design_Demo;

/**
 * Class Php_Design_Demo
 * @package fxxph\Php_Design_Demo
 */
class Php_Design_Demo
{
    function __construct()
    {
        echo '这是一个demo!<br>';
    }

    /**
     * detail
     */
    public function detail()
    {
        echo __CLASS__;
    }
}