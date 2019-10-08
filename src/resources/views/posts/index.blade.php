@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog Posts</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Title</td>
                                <td>Content</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id}}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->content }}</td>
                                    <td>
                                        <a href= "{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
