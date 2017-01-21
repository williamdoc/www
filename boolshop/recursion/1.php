<?php
/*******************
 * 求1->N的和
 *******************/
/*
function sum($n) {
    return array_sum(range(1,$n));
}
echo sum(100);
*/
//递归
function sum($n) {
    if($n>1) {
        return sum($n-1)+$n;
    }else {
        return 1;
    }
}
echo sum(100);
