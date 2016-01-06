@extends('_layouts.default')

@section('content')




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