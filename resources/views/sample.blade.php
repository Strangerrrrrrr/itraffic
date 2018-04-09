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

        <title>i-Traffic | 交通违章一站式处理系统</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fa-svg-with-js.css') }}">
        <link rel="stylesheet" href="{{ asset('css/semantic.min.css') }}">
        <script defer src="{{ asset('js/fontawesome-all.min.js') }}"></script>
        <script defer src="{{ asset('js/semantic.min.js') }}"></script>
    </head>

    <body>
      <div id="app">
        <!-- content -->
      </div>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
