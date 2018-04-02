<?php 
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$wangzhanmingcheng=$_POST["wangzhanmingcheng"];$wangzhi=$_POST["wangzhi"];
	$sql="insert into youqinglianjie(wangzhanmingcheng,wangzhi) values('$wangzhanmingcheng','$wangzhi') ";
	mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');location.href='youqinglianjie_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>友情连接</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>
<p>添加友情连接： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.wangzhanmingcheng.value==""){alert("请输入网站名称");document.form1.wangzhanmingcheng.focus();return false;}if(document.form1.wangzhi.value==""){alert("请输入网址");document.form1.wangzhi.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.asp?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>网站名称：</td><td><input name='wangzhanmingcheng' type='text' id='wangzhanmingcheng' value='' size='50'  />&nbsp;*</td></tr><tr><td>网址：</td><td><input name='wangzhi' type='text' id='wangzhi' value='' size='50'  />&nbsp;*</td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

