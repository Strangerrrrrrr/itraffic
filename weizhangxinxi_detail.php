<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>违章信息详细</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>违章信息详细：</p>
					<?php
$sql="select * from weizhangxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%'>牌照：</td><td width='39%'><?php echo mysql_result($query,0,paizhao);?></td>      <td width='11%'>帐号：</td><td width='39%'><?php echo mysql_result($query,0,zhanghao);?></td></tr><tr>      <td width='11%'>违章类型：</td><td width='39%'><?php echo mysql_result($query,0,weizhangleixing);?></td>      <td width='11%'>违章时间：</td><td width='39%'><?php echo mysql_result($query,0,weizhangshijian);?></td></tr><tr>      <td width='11%'>地点：</td><td width='39%'><?php echo mysql_result($query,0,didian);?></td>      <td width='11%'>扣分：</td><td width='39%'><?php echo mysql_result($query,0,koufen);?></td></tr><tr>      <td width='11%'>罚款：</td><td width='39%'><?php echo mysql_result($query,0,fakuan);?></td>      <td width='11%'>反馈：</td><td width='39%'><?php echo mysql_result($query,0,fankui);?></td>      </tr><tr>      <td colspan=4 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='打印本页' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

