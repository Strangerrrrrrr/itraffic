<el-card>
    <div slot="header" class="clearfix">
        <span>用户登录</span>
    </div>
        <?php 
                    if ($_SESSION['cx']=="" )
                        {
                    ?>
                    <el-form ref="form" label-width="80px" size="mini" action="php/handleLogin.php" method="post" name="userlog" id="userlog">
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
                            <el-button plain size="small" name="Submit" onclick="return checklog()">登陆</el-button>
                            <el-button plain size="small">
                                <a style="color:#000;text-decoration:none;" href="/login">注册</a>
                            </el-button>
                        </el-form-item>
                    </el-form>
        <?php 
                                }
                    else
                    {
                    ?>
                    <el-form ref="form" label-width="100px" size="mini">
                        <el-form-item label="当前用户">
                            <el-tag><?php echo $_SESSION['username']?></el-tag>
                        </el-form-item>
                        <el-form-item label="权限">
                            <el-tag><?php echo $_SESSION['cx']?></el-tag>
                        </el-form-item>
                        <el-form-item>
                            <el-button plain onClick="javascript:location.href='logout.php';"> 退出 </el-button>
                            <el-button plain onClick="javascript:location.href='main.php';"> 后台 </el-button>
                        </el-form-item>
                    </el-form>
        <?php 
                                } 
                                ?>
</el-card>
