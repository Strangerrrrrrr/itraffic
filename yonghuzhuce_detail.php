<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�û�ע����ϸ</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>�û�ע����ϸ��</p>
					<?php
$sql="select * from yonghuzhuce where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%' height=44>�ʺţ�</td><td width='39%'><?php echo mysql_result($query,0,zhanghao);?></td><td  rowspan=14 align=center><a href=<?php echo mysql_result($query,0,shenfenzhengzhaopian);?> target=_blank><img src=<?php echo mysql_result($query,0,shenfenzhengzhaopian);?> width=228 height=215 border=0></a></td></tr><tr>      <td width='11%' height=44>���룺</td><td width='39%'><?php echo mysql_result($query,0,mima);?></td></tr><tr>      <td width='11%' height=44>������</td><td width='39%'><?php echo mysql_result($query,0,xingming);?></td></tr><tr>      <td width='11%' height=44>�Ա�</td><td width='39%'><?php echo mysql_result($query,0,xingbie);?></td></tr><tr>      <td width='11%' height=44>�ֻ���</td><td width='39%'><?php echo mysql_result($query,0,shouji);?></td></tr><tr>      <td width='11%' height=44>���֤��</td><td width='39%'><?php echo mysql_result($query,0,shenfenzheng);?></td></tr><tr>            <td width='11%' height=44>���գ�</td><td width='39%'><?php echo mysql_result($query,0,paizhao);?></td></tr><tr>                        <td width='11%' height=44>ʣ�������</td><td width='39%'><?php echo mysql_result($query,0,shengyufenshu);?></td></tr><tr>      <td width='11%' height=44>��ʻ֤����ʱ�䣺</td><td width='39%'><?php echo mysql_result($query,0,jiashizhengguoqishijian);?></td></tr><tr>      <td width='11%' height=44>��������ͨ����</td><td width='39%'><?php echo mysql_result($query,0,chelianganjiantongguo);?></td></tr><tr>      <td width='11%' height=44>���쵽�����ڣ�</td><td width='39%'><?php echo mysql_result($query,0,anjiandaoqiriqi);?></td></tr><tr>            <td colspan=3 align=center><input type=button name=Submit5 value=���� onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='��ӡ��ҳ' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

