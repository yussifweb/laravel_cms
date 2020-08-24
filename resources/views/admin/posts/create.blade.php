@extends('layouts.app')

@section('content')

    <h1 class="text-center mb-2">Create Post</h1>

    {!! Form::open() !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category', 'Category') !!}
        {!! Form::select('category', ['L' => 'Large', 'S' => 'Small'], null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('image', 'Image') !!}
        {!! Form::file('image', null, ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::textarea('image', null, ['class'=>'form-control', 'placeholder'=>'body', 'rows'=>5]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}




@endsection
