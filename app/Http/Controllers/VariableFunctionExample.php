<?php

function test(...$test){
    echo array_sum($test);
}


test(1,2,2,4,4,6); //19
