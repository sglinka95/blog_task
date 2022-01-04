@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-1 g-4">
        <div class="col">
            <h3>{{ $post->title }}</h3>
        </div>
        <div class="col">
            <h4 class="card-title">Comments</h4>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Content</th>
                        <th scope="col">Created at</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!count($comments))
                        <tr>
                            <td colspan="2" class="text-center">There are no comments</td>
                        </tr>
                    @endif
                    @foreach ($comments as $comment)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $comment->username }}</td>
                            <td>{{ $comment->content }}</td>
                            <td>{{ $comment->created_at }}</td>
                        </tr>      
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection