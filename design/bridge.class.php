<?php

/**
 * 桥接模式
 *
 * 将抽象部份与它实现部分分离,使用它们都可以有独立的变化
 */
//实现者
abstract class Implementor
{
    abstract public function operation();
}

//具体实现者A
class ConcreteImplementorA extends Implementor
{
    public function operation()
    {
        echo "ConcreteImplementorA Operation<br/>";
    }
}

//具体实现者B
class ConcreteImplementorB extends Implementor
{
    public function operation()
    {
        echo "ConcreteImplementorB Operation<br/>";
    }
}

//抽象
class Abstraction
{
    protected $_implementor = null;

    public function setImplementor($implementor)
    {
        $this->_implementor = $implementor;
    }

    public function operation()
    {
        $this->_implementor->operation();
    }
}

class RefinedAbstraction extends Abstraction
{
}

class ExampleAbstraction extends Abstraction
{
}

//
$objRAbstraction = new RefinedAbstraction();
$objRAbstraction->setImplementor(new ConcreteImplementorB());
$objRAbstraction->operation();

$objRAbstraction->setImplementor(new ConcreteImplementorA());
$objRAbstraction->operation();

$objEAbstraction = new ExampleAbstraction();
$objEAbstraction->setImplementor(new ConcreteImplementorB());
$objEAbstraction->operation();