<?php
//多维数组转义函数
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
