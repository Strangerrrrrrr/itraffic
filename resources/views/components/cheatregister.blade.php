<el-card>
    <div slot="header" class="clearfix">
        <span>用户注册</span>
    </div>
    <el-form ref="form" label-width="100px" size="mini">
        <el-form-item label="用户名">
            <el-input>lrq</el-input>
        </el-form-item>
        <el-form-item label="密码">
            <el-input type="password">xxxxxx</el-input>
        </el-form-item>
        <el-form-item label="真实姓名">
            <el-input>陆冉钦</el-input>
        </el-form-item>
        <el-form-item label="性别">
            <el-radio-group >
                <el-radio label="male" checked>男</el-radio>
                <el-radio label="female">女</el-radio>
            </el-radio-group>
        </el-form-item>
        <el-form-item label="身份证号">
            <el-input></el-input>
        </el-form-item>
        <el-form-item label="牌照">
            <el-input></el-input>
        </el-form-item>
        <el-form-item label="手机">
            <el-input></el-input>
        </el-form-item>
        <el-form-item label="行驶证照片">
            <el-upload
                action="https://jsonplaceholder.typicode.com/posts/">
                <el-button size="small" type="primary">点击上传</el-button>
                <div slot="tip" class="el-upload__tip">只能上传jpg/png文件，且不超过500kb</div>
            </el-upload>
        </el-form-item>
        <el-form-item label="驾驶证照片">
            <el-upload
                action="https://jsonplaceholder.typicode.com/posts/">
                <el-button size="small" type="primary">点击上传</el-button>
                <div slot="tip" class="el-upload__tip">只能上传jpg/png文件，且不超过500kb</div>
            </el-upload>
        </el-form-item>
        <el-form-item label="身份证照片">
            <el-upload
                action="https://jsonplaceholder.typicode.com/posts/">
                <el-button size="small" type="primary">点击上传</el-button>
                <div slot="tip" class="el-upload__tip">只能上传jpg/png文件，且不超过500kb</div>
            </el-upload>
        </el-form-item>
        <el-form-item>
            <el-button plain> 注册 </el-button>
        </el-form-item>
    </el-form>
</el-card>

