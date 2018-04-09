<el-card>
  <div slot="header" class="clearfix">
    <span>系统公告</span>
  </div>
  <marquee border="0" direction="up" height="100%" onMouseOut="start()" onMouseOver="stop()" scrollamount="1"
    scrolldelay="50">
    <p>
      <vue-time :showDate="showDate"></vue-time>
      <?php 
        $sql="select * from dx where leibie='系统公告'";
        $query=mysqli_query($conn, $sql);
        $rowscount=mysqli_num_rows($query);
        if($rowscount>0)
        {
        $row = fetchOne($conn, $sql);
        echo $row['content'];
        }
      ?>
    </p>
  </marquee>
</el-card>
