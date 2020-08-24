@extends('layouts.app')

@section('content')

    <h1 class="text-center mb-2">Categories</h1>

    @if($errors->any())

        <div class="alert alert-danger mb-1">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </div>

    @endif

    {!! Form::open(['method'=>'post', 'action'=>'CategoryController@store']) !!}
    <div class="input-group">
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'New Category']) !!}
        <div class="input-group-prepend">
            {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}


    <table class="table table-hover mt-2">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>

        <tbody>

        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td><a class="btn btn-success btn-sm" href="{{route('categories.edit', $category->id)}}">Edit</a></td>
            <td>
                {!! Form::open(['method'=>'delete', 'action'=>['CategoryController@destroy', $category->id]]) !!}
                {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
    <br>

    <div> {{$categories->render()}} </div>

@endsection
