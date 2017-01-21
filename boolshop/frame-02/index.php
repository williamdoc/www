<?php
require('./include/init.php');

log::write('记录');

//class mysql {
//    public function query($sql){
//        log::write($sql);
//    }
//}
//$mysql = new mysql();
//
//for($i =0;$i<100;$i++) {
//    $sql = 'select goods_id,goods_name,shop_price from goods where goods_id= '.mt_rand(1,1000);
//    $mysql->query($sql);
//}
echo '执行完毕';