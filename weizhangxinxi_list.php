<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Υ����Ϣ</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>����Υ����Ϣ�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: ���գ�<input name="paizhao" type="text" id="paizhao" style='border:solid 1px #000000; color:#666666;width:80px' /> �ʺţ�<input name="zhanghao" type="text" id="zhanghao" style='border:solid 1px #000000; color:#666666;width:80px' /> Υ�����ͣ�<input name="weizhangleixing" type="text" id="weizhangleixing" style='border:solid 1px #000000; color:#666666;width:80px' /> Υ��ʱ�䣺<input name="weizhangshijian" type="text" id="weizhangshijian" style='border:solid 1px #000000; color:#666666;width:80px' /> �ص㣺<input name="didian" type="text" id="didian" style='border:solid 1px #000000; color:#666666;width:80px' /> �۷֣�<input name="koufen1" type="text" id="koufen1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="koufen2" type="text" id="koufen2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> ���<input name="fakuan1" type="text" id="fakuan1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="fakuan2" type="text" id="fakuan2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> ����
  <select name="paixu" id="paixu">
    <option value="addtime">���ʱ��</option>
    
  </select>
  <select name="px" id="px">
    <option value="desc">����</option>
    <option value="asc">����</option>
  </select>
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>����</td>
    <td bgcolor='#CCFFFF'>�ʺ�</td>
    <td bgcolor='#CCFFFF'>Υ������</td>
    <td bgcolor='#CCFFFF'>Υ��ʱ��</td>
    <td bgcolor='#CCFFFF'>�ص�</td>
    <td bgcolor='#CCFFFF'>�۷�</td>
    <td bgcolor='#CCFFFF'>����</td>
    <td bgcolor='#CCFFFF'>����</td>
    <td bgcolor='#CCFFFF' width='80' align='center'>�Ƿ�֧��</td>
    
	
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
    <td width="120" align="center" bgcolor="#CCFFFF">����</td>
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
  $pagelarge=10;//ÿҳ������
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
    <td width="120" align="center"><a href="weizhangxinxi_updtlb.php?id=<?php echo mysql_result($query,$i,"id");?>">����</a> <a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=weizhangxinxi" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="weizhangxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a> <a href="weizhangxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank">��ϸ</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='weizhangxinxi_listxls.php';" value="����EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="weizhangxinxi_list.php?pagecurrent=1">��ҳ</a>, <a href="weizhangxinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="weizhangxinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="weizhangxinxi_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

</body>
</html>

