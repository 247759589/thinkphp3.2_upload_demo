<?php
header("Content-Type:text/html;charset=utf-8;");
require_once "Upload.class.php";

echo "<pre>";
print_r($_FILES);


$upload = new Upload();
$upload->maxSize   =     3145728 ;// 设置附件上传大小
$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
//$upload->saveName  =	 '';
$upload->rootPath  =     './upload/'; // 设置附件上传根目录
$upload->subName   =     array('date','Ymd'); // 子目录保存规则
// 上传文件 
$info   =   $upload->upload($_FILES);
if(!$info){
	echo $upload->getError();
}else{
	echo print_r($info);
}

?>