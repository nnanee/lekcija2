<?php

namespace App\Http\Controllers;

use App\Article;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $articles = Article::all();

        return view('article.index', compact(
            'articles'
        ));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store()
    {
        $data = \Input::only([
            'title',
            'content'
        ]);

        $data['author_id'] = \Auth::user()->id;

        Article::create($data);

        return redirect('article');
    }



    public function edit($id)
    {
        $article = Article::find($id);

        return view('article.edit', compact(
            'article'
        ));
    }

    public function update($id)
    {
        $article = Article::find($id);

        $data = \Input::only([
            'title',
            'content'
        ]);

        $data['editor_id'] = \Auth::user()->id;

        $article->fill($data);

        $article->save();

        return redirect('article');
    }

    public function destroy($id)
    {
        Article::destroy($id);

        return redirect('article');
    }
}
