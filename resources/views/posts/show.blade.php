@extends('partials.layout')
@section('title', 'Show Post')
@section('content')
    <div class="container mx-auto">
        <div class="grid gap-y-2">
            <div class="text-2xl font-bold">Title</div>
            <p>{{ $post->title }}</p>
        </div>
        <div class="grid gap-y-2 my-6">
            <div class="text-2xl font-bold">Body</div>
            <p>{{ $post->body }}</p>
        </div>
        <div class="grid gap-y-2">
            <div class="text-2xl font-bold">Created at</div>
            <p>{{ $post->created_at }}</p>
        </div>
    </div>
@endsection
