<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Υ����Ϣ��ϸ</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>Υ����Ϣ��ϸ��</p>
					<?php
$sql="select * from weizhangxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%'>���գ�</td><td width='39%'><?php echo mysql_result($query,0,paizhao);?></td>      <td width='11%'>�ʺţ�</td><td width='39%'><?php echo mysql_result($query,0,zhanghao);?></td></tr><tr>      <td width='11%'>Υ�����ͣ�</td><td width='39%'><?php echo mysql_result($query,0,weizhangleixing);?></td>      <td width='11%'>Υ��ʱ�䣺</td><td width='39%'><?php echo mysql_result($query,0,weizhangshijian);?></td></tr><tr>      <td width='11%'>�ص㣺</td><td width='39%'><?php echo mysql_result($query,0,didian);?></td>      <td width='11%'>�۷֣�</td><td width='39%'><?php echo mysql_result($query,0,koufen);?></td></tr><tr>      <td width='11%'>���</td><td width='39%'><?php echo mysql_result($query,0,fakuan);?></td>      <td width='11%'>������</td><td width='39%'><?php echo mysql_result($query,0,fankui);?></td>      </tr><tr>      <td colspan=4 align=center><input type=button name=Submit5 value=���� onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='��ӡ��ҳ' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

