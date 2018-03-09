<?php

namespace src\DesignPatterns\Bridge;

/**
 * 经过改良的抽象实现：Car
 */
class Car extends Vehicle
{

    public function __construct()
    {
        parent::__construct();
    }

    public function manufacture()
    {
        print 'Car ';
        $this->workShop1->work();echo '   ';
        $this->workShop2->work();
        echo "\n";
    }
}