<?php
/*
 * 把excel导入数据库的方法
 * excel->csv->文件处理
 */
//echo '<pre>';
//$file = 'score.csv';
//$fh = fopen($file,'rb');

/*
 * 思路一：每次读一行，每一行的内容再逗号拆成数组
 */
//while(!feof($fh)){
//    $row =fgets($fh);
//    print_r(explode(',',$row));
//}
/*
 * 已封装好的fgetcsv()函数
 */
//while(!feof($fh)){
//    $row = fgetcsv($fh);
//    print_r($row);
//}
/*有一堆小文件 a.txt b.txt c.txt
 * 删除掉
 * 含有指定文字内容的文件
 * 或者小于10字节的文件
 * 思路：循环文件名 判断大小，读内容
 * 用unlink来删除
 */
foreach(array('a.txt','b.txt','c.txt') as $v){
    $file = './article/'.$v;
    //echo $file,"<br />";
    //判断大小
    if(filesize($file) < 10){
        echo $file.'小于10字节，已删除<br />';
        unlink($file);
    }
    // 大于10字节，就判断内容
    $cont = file_get_contents($file);
    if($cont){
        if(stripos($cont,'test') !==false){
            unlink($file);
            echo $file.'含有敏感词汇，已删除<br />';
        }
    }

}
