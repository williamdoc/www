<?php
/*文件操作
 * fopen
 * fread
 * fwrite
 * fclose
 */

/*
 * fopen()打开一个文件，返回一个句柄资源
 *w:写入模式（fread读不了），并把文件大小截为0（）
 */
$file = "./test.html";
$fh = fopen($file,'r+');
echo fread($fh,10);
echo fwrite($fh,"ooooooooooooooo");
fclose($fh);