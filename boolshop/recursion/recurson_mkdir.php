<?php
/*
 * 递归创建级联目录
 */
/*
function mk_dir($path) {
    //目录存在，返回true
    if(file_exists($path) && is_dir($path)) {
        return true;
    }
    //目录的父目录存在，创建目录
    if(is_dir(dirname($path))) {
        return mkdir($path);
    }
    //父目录不存在，创建父目录
    mk_dir(dirname($path));
    return mkdir($path);

}

mk_dir('./a/b/c/d/e');
*/
/*
function mk_dir($path) {
    //目录存在，直接返回
    if(is_dir($path)){
        return true;
    }
    //父目录不一定存在，若不存在则创建父目录
    return is_dir(dirname($path)) || mk_dir(dirname($path)) ? mkdir($path):false;
}
mk_dir('./k/t/f/g');
*/
//以上只是为了练习递归，PHP5的mkdir具有递归创建
mkdir('./e/d/g/d',0777,true);