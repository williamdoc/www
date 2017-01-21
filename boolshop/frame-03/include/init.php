<?php
/*
 * 框架初始化
 */

define('DEBUG',true);
//初始化当前的绝对路径
//换成正斜线是因为 win/linux都支持正斜线，而linux不支持反斜线
define('ROOT',str_replace('\\','/',dirname(dirname(__FILE__))).'/');
require(ROOT.'include/db.class.php');
require(ROOT.'include/conf.class.php');
require(ROOT.'include/log.class.php');
require(ROOT.'include/lib_base.php');
//过滤参数,用递归的方式过滤$_GET,$_POST,$_COOKIE
$_GET = _addslashes($_GET);
$_POST = _addslashes($_POST);
$_COOKIE = _addslashes($_COOKIE);
//设置报错级别

if(defined('DEBUG')) {
    error_reporting(E_ALL);
}else{
    error_reporting(0);
}
