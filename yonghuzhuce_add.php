<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$zhanghao=$_POST["zhanghao"];    $mima=$_POST["mima"];    $xingming=$_POST["xingming"];    $xingbie=$_POST["xingbie"];    $shouji=$_POST["shouji"];    $shenfenzheng=$_POST["shenfenzheng"];    $cheliangzhaopian=$_POST["cheliangzhaopian"];    $paizhao=$_POST["paizhao"];    $xingshizhengzhaopian=$_POST["xingshizhengzhaopian"];    $jiazhaozhaopian=$_POST["jiazhaozhaopian"];    $shenfenzhengzhaopian=$_POST["shenfenzhengzhaopian"];    $shengyufenshu=$_POST["shengyufenshu"];    $jiashizhengguoqishijian=$_POST["jiashizhengguoqishijian"];    $chelianganjiantongguo=$_POST["chelianganjiantongguo"];    $anjiandaoqiriqi=$_POST["anjiandaoqiriqi"];    
	
	
	
	ischongfu("select id from yonghuzhuce where  zhanghao='$zhanghao'");
	$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,shouji,shenfenzheng,cheliangzhaopian,paizhao,xingshizhengzhaopian,jiazhaozhaopian,shenfenzhengzhaopian,shengyufenshu,jiashizhengguoqishijian,chelianganjiantongguo,anjiandaoqiriqi) values('$zhanghao','$mima','$xingming','$xingbie','$shouji','$shenfenzheng','$cheliangzhaopian','$paizhao','$xingshizhengzhaopian','$jiazhaozhaopian','$shenfenzhengzhaopian','$shengyufenshu','$jiashizhengguoqishijian','$chelianganjiantongguo','$anjiandaoqiriqi') ";
	mysql_query($sql);
	
	echo "<script>javascript:alert('��ӳɹ�!');history.back();</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�û�ע��</title>

<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
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
<p>����û�ע�᣺ ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("�������ʺ�");document.form1.zhanghao.focus();return false;}    if(document.form1.mima.value==""){alert("����������");document.form1.mima.focus();return false;}    if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}    if(document.form1.shouji.value==""){alert("�������ֻ�");document.form1.shouji.focus();return false;}    if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(document.form1.shouji.value))){alert("�ֻ������ֻ���ʽ");document.form1.shouji.focus();return false;}    if(document.form1.shenfenzheng.value==""){alert("���������֤");document.form1.shenfenzheng.focus();return false;}    if(!(/^\d{15}$|^\d{18}$|^\d{17}[xX]$/.test(document.form1.shenfenzheng.value))){alert("���֤�������֤��ʽ");document.form1.shenfenzheng.focus();return false;}    if(document.form1.cheliangzhaopian.value==""){alert("�����복����Ƭ");document.form1.cheliangzhaopian.focus();return false;}    if(document.form1.paizhao.value==""){alert("����������");document.form1.paizhao.focus();return false;}    if(document.form1.xingshizhengzhaopian.value==""){alert("��������ʻ֤��Ƭ");document.form1.xingshizhengzhaopian.focus();return false;}    if(document.form1.jiazhaozhaopian.value==""){alert("�����������Ƭ");document.form1.jiazhaozhaopian.focus();return false;}    if(document.form1.shenfenzhengzhaopian.value==""){alert("���������֤��Ƭ");document.form1.shenfenzhengzhaopian.focus();return false;}    if(document.form1.shengyufenshu.value==""){alert("������ʣ�����");document.form1.shengyufenshu.focus();return false;}    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.shengyufenshu.value))){}else{alert("ʣ���������������");document.form1.shengyufenshu.focus();return false;}    if(document.form1.jiashizhengguoqishijian.value==""){alert("�������ʻ֤����ʱ��");document.form1.jiashizhengguoqishijian.focus();return false;}    if(document.form1.chelianganjiantongguo.value==""){alert("�����복������ͨ��");document.form1.chelianganjiantongguo.focus();return false;}    
}
	function gow()
	{
		location.href='yonghuzhuce_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
	function hsgxia2shxurxu(nstr,nwbk)
{
	if (eval("form1."+nwbk).value.indexOf(nstr)>=0)
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value.replace(nstr+"��", "");
	}
	else
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value+nstr+"��";
	}
}
</script>



<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>�ʺţ�</td><td><input name='zhanghao' type='text' id='zhanghao' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' readonly='readonly' />&nbsp;*</td></tr>    <tr><td>���룺</td><td><input name='mima' type='text' id='mima' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>������</td><td><input name='xingming' type='text' id='xingming' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>�Ա�</td><td><select name='xingbie' id='xingbie'><option value="��">��</option><option value="Ů">Ů</option></select></td></tr>    <tr><td>�ֻ���</td><td><input name='shouji' type='text' id='shouji' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;�����ֻ���ʽ</td></tr>    <tr><td>���֤��</td><td><input name='shenfenzheng' type='text' id='shenfenzheng' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;�������֤��ʽ</td></tr>    <tr><td>������Ƭ��</td><td><input name='cheliangzhaopian' type='text' id='cheliangzhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=cheliangzhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a>&nbsp;*</td></tr>    <tr><td>���գ�</td><td><input name='paizhao' type='text' id='paizhao' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>��ʻ֤��Ƭ��</td><td><input name='xingshizhengzhaopian' type='text' id='xingshizhengzhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=xingshizhengzhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a>&nbsp;*</td></tr>    <tr><td>������Ƭ��</td><td><input name='jiazhaozhaopian' type='text' id='jiazhaozhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=jiazhaozhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a>&nbsp;*</td></tr>    <tr><td>���֤��Ƭ��</td><td><input name='shenfenzhengzhaopian' type='text' id='shenfenzhengzhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=shenfenzhengzhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a>&nbsp;*</td></tr>    <tr><td>ʣ�������</td><td><input name='shengyufenshu' type='text' id='shengyufenshu' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;����������</td></tr>    <tr><td>��ʻ֤����ʱ�䣺</td><td><input name='jiashizhengguoqishijian' type='text' id='jiashizhengguoqishijian' value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' />&nbsp;*</td></tr>    <tr><td>��������ͨ����</td><td><select name='chelianganjiantongguo' id='chelianganjiantongguo'><option value="��">��</option><option value="��">��</option></select>&nbsp;*</td></tr>    <tr><td>���쵽�����ڣ�</td><td><input name='anjiandaoqiriqi' type='text' id='anjiandaoqiriqi' value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>    

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="���" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="����" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('�Բ�����������ʺ��Ѿ����ڣ�������!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

