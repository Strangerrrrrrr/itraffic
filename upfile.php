<html> 

<head> 

<meta http-equiv="Content-Type" content="text/html; charset=gb2312"> 

<title>�ļ��ϴ�</title>
<link rel="stylesheet" href="Images/CssAdmin.css">
</head> 

<body> 

<form enctype="multipart/form-data" action=upfile.php?Result=<?php echo $_GET["Result"];?> method=post>  


<input name=upfile type=file class="button" size=40> 

<input type=submit class="button" value='�ϴ��ļ�'>  

</form>  

</body> 

</html>
<?php  
error_reporting(0); 
function getname($exname){ 

   $dir = "uploadfile/"; 

   $i=1; 

   $str = "0123456789abcdefghijklmnopqrstuvwxyz";   //   ����ַ���
$n = 4;   //   ���������
$len = strlen($str)-1;
for($i=0 ; $i<$n; $i++){
$s .=  $str[rand(0,$len)];
}
$timestamp=time(); 



   return $dir.$timestamp.$s.".".$exname; 

} 


$exname=strtolower(substr($_FILES['upfile']['name'],(strrpos($_FILES['upfile']['name'],'.')+1))); 

$uploadfile = getname($exname);  


if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)) { 

   echo "<font color=#ff0000>�ļ��ϴ��ɹ���</font>"; 
	echo "<input name='CopyPath' type='button' class='button' value='�����ļ�·��'  onclick=CopyPath('$uploadfile','".$_POST['Result']."')>";
   echo "<br>�������ļ��ϴ���һЩ��Ϣ�� 

    <br>ԭ�ļ�����".$_FILES['upfile']['name'] . 

    "<br>���ͣ�" .$_FILES['upfile']['type'] . 

    "<br>��ʱ�ļ�����".$_FILES['upfile']['tmp_name']. 

    "<br>�ļ���С��".$_FILES['upfile']['size'] . 

    "<br>������룺".$_FILES['upfile']['error']; 
}


?>
<script language="JavaScript"> 
<!-- 
function CopyPath(FilePath,FileSize)
{
   // var str=location.toString()
   // var Result=((((str.split('?'))[1]).split('='))[1]);
	//window.opener.form1.FileSize.focus();								
	window.opener.document.form1.<?php echo $_GET["Result"];?>.value=FilePath;
    //if (Result == "FileUrl")
//	{
//	   window.opener.document.form1.FileSize.value=FileSize;
//    }
	window.opener=null;
    window.close();
}
//--> 
</script> 
