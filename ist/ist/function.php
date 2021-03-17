<?php

function add(...$num){
    $sum=0;
    foreach ($num as $v){
        $sum+=$v;
    }
    return $sum;
}

echo add(1,1,1,1,1,1,1,1,1,1,1,1,1,1);