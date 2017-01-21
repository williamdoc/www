<?php
/*
 * 文件内容读取写入
 */


/*file_get_contents()可以获取一个文件的内容或一个网络资源的内容
 *file_get_contents是读文件/读网络比较快捷的一个函数，但是要注意，
 *这个函数一次性把文件的内容全部读出来，放在内存里 因此，工作中处理
 *上百兆的大文件时，慎用此函数
 * 文件不存在时warning
 */
//要求：把a.txt的内容读出来，赋给$str
$file = 'a.txt';
$str =  file_get_contents($file);
//$url = 'http://localhost/boolshop/01.php';
//echo file_get_contents($url);

/*
 * file_put_contents()函数用来把内容写入到文件，也是一个快捷函数，
 *帮我们封装打开写入关闭的细节
 */
//读出来的内容，写入到其它文件
file_put_contents('./b.txt',$str);

/*
 * 最简单的小偷程序
 */
$url = 'http://news.ifeng.com/a/20170111/50557673_0.shtml';
$html = file_get_contents($url);
if(file_put_contents('test.html',$html)){
    echo '成功';
}else{
    echo '失败';
}
