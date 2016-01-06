<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn Laravel 5</title>

    <link href="/css/app.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.useso.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="header">
    <h1>Learn Laravel 5</h1>
    <div style="width:50%;float:right;padding: 5px; font-size: 16px;">{{ Inspiring::quote() }}</div>

    <div class="topmenu-wrap">
        <ul class="topmenu container">
            <li class="currentitem"><a href="/">首页</a></li>
            <li><a href="{{ URL('articles') }}">文章</a></li>
        </ul>

    </div>

</div>

<div class="container" style="margin-top: 20px;">
    <selection style="clear: both;">
        <div style="display: block;float: left;PADDING-LEFT: 40px;"> 博客一般1-2周更新一次。有问题最好微博联系，基本天天刷微博。微博搜索：程序员吴文付 QQ群：176978149</div>
        <div style="float: right;display: block;"><a href="#">登录</a></div>
    </selection>

    @yield('content')




</div>

<div id="footer" style="text-align: center;">
    ©2015 <a href="https://wuwenfu.com">吴文付</a>
</div>

</body>
</html>