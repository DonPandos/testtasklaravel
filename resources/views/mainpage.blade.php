@extends('layouts.mainlayout')

@section('content')

<div class="" uk-grid>
  <div class="uk-width-1-6"></div>
  <div class="uk-width-5-6">
    <div uk-grid>
      <div class="uk-width-5-6">
        <h1 class="about-title">Articles</h1>
        <hr class="about-title-line" align="center" width="100%" size="2" color="#000000" />
        @foreach($articles as $article)
        <!-- <div class="article" uk-grid>
        <div class="uk-width-1-4">
        <img class="article-image" src="/img/{{$article->filename}}" alt="">
      </div>
      <div class="uk-width-3-4">
      <h1 class="article-heading">{{ $article->heading }}</h1>
      <p class="article-created-at">{{ $article->created_at }}</p>
      <p class="article-text">{{ $article->text }}</p>

    </div>

  </div> -->

  <div class="article" uk-grid>
    <div class="uk-width-1-3">
      <img class="article-image" src="/img/{{$article->filename}}" alt="">
    </div>
    <div class="uk-width-2-3">
      <h1 class="article-heading">{{ $article->heading }}</h1>
      <p class="article-created-at">{{ $article->created_at }}</p>
      <p class="article-text">{{ $article->text }}</p>

    </div>

  </div>

  @endforeach
</div>
</div>
</div>
</div>

@endsection
