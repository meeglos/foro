@extends('layouts/app')

@section('content')

    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    <p>{{ $post->user->name }}</p>

    <h4>Comentarios</h4>

    {!! Form::open(['route' => ['comments.store', $post], 'method' => 'POST']) !!}

        {!! Field::textarea('comment') !!}

        {{--{!! Field::input('Publicar comentario', ['type' => 'button']) !!}--}}

        <button type="submit">
            Publicar comentario
        </button>

    {!! Form::close() !!}

@endsection