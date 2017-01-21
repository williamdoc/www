<?php
//匹配文件, 把txt后缀的文件找出来，返回数组
print_r(glob('./article/*.txt'));

/****************************************
 * 目录操作
 * opendir  打开目录
 * readdir  读取目录
 * mkdir    创建目录
 * rmdir    删除目录
 * closedir 关闭目录句柄
 * is_dir   判断是否是目录
 ****************************************/
$path = './';
$dh = opendir($path);
while(($filename = readdir($dh)) != false)
{
    echo $filename.'<br />';
    if(is_dir($filename)){
        echo '是目录';
    }
}
/*
 * 创建和删除目录
 */
//foreach(array('a','b','c') as $v) {
//    $path = './dir/'.$v;
//    if(file_exists($path) && is_dir($path)){
//        echo $path.'已存在';
//    }else{
//        if(mkdir($path)) {
//            echo $path.'创建成功';
//        }else{
//            echo $path.'创建失败';
//        }
//    }
//
//    echo '<br />';
//}
//注意，rmdir只删除非空目录
foreach(array('a','c','e') as $v) {
    $path = './dir/'.$v;
    if(file_exists($path) && is_dir($path)) {
        if(rmdir($path)){
            echo $path.'删除成功';
        }else{
            echo $path.'删除失败';
        }
    }else{
        echo "文件不存在";
    }
    echo '<br />';
}