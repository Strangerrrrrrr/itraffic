<?php
//��֤��½��Ϣ
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	
	$username=$_POST['username'];
	$pwd=$_POST['pwd1'];
	//$userpass=md5($userpass);
	$yzm=$_POST['yzm'];
		if ($username!="" && $pwd!="" && $yzm!="")
		{
			if($yzm==$_SESSION['regsession_code'])
			{
			
			}
			else
			{
				echo "<script language='javascript'>alert('��������ȷ��֤�룡');location.href='index.php';</script>";
				die;
			}
		$sql="select * from yonghuzhuce where zhanghao='$username' and mima='$pwd' and issh='��'";
		
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
			if($rowscount>0)
			{
					$_SESSION['username']=$username;
					$_SESSION['cx']=$_POST["cx"];
					$_SESSION['xm']=mysql_result($query,$i,xingming);
					$_SESSION['zp']=mysql_result($query,$i,zhaopian);
					//$row = mysql_fetch_row($query)
					//echo $_SESSION['cx'];
					echo "<script language='javascript'>alert('��½�ɹ���');location='index.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('�û�����������󣡻������ʺ�δ�����');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('������������');history.back();</script>";
		}
	
	
//}
?>