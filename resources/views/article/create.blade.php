@extends('templates.app')

@section('content')

<h2>Trenutno pišete novi članak</h2>
<a href="{{ action('ArticleController@index') }}">Nazad na listu</a>

{!! Form::model(new App\Article, ['action' => 'ArticleController@store']) !!}

    {!! Form::label('title') !!}<br>
    {!! Form::text('title') !!}<br>

    {!! Form::label('content') !!}<br>
    {!! Form::textarea('content') !!}<br>

    {!!  Form::submit('Submit') !!}

{!! Form::close() !!}

@endsection