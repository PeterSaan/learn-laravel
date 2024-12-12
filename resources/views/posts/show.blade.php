@extends('partials.layout')
@section('title', 'Show Post')
@section('content')
    <div class="container mx-auto">
        <table class="table">
            <thead>
                <th>Title</th>
                <th>Created</th>
                <th>Updated</th>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->updated_at }}</td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection
