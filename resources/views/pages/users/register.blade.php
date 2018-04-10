<?php
session_start();
include_once 'php/conn.php';
?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>注册 | 交通违章一站式处理系统</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fa-svg-with-js.css') }}">
        <link rel="stylesheet" href="{{ asset('css/semantic.min.css') }}">
        <script defer src="{{ asset('js/fontawesome-all.min.js') }}"></script>
        <script defer src="{{ asset('js/semantic.min.js') }}"></script>
    </head>

    <body>
      <div id="app">
      <template>
        <el-container>
            <el-header style="margin-bottom: 15px;">
                @include('common/header')
            </el-header>
            <el-container>
                <el-main style="padding-top:0px;">
                  @include('components/cheatregister') 
                </el-main>
                <el-aside>
                    @include('components/notice') 
                    <hr>
                    @include('components/login')
                </el-aside>
            </el-container>
            <el-footer>
                @include('common/footer') 
            </el-footer>
        </el-container>
      </template>
      </div>
      <script src="{{ mix('js/app.js') }}"></script>
      <script>
          var Main = {
              name: "mBox",
              mounted () {
                this.$message({
                  message: '恭喜你，注册成功！',
                  type: 'success'
                });
              }
          };
          var Ctor = Vue.extend(Main)
          new Ctor().$mount('#app')
      </script>
    </body>
</html>
