@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Categories</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Label</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>{{$category->label}}</td>
                                <td><a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary" >Edit</a></td>
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
