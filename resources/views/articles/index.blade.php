@extends('layout')

@section('content')

<div id="wrapper">
    <div id="page" class="container">
        @forelse ($articles as $article)

         <div class="content">
             <h2>
              <a href="{{ $article->path()}}">
                {{ $article->title }}
              </a>
             </h2>
         </div>

         {!! $article-> excerpt !!}

        @empty
            <p>No relevant articles yet</p>
        @endforelse
    </div>
</div>

@endsection

