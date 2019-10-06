@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Blog Post</div>

                <div class="card-body">
                    <form method="post" action="{{ route('posts.store') }}">
                    @csrf
                        <div class="form-group">    
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" name="title"/>
                        </div>
                        <div class="form-group">    
                            <textarea rows="4" cols="50" class="form-control" name="content">Enter the content</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary-outline">Add Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
