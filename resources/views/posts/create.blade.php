@extends('layouts.app')

@section('content')
    <h1>記事を投稿する</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="content">内容</label>
            <textarea name="content" id="content" rows="4" required></textarea>
        </div>

        <button type="submit">投稿する</button>
    </form>
@endsection
