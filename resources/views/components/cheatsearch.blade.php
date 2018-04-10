<el-card>
    <div slot="header" class="clearfix">
        <span>违章信息查询</span>
    </div>
    <el-form ref="form" label-width="100px" size="mini">
        <el-form-item label="车牌号">
            <el-input>lrq</el-input>
        </el-form-item>
        <el-form-item label="车主姓名">
            <el-input type="password">xxxxxx</el-input>
        </el-form-item>
        <el-form-item>
            <el-button plain> 搜索 </el-button>
        </el-form-item>
    </el-form>
</el-card>

<hr>

<el-card>
    <div slot="header" class="clearfix">
        <span>违章记录</span>
    </div>
    <el-form ref="form" label-width="100px" size="mini">
        <el-form-item label="违章代码">
            <el-tag>1101</el-tag>
        </el-form-item>
        <el-form-item label="车主姓名">
            <el-tag>陆冉钦</el-tag>
        </el-form-item>
        <el-form-item label="扣分">
            <el-tag>12</el-tag>
        </el-form-item>
        <el-form-item label="罚款">
            <el-tag>1500</el-tag>
        </el-form-item>
        <el-form-item label="描述">
            <el-tag>驾驶拼装的机动车上道路行驶的</el-tag>
        </el-form-item>
        <el-form-item>
            <el-button plain> 申诉 </el-button>
            <el-button plain> 确认 </el-button>
        </el-form-item>
    </el-form>
</el-card>
