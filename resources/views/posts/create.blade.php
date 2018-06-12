@extends('layouts.app')

@section('content')

    <h1>Create Post</h1>
    {{--<form method="POST" action="/posts">--}}
    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store']) !!}
    {{--{{ csrf_field() }}--}}

    <div class="form-group">

        {!! Form::label('', 'Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}

    </div><br>
    {{--<input type="text" name="title">--}}
    {{--<input type="submit" name="submit">--}}
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

