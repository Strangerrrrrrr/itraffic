<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>违章信息</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有违章信息列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 牌照：<input name="paizhao" type="text" id="paizhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 帐号：<input name="zhanghao" type="text" id="zhanghao" style='border:solid 1px #000000; color:#666666;width:80px' /> 违章类型：<input name="weizhangleixing" type="text" id="weizhangleixing" style='border:solid 1px #000000; color:#666666;width:80px' /> 违章时间：<input name="weizhangshijian" type="text" id="weizhangshijian" style='border:solid 1px #000000; color:#666666;width:80px' /> 地点：<input name="didian" type="text" id="didian" style='border:solid 1px #000000; color:#666666;width:80px' /> 扣分：<input name="koufen1" type="text" id="koufen1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="koufen2" type="text" id="koufen2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> 罚款：<input name="fakuan1" type="text" id="fakuan1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="fakuan2" type="text" id="fakuan2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> 排序
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
    <td bgcolor='#CCFFFF'>牌照</td>
    <td bgcolor='#CCFFFF'>帐号</td>
    <td bgcolor='#CCFFFF'>违章类型</td>
    <td bgcolor='#CCFFFF'>违章时间</td>
    <td bgcolor='#CCFFFF'>地点</td>
    <td bgcolor='#CCFFFF'>扣分</td>
    <td bgcolor='#CCFFFF'>罚款</td>
    <td bgcolor='#CCFFFF'>反馈</td>
    <td bgcolor='#CCFFFF' width='80' align='center'>是否支付</td>
    
	
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
    <td width="120" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from weizhangxinxi where 1=1";
  
if ($_POST["paizhao"]!=""){$nreqpaizhao=$_POST["paizhao"];$sql=$sql." and paizhao like '%$nreqpaizhao%'";}
if ($_POST["zhanghao"]!=""){$nreqzhanghao=$_POST["zhanghao"];$sql=$sql." and zhanghao like '%$nreqzhanghao%'";}
if ($_POST["weizhangleixing"]!=""){$nreqweizhangleixing=$_POST["weizhangleixing"];$sql=$sql." and weizhangleixing like '%$nreqweizhangleixing%'";}
if ($_POST["weizhangshijian"]!=""){$nreqweizhangshijian=$_POST["weizhangshijian"];$sql=$sql." and weizhangshijian like '%$nreqweizhangshijian%'";}
if ($_POST["didian"]!=""){$nreqdidian=$_POST["didian"];$sql=$sql." and didian like '%$nreqdidian%'";}
if ($_POST["koufen1"]!=""){$nreqkoufen1=$_POST["koufen1"];$sql=$sql." and koufen >= $nreqkoufen1";}
if ($_POST["koufen2"]!=""){$nreqkoufen2=$_POST["koufen2"];$sql=$sql." and koufen <= $nreqkoufen2";}
if ($_POST["fakuan1"]!=""){$nreqfakuan1=$_POST["fakuan1"];$sql=$sql." and fakuan >= $nreqfakuan1";}
if ($_POST["fakuan2"]!=""){$nreqfakuan2=$_POST["fakuan2"];$sql=$sql." and fakuan <= $nreqfakuan2";}
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
    <td><?php echo mysql_result($query,$i,paizhao);?></td>
    <td><?php echo mysql_result($query,$i,zhanghao);?></td>
    <td><?php echo mysql_result($query,$i,weizhangleixing);?></td>
    <td><?php echo mysql_result($query,$i,weizhangshijian);?></td>
    <td><?php echo mysql_result($query,$i,didian);?></td>
    <td><?php echo mysql_result($query,$i,koufen);?></td>
    <td><?php echo mysql_result($query,$i,fakuan);?></td>
    <td><?php echo mysql_result($query,$i,fankui);?></td>
    <td align='center'><?php echo mysql_result($query,$i,iszf);?></td>
    
	
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="120" align="center"><a href="weizhangxinxi_updtlb.php?id=<?php echo mysql_result($query,$i,"id");?>">反馈</a> <a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=weizhangxinxi" onclick="return confirm('真的要删除？')">删除</a> <a href="weizhangxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">修改</a> <a href="weizhangxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank">详细</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='weizhangxinxi_listxls.php';" value="导出EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="weizhangxinxi_list.php?pagecurrent=1">首页</a>, <a href="weizhangxinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="weizhangxinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="weizhangxinxi_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

</body>
</html>

