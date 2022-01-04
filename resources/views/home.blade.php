@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!count($posts))
                        <tr>
                            <td colspan="2" class="text-center">There are no posts.</td>
                        </tr>
                    @endif
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ ($posts->currentPage() - 1) * $posts->perPage() + $loop->iteration }}</th>
                            <td><a href="/post/{{ $post->id }}">{{ $post->title }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $posts->links() !!}
        </div>
    </div>
</div>
@endsection
