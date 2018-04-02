<?php
session_start();
//xuxyxaodenxglxxu
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$zhanghao=$_POST["zhanghao"];
    $mima=$_POST["mima"];
    $xingming=$_POST["xingming"];
    $xingbie=$_POST["xingbie"];
    $shouji=$_POST["shouji"];
    $shenfenzheng=$_POST["shenfenzheng"];
    $cheliangzhaopian=$_POST["cheliangzhaopian"];
    $paizhao=$_POST["paizhao"];
    $xingshizhengzhaopian=$_POST["xingshizhengzhaopian"];
    $jiazhaozhaopian=$_POST["jiazhaozhaopian"];
    $shenfenzhengzhaopian=$_POST["shenfenzhengzhaopian"];
    $shengyufenshu=$_POST["shengyufenshu"];
    $jiashizhengguoqishijian=$_POST["jiashizhengguoqishijian"];
    $chelianganjiantongguo=$_POST["chelianganjiantongguo"];
    $anjiandaoqiriqi=$_POST["anjiandaoqiriqi"];
    
	
	
	ischongfu("select id from yonghuzhuce where  zhanghao='$zhanghao'");
	$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,shouji,shenfenzheng,cheliangzhaopian,paizhao,xingshizhengzhaopian,jiazhaozhaopian,shenfenzhengzhaopian,shengyufenshu,jiashizhengguoqishijian,chelianganjiantongguo,anjiandaoqiriqi) values('$zhanghao','$mima','$xingming','$xingbie','$shouji','$shenfenzheng','$cheliangzhaopian','$paizhao','$xingshizhengzhaopian','$jiazhaozhaopian','$shenfenzhengzhaopian','$shengyufenshu','$jiashizhengguoqishijian','$chelianganjiantongguo','$anjiandaoqiriqi') ";
	mysql_query($sql);
	
	echo "<script>javascript:alert('操作成功!');location.href='yonghuzhuceadd.php';</script>";
}
?>
<html>
<head>
<title>用户注册</title>
<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

</head>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
	function check()
{
	if(document.form1.zhanghao.value==""){alert("请输入帐号");document.form1.zhanghao.focus();return false;}
    if(document.form1.mima.value==""){alert("请输入密码");document.form1.mima.focus();return false;}
    if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}
    if(document.form1.shouji.value==""){alert("请输入手机");document.form1.shouji.focus();return false;}
    if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(document.form1.shouji.value))){alert("手机必需手机格式");document.form1.shouji.focus();return false;}
    if(document.form1.shenfenzheng.value==""){alert("请输入身份证");document.form1.shenfenzheng.focus();return false;}
    if(!(/^\d{15}$|^\d{18}$|^\d{17}[xX]$/.test(document.form1.shenfenzheng.value))){alert("身份证必需身份证格式");document.form1.shenfenzheng.focus();return false;}
    if(document.form1.cheliangzhaopian.value==""){alert("请输入车辆照片");document.form1.cheliangzhaopian.focus();return false;}
    if(document.form1.paizhao.value==""){alert("请输入牌照");document.form1.paizhao.focus();return false;}
    if(document.form1.xingshizhengzhaopian.value==""){alert("请输入行驶证照片");document.form1.xingshizhengzhaopian.focus();return false;}
    if(document.form1.jiazhaozhaopian.value==""){alert("请输入驾照照片");document.form1.jiazhaozhaopian.focus();return false;}
    if(document.form1.shenfenzhengzhaopian.value==""){alert("请输入身份证照片");document.form1.shenfenzhengzhaopian.focus();return false;}
    if(document.form1.shengyufenshu.value==""){alert("请输入剩余分数");document.form1.shengyufenshu.focus();return false;}
    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.shengyufenshu.value))){}else{alert("剩余分数必需数字型");document.form1.shengyufenshu.focus();return false;}
    if(document.form1.jiashizhengguoqishijian.value==""){alert("请输入驾驶证过期时间");document.form1.jiashizhengguoqishijian.focus();return false;}
    if(document.form1.chelianganjiantongguo.value==""){alert("请输入车辆安检通过");document.form1.chelianganjiantongguo.focus();return false;}
    
}
	function gow()
	{
		location.href='yonghuzhuceadd.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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
                        <td width="190" height="30" align="center" valign="bottom"><span class="STYLE11">用户注册</span></td>
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
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline">    
	<tr><td>帐号：</td><td><input name='zhanghao' type='text' id='zhanghao' value='' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr>
    <tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>性别：</td><td><select name='xingbie' id='xingbie'><option value="男">男</option><option value="女">女</option></select></td></tr>
    <tr><td>手机：</td><td><input name='shouji' type='text' id='shouji' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需手机格式</td></tr>
    <tr><td>身份证：</td><td><input name='shenfenzheng' type='text' id='shenfenzheng' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需身份证格式</td></tr>
    <tr><td>车辆照片：</td><td><input name='cheliangzhaopian' type='text' id='cheliangzhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=cheliangzhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a>&nbsp;*</td></tr>
    <tr><td>牌照：</td><td><input name='paizhao' type='text' id='paizhao' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>行驶证照片：</td><td><input name='xingshizhengzhaopian' type='text' id='xingshizhengzhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=xingshizhengzhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a>&nbsp;*</td></tr>
    <tr><td>驾照照片：</td><td><input name='jiazhaozhaopian' type='text' id='jiazhaozhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=jiazhaozhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a>&nbsp;*</td></tr>
    <tr><td>身份证照片：</td><td><input name='shenfenzhengzhaopian' type='text' id='shenfenzhengzhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=shenfenzhengzhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a>&nbsp;*</td></tr>
    <tr><td>剩余分数：</td><td><input name='shengyufenshu' type='text' id='shengyufenshu' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需数字型</td></tr>
    <tr><td>驾驶证过期时间：</td><td><input name='jiashizhengguoqishijian' type='text' id='jiashizhengguoqishijian' value='' onClick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' />&nbsp;*</td></tr>
    <tr><td>车辆安检通过：</td><td><select name='chelianganjiantongguo' id='chelianganjiantongguo'><option value="是">是</option><option value="否">否</option></select>&nbsp;*</td></tr>
    <tr><td>安检到期日期：</td><td><input name='anjiandaoqiriqi' type='text' id='anjiandaoqiriqi' value='' onClick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="确定" onClick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>

<?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('对不起，您输入的帐号已经存在，请重试!');history.back();</script>";
			exit;
		}
		
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
<!-- dfexnxxiaxng -->
</body>
</html>
