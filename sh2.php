<?php
//��֤��½��Ϣ

include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	$yuan=$_GET["yuan"];
	$tablename=$_GET["tablename"];
	$koufen=$_GET["koufen"];
	$zhanghao=$_GET["zhanghao"];
	if($yuan=="��")
	{
	$sql="update $tablename set issh='��' where id=$id";
	}
	else
	{
	$sql="update $tablename set issh='��' where id=$id";
	$sql2="update yonghuzhuce set shengyufenshu=shengyufenshu+$koufen where zhanghao='".$zhanghao."' ";
	mysql_query($sql2);
	}
	 	mysql_query($sql);
		
	

		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('��˳ɹ���');location.href='$comewhere';</script>";
	
//}
?>