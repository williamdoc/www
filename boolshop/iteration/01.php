<?php
/*
 * 递归与迭代的区别与联系
 * 理论上 递归 都可以化为 迭代
 */

// 用迭代创建级联目录
function mk_dir($path) {
    $arr = array();

    while(!is_dir($path)) {
        array_unshift($arr,$path);
        $path = dirname($path);
    }
    if(empty($arr)) {
        return true;
    }
    foreach($arr as $v){
        mkdir($v);
    }
    return true;
}
mk_dir('./a/b/c/d/');