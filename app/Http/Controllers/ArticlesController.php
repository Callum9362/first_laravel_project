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

    }

    //Renders a page to persist articles from the create form.
    public function store(){

    }

    //Renders a page to edit articles
    public function edit(){

    }

    //Persists an edit to an article
    public function update(){

    }

    // destroy an article
    public function destroy(){

    }
}
