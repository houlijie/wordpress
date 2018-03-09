<?php

namespace src\DesignPatterns\AbstractFactory;

abstract class AbstractFactory
{
  /**
   * create text component
   * @param string $content 文本内容
   * @return text 
   */
  abstract public function createText($content);

  /**
   * create image component
   * @param string $path 
   * @param string $name 
   * @return pic
   */
  abstract public function createPicture($path, $name)
}