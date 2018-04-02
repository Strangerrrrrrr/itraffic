<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=申诉.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>申诉</title>
</head>

<body>

<p>已有申诉列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>牌照</td>    <td bgcolor='#CCFFFF'>帐号</td>    <td bgcolor='#CCFFFF'>违章类型</td>    <td bgcolor='#CCFFFF'>违章时间</td>    <td bgcolor='#CCFFFF'>地点</td>    <td bgcolor='#CCFFFF'>扣分</td>    <td bgcolor='#CCFFFF'>罚款</td>    <td bgcolor='#CCFFFF'>时间</td>    <td bgcolor='#CCFFFF' width='80' align='center'>是否审核</td>    
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
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
    <td><?php echo mysql_result($query,$i,paizhao);?></td>    <td><?php echo mysql_result($query,$i,zhanghao);?></td>    <td><?php echo mysql_result($query,$i,weizhangleixing);?></td>    <td><?php echo mysql_result($query,$i,weizhangshijian);?></td>    <td><?php echo mysql_result($query,$i,didian);?></td>    <td><?php echo mysql_result($query,$i,koufen);?></td>    <td><?php echo mysql_result($query,$i,fakuan);?></td>        <td><?php echo mysql_result($query,$i,shijian);?></td>    <td align='center'><a href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=shensu" onclick="return confirm('您确定要执行此操作？')"><?php echo mysql_result($query,$i,"issh")?></a></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

