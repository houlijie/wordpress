<?php

namespace src\DesignPatterns\Bridge;

use src\DesignPatterns\Bridge\Assemble;
use src\DesignPatterns\Bridge\Produce;

/**
 * 抽象
 */
abstract class Vehicle
{

    protected $workShop1;
    protected $workShop2;

    protected function __construct()
    {
        $this->workShop1 = new Assemble();
        $this->workShop2 = new Produce();
    }

    abstract function manufacture();
}