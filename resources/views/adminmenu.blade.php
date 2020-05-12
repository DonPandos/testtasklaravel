@extends('layouts.app')
@section('content')
<div class="container">
  @if(\Session::has('error'))
  <div class="alert alert-danger">
    {{\Session::get('error')}}
  </div>
  @endif
  <div class="row">
    <a href="{{ route('article-form') }}" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Добавить статью</a>
  </div>
</div>
@endsection
