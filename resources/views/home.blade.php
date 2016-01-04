@extends('_layouts.default')

@section('content')




<div id="title" style="text-align: center;">
    <h1>Learn Laravel 5</h1>
    <div style="padding: 5px; font-size: 16px;">{{ Inspiring::quote() }}</div>
    <ul class="topmenu">
        <li><a href="/">首页</a></li>
        <li><a href="{{ URL('articles') }}">文章</a></li>
    </ul>
    <div style="clear: both;"></div>
</div>
<hr>
<div id="content">
    <ul>
        @foreach ($pages as $page)
        <li style="margin: 50px 0;">
            <div class="title">
                <a href="{{ URL('pages/'.$page->id) }}">
                    <h4>{{ $page->title }}</h4>
                </a>
            </div>
            <div class="body">
                <p>{{ $page->body }}</p>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection