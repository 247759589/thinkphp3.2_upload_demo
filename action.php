<?php
header("Content-Type:text/html;charset=utf-8;");
require_once "Upload.class.php";

echo "<pre>";
print_r($_FILES);


$upload = new Upload();
$upload->maxSize   =     3145728 ;// ���ø����ϴ���С
$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// ���ø����ϴ�����
//$upload->saveName  =	 '';
$upload->rootPath  =     './upload/'; // ���ø����ϴ���Ŀ¼
$upload->subName   =     array('date','Ymd'); // ��Ŀ¼�������
// �ϴ��ļ� 
$info   =   $upload->upload($_FILES);
if(!$info){
	echo $upload->getError();
}else{
	echo print_r($info);
}

?>