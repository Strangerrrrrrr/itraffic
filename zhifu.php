<?php
//��֤��½��Ϣ

include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	$sql="update ".$_GET["biao"]." set iszf='��' where id=$id";
	
	 	mysql_query($sql);
	

		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('֧���ɹ���');location.href='sy.php';</script>";
	
//}
?>