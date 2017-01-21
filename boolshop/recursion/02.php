<?php
/*
 * 打印级联目录
 */

function recdir($path) {
    $dh = opendir($path);
    while(($row = readdir($dh)) !==false) {
        //过滤'.'和'..',防止陷入死循环
        if($row == '.' || $row == '..'){
            continue;
        }
        echo $row.'<br />';
        if(is_dir($path . '/' . $row)) {
            recdir($path . '/' . $row);
        }
    }
    closedir($dh);
}
recdir('./');