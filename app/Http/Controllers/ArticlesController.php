<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    //Renders a particular article
    public function show($id){
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    //Render a list of articles
    public function index(){
        $articles = Article::latest()->get();
        return view('articles.index', ['articles' => $articles]);
    }

    //Renders a page to create articles
    public function create(){

        return view('articles.create');
    }

    //Renders a page to persist articles from the create form.
    public function store(){

        //Validation rules
        request()->validate([
            'title' => 'required | min:3 | max:255',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');

    }

    //Renders a page to edit articles
    public function edit($id){
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    //Persists an edit to an article
    public function update($id){

        //Validation rules
        request()->validate([
            'title' => 'required | min:3 | max:255',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/' . $article->id);
    }

    // destroy an article
    public function destroy(){

    }
}
