<?php

namespace src\NewFeature;

use src\DesignPatterns\PatternsController;

/**
 * 1、closer
 * 2、zend opcache
 * 3、yield
 * 4、server
 * 5、trait
 * 6、interface
 * 7、namespace
 */
class HomeController {

    public function closerTest()
    {
        //__invoke()魔术方法只有在尝试以调用函数的方式调用一个对象时， __invoke()方法被自动调用
        $invokeTest = new PatternsController();
        $invokeTest();

        //闭包
        $b = 1;
        $a = function ($string) use($b) {
            $b++;
            return $string. $b;
        };
        echo $a('b = ');

    }

    public function yieldTest()
    {
        $customRange = $this->makeRange(1000000);
        foreach ($customRange as $i) {
            echo $i . PHP_EOL;
        }
    }

    function makeRange($length) {
        $dataSet = [];
        for ($i=0; $i<$length; $i++) {
            // $dataSet[] = $i;
            yield $i;
        }

        //return $dataSet;
    }

    

    function getLaravelAcademy() {
        yield 'http://LaravelAcademy.org';
        yield 'Laravel学院';
        yield 'Laravel Academy';
    }
}