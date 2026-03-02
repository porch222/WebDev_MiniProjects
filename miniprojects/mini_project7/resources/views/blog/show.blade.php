@extends('layouts.blog')

@section('content')

    <h2>{{ $post['title'] }}</h2>

    <p>{{ $post['content'] }}</p>

    <br>
    <a href="/blog">← Back to Blog</a>

@endsection