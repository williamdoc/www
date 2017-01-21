<?php
require('./include/init.php');
//读取选项
$conf =conf::getIns();
echo $conf->host.'<br />';
echo $conf->user.'<br />';
//动态追加选项
$conf->template_dir = 'D:/www/smarty';
echo $conf->template_dir;