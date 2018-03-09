<?php

namespace src\DesignPatterns\Prototype;

/**
 * BarBookPrototype类
 */
class BarBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Bar';

    /**
     * empty clone
     */
    public function __clone()
    {
        $this->category = 'clone Bar';
    }
    

    public function getCategory()
    {
        return $this->category;
    }
}