<?php
/********************************************************
 * 无限极分类，牵扯2个应用
 * 1 找指定栏目的子栏目
 * 2 找指定栏目的子孙栏目，即子孙树
 * 3 找指定的栏目的父栏目/父父栏目......顶级栏目，即家谱树
 ********************************************************/
$area = array(
    array('id'=>1,'name'=>'安徽','parent'=>0),
    array('id'=>2,'name'=>'海淀','parent'=>7),
    array('id'=>3,'name'=>'濉溪县','parent'=>5),
    array('id'=>4,'name'=>'昌平','parent'=>7),
    array('id'=>5,'name'=>'淮北','parent'=>1),
    array('id'=>6,'name'=>'朝阳','parent'=>7),
    array('id'=>7,'name'=>'北京','parent'=>0),
    array('id'=>8,'name'=>'上地','parent'=>2),
);

//找子栏目
/*function findson($arr,$id){
    //数组循环一遍，谁的parent值等于$id,谁就是他儿子
    static $sons = array();
    foreach($arr as $v){
        if($v['parent'] == $id){
            $sons[] = $v;
        }
    }
    return $sons;
}
print_r(findson($area,0));*/
//找子孙栏目
/*function subtree($arr,$id=0,$lev=1){
    $subs = array();
    foreach($arr as $v){
        if($v['parent'] == $id){
            $v['lev'] = $lev;
            $subs[] = $v;
            $subs = array_merge($subs,subtree($arr,$v['id'],$lev+1));
        }
    }
    return $subs;
}
$tree = subtree($area,0);
foreach($tree as $v){
    echo str_repeat('&nbsp;&nbsp;',$v['lev']).$v['name'].'<br />';
}*/

/*
 * 用迭代法找子孙树
 */
function subtree($arr,$parent=0){
    $task =array($parent);//任务表
    $tree = array();//地区表
    while(!empty($task)){
        foreach($arr as $k=>$v){
            if($v['parent'] == $parent){
                $tree[] = $v;
                unset($arr[$k]);
            }
        }
    }


}