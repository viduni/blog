@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Blog Post</div>

                <div class="card-body">
                    <form method="post" action="{{ route('categories.store') }}">
                    @csrf
                        <div class="form-group">    
                            <label for="title">Name</label>
                            <input type="text" class="form-control" name="name"/>
                        </div>
                        <div class="form-group">    
                            <label for="title">Label</label>
                            <input type="text" class="form-control" name="label"/>
                        </div>
                        <button type="submit" class="btn btn-primary-outline">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
