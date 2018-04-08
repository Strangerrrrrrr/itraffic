<el-card>
    <div slot="header" class="clearfix">
        <span>用户登录</span>
    </div>
        <?php 
                        if ($_SESSION['cx']=="" )
                        {
                    ?>
                    <el-form ref="form" label-width="80px" size="mini">
                        <el-form-item label="用户名">
                            <el-input id="username" name="username"></el-input>
                        </el-form-item>
                        <el-form-item label="密码">
                            <el-input id="pwd1" name="pwd1" type="password"></el-input>
                        </el-form-item>
                        <el-form-item label="验证码">
                            <el-input id="yzm" name="yzm" type="text" style="width:100px"></el-input>
                            <img alt="刷新验证码" onClick="this.src='php/code.php?time='+new Date().getTime();" src="php/code.php?time='+new Date().getTime();" style="cursor:pointer;height:28px;" />
                        </el-form-item>
                        <el-form-item>
                            <el-button plain size="small" name="Submit" onClick="return checklog();">登陆</el-button>
                            <!--  -->
                            <el-button plain size="small" name="Submit" onClick="return checklog();">
                                <a style="color:#000;text-decoration:none;" href="/login">注册</a>
                            </el-button>
                        </el-form-item>
                    </el-form>
            <form action="userlog_post.php" method="post" name="userlog" id="userlog">
                
            </form>
        <?php 
                                }
                    else
                    {
                    ?>
        <!-- <table width="93%" height="68%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                    <td height="28" align="left">当前用户：<?php //echo $_SESSION['username']?></td>
                                    </tr>
                                    <tr>
                                    <td height="28" align="left">您的权限：<?php //echo $_SESSION['cx']?></td>
                                    </tr>
                                    <tr>
                                    <td height="28" align="left">欢迎您的到来!!!</td>
                                    </tr>
                                    <tr>
                                    <td height="28" align="center"><input type="button" name="Submit3" value="退出" onClick="javascript:location.href='logout.php';" class="hsgbutton" />
                                        <input type="button" name="Submit22" value="个人后台" onClick="javascript:location.href='main.php';" class="hsgbutton" /></td>
                                    </tr>
                                </table> -->
        <?php 
                                } 
                                ?>
</el-card>
