<?php
/*
 * 递归对数组转义
 */
//三维数组数组转义函数
$arr = array('a"b',array("c'd",array('e"f')));
function _addslashes($arr){
    foreach($arr as $k=>$v){
        if(is_string($v)){
            $arr[$k] = addslashes($v);//如果是数组，调用自身继续转义
        }else if(is_array($v)){
            $arr[$k] = _addslashes($v);
        }
    }
    return $arr;
}
print_r(_addslashes($arr));//结果 Array ( [0] => a\"b [1] => Array ( [0] => c\'d [1] => Array ( [0] => e\"f ) ) )
