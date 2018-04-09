<el-card>
    <div slot="header" class="clearfix">
        <span>交规宣传栏</span>
        <el-button style="float: right; padding: 3px 0" type="text"><a href="news.php?lb=交规宣传栏"> 更多 &gt;&gt;&gt; </a></el-button>
    </div>
<?php
    $sql="select biaoti,id,addtime from xinwentongzhi where leibie='交规宣传栏' order by id desc limit 0,7";
    $query=mysqli_query($conn,$sql);
    $rowscount=mysqli_num_rows($query);
    if($rowscount>0)
    {
        $rows = fetchAll($conn, $sql);
        foreach($rows as $row):
        ?>
            <div class="text item">
                <i class="fas fa-info-circle"></i>
                <a class="news-link" href="gg_detail.php?id=<?php echo $row['id'];?>">
                    <?php echo $row['biaoti']; ?>
                    <span style="float:right;"><?php echo date("Y-m-d",strtotime($row['addtime']));?></span>
                </a>
            </div>
        <?php 
        endforeach;
    }
?>
</el-card>