<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=�û�ע��.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�û�ע��</title>
</head>

<body>

<p>�����û�ע���б�</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>�ʺ�</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>�Ա�</td>    <td bgcolor='#CCFFFF'>�ֻ�</td>    <td bgcolor='#CCFFFF'>���֤</td>    <td bgcolor='#CCFFFF'>������Ƭ</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>��ʻ֤��Ƭ</td>    <td bgcolor='#CCFFFF'>������Ƭ</td>    <td bgcolor='#CCFFFF'>���֤��Ƭ</td>    <td bgcolor='#CCFFFF'>ʣ�����</td>    <td bgcolor='#CCFFFF'>��ʻ֤����ʱ��</td>    <td bgcolor='#CCFFFF'>��������ͨ��</td>    <td bgcolor='#CCFFFF'>���쵽������</td>    <td bgcolor='#CCFFFF' width='80' align='center'>�Ƿ����</td>    
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
  </tr>
  <?php 
    $sql="select * from yonghuzhuce order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,zhanghao);?></td>    <td><?php echo mysql_result($query,$i,mima);?></td>    <td><?php echo mysql_result($query,$i,xingming);?></td>    <td><?php echo mysql_result($query,$i,xingbie);?></td>    <td><?php echo mysql_result($query,$i,shouji);?></td>    <td><?php echo mysql_result($query,$i,shenfenzheng);?></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,cheliangzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,cheliangzhaopian) ?>' width='80' height='88' border='0'></a></td>    <td><?php echo mysql_result($query,$i,paizhao);?></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,xingshizhengzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,xingshizhengzhaopian) ?>' width='80' height='88' border='0'></a></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,jiazhaozhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,jiazhaozhaopian) ?>' width='80' height='88' border='0'></a></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,shenfenzhengzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,shenfenzhengzhaopian) ?>' width='80' height='88' border='0'></a></td>    <td><?php echo mysql_result($query,$i,shengyufenshu);?></td>    <td><?php echo mysql_result($query,$i,jiashizhengguoqishijian);?></td>    <td><?php echo mysql_result($query,$i,chelianganjiantongguo);?></td>    <td><?php echo mysql_result($query,$i,anjiandaoqiriqi);?></td>    <td align='center'><a href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=yonghuzhuce" onclick="return confirm('��ȷ��Ҫִ�д˲�����')"><?php echo mysql_result($query,$i,"issh")?></a></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

