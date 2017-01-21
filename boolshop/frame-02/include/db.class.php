<?php
/*
 *  数据库类 不知道采用什么数据库，使用抽象 接口的思路
 */

abstract class db {
    /*连接服务器
     *parms $h 服务器地址
     *parms $u 用户名
     *parms $p 密码
     * return bool
     */
    public abstract function connect($h,$u,$p);
    /*发送查询
     * parms $sql 发送的sql语句
     * return mixed bool/resource
     */
    public abstract function query($sql);
    /*查询多行数据
     *parms $sql select型语句
     *return array/bool
     */
    public abstract function getAll($sql);
    /*查询单行数据
     *parms $sql select型语句
     *return array/bool
     */
    public abstract function getRow($sql);
    /*查询单个数据
     *parms $sql select型语句
     *return array/bool
     */
    public abstract function getOne($sql);
    /*自动执行insert/update语句
     *parms $sql select型语句
     *return array/bool
     */
    public abstract function autoExecute($table,$data,$act='insert',$where='');
}