<?php
session_start();

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>�ޱ����ĵ�</TITLE><script language="javascript" src="images/qkjs.js"></script>

<META http-equiv=Content-Type content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE1 {color: #F8FCFF}
body {margin: 0px 0px 0px 0px; }
A:link {
	font-size:12px;
    color: #2f2f2f;
	text-decoration: none;
}
A:visited {
	font-size:12px;
    color: #2f2f2f;
	text-decoration: none;
}
A:hover { 
	font-size:12px;
	color: #FF6600;
	text-decoration: none;
}
-->
</style>


</HEAD>
<body topmargin="0">
 <table width="100%" height="84" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="94" background="images/hsg1.gif"  class="top"><a href="logout.php" target="_parent"></a></td>
    <td background="images/hsg3.gif"  class="top"><div style="font-family:����; color:#FF6600; WIDTH: 100%; FONT-WEIGHT: bold; FONT-SIZE: 28pt; margin-top:5pt">
      <div align="left" >��ͨΥ��һվʽ����ϵͳ</div>
    </div></td>
    <td width="703" background="images/hsg2.gif"  class="top"><table width="100%" height="46" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><TABLE cellSpacing=0 cellPadding=0 width="92%" border=0>
          <TBODY>
            <TR>
              <TD height=29 align="right" style="FONT-SIZE: 12px; COLOR: #333333">��ǰ�û�:<?php echo $_SESSION["username"];?> [Ȩ�ޣ�<?php echo $_SESSION["cx"];?>]
                ���죺
                <SCRIPT language=javascript>setCalendar();</SCRIPT></TD>
            </TR>
          </TBODY>
        </TABLE></td>
      </tr>
      <tr>
        <td align="right" style="padding-right:60px;"><a href="logout.php" target="_parent" onClick="return confirm('ȷ��Ҫ�˳�?')">�˳�</a></td>
      </tr>
    </table></td>
  </tr>
</table>
</BODY></HTML>
