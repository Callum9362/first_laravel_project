@extends('layout')

@section('content')

<div id="wrapper">
    <div id="page" class="container">
        @foreach ($articles as $article)

         <div class="content">
             <h2>
              <a href="/articles/{{ $article->id }}">
                {{ $article->title }}
              </a>
             </h2>
         </div>

         {!! $article-> excerpt !!}

        @endforeach
    </div>
</div>

@endsection