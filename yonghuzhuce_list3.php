<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户注册</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有用户注册列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 帐号：<input name="zhanghao" type="text" id="zhanghao" style='border:solid 1px #000000; color:#666666;width:80px' /> 姓名：<input name="xingming" type="text" id="xingming" style='border:solid 1px #000000; color:#666666;width:80px' /> 性别：<select name='xingbie' id='xingbie' style='border:solid 1px #000000; color:#666666;'><option value="">所有</option><option value="男">男</option><option value="女">女</option></select> 手机：<input name="shouji" type="text" id="shouji" style='border:solid 1px #000000; color:#666666;width:80px' /> 身份证：<input name="shenfenzheng" type="text" id="shenfenzheng" style='border:solid 1px #000000; color:#666666;width:80px' /> 牌照：<input name="paizhao" type="text" id="paizhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 剩余分数：<input name="shengyufenshu1" type="text" id="shengyufenshu1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="shengyufenshu2" type="text" id="shengyufenshu2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> 排序
  <select name="paixu" id="paixu">
    <option value="addtime">添加时间</option>
    
  </select>
  <select name="px" id="px">
    <option value="desc">降序</option>
    <option value="asc">升序</option>
  </select>
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>帐号</td>
    <td bgcolor='#CCFFFF'>密码</td>
    <td bgcolor='#CCFFFF'>姓名</td>
    <td bgcolor='#CCFFFF'>性别</td>
    <td bgcolor='#CCFFFF'>手机</td>
    <td bgcolor='#CCFFFF'>身份证</td>
    <td bgcolor='#CCFFFF'>车辆照片</td>
    <td bgcolor='#CCFFFF'>牌照</td>
    <td bgcolor='#CCFFFF'>行驶证照片</td>
    <td bgcolor='#CCFFFF'>驾照照片</td>
    <td bgcolor='#CCFFFF'>身份证照片</td>
    <td bgcolor='#CCFFFF'>剩余分数</td>
    <td width="120" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from yonghuzhuce where 1=1";
  
if ($_POST["zhanghao"]!=""){$nreqzhanghao=$_POST["zhanghao"];$sql=$sql." and zhanghao like '%$nreqzhanghao%'";}
if ($_POST["xingming"]!=""){$nreqxingming=$_POST["xingming"];$sql=$sql." and xingming like '%$nreqxingming%'";}
if ($_POST["xingbie"]!=""){$nreqxingbie=$_POST["xingbie"];$sql=$sql." and xingbie like '%$nreqxingbie%'";}
if ($_POST["shouji"]!=""){$nreqshouji=$_POST["shouji"];$sql=$sql." and shouji like '%$nreqshouji%'";}
if ($_POST["shenfenzheng"]!=""){$nreqshenfenzheng=$_POST["shenfenzheng"];$sql=$sql." and shenfenzheng like '%$nreqshenfenzheng%'";}
if ($_POST["paizhao"]!=""){$nreqpaizhao=$_POST["paizhao"];$sql=$sql." and paizhao like '%$nreqpaizhao%'";}
if ($_POST["shengyufenshu1"]!=""){$nreqshengyufenshu1=$_POST["shengyufenshu1"];$sql=$sql." and shengyufenshu >= $nreqshengyufenshu1";}
if ($_POST["shengyufenshu2"]!=""){$nreqshengyufenshu2=$_POST["shengyufenshu2"];$sql=$sql." and shengyufenshu <= $nreqshengyufenshu2";}
  if($_POST["paixu"]!="")
  {
  	$sql=$sql." order by ".$_POST["paixu"]." ".$_POST["px"]."";
  }
  else
  {
  	$sql=$sql." order by id desc";
  }
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
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,zhanghao);?></td>
    <td><?php echo mysql_result($query,$i,mima);?></td>
    <td><?php echo mysql_result($query,$i,xingming);?></td>
    <td><?php echo mysql_result($query,$i,xingbie);?></td>
    <td><?php echo mysql_result($query,$i,shouji);?></td>
    <td><?php echo mysql_result($query,$i,shenfenzheng);?></td>
    <td width='80'><a href="<?php echo mysql_result($query,$i,cheliangzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,cheliangzhaopian) ?>' width='80' height='88' border='0'></a></td>
    <td><?php echo mysql_result($query,$i,paizhao);?></td>
    <td width='80'><a href="<?php echo mysql_result($query,$i,xingshizhengzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,xingshizhengzhaopian) ?>' width='80' height='88' border='0'></a></td>
    <td width='80'><a href="<?php echo mysql_result($query,$i,jiazhaozhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,jiazhaozhaopian) ?>' width='80' height='88' border='0'></a></td>
    <td width='80'><a href="<?php echo mysql_result($query,$i,shenfenzhengzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,shenfenzhengzhaopian) ?>' width='80' height='88' border='0'></a></td>
    <td><?php echo mysql_result($query,$i,shengyufenshu);?></td>
    <td width="120" align="center"> <a href="weizhangxinxi_add.php?id=<?php echo mysql_result($query,$i,"id");?>&shengyufenshu=<?php echo mysql_result($query,$i,"shengyufenshu");?>&zhanghao=<?php echo mysql_result($query,$i,"zhanghao");?>">违章添加</a> <a href="yonghuzhuce_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='yonghuzhuce_listxls.php';" value="导出EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="yonghuzhuce_list.php?pagecurrent=1">首页</a>, <a href="yonghuzhuce_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="yonghuzhuce_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="yonghuzhuce_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

</body>
</html>

