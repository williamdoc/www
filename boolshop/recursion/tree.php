<?php
/*
 * 打印级联目录
 */

function recdir($path,$lev=1) {
    $dh = opendir($path);
    while(($row = readdir($dh)) !==false) {
        //过滤'.'和'..',防止陷入死循环
        if($row == '.' || $row == '..'){
            continue;
        }
        echo '|-'.str_repeat('--',$lev) . $row.'<br />';
        if(is_dir($path . '/' . $row)) {
            recdir($path . '/' . $row,$lev+1);
        }
    }
    closedir($dh);
}
recdir('./');