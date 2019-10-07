@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Blog Post</div>

                <div class="card-body">
                    <form method="post" action="{{ route('categories.update',$category->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">    
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$category->name}}"/>
                        </div>
                        <div class="form-group">    
                            <label for="label">Label</label>
                            <input type="text" class="form-control" name="label" value="{{$category->label}}"/>
                        </div>
                        <button type="submit" class="btn btn-primary-outline">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
