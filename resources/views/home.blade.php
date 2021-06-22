@extends('navigation')

@section('content')
    <div class="container py-3">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ $post->title }}</h3>
                        </div>
                        <div class="card-body">
                            <p>{{ substr($post->description, 0, 100) }}</p>
{{--                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-block">Read More</a>--}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
