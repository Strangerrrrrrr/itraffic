<?php 
$id=$_GET["id"];
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$huifu=$_POST["huifu"];
	$sql="update liuyanban set huifu='$huifu' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('回复成功!');location.href='liuyanban_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>回复留言板</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/hsgrili.js"></script>
</head>

<body>
<p>回复留言板： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from liuyanban where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr>
        <td>回复：</td><td><textarea name='huifu' cols='50' rows='8' id='huifu'><?php echo mysql_result($query,$i,huifu);?></textarea></td></tr>
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="回复" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

