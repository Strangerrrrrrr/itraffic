<?php
session_start();
include_once 'conn.php';

?>
<html>
<head>
<title>Υ����Ϣ</title>
<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

</head>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<!--hxsglxiangdxongjxs-->
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="986" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?></td>
	</tr>
	<tr>
		<td><table id="__01" width="986" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top"><table id="__01" width="761" border="0" cellpadding="0" cellspacing="0">
              
              <tr>
                <td><table id="__01" width="761" height="259" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table id="__01" width="100%" height="248" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="255" height="34" valign="top" background="qtimages/1_02_01_03_01_01_01.gif"><table width="100%" height="30" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="190" height="30" align="center" valign="bottom"><span class="STYLE11">Υ����Ϣ</span></td>
                        <td valign="middle"></td>
                      </tr>
                    </table></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="100%" height="194" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="17" height="194" background="qtimages/1_02_01_03_01_02_01.gif"></td>
                            <td height="650" valign="top">
						
						
						
						
						
						<form id="form1" name="form1" method="post" action="">
  ����: ���գ�<input name="paizhao" type="text" id="paizhao" style='border:solid 1px #000000; color:#666666;width:80px' /> �ʺţ�<input name="zhanghao" type="text" id="zhanghao" style='border:solid 1px #000000; color:#666666;width:80px' /> Υ�����ͣ�<input name="weizhangleixing" type="text" id="weizhangleixing" style='border:solid 1px #000000; color:#666666;width:80px' /> Υ��ʱ�䣺<input name="weizhangshijian" type="text" id="weizhangshijian" style='border:solid 1px #000000; color:#666666;width:80px' /> �ص㣺<input name="didian" type="text" id="didian" style='border:solid 1px #000000; color:#666666;width:80px' /> �۷֣�<input name="koufen1" type="text" id="koufen1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="koufen2" type="text" id="koufen2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> ���<input name="fakuan1" type="text" id="fakuan1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="fakuan2" type="text" id="fakuan2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />&nbsp;<input type="button" name="Submit3" value="�л���ͼ" style='border:solid 1px #000000; color:#666666' onClick="location.href='weizhangxinxilisttp.php';" />
</form>
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>����</td><td bgcolor='#CCFFFF'>�ʺ�</td><td bgcolor='#CCFFFF'>Υ������</td><td bgcolor='#CCFFFF'>Υ��ʱ��</td><td bgcolor='#CCFFFF'>�ص�</td><td bgcolor='#CCFFFF'>�۷�</td><td bgcolor='#CCFFFF'>����</td><td bgcolor='#CCFFFF'>����</td>
    
    <td width="30" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from weizhangxinxi where 1=1";
  if ($_POST["paizhao"]!=""){$nreqpaizhao=$_POST["paizhao"];$sql=$sql." and paizhao like '%$nreqpaizhao%'";}if ($_POST["zhanghao"]!=""){$nreqzhanghao=$_POST["zhanghao"];$sql=$sql." and zhanghao like '%$nreqzhanghao%'";}if ($_POST["weizhangleixing"]!=""){$nreqweizhangleixing=$_POST["weizhangleixing"];$sql=$sql." and weizhangleixing like '%$nreqweizhangleixing%'";}if ($_POST["weizhangshijian"]!=""){$nreqweizhangshijian=$_POST["weizhangshijian"];$sql=$sql." and weizhangshijian like '%$nreqweizhangshijian%'";}if ($_POST["didian"]!=""){$nreqdidian=$_POST["didian"];$sql=$sql." and didian like '%$nreqdidian%'";}if ($_POST["koufen1"]!=""){$nreqkoufen1=$_POST["koufen1"];$sql=$sql." and koufen >= $nreqkoufen1";}if ($_POST["koufen2"]!=""){$nreqkoufen2=$_POST["koufen2"];$sql=$sql." and koufen <= $nreqkoufen2";}if ($_POST["fakuan1"]!=""){$nreqfakuan1=$_POST["fakuan1"];$sql=$sql." and fakuan >= $nreqfakuan1";}if ($_POST["fakuan2"]!=""){$nreqfakuan2=$_POST["fakuan2"];$sql=$sql." and fakuan <= $nreqfakuan2";}
  $sql=$sql." order by id desc";
  
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
    <td><?php echo mysql_result($query,$i,paizhao);?></td><td><?php echo mysql_result($query,$i,zhanghao);?></td><td><?php echo mysql_result($query,$i,weizhangleixing);?></td><td><?php echo mysql_result($query,$i,weizhangshijian);?></td><td><?php echo mysql_result($query,$i,didian);?></td><td><?php echo mysql_result($query,$i,koufen);?></td><td><?php echo mysql_result($query,$i,fakuan);?></td><td><?php echo mysql_result($query,$i,fankui);?></td>
    
    <td width="30" align="center"><a href="weizhangxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="weizhangxinxilist.php?pagecurrent=1">��ҳ</a>, <a href="weizhangxinxilist.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="weizhangxinxilist.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="weizhangxinxilist.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

				
				
				
				
				</td>
                            <td width="9" height="194" background="qtimages/1_02_01_03_01_02_03.gif"></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="qtimages/1_02_01_03_01_03_01.gif" width="761" height="20" alt=""></td>
                      </tr>
                    </table></td>
                    </tr>
                </table></td>
              </tr>
            </table></td>
            <td valign="top">
			<?php include_once 'qtleft.php';?>
			</td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td><?php include_once 'qtdown.php' ;?></td>
	</tr>
</table>
<!-- dfexnxxiaxng -->
</body>
</html>
