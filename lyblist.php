<?php
session_start();
include_once 'conn.php';
?>
<html>
<head>
<title>交通违章一站式处理系统</title>

<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

</head>

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
                        <td width="190" height="30" align="center" valign="bottom"><span class="STYLE11">在线留言</span></td>
                        <td valign="middle"></td>
                        <td width="110" valign="bottom" ><a href="lyb.php"><span class="STYLE11">我要留言</span></a></td>
                      </tr>
                    </table></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="100%" height="194" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="17" height="194" background="qtimages/1_02_01_03_01_02_01.gif"></td>
                            <td height="650" valign="top"><table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#ADCEEF" style="border-collapse:collapse">
                              <?php
					$sql="select * from liuyanban where 1=1";
					$sql=$sql." order by id desc";
  					$query=mysql_query($sql);
	 				 $rowscount=mysql_num_rows($query);
					 if($rowscount==0)
  {}
  else
  {
  $pagelarge=5;//每页行数；
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
                                <td width="11" rowspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                                <td width="85" rowspan="3" align="center" valign="middle"><img width='70'height='70' src=<?php echo mysql_result($query,$i,"zhaopian");?> border=0> </td>
                                <td height="20" colspan="2" align="left" valign="middle">&nbsp; &nbsp; 留言于:<?php echo mysql_result($query,$i,"addtime");?> &nbsp;</td>
                                <td width="12" rowspan="3" valign="top" style="width: 10px"><!--DWLayoutEmptyCell-->&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="78" align="left" valign="top">&nbsp;<?php echo mysql_result($query,$i,"liuyan");?></td>
                                <td align="left" valign="top"><p>回复：</p>
                                    <p><?php echo mysql_result($query,$i,"huifu");?></p></td>
                              </tr>
                              <tr>
                                <td colspan="2" align="left" valign="middle" style="height: 25px">&nbsp; &nbsp;账号：<?php echo mysql_result($query,$i,"zhanghao");?> &nbsp; &nbsp;姓名：<?php echo mysql_result($query,$i,"xingming");?>&nbsp;&nbsp;</td>
                              </tr>
                              <?php
						  }
  	}
  ?>
                            </table>
                              <p align="center"><a href="lyblist.php?pagecurrent=1">首页</a>, <a href="lyblist.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="lyblist.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="lyblist.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 以上数据共
                                <?php
		echo $rowscount;
	?>
                                条,
  <input type="button" name="Submit2" onClick="javascript:window.print();" value="打印本页" style=" height:19px; border:solid 1px #000000; color:#666666" />
                              </p></td>
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
</body>
</html>