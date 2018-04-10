<el-card>
    <div slot="header" class="clearfix">
        <span>用户登录</span>
    </div>
    <el-form ref="form" label-width="100px" size="mini">
        <el-form-item label="当前用户">
            <el-tag>lrq</el-tag>
        </el-form-item>
        <el-form-item label="真实姓名">
            <el-tag>陆冉钦</el-tag>
        </el-form-item>
        <el-form-item label="牌照">
            <el-tag>沪CJ665</el-tag>
        </el-form-item>
        <el-form-item label="剩余分数">
            <el-tag>12</el-tag>
        </el-form-item>
        <el-form-item label="身份证号">
            <el-tag>320585199601081616</el-tag>
        </el-form-item>
        <el-form-item>
            <el-button plain onClick="javascript:location.href='logout.php';"> 注销 </el-button>
            <el-button plain onClick="javascript:location.href='logout.php';"> 具体信息 </el-button>
        </el-form-item>
    </el-form>
</el-card>
