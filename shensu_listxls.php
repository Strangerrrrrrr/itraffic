<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=����.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����</title>
</head>

<body>

<p>���������б�</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>�ʺ�</td>    <td bgcolor='#CCFFFF'>Υ������</td>    <td bgcolor='#CCFFFF'>Υ��ʱ��</td>    <td bgcolor='#CCFFFF'>�ص�</td>    <td bgcolor='#CCFFFF'>�۷�</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>ʱ��</td>    <td bgcolor='#CCFFFF' width='80' align='center'>�Ƿ����</td>    
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
  </tr>
  <?php 
    $sql="select * from shensu order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,paizhao);?></td>    <td><?php echo mysql_result($query,$i,zhanghao);?></td>    <td><?php echo mysql_result($query,$i,weizhangleixing);?></td>    <td><?php echo mysql_result($query,$i,weizhangshijian);?></td>    <td><?php echo mysql_result($query,$i,didian);?></td>    <td><?php echo mysql_result($query,$i,koufen);?></td>    <td><?php echo mysql_result($query,$i,fakuan);?></td>        <td><?php echo mysql_result($query,$i,shijian);?></td>    <td align='center'><a href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=shensu" onclick="return confirm('��ȷ��Ҫִ�д˲�����')"><?php echo mysql_result($query,$i,"issh")?></a></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

