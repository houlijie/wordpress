<?php

namespace src\DesignPatterns\Bridge;

/**
 * 具体实现：Assemble 组装
 */
class Assemble implements Workshop
{

    public function work()
    {
        print 'Assembled';
    }
}