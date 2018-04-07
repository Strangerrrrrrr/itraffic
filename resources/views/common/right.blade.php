<table id="__01" width="225" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td>
      <table id="__01" width="225" height="218" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="225" height="36" background="images/1_02_02_02_01.gif">
            <table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="12%"></td>
                <td width="88%" valign="bottom">
                  <span class="STYLE11">系统公告</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td height="172">
            <table id="__01" width="225" height="172" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="6" height="172" background="images/1_02_02_02_02_01.gif"></td>
                <td width="205" height="172">
                  <marquee border="0" direction="up" height="100%" onMouseOut="start()" onMouseOver="stop()" scrollamount="1"
                    scrolldelay="50">
                    <TABLE width="100%" height="100%">
                      <TR>
                        <TD>
                          <P>
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
                          </P>
                        </TD>
                      </TR>
                    </TABLE>
                  </marquee>
                </td>
                <td width="14" height="172" background="images/1_02_02_02_02_03.gif"></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/1_02_02_02_03.gif" width="225" height="9" alt="">
          </td>
        </tr>
      </table>
    </td>
  </tr>

  <tr>
    <td height="233">
      <table id="__01" width="225" height="229" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="225" height="36" background="images/1_02_02_02_01.gif">
            <table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="12%"></td>
                <td width="88%" valign="bottom">
                  <span class="STYLE11">友情链接</span>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <table id="__01" width="225" height="215" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="6" height="215" background="images/1_02_02_02_02_01.gif"></td>
                <td width="205" height="215">
                  <table class="newsline" cellspacing="0" cellpadding="0" width="98%" align="center" border="0">
                    <tbody>
                      <?php 
					  $sql="select * from youqinglianjie order by id desc";
					  $query=mysqli_query($conn, $sql);
            $rowscount=mysqli_num_rows($query);
            $allresult = fetchAll($conn, $sql);
					  if($rowscount>0)
					  {
              foreach($allresult as $result):
						?>
                      <tr>
                        <td width="8%" height="25">
                          <img src="images/1.jpg"> </td>
                        <td width="16%" height="25">
                          <a href="<?php echo $result['wangzhanmingcheng'];?>" target="_blank">
                            <?php echo $result['wangzhanmingcheng'];?>
                          </a>
                        </td>
                        <td width="76%" height="25">
                          <a href="<?php echo $result['wangzhi'];?>" target="_blank">
                            <?php echo $result['wangzhi'];?>
                          </a>
                        </td>
                      </tr>
              <?php endforeach; } ?>
                    </tbody>
                  </table>
                </td>
                <td width="14" height="215" background="images/1_02_02_02_02_03.gif"></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <img src="images/1_02_02_02_03.gif" width="225" height="9" alt="">
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
