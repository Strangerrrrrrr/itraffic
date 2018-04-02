<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$paizhao=$_POST["paizhao"];    $zhanghao=$_POST["zhanghao"];    $weizhangleixing=$_POST["weizhangleixing"];    $weizhangshijian=$_POST["weizhangshijian"];    $didian=$_POST["didian"];    $koufen=$_POST["koufen"];    $fakuan=$_POST["fakuan"];    $shenshuneirong=$_POST["shenshuneirong"];    $shijian=$_POST["shijian"];    
	
	
	
	
	$sql="insert into shensu(paizhao,zhanghao,weizhangleixing,weizhangshijian,didian,koufen,fakuan,shenshuneirong,shijian) values('$paizhao','$zhanghao','$weizhangleixing','$weizhangshijian','$didian','$koufen','$fakuan','$shenshuneirong','$shijian') ";
	mysql_query($sql);
	
	echo "<script>javascript:alert('添加成功!');history.back();</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>申诉</title>

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
<p>添加申诉： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.weizhangleixing.value==""){alert("请输入违章类型");document.form1.weizhangleixing.focus();return false;}    if(document.form1.weizhangshijian.value==""){alert("请输入违章时间");document.form1.weizhangshijian.focus();return false;}    if(document.form1.didian.value==""){alert("请输入地点");document.form1.didian.focus();return false;}    if(document.form1.koufen.value==""){alert("请输入扣分");document.form1.koufen.focus();return false;}    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.koufen.value))){}else{alert("扣分必需数字型");document.form1.koufen.focus();return false;}    if(document.form1.fakuan.value==""){alert("请输入罚款");document.form1.fakuan.focus();return false;}    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.fakuan.value))){}else{alert("罚款必需数字型");document.form1.fakuan.focus();return false;}    
}
	function gow()
	{
		location.href='shensu_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
	function hsgxia2shxurxu(nstr,nwbk)
{
	if (eval("form1."+nwbk).value.indexOf(nstr)>=0)
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value.replace(nstr+"；", "");
	}
	else
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value+nstr+"；";
	}
}
</script>

 <?php
 $sql="select * from weizhangxinxi where id=".$_GET["id"];
 $query=mysql_query($sql);
 $rowscount=mysql_num_rows($query);
 if($rowscount>0)
 {
 	$paizhao=mysql_result($query,0,paizhao); 	$zhanghao=mysql_result($query,0,zhanghao); 	$weizhangleixing=mysql_result($query,0,weizhangleixing); 	$weizhangshijian=mysql_result($query,0,weizhangshijian); 	$didian=mysql_result($query,0,didian); 	$koufen=mysql_result($query,0,koufen); 	$fakuan=mysql_result($query,0,fakuan); 	
 }
?>

<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>牌照：</td><td><input name='paizhao' type='text' id='paizhao' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.paizhao.value='<?php echo $paizhao?>';document.form1.paizhao.setAttribute("readOnly",'true');</script>    <tr><td>帐号：</td><td><input name='zhanghao' type='text' id='zhanghao' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.zhanghao.value='<?php echo $zhanghao?>';document.form1.zhanghao.setAttribute("readOnly",'true');</script>    <tr><td>违章类型：</td><td><input name='weizhangleixing' type='text' id='weizhangleixing' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><script language="javascript">document.form1.weizhangleixing.value='<?php echo $weizhangleixing?>';document.form1.weizhangleixing.setAttribute("readOnly",'true');</script>    <tr><td>违章时间：</td><td><input name='weizhangshijian' type='text' id='weizhangshijian' value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd HH:mm:ss'})" style='border:solid 1px #000000; color:#666666; width:125px;' />&nbsp;*</td></tr><script language="javascript">document.form1.weizhangshijian.value='<?php echo $weizhangshijian?>';document.form1.weizhangshijian.setAttribute("readOnly",'true');</script>    <tr><td>地点：</td><td><input name='didian' type='text' id='didian' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><script language="javascript">document.form1.didian.value='<?php echo $didian?>';document.form1.didian.setAttribute("readOnly",'true');</script>    <tr><td>扣分：</td><td><input name='koufen' type='text' id='koufen' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需数字型</td></tr><script language="javascript">document.form1.koufen.value='<?php echo $koufen?>';document.form1.koufen.setAttribute("readOnly",'true');</script>    <tr><td>罚款：</td><td><input name='fakuan' type='text' id='fakuan' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需数字型</td></tr><script language="javascript">document.form1.fakuan.value='<?php echo $fakuan?>';document.form1.fakuan.setAttribute("readOnly",'true');</script>    <tr><td>申述内容：</td><td><textarea name='shenshuneirong' cols='50' rows='8' id='shenshuneirong' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>    <tr><td>时间：</td><td><input name='shijian' type='text' id='shijian' value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd HH:mm:ss'})" style='border:solid 1px #000000; color:#666666; width:125px;' /></td></tr>    

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>

</body>
</html>

