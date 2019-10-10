@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog Posts</div>

                <div class="card-body">
                    <h2>{{ $post->title }}</h2>
                    <div>{!! $post->content !!}</div>      
                </div><br>
                <div class="card-body">
                    <h3>Comments</h3>
                    <form method="post" action="{{route('comments.store')}}">
                    @csrf
                        <input type="hidden"  name="postId" value="{{$postId->post_id}}">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" />
                        <label>Comment:</label>
                        <input type="text" class="form-control" name="comment" /><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
