@extends('templates.app')

@section('content')

<h2>Trenutno mijenjate članak '{{ $article->title }}'</h2>
<a href="{{ action('ArticleController@index') }}">Nazad na listu</a>

{!! Form::model($article, ['action' => ['ArticleController@update', $article->id], 'method' => 'PUT']) !!}

{!! Form::label('title') !!}<br>
{!! Form::text('title') !!}<br>

{!! Form::label('content') !!}<br>
{!! Form::textarea('content') !!}<br>

{!!  Form::submit('Submit') !!}

{!! Form::close() !!}

@endsection