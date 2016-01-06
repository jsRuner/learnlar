@extends('_layouts.default')

@section('content')

<style type="text/css">
    .excerpt{
        background-color: #fff;
        padding: 20px 15px 20px 20px;
        margin-bottom: 10px;
        position: relative;
        clear: both;
    }
    .excerpt .title{
        border: 0px;
    }
    .thumb{
        margin-right: 20px;
    }
    .thumb , .thumb img{
        width: 200px;
        height: 123px;
        display: inline;
        position: relative;
        top: 0px;
        float: left;

    }
    .note{
        color: #777;
        line-height: 24px;
        display: block;
        text-align:left;
        height: 123px;!important
    }
    .auth-span{
        float: right;
        position: absolute;
        bottom: 0;
        right: 0
    }
</style>

    <!--
<div id="title" style="text-align: center;">
    <h1>Learn Laravel 5</h1>
    <div style="padding: 5px; font-size: 16px;">{{ Inspiring::quote() }}</div>
    <ul class="topmenu">
        <li><a href="/">首页</a></li>
        <li><a href="{{ URL('articles') }}">文章</a></li>
    </ul>
    <div style="clear: both;"></div>
</div>-->


<hr>
<div id="content">
    <ul>
        @foreach ($articles as $article)
        <li  class="excerpt">
            <div class="title">
                <a href="{{ URL('articles/'.$article->id) }}">
                    <h4>【标题】{{ $article->title }}</h4>
                </a>
            </div>
            <div class="body">
                <a href="#" class="thumb"><img src="/uploadfiles/1.jpg" alt="" >
                </a>
                <p class="note">{{ $article->body }}</p>
            </div>
            <p class="auth-span">作者:吴文付 2016年1月6日</p>
        </li>
        @endforeach
    </ul>
</div>


<aside class="sidebar">
    <div class="widget">
        <div class="title">

            <h2>文章归档</h1>
        </div>
        <ul>
            <li><a href="#">2016年1月</a></li>
            <li><a href="#">2016年1月</a></li>
            <li><a href="#">2016年1月</a></li>
            <li><a href="#">2016年1月</a></li>
            <li><a href="#">2016年1月</a></li>
            <li><a href="#">2016年1月</a></li>
        </ul>

    </div>

</aside>



@endsection