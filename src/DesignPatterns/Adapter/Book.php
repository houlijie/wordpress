<?php

namespace src\DesignPatterns\Adapter;

/**
 * Book 是纸质书实现类
 */
class Book implements PaperBookInterface
{
    /**
     * {@inheritdoc}
     */
    public function open()
    {
        return 'open';
    }

    /**
     * {@inheritdoc}
     */
    public function turnPage()
    {
    }
}