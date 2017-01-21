<?php
/*
 * 用文件操作函数，来批量处理客户名单
 */

/****************************
 * 方法一：file_get_contents
 ****************************/
$file = './custom.txt';
$cont = file_get_contents($file);
/*
 * 注意：各操作系统下，换行符并不一致
 * win：\r\n
 * *nix:\n
 * mac:\r
 */
//print_r(explode("\r\n",$cont));
/***********************************
 * 方法二：打开，一点点读，一行一行读
 ***********************************/
$fh = fopen($file,'rb');
//echo fgets($fh).'<br />';
//echo fgets($fh).'<br />';
//echo fgets($fh).'<br />';
//echo fgets($fh).'<br />';

//feof,end of file,判断文件是否走到结尾
while(!feof($fh)){
    echo fgets($fh).'<br />';
}
/*************************************
 * 方法三：file函数直接读取文件内容，并
 * 按行拆成数组，返回该数组.和file_get_contents
 * 共同点：一次读入，大文件慎用
 *************************************/
$arr =file($file);
print_r($arr);