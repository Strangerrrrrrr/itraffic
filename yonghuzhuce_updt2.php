<?php
session_start();
include_once 'conn.php';

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$zhanghao=$_POST["zhanghao"];    $mima=$_POST["mima"];    $xingming=$_POST["xingming"];    $xingbie=$_POST["xingbie"];    $shouji=$_POST["shouji"];    $shenfenzheng=$_POST["shenfenzheng"];    $cheliangzhaopian=$_POST["cheliangzhaopian"];    $paizhao=$_POST["paizhao"];    $xingshizhengzhaopian=$_POST["xingshizhengzhaopian"];    $jiazhaozhaopian=$_POST["jiazhaozhaopian"];    $shenfenzhengzhaopian=$_POST["shenfenzhengzhaopian"];    $shengyufenshu=$_POST["shengyufenshu"];    $jiashizhengguoqishijian=$_POST["jiashizhengguoqishijian"];    $chelianganjiantongguo=$_POST["chelianganjiantongguo"];    $anjiandaoqiriqi=$_POST["anjiandaoqiriqi"];    
	$sql="update yonghuzhuce set zhanghao='$zhanghao',mima='$mima',xingming='$xingming',xingbie='$xingbie',shouji='$shouji',shenfenzheng='$shenfenzheng',cheliangzhaopian='$cheliangzhaopian',paizhao='$paizhao',xingshizhengzhaopian='$xingshizhengzhaopian',jiazhaozhaopian='$jiazhaozhaopian',shenfenzhengzhaopian='$shenfenzhengzhaopian',shengyufenshu='$shengyufenshu',jiashizhengguoqishijian='$jiashizhengguoqishijian',chelianganjiantongguo='$chelianganjiantongguo',anjiandaoqiriqi='$anjiandaoqiriqi' where zhanghao= '".$_SESSION["username"]."'";
	mysql_query($sql);
	echo "<script>javascript:alert('�޸ĳɹ�!');</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�޸��û�ע��</title>

<link rel="stylesheet" href="css.css" type="text/css">
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
</head>
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
</script>
<body>
<p>�޸��û�ע�᣺ ��ǰ���ڣ� <?php echo $ndate; ?></p>
<?php
$sql="select * from yonghuzhuce where zhanghao='".$_SESSION["username"]."'";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr><td>�ʺţ�</td><td><input name='zhanghao' type='text' id='zhanghao' value='<?php echo mysql_result($query,0,zhanghao);?>' readonly='readonly' /> ���������������޸�</td></tr>      <tr><td>���룺</td><td><input name='mima' type='text' id='mima' value='<?php echo mysql_result($query,0,mima);?>' /></td></tr>      <tr><td>������</td><td><input name='xingming' type='text' id='xingming' value='<?php echo mysql_result($query,0,xingming);?>' /></td></tr>      <tr><td>�Ա�</td><td><select name='xingbie' id='xingbie'><option value="��">��</option><option value="Ů">Ů</option></select></td></tr><script language="javascript">document.form1.xingbie.value='<?php echo mysql_result($query,0,xingbie);?>';</script>      <tr><td>�ֻ���</td><td><input name='shouji' type='text' id='shouji' value='<?php echo mysql_result($query,0,shouji);?>' /></td></tr>      <tr><td>���֤��</td><td><input name='shenfenzheng' type='text' id='shenfenzheng' value='<?php echo mysql_result($query,0,shenfenzheng);?>' /></td></tr>      <tr><td>������Ƭ��</td><td><input name='cheliangzhaopian' type='text' id='cheliangzhaopian' size='50'  value='<?php echo mysql_result($query,0,cheliangzhaopian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=cheliangzhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>      <tr><td>���գ�</td><td><input name='paizhao' type='text' id='paizhao' value='<?php echo mysql_result($query,0,paizhao);?>' /></td></tr>      <tr><td>��ʻ֤��Ƭ��</td><td><input name='xingshizhengzhaopian' type='text' id='xingshizhengzhaopian' size='50'  value='<?php echo mysql_result($query,0,xingshizhengzhaopian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=xingshizhengzhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>      <tr><td>������Ƭ��</td><td><input name='jiazhaozhaopian' type='text' id='jiazhaozhaopian' size='50'  value='<?php echo mysql_result($query,0,jiazhaozhaopian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=jiazhaozhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>      <tr><td>���֤��Ƭ��</td><td><input name='shenfenzhengzhaopian' type='text' id='shenfenzhengzhaopian' size='50'  value='<?php echo mysql_result($query,0,shenfenzhengzhaopian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=shenfenzhengzhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>      <tr><td>ʣ�������</td><td><input name='shengyufenshu' type='text' id='shengyufenshu' value='<?php echo mysql_result($query,0,shengyufenshu);?>' /></td></tr>      <tr><td>��ʻ֤����ʱ�䣺</td><td><input name='jiashizhengguoqishijian' type='text' id='jiashizhengguoqishijian' value='<?php echo mysql_result($query,0,jiashizhengguoqishijian);?>' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>      <tr><td>��������ͨ����</td><td><select name='chelianganjiantongguo' id='chelianganjiantongguo'><option value="��">��</option><option value="��">��</option></select></td></tr><script language="javascript">document.form1.chelianganjiantongguo.value='<?php echo mysql_result($query,0,chelianganjiantongguo);?>';</script>      <tr><td>���쵽�����ڣ�</td><td><input name='anjiandaoqiriqi' type='text' id='anjiandaoqiriqi' value='<?php echo mysql_result($query,0,anjiandaoqiriqi);?>' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>      
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="�޸�" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="����" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
</body>
</html>

