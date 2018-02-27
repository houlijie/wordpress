<?php

namespace src\DesignPatterns;

use App\Http\Controllers\Controller;
use src\DesignPatterns\AbstractFactory\AbstractFactoryController;
// use src\DesignPatterns\Factory\AbstractFactoryController;
use src\DesignPatterns\Factory\FactoryMethod;
use src\DesignPatterns\Factory\ItalianFactory;
use src\DesignPatterns\Prototype\BarBookPrototype;
use src\DesignPatterns\Singleton\Singleton;
use src\DesignPatterns\SimpleFactory\ConcreteFactory;
use src\DesignPatterns\Adapter\Book;
use src\DesignPatterns\Adapter\EBookAdapter;
use src\DesignPatterns\Adapter\Kindle;

class PatternsController
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

  public function prototypeTest() 
  {
    $barBookPrototype = new BarBookPrototype();
    $book = clone $barBookPrototype;
    $book->setTitle($book->getCategory().' boook');
    var_export($barBookPrototype);echo "\n";
    var_export($book);
  }

  public function singletonTest($value='')
  {
    $singleton = Singleton::getInstance();
  }

  public function simpleFactoryTest()
  {
    $concreteFactory = new ConcreteFactory();
    $result = $concreteFactory->createVehicle('other');
    var_export($result);
  }

  public function abstractTest()
  {
    $book = new Book();
    var_export($book->open());
    $book = new EBookAdapter(new Kindle());
    var_export($book->open());


  }
}