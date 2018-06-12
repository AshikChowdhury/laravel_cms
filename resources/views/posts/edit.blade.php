@extends('layouts.app')

@section('content')


    <h1>Edit Post</h1>
    {!! Form::model($post,['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}

    <div class="form-group">

        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}

    </div><br>
    <div class="form-group">

        {!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}

    </div>
    {!! Form::close() !!}<br>

        {{--<input type="hidden" name="_method" value="PUT">--}}

        {{--<input type="text" name="title" value="{{$post->title}}">--}}

        {{--<input type="submit" name="submit" value="UPDATE">--}}
    {!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id]]) !!}

        {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}

    {!! Form::close() !!}
    {{--<form method="post" action="/posts/{{$post->id}}">--}}
        {{--{{ csrf_field() }}--}}

        {{--<input type="hidden" name="_method" value="DELETE">--}}

        {{--<input type="submit" value="DELETE">--}}

    {{--</form>--}}


@endsection