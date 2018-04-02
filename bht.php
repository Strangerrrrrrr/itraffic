
<link href="css/zzsc.css" type="text/css" rel="stylesheet" />
<script src="js/jquery-1.7.1.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>


<div id="featured">
	<ul class="ui-tabs-nav">
		<?php
			$sql="select  shouyetupian from xinwentongzhi where shouyetupian<>''  order by id desc limit 0,5";
			
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
for($i=0;$i<$rowscount;$i++)
{
		?>
		<li id="nav-fragment-<?php echo $i+1;?>" class="ui-tabs-nav-item" style="top:<?php echo $i*62 ?>px; left:0px">
		<a href="#fragment-<?php echo $i+1;?>"><img alt="" src="<?php echo mysql_result($query,$i,0)?>" /></a></li>
		<?php
}
?>

	</ul>
	
	<?php
			$sql="select  id,biaoti,shouyetupian from xinwentongzhi where shouyetupian<>'' order by id desc limit 0,5";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
for($i=0;$i<$rowscount;$i++)
{
		?>
		
	<div style class="ui-tabs-panel ui-tabs-hide" id="fragment-<?php echo $i+1;?>">
		<a  href="gg_detail.php?id=<?php echo mysql_result($query,$i,0)?>">
		<img alt="" src="<?php echo mysql_result($query,$i,2)?>" /></a>
		<div class="info">
			<h2><a class="STYLE3"  href="gg_detail.php?id=<?php echo mysql_result($query,$i,0)?>"><?php echo mysql_result($query,$i,1)?></a> <a href="gg_detail.php?id=<?php echo mysql_result($query,$i,0)?>">[ฯ๊ว้]</a></p>
		</div>
	</div>
	<?php
		}
?>
	
</div>
<div style="text-align:center;clear:both">
</div>

