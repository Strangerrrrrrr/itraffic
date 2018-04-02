<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=用户注册.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户注册</title>
</head>

<body>

<p>已有用户注册列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>帐号</td>    <td bgcolor='#CCFFFF'>密码</td>    <td bgcolor='#CCFFFF'>姓名</td>    <td bgcolor='#CCFFFF'>性别</td>    <td bgcolor='#CCFFFF'>手机</td>    <td bgcolor='#CCFFFF'>身份证</td>    <td bgcolor='#CCFFFF'>车辆照片</td>    <td bgcolor='#CCFFFF'>牌照</td>    <td bgcolor='#CCFFFF'>行驶证照片</td>    <td bgcolor='#CCFFFF'>驾照照片</td>    <td bgcolor='#CCFFFF'>身份证照片</td>    <td bgcolor='#CCFFFF'>剩余分数</td>    <td bgcolor='#CCFFFF'>驾驶证过期时间</td>    <td bgcolor='#CCFFFF'>车辆安检通过</td>    <td bgcolor='#CCFFFF'>安检到期日期</td>    <td bgcolor='#CCFFFF' width='80' align='center'>是否审核</td>    
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
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
    <td><?php echo mysql_result($query,$i,zhanghao);?></td>    <td><?php echo mysql_result($query,$i,mima);?></td>    <td><?php echo mysql_result($query,$i,xingming);?></td>    <td><?php echo mysql_result($query,$i,xingbie);?></td>    <td><?php echo mysql_result($query,$i,shouji);?></td>    <td><?php echo mysql_result($query,$i,shenfenzheng);?></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,cheliangzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,cheliangzhaopian) ?>' width='80' height='88' border='0'></a></td>    <td><?php echo mysql_result($query,$i,paizhao);?></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,xingshizhengzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,xingshizhengzhaopian) ?>' width='80' height='88' border='0'></a></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,jiazhaozhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,jiazhaozhaopian) ?>' width='80' height='88' border='0'></a></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,shenfenzhengzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,shenfenzhengzhaopian) ?>' width='80' height='88' border='0'></a></td>    <td><?php echo mysql_result($query,$i,shengyufenshu);?></td>    <td><?php echo mysql_result($query,$i,jiashizhengguoqishijian);?></td>    <td><?php echo mysql_result($query,$i,chelianganjiantongguo);?></td>    <td><?php echo mysql_result($query,$i,anjiandaoqiriqi);?></td>    <td align='center'><a href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=yonghuzhuce" onclick="return confirm('您确定要执行此操作？')"><?php echo mysql_result($query,$i,"issh")?></a></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

