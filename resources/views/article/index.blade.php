@extends('templates.app')

@section('content')

<h2>Trenutno gledate spisak svih članaka</h2>

<a href="{{ action('ArticleController@create') }}">Novi članak</a>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Naslov</th>
            <th>Sadržaj</th>
            <th>Autor</th>
            <th>Editor</th>
            <th>Akcije</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->content }}</td>
            <td>{{ $article->author->name }}</td>
            <td>{{ $article->editor ? $article->editor->name : 'Ne postoji' }}</td>
            <td>
                <a class="delete-request" href="{{ action('ArticleController@destroy', $article->id) }}">Izbriši</a>
                <a href="{{ action('ArticleController@edit', $article->id) }}">Izmijeni</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection