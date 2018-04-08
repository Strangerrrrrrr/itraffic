<?php
//验证登陆信息
session_start();
include_once 'conn.php';
	$username=$_POST['username'];
	$pwd=$_POST['pwd1'];
	// //$userpass=md5($userpass);
	$yzm=$_POST['yzm'];
		if ($username!="" && $pwd!="" && $yzm!="")
		{			
			if($yzm==$_SESSION['regsession_code'])
			{
				
			}
			else
			{
				echo "<script language='javascript'>alert('请输入正确验证码！');location.href='index.php';</script>";
				die;
			}
			
		$sql="select * from yonghuzhuce where zhanghao='$username' and mima='$pwd' and issh='是'";
		
		$query=mysqli_query($conn, $sql);
		$rowscount=mysqli_num_rows($query);
		echo $rowscount;
    $row = fetchOne($conn, $sql);
			if($rowscount>0)
			{
					$_SESSION['username']=$username;
					$_SESSION['cx'] = '普通用户';
					$_SESSION['xm'] = $row['xingming'];
					$_SESSION['zp'] = $row['zhaopian'];
					echo "<script language='javascript'>alert('登陆成功！');location='/';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('用户名或密码错误！或您的帐号未经审核');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('请输入完整！');history.back();</script>";
		}
?>