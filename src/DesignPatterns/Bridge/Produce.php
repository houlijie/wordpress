<?php

namespace src\DesignPatterns\Bridge;

/**
 * 具体实现：Produce 生产
 */
class Produce implements Workshop
{

    public function work()
    {
        print 'Produced ';
    }
}