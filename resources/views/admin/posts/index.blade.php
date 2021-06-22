@extends('navigation')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card-header">
                    <div style="text-align: center"><h2>All posts</h2></div>
                    <a href="{{route('admin.posts.create')}}" style="text-align: center"><h5>Create post</h5></a>
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Post</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td> {{$post->title}}</td>
                                <td> {{$post->description}}</td>
                                <td class="px-6 py-4 whitespace-wrap text-sm text-gray-500">
                                        <a href="{{route('admin.posts.edit', $post)}}">Edit</a>
                                </td>
                                <td>
                                        <form action="{{route('admin.posts.destroy', $post)}}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button>Delete</button>
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
