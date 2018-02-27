<?php

namespace src\DesignPatterns\Adapter;

/**
 * Kindle 是电子书实现类
 */
class Kindle implements EBookInterface
{
    /**
     * {@inheritdoc}
     */
    public function pressNext()
    {
        return "next";
    }

    /**
     * {@inheritdoc}
     */
    public function pressStart()
    {
        return "start";
    }
}