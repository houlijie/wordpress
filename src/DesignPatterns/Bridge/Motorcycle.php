<?php

namespace src\DesignPatterns\Bridge;

/**
 * 经过改良的抽象实现：Motorcycle
 */
class Motorcycle extends Vehicle
{

    public function __construct()
    {
        parent::__construct();
    }

    public function manufacture()
    {
        print 'Motorcycle ';
        $this->workShop1->work();
        $this->workShop2->work();
    }
}