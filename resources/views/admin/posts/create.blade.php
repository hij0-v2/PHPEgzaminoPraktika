@extends('navigation')

@section('content')
<div class="container py-3">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form method="POST" action="{{ route('admin.posts.store') }}">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                           placeholder="Post title">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" rows="8" cols="80"
                              class="form-control">{{ old('description') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>
</div>
@endsection
