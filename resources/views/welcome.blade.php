<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>i-Traffic</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
      <div id="app">
        <el-container>
            <el-header>Header</el-header>
            <el-container>
                <el-aside width="200px">Aside</el-aside>
                <el-container>
                <el-main>Main</el-main>
                <el-footer>Footer</el-footer>
                </el-container>
            </el-container>
        </el-container>
      </div>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
