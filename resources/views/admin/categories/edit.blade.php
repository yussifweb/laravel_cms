@extends('layouts.app')

@section('content')

    <h1 class="text-center">Edit Category</h1>

    {!! Form::model($category,['method'=>'patch', 'action'=>['CategoryController@update',$category->id]]) !!}
    <div class="input-group">
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'New Category']) !!}
        <div class="input-group-prepend">
            {!! Form::submit('Update', ['class'=>'btn btn-primary', 'onclick'=>"return confirm('Are you sure you want to delete');"]) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @stop
