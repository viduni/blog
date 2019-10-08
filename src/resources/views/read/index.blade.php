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
                                <td>Title</td>
                                <td>Content</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td><a href="{{route('read.single',$post->id)}}">{{ $post->title }}</a></td>
                                    <td>{{ $post->content }}</td>
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
