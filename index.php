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
<script language="javascript">
function loadimage(){ 
document.getElementById("randImage").src = "VerifyCode.asp?"+Math.random(); 
} 

function checklog()
{
if(document.userlog.username.value=="")
{
	alert("请输入用户名");
	document.userlog.username.focus();
	return false;
}
if(document.userlog.pwd1.value=="")
{
	alert("请输入密码");
	document.userlog.pwd1.focus();
	return false;
}
if(document.userlog.yzm.value=="")
{
	alert("请输入验证码");
	document.userlog.yzm.focus();
	return false;
}
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
                <td><img src="qtimages/1_02_01_01.gif" width="761" height="180" alt=""></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><table id="__01" width="761" height="259" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table id="__01" width="255" height="259" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="255" height="45" background="qtimages/1_02_01_03_01_01.gif">
						<table width="100%" height="36" border="0" cellpadding="0" cellspacing="0">
                      <tr>
					  <td width="13%" valign="bottom">&nbsp;</td>
                        <td width="68%" height="30" align="left" valign="bottom" class="STYLE11">用户登陆</td>
                        <td width="20%" valign="bottom">&nbsp;</td>
                      </tr>
                    </table>
						</td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="255" height="194" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="17" height="194" background="qtimages/1_02_01_03_01_02_01.gif"></td>
                            <td width="229" height="194" bgcolor="#FFFFFF"><?php 
					if ($_SESSION['cx']=="" )
					{
				?>
                              <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                                <form action="userlog_post.php" method="post" name="userlog" id="userlog">
                                  <tr>
                                    <td width="9" height="28">&nbsp;</td>
                                    <td width="54" height="28">用户名:</td>
                                    <td height="28" colspan="2"><input name="username" type="text" id="username" style="width:100px; height:20px; border:solid 1px #000000; color:#666666" /></td>
                                  </tr>
                                  <tr>
                                    <td height="28">&nbsp;</td>
                                    <td height="28">密码:</td>
                                    <td height="28" colspan="2"><input name="pwd1" type="password" id="pwd1"  style="width:100px; height:20px; border:solid 1px #000000; color:#666666" /></td>
                                  </tr>
                                  <tr >
                                    <td height="28">&nbsp;</td>
                                    <td height="28">权限:</td>
                                    <td height="28" colspan="2"><select name="cx" id="cx" style="width:100px; height:20px; border:solid 1px #000000; color:#666666" >
                                        <option value="注册用户">注册用户</option>
                                    </select></td>
                                  </tr>
                                  <tr >
                                    <td height="28">&nbsp;</td>
                                    <td height="28">验证码:</td>
                                    <td width="52" height="28"><input name="yzm" type="text" id="yzm" style=" height:20px; border:solid 1px #000000; color:#666666; width:50px" /></td>
                                    <td width="96"><img alt="刷新验证码" onClick="this.src='code.php?time='+new Date().getTime();" src="code.php?time='+new Date().getTime();" style="cursor:pointer" /></td>
                                  </tr>
                                  <tr>
                                    <td height="38" align="center">&nbsp;</td>
                                    <td height="38" colspan="3" align="center"><input type="submit" name="Submit" value="登陆" class="hsgbutton" onClick="return checklog();" />
                                        <input type="reset" name="Submit2" value="重置" class="hsgbutton" /></td>
                                  </tr>
                                </form>
                              </table>
                              <?php 
							}
				  else
				  {
				 ?>
                              <table width="93%" height="68%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td height="28" align="left">当前用户：<?php echo $_SESSION['username']?></td>
                                </tr>
                                <tr>
                                  <td height="28" align="left">您的权限：<?php echo $_SESSION['cx']?></td>
                                </tr>
                                <tr>
                                  <td height="28" align="left">欢迎您的到来!!!</td>
                                </tr>
                                <tr>
                                  <td height="28" align="center"><input type="button" name="Submit3" value="退出" onClick="javascript:location.href='logout.php';" class="hsgbutton" />
                                      <input type="button" name="Submit22" value="个人后台" onClick="javascript:location.href='main.php';" class="hsgbutton" /></td>
                                </tr>
                              </table>
                            <?php } ?></td>
                            <td width="9" height="194" background="qtimages/1_02_01_03_01_02_03.gif"></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="qtimages/1_02_01_03_01_03.gif" width="255" height="20" alt=""></td>
                      </tr>
                    </table></td>
                    <td valign="top"><table id="__01" width="506" height="259" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="506" height="40" background="qtimages/1_02_01_03_02_01.gif">
						<table width="100%" height="34" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="20%" align="center" valign="bottom"><span class="STYLE11">交规宣传栏</span></td>
                            <td width="65%" valign="bottom">&nbsp;</td>
                            <td width="15%" valign="bottom" ><a href="news.php?lb=交规宣传栏"><font class="STYLE11">&gt;&gt; 更多</font></a> </td>
                          </tr>
                        </table>
						</td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="506" height="211" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="5" height="211" background="qtimages/1_02_01_03_02_02_01.gif"></td>
                            <td width="497" height="211">
							<table class="newsline" cellspacing="0" cellpadding="0" width="98%" align="center" border="0">
                          <tbody>
                           <?php 
					  $sql="select biaoti,id,addtime from xinwentongzhi where leibie='交规宣传栏' order by id desc limit 0,7";
					  $query=mysqli_query($conn,$sql);
					  $rowscount=mysqli_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							
						?>
                            <tr>
                              <td width="4%" height="25"><img src="qtimages/1.jpg" /> </td>
                              <td width="76%" height="25"><a  href="gg_detail.php?id=<?php echo mysqli_result($query,$i,"id");?>" 
                                ><?php 
								if (strlen(mysqli_result($query,$i,"biaoti"))>53)
								{
									echo substr(mysqli_result($query,$i,"biaoti"),0,53);
								}
								else
								{
									echo mysqli_result($query,$i,"biaoti");
								}
								
								?></a></td>
                              <td width="20%" height="25" align="right"><SPAN style="FONT-SIZE: 9pt; COLOR: #b5a073; FONT-FAMILY: 宋体">[<?php echo date("Y-m-d",strtotime(mysqli_result($query,$i,"addtime")));?>]</SPAN></td>
                            </tr>
                             <?php
						}
					  }
					  ?>
                          </tbody>
                        </table>
							</td>
                            <td width="4" height="211" background="qtimages/1_02_01_03_02_02_03.gif"></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="qtimages/1_02_01_03_02_03.gif" width="506" height="8" alt=""></td>
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