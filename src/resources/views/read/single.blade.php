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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
