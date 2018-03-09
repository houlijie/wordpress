<?php

namespace src\DesignPatterns\Composite;

/**
 * TextElement类
 */
class TextElement extends FormElement
{
    public $level = 'this is a text1 element';
    /**
     * 渲染文本元素
     *
     * @param int $indent
     *
     * @return mixed|string
     */
    public function render($indent = 0)
    {
        return str_repeat('  ', $indent) . $this->level;
    }
}