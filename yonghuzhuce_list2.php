<?php
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�û�ע��</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>�����û�ע���б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: �ʺţ�<input name="zhanghao" type="text" id="zhanghao" style='border:solid 1px #000000; color:#666666;width:80px' /> ������<input name="xingming" type="text" id="xingming" style='border:solid 1px #000000; color:#666666;width:80px' /> �Ա�<select name='xingbie' id='xingbie' style='border:solid 1px #000000; color:#666666;'><option value="">����</option><option value="��">��</option><option value="Ů">Ů</option></select> �ֻ���<input name="shouji" type="text" id="shouji" style='border:solid 1px #000000; color:#666666;width:80px' /> ���֤��<input name="shenfenzheng" type="text" id="shenfenzheng" style='border:solid 1px #000000; color:#666666;width:80px' /> ���գ�<input name="paizhao" type="text" id="paizhao" style='border:solid 1px #000000; color:#666666;width:80px' /> ʣ�������<input name="shengyufenshu1" type="text" id="shengyufenshu1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="shengyufenshu2" type="text" id="shengyufenshu2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> ��ʻ֤����ʱ�䣺<input name="jiashizhengguoqishijian1" type="text" id="jiashizhengguoqishijian1"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' />-<input name="jiashizhengguoqishijian2" type="text" id="jiashizhengguoqishijian2"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' /> ��������ͨ����<select name='chelianganjiantongguo' id='chelianganjiantongguo' style='border:solid 1px #000000; color:#666666;'><option value="">����</option><option value="��">��</option><option value="��">��</option></select> ���쵽�����ڣ�<input name="anjiandaoqiriqi1" type="text" id="anjiandaoqiriqi1"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' />-<input name="anjiandaoqiriqi2" type="text" id="anjiandaoqiriqi2"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' /> ����
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
    <td bgcolor='#CCFFFF'>�ʺ�</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>�Ա�</td>    <td bgcolor='#CCFFFF'>�ֻ�</td>    <td bgcolor='#CCFFFF'>���֤</td>    <td bgcolor='#CCFFFF'>������Ƭ</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>��ʻ֤��Ƭ</td>    <td bgcolor='#CCFFFF'>������Ƭ</td>    <td bgcolor='#CCFFFF'>���֤��Ƭ</td>    <td bgcolor='#CCFFFF'>ʣ�����</td>    <td bgcolor='#CCFFFF'>��ʻ֤����ʱ��</td>    <td bgcolor='#CCFFFF'>��������ͨ��</td>    <td bgcolor='#CCFFFF'>���쵽������</td>    <td bgcolor='#CCFFFF' width='80' align='center'>�Ƿ����</td>
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
    <td width="70" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from yonghuzhuce where zhanghao='".$_SESSION['username']."'";
  if ($_POST["zhanghao"]!=""){$nreqzhanghao=$_POST["zhanghao"];$sql=$sql." and zhanghao like '%$nreqzhanghao%'";}if ($_POST["xingming"]!=""){$nreqxingming=$_POST["xingming"];$sql=$sql." and xingming like '%$nreqxingming%'";}if ($_POST["xingbie"]!=""){$nreqxingbie=$_POST["xingbie"];$sql=$sql." and xingbie like '%$nreqxingbie%'";}if ($_POST["shouji"]!=""){$nreqshouji=$_POST["shouji"];$sql=$sql." and shouji like '%$nreqshouji%'";}if ($_POST["shenfenzheng"]!=""){$nreqshenfenzheng=$_POST["shenfenzheng"];$sql=$sql." and shenfenzheng like '%$nreqshenfenzheng%'";}if ($_POST["paizhao"]!=""){$nreqpaizhao=$_POST["paizhao"];$sql=$sql." and paizhao like '%$nreqpaizhao%'";}if ($_POST["shengyufenshu1"]!=""){$nreqshengyufenshu1=$_POST["shengyufenshu1"];$sql=$sql." and shengyufenshu >= $nreqshengyufenshu1";}if ($_POST["shengyufenshu2"]!=""){$nreqshengyufenshu2=$_POST["shengyufenshu2"];$sql=$sql." and shengyufenshu <= $nreqshengyufenshu2";}if ($_POST["jiashizhengguoqishijian1"]!=""){$nreqjiashizhengguoqishijian1=$_POST["jiashizhengguoqishijian1"];$sql=$sql." and jiashizhengguoqishijian >= '$nreqjiashizhengguoqishijian1'";}if ($_POST["jiashizhengguoqishijian2"]!=""){$nreqjiashizhengguoqishijian2=$_POST["jiashizhengguoqishijian2"];$sql=$sql." and jiashizhengguoqishijian <= '$nreqjiashizhengguoqishijian2'";}if ($_POST["chelianganjiantongguo"]!=""){$nreqchelianganjiantongguo=$_POST["chelianganjiantongguo"];$sql=$sql." and chelianganjiantongguo like '%$nreqchelianganjiantongguo%'";}if ($_POST["anjiandaoqiriqi1"]!=""){$nreqanjiandaoqiriqi1=$_POST["anjiandaoqiriqi1"];$sql=$sql." and anjiandaoqiriqi >= '$nreqanjiandaoqiriqi1'";}if ($_POST["anjiandaoqiriqi2"]!=""){$nreqanjiandaoqiriqi2=$_POST["anjiandaoqiriqi2"];$sql=$sql." and anjiandaoqiriqi <= '$nreqanjiandaoqiriqi2'";}
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
    <td><?php echo mysql_result($query,$i,zhanghao);?></td>    <td><?php echo mysql_result($query,$i,mima);?></td>    <td><?php echo mysql_result($query,$i,xingming);?></td>    <td><?php echo mysql_result($query,$i,xingbie);?></td>    <td><?php echo mysql_result($query,$i,shouji);?></td>    <td><?php echo mysql_result($query,$i,shenfenzheng);?></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,cheliangzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,cheliangzhaopian) ?>' width='80' height='88' border='0'></a></td>    <td><?php echo mysql_result($query,$i,paizhao);?></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,xingshizhengzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,xingshizhengzhaopian) ?>' width='80' height='88' border='0'></a></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,jiazhaozhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,jiazhaozhaopian) ?>' width='80' height='88' border='0'></a></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,shenfenzhengzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,shenfenzhengzhaopian) ?>' width='80' height='88' border='0'></a></td>    <td><?php echo mysql_result($query,$i,shengyufenshu);?></td>    <td><?php echo mysql_result($query,$i,jiashizhengguoqishijian);?></td>    <td><?php echo mysql_result($query,$i,chelianganjiantongguo);?></td>    <td><?php echo mysql_result($query,$i,anjiandaoqiriqi);?></td>    <td align='center'><?php echo mysql_result($query,$i,"issh")?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="70" align="center">
	<?php if(mysql_result($query,$i,issh)=="��"){?><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=yonghuzhuce" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="yonghuzhuce_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a><?php } ?>
	 <a href="yonghuzhuce_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="yonghuzhuce_list2.php?pagecurrent=1">��ҳ</a>, <a href="yonghuzhuce_list2.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="yonghuzhuce_list2.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="yonghuzhuce_list2.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

</body>
</html>

