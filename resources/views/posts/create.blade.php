@extends('layouts.app')

@section('content')

    <h1>Create Post</h1>
    {{--<form method="POST" action="/posts">--}}
    {{--{{ csrf_field() }}--}}
    {{--<input type="text" name="title">--}}
    {{--<input type="submit" name="submit">--}}
    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div><br>

    <div class="form-group">
        {!! Form::label('title', 'File') !!}
        {!! Form::file('file', ['class'=>'form-control']) !!}
    </div><br>
    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->find() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection

