<?php
/****************************************************
 * 作用：记录信息到日志
 * 思路：写入文件(fopen,fwrite..)，如果文件>1M，
 * 重新写一份
 *
 ***************************************************
 *在1次进程中，filesize的结果会被缓存（很多文件信息
 * 获取函数的结果都会被缓存，如filemtime）
 for($file='./a.txt',$i=0;$i<100;$i++){
    echo filesize($file).'<br />';
    $fh = fopen($file,'ab');
    fwrite($fh,$i."\r\n");
    fclose($fh);
 }
echo 'OK';
 ***************************************************/

class log {
    const LOGFILE = 'curr.log';//日志文件名称
    //写日志
    public static function write($cont){
        $cont .="\r\n";
        //判断是否备份
        $log = self::isBak();//计算出日志文件的地址
        $fh = fopen($log,'ab');
        fwrite($fh,$cont);
        fclose($fh);

    }
    //备份日志
    public static function bak(){
        $log = ROOT.'data/log/'. self::LOGFILE;
        $bak = ROOT.'data/log/'.date('ymd').mt_rand(10000,99999).'.bak';
        return rename($log,$bak);
    }
    //读取并判断日志大小
    public static function isBak(){
        $log = ROOT . 'data/log/' . self::LOGFILE;
        if(!file_exists($log)){
            return $log;
        }
        clearstatcache(true,$log);
        $size = filesize($log);
        if( $size <= 1024*1024){
           return $log;
        }
        if(!self::bak()){
            return $log;
        }else{
            touch($log);
            return $log;
        }
    }
}