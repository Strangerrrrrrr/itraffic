<?php
session_start();

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=gb2312">


<LINK href="images/style.css" type=text/css rel=stylesheet>
<META content="MSHTML 6.00.2900.6287" name=GENERATOR>
<style type="text/css">
<!--
.t41 {font:12px ����;color:#800000}
.t4 {font:12px 宋体;color:#800000}
body,td,th {
	font-size: 12px;
}
-->
</style>
</HEAD>
<BODY leftMargin=5 topMargin=5 rightMargin=5>
<p>&nbsp;</p>
<table width="100%" height="210" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#D9E9FF" style="border-collapse:collapse">  
  <TBODY>
    <TR 
  align=middle bgColor=#ffffff>
      <td colspan="4" bgColor=#fbf6f2><strong>ϵͳ������Ϣ</strong></td>
    </TR>
    <TR   align=middle 
  bgColor=#ffffff>
      <TD width="14%" align="left" valign="bottom" >��ǰ�û���</TD>
      <TD width="37%"  align="left" valign="bottom" ><font class="t4"><?php echo $_SESSION['username'];?></font></TD>
      <TD width="9%"  align="left" valign="bottom" >����Ȩ�ޣ�</TD>
      <TD width="40%"  align="left" valign="bottom" ><?php echo $_SESSION['cx'];?></TD>
    </TR>
    <TR   align=middle 
  bgColor=#ffffff>
      <TD height="38" align="left" valign="bottom"  >��ǰ���ڣ�</TD>
      <TD  align="left" valign="bottom" ><?php echo date("Y-m-d")?></TD>
      <TD align="left" valign="bottom" >����IP��</TD>
      <TD  align="left" valign="bottom" ><?php echo $_SERVER["REMOTE_ADDR"];?></TD>
    </TR>
    <TR   align=middle 
  bgColor=#ffffff>
      <TD align="left" valign="bottom"  >������汾��</TD>
      <TD  align="left" valign="bottom" ><font class="t41"><?php echo $_SERVER['HTTP_USER_AGENT'];?></font></TD>
      <TD align="left" valign="bottom" >������������</TD>
      <TD  align="left" valign="bottom" ><font class="t41"><?php echo  $_SERVER['SERVER_NAME'] ?></font></TD>
    </TR>
    <TR   align=middle 
  bgColor=#ffffff>
      <TD height="43" align="left" valign="bottom"  >���������ͼ��汾�ţ�</TD>
      <TD  align="left" valign="bottom" ><font class="t41"><?php echo php_uname() ;?></font></TD>
      <TD align="left" valign="bottom" >�������ڣ�</TD>
      <TD  align="left" valign="bottom" ><?php echo date("Y-m-d")?></TD>
    </TR>
  </TBODY>
</TABLE>
<p>&nbsp;</p>
<table width="100%" height="193" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#D9E9FF" style="border-collapse:collapse">  
  <TBODY>
    <TR 
  align=middle bgColor=#ffffff>
      <td colspan="2" bgColor=#fbf6f2><strong>��ͨΥ��һվʽ����ϵͳ</strong></td>
    </TR>
    <TR   align=middle 
  bgColor=#ffffff>
      <TD width="10%" align="left" >ϵͳ���ߣ�</TD>
      <TD width="41%"  align="left" ><font class="t4">xxxxxx</font></TD>
    </TR>
    <TR   align=middle 
  bgColor=#ffffff>
      <TD align="left"  >ָ����ʦ��</TD>
      <TD  align="left" ><font class="t4">xxxxxx</font></TD>
    </TR>
    <TR   align=middle 
  bgColor=#ffffff>
      <TD align="left"  >��ϵ��ʽ��</TD>
      <TD  align="left" ><font class="t41">xxxxxxxxxxxxxxx</font></TD>
    </TR>
  </TBODY>
</TABLE>
<p>&nbsp;</p>
<P align=right>&nbsp;</P>
</BODY></HTML>
