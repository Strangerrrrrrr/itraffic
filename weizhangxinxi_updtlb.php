<?php 
$id=$_GET["id"];
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$fankui=$_POST["fankui"];
	
	$sql="update weizhangxinxi set fankui='$fankui' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('�����ɹ�!');location.href='weizhangxinxi_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����Υ����Ϣ</title>

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
<p>����Υ����Ϣ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<?php
$sql="select * from weizhangxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr style='display:none'><td>���գ�</td><td><input name='paizhao' type='text' id='paizhao' value='<?php echo mysql_result($query,0,paizhao);?>' /></td></tr>      <tr style='display:none'><td>�ʺţ�</td><td><input name='zhanghao' type='text' id='zhanghao' value='<?php echo mysql_result($query,0,zhanghao);?>' /></td></tr>      <tr style='display:none'><td>Υ�����ͣ�</td><td><input name='weizhangleixing' type='text' id='weizhangleixing' value='<?php echo mysql_result($query,0,weizhangleixing);?>' /></td></tr>      <tr style='display:none'><td>Υ��ʱ�䣺</td><td><input name='weizhangshijian' type='text' id='weizhangshijian' value='<?php echo mysql_result($query,0,weizhangshijian);?>' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd HH:mm:ss'})" style='border:solid 1px #000000; color:#666666; width:125px;' /></td></tr>      <tr style='display:none'><td>�ص㣺</td><td><input name='didian' type='text' id='didian' value='<?php echo mysql_result($query,0,didian);?>' /></td></tr>      <tr style='display:none'><td>�۷֣�</td><td><input name='koufen' type='text' id='koufen' value='<?php echo mysql_result($query,0,koufen);?>' /></td></tr>      <tr style='display:none'><td>���</td><td><input name='fakuan' type='text' id='fakuan' value='<?php echo mysql_result($query,0,fakuan);?>' /></td></tr>      <tr><td>������</td><td><input name='fankui' type='text' id='fankui' value='<?php echo mysql_result($query,0,fankui);?>' /></td></tr>      
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="����" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

