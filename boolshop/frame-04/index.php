<?php
define('ACC',1);
require('./include/init.php');
$mysql = mysql::getIns();

$t1 = $_GET['t1'];
$T2 = $_GET['t2'];
$sql = "insert into test(t1,t2) values('$t1,$t2')";
var_dump($mysql->query($sql));