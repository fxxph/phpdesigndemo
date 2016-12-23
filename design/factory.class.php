<?php

/**
 * 工厂模式
 */
class factory
{
    public $numberA;
    public $numberB;

    /**
     * @param $operate
     * @return factoryAdd|factoryDiv|factoryMul|factorySub|null
     */
    public static function createFactory($operate)
    {
        switch ($operate) {
            case "+":
                return new factoryAdd();
                break;
            case "-":
                return new factorySub();
                break;
            case "*":
                return new factoryMul();
                break;
            case "/":
                return new factoryDiv();
                break;
        }
        return NULL;
    }
}

class factoryAdd extends factory
{
    function getResult()
    {
        return $this->numberA + $this->numberB;
    }
}

class factorySub extends factory
{
    function getResult()
    {
        return $this->numberA - $this->numberB;
    }
}

class factoryMul extends factory
{
    function getResult()
    {
        return $this->numberA * $this->numberB;
    }
}

class factoryDiv extends factory
{
    function getResult()
    {
        return $this->numberA / $this->numberB;
    }
}

//调用
$objAdd = factory::createFactory('/');
$objAdd->numberA = 2;
$objAdd->numberB = 6;
echo $objAdd->getResult();

