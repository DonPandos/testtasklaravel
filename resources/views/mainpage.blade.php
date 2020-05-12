@extends('layouts.mainlayout')

@section('content')
<div class="" uk-grid>
  <div class="uk-width-1-4@m"></div>
  <div class="uk-width-3-4@m">
    @foreach($articles as $article)
    <div class="article" uk-grid>
      <div class="uk-width-1-4">
        <img class="article-image" src="/img/img.jpg" alt="">
      </div>
      <div class="uk-width-3-4">
        <h1 class="article-heading">{{ $article->heading }}</h1>
        <p class="article-created-at">{{ $article->created_at }}</p>
        <p class="article-text">{{ $article->text }}</p>

      </div>

      <img src="mainpage/fetch_image/{{ $article->id }}" alt="asd" class="article-image" height="100" width="100">
    </div>
    @endforeach
  </div>
</div>
@endsection
