<?php

/**
* ArrayAccess接口提供像访问数组一样访问对象的能力的接口
*/
class ArrayAccessTest implements ArrayAccess
{    
    function __construct()
    {
        $this->testArray = [
            'one' => 1,
            'two' => 2,
            'three' => 3,
        ];
    }

    public function offsetExists($offset)
    {
        echo "isset\n";
        return isset($this->testArray[$offset]);
    }

    public function offsetGet($offset)
    {
        echo "get\n";
        return $this->testArray[$offset]; 
    }

    public function offsetSet($offset, $value)
    {
        echo "set\n";
        return $this->testArray[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        echo "unset";
        unset($this->testArray[$offset]);
    }
}

$a = new ArrayAccessTest;
$a['test'] = 77;  //offsetSet()
print_r($a['test']); //offsetGet()
isset($a['test']);  //offsetExist()
unset($a['test']);  //offsetUnset()
