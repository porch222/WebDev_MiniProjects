@extends('layouts.blog')

@section('content')

    <h2>All Posts</h2>

    @foreach($posts as $post)
        <div>
            <h3>{{ $post['title'] }}</h3>
            <a href="/blog/{{ $post['id'] }}">Read More</a>
            <hr>
        </div>
    @endforeach

@endsection