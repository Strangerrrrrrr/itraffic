<?php
error_reporting(0); 
//数据库链接文件
$host='127.0.0.1';//数据库服务器
$user='root';//数据库用户名
$password='';//数据库密码
$database='itraffic';//数据库名
$conn=mysqli_connect($host,$user,$password,$database) or die('数据库连接失败！');

mysqli_query($conn, "set names 'utf8'");

/**
 * 得到结果集中的记录条数
 * @param unknown_type $sql
 * @return number
 */
function getResultNum($conn, $sql){
	$result=mysqli_query($conn, $sql);
	return mysqli_num_rows($result);
}

/**
 *得到指定一条记录
 * @param string $sql
 * @param string $result_type
 * @return multitype:
 */
function fetchOne($conn, $sql){
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	return $row;
}


/**
 * 得到结果集中所有记录 ...
 * @param string $sql
 * @param string $result_type
 * @return multitype:
 */
function fetchAll($conn,$sql){
  $result=mysqli_query($conn, $sql);
	while($row=mysqli_fetch_array($result)){
		$rows[]=$row;
  }
	return $rows;
}


function getoption($ntable,$nzd)
{
		$sql="select ".$nzd." from ".$ntable." order by id desc";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			for ($fi=0;$fi<$rowscount;$fi++)
			{
				?>
				<option value="<?php echo mysql_result($query,$fi,0);?>"><?php echo mysql_result($query,$fi,0);?></option>
				<?php
			}
		}
}
function getoption2($ntable,$nzd)
{
	?>
	<option value="">请选择</option>
	<?php
		$sql="select ".$nzd." from ".$ntable." order by id desc";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			for ($fi=0;$fi<$rowscount;$fi++)
			{
				?>
				<option value="<?php echo mysql_result($query,$fi,0);?>" <?php 
				
				if($_GET[$nzd]==mysql_result($query,$fi,0))
				{
					echo "selected";
				}
				?>><?php echo mysql_result($query,$fi,0);?></option>
				<?php
			}
		}
}
function getitem($ntable,$nzd,$tjzd,$ntj)
{
	if($_GET[$tjzd]!="")
	{
		$sql="select ".$nzd." from ".$ntable." where ".$tjzd."='".$ntj."'";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			
				echo "value='".mysql_result($query,0,0)."'";
			
		}
	}
}
function makefilename2(){ 
   $i=1; 
   $str = "0123456789";   //   输出字符集
	$n = 4;   //   输出串长度
	$len = strlen($str)-1;
	for($i=0 ; $i<$n; $i++){
	$s .=  $str[rand(0,$len)];
	}
	$timestamp=time(); 
   return $timestamp.$s; 
} 
function readzd($ntable,$nzd,$tjzd,$ntj)
{
	$sql="select ".$nzd." from ".$ntable." where ".$tjzd."='".$ntj."'";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
				echo mysql_result($query,0,0);
		}
}
function readzd2($ntable,$nzd,$tjzd,$ntj)
{
	$sql="select ".$nzd." from ".$ntable." where ".$tjzd."='".$ntj."'";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
				return mysql_result($query,0,0);
		}
}
?>