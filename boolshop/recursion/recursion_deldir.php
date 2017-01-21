<?php
/*
 * 递归删除目录
 */
function deldir($path) {
    //不是目录，直接返回
    if(!is_dir($path)){
        return null;
    }
    $dh = opendir($path);
    while(($row = readdir($dh)) !==false) {
        if($row == '.' || $row == '..') {
            continue;
        }
        //判断是否是普通文件
        if(!is_dir($path . '/' . $row)) {
            unlink($path . '/' . $row);
        }else {
            deldir($path . '/' .$row);//递归把子目录、子文件删了

        }
    }
    closedir($dh);
    rmdir($path);
    return true;
}
echo deldir('./e/d/g');