<?php 
session_start();
include_once 'conn.php';
$lb=$_GET["lb"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $lb;?></title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有<?php echo $lb;?>列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 标题：<input name="biaoti" type="text" id="biaoti" />
  <input type="submit" name="Submit" value="查找" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>标题</td><td bgcolor='#CCFFFF'>类别</td><td bgcolor='#CCFFFF'>首页图片</td><td bgcolor='#CCFFFF'>点击率</td><td bgcolor='#CCFFFF'>添加人</td>
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
    <td width="70" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from xinwentongzhi where leibie='".$lb."'";
  
if ($_POST["biaoti"]!=""){$nreqbiaoti=$_POST["biaoti"];$sql=$sql." and biaoti like '%$nreqbiaoti%'";}
if($lb!=""){$sql=$sql." and leibie='$lb'";}
  $sql=$sql." order by id desc";

$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,biaoti);?></td><td><?php echo mysql_result($query,$i,leibie);?></td><td width='80'>
	<?php if( mysql_result($query,$i,shouyetupian)==null)
	{
	?>
	
	<img src='images/nopic.jpg' width='80' height='88' border='0'>
	<?php
	}
	else
	{
	?>
	<a href="<?php echo mysql_result($query,$i,shouyetupian) ?>" target='_blank'>
	<img src='<?php echo mysql_result($query,$i,shouyetupian) ?>' width='80' height='88' border='0'></a>
	<?php
	}
	?>
	
	
	</td><td><?php echo mysql_result($query,$i,dianjilv);?></td><td><?php echo mysql_result($query,$i,tianjiaren);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="70" align="center"><a href="delgg.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=xinwentongzhi&lb=<?php echo $lb;?>" onclick="return confirm('真的要删除？')">删除</a> <a href="xinwentongzhi_updt.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>">修改</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php
		echo $rowscount;
	?>条,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" />
</p>
<p align="center"><a href="xinwentongzhi_list.php?pagecurrent=1&lb=<?php echo $lb?>">首页</a>, <a href="xinwentongzhi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>&lb=<?php echo $lb?>">前一页</a> ,<a href="xinwentongzhi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>&lb=<?php echo $lb?>">后一页</a>, <a href="xinwentongzhi_list.php?pagecurrent=<?php echo $pagecount;?>&lb=<?php echo $lb?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

<p>&nbsp; </p>

</body>
</html>

