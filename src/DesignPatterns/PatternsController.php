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
use src\DesignPatterns\Bridge\Car;
use src\DesignPatterns\Bridge\Workshop;
use src\DesignPatterns\Composite\Form;
use src\DesignPatterns\Composite\InputElement;
use src\DesignPatterns\Composite\TextElement;
use src\DesignPatterns\Decorator\Webservice;
use src\DesignPatterns\Decorator\Decorator;
use src\DesignPatterns\Decorator\RenderInXml;
use src\DesignPatterns\Decorator\RenderInJson;

class PatternsController
{
  public function index()
  {
    echo "strin3g";
  }

  public function mediatorTest()
  {
      # code...
  }

  public function decoratorTest()
  {
    $webservice = new Webservice('<?xml version="1.0"?><foo>bar</foo>');
    // $webservice = new RenderInJson($webservice);
    var_export($webservice->renderData());
  }

  public function compositeTest()
  {
    $form = new Form();
    $form->addElement(new InputElement());
    $form->addElement(new TextElement());
    $embed = clone $form;
    $form->addElement($embed);

    var_export($form->render());
    
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

  public function bridgeTest()
  {
    $car = new car();
    var_export($car->manufacture());
  }


}