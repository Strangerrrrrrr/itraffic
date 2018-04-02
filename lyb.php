<?php
include_once 'conn.php';
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('对不起，请您先登陆！');location.href='index.php';</script>";
	exit;
}

$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$zhaopian=$_POST["zhaopian"];$xingming=$_POST["xingming"];$liuyan=$_POST["liuyan"];
	$sql="insert into liuyanban(zhanghao,zhaopian,xingming,liuyan) values('$zhanghao','$zhaopian','$xingming','$liuyan') ";
	mysql_query($sql);
	echo "<script>javascript:alert('留言成功!');location.href='lyblist.php';</script>";
}
?>
<html>
<head>
<title>交通违章一站式处理系统</title>

<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

</head>
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("请输入账号");document.form1.zhanghao.focus();return false;}
	if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}
	if(document.form1.liuyan.value==""){alert("请输入留言");document.form1.liuyan.focus();return false;}
}

</script>
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
                        <td width="110" valign="bottom" ><a href="lyblist.php"><span class="STYLE11">查看留言</span></a></td>
                      </tr>
                    </table></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="100%" height="194" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="17" height="194" background="qtimages/1_02_01_03_01_02_01.gif"></td>
                            <td height="650" valign="top"><table width="96%" border="1" align="left" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" style="border-collapse:collapse">
                              <form name="form1" method="post" action="">
                                <tr>
                                  <td>账号：</td>
                                  <td><input name='zhanghao' type='text' id='zhanghao' value='<?php echo $_SESSION["username"];?>' />
                                    &nbsp;*</td>
                                </tr>
                                <tr>
                                  <td>照片：</td>
                                  <td><input name='zhaopian' type='hidden' id='zhaopian' value='<?php echo $_SESSION["zp"];?>' />
                                      <img src="<?php echo $_SESSION["zp"];?>" width="131" height="102"></td>
                                </tr>
                                <tr>
                                  <td>姓名：</td>
                                  <td><input name='xingming' type='text' id='xingming' value='<?php echo $_SESSION["xm"];?>' />
                                    &nbsp;*</td>
                                </tr>
                                <tr>
                                  <td>留言：</td>
                                  <td><textarea name='liuyan' cols='50' rows='8' id='liuyan'></textarea>
                                    &nbsp;*</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td><input type="hidden" name="addnew" value="1" />
                                      <input type="submit" name="Submit" value="添加" onClick="return check();" />
                                      <input type="reset" name="Submit2" value="重置" /></td>
                                </tr>
                              </form>
                            </table>
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