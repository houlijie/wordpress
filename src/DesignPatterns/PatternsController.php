<?php

namespace src\DesignPatterns;

use App\Http\Controllers\Controller;
use src\DesignPatterns\AbstractFactory\AbstractFactoryController;
// use src\DesignPatterns\Factory\AbstractFactoryController;
use src\DesignPatterns\Factory\FactoryMethod;
use src\DesignPatterns\Factory\ItalianFactory;

class PatternsController extends ItalianFactory
{
  public function index()
  {
    echo "strin3g";
  }

  public function factoryTest()
  {
    $type = '2';
    $factory = new ItalianFactory();
    $res = $factory->create($type);
    var_export($res);
  }
}