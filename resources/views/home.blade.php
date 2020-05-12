@extends('layouts.app')
@section('content')
<div class="container">
  @if(\Session::has('error'))
  <div class="alert alert-danger">
    {{\Session::get('error')}}
  </div>
  @endif
  <div class="row">
  <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">

        <?php if(auth()->user()->isAdmin == 1){?>
          <div class="panel-body">

            <a href="{{ route('admin-forms') }}" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Просмотреть заявки</a>
            <a href="{{ route('article-form') }}" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Добавить статью</a>
          </div>
        <?php } else {?>
          <a href="/form" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Подать заявку</a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
@endsection
