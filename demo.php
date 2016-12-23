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
    public function detail()
    {
        echo __CLASS__;
    }
}