<?php
session_start();
include_once 'conn.php';
$lb=$_GET["lb"];
if($lb=="")
{
	$lb=$_POST["lb"];
}
$biaoti=$_POST["biaoti"];
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
                        <td width="190" height="30" align="center" valign="bottom"><span class="STYLE11"><?php echo $lb;?></span></td>
                        <td valign="middle"></td>
                      </tr>
                    </table></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="100%" height="194" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="17" height="194" background="qtimages/1_02_01_03_01_02_01.gif"></td>
                            <td height="650" valign="top" bgcolor="#FFFFFF"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#A5DFC6" style="border-collapse:collapse" class="newsline">
                         <?php 
    $sql="select * from xinwentongzhi where 1=1";
  
if ($biaoti!=""){$sql=$sql." and biaoti like '%$biaoti%'";}
if($lb!=""){$sql=$sql." and leibie='$lb'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=20;//每页行数；
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
                            <td width="4%"><?php echo $i+1;?></td>
                            <td width="63%"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"biaoti");?></a></td>
                            <td width="21%"><?php echo mysql_result($query,$i,"addtime");?></td>
                            <td width="12%">被点击<?php echo mysql_result($query,$i,"dianjilv");?>次</td>
                          </tr>
                          <?php
						}
					  }
					  ?>
                        </table>
                          <p align="center"><a href="news.php?pagecurrent=1&lb=<?php echo $lb;?>">首页</a>, <a href="news.php?pagecurrent=<?php echo $pagecurrent-1;?>&lb=<?php echo $lb;?>" >前一页</a> ,<a href="news.php?pagecurrent=<?php echo $pagecurrent+1;?>&lb=<?php echo $lb;?>">后一页</a>, <a href="news.php?pagecurrent=<?php echo $pagecount;?>&lb=<?php echo $lb;?>">末页</a>, 以上数据共<?php echo $pagecount;?>页共<?php
		echo $rowscount;
	?>条,当前第<?php echo $pagecurrent;?>页,<?php echo $pagelarge;?>条每页
                            <input type="button" name="Submit23" onClick="javascript:window.print();" value="打印本页" style=" height:19px; border:solid 1px #000000; color:#666666"/>
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