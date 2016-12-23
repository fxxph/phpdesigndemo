<?php
namespace fxxph\phpdesigndemo;

/**
 * Class phpdesigndemo
 * @package fxxph\phpdesigndemo
 */
class demo
{
    function __construct()
    {
        echo '这是一个demo!<br>';
    }

    /**
     * detail
     */
    public static function detail()
    {
        echo 'success!,access ' . __CLASS__;
    }
}