<?php
session_start();
include_once 'conn.php';
$lb=$_GET["lb"];
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
                            <td height="650" valign="top">
						
						
						
						
						
						<?php 
					$sql="select * from dx where leibie='".$lb."'";
					$query=mysql_query($sql);
					 $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
					?>
                          <table width="97%" border="0" align="center" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" class="newsline" style="border-collapse:collapse">
                            <tr>
                              <td height="104"><?php echo mysql_result($query,0,"content");?></td>
                            </tr>
                            <tr>
                              <td align="right"><a onClick="javascript:history.back();" style="cursor:pointer;">返回</a></td>
                            </tr>
                          </table>
                          <?php
					}
					?>
				
				
				
				
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
</body>
</html>