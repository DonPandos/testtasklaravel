@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-3" >
@if($errors->any())
    <div class="uk-alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{ route('articleform-submit') }}"  method="post" class="uk-form-horizontal uk-form-width-large" enctype="multipart/form-data">
      @csrf

      <div>
        <label for="heading" class="uk-form-label">Заголовок</label>
        <input type="text" name="heading" id="heading" placeholder="Введите заголовок" class="uk-input">
      </div>

      <div>
        <label for="text" class="uk-form-label">Текст</label>
        <textarea style="height: 150px; line-height: 20px;" name="text" id="text" placeholder="Введите текст" class="uk-input"></textarea>
      </div>

      <div>
        <label for="article_image" class="uk-form-label">Картинка</label>
        <input type="file" name="article_image" id="article_image" class="uk-input">
      </div>


      <button type="submit" name="button" class="uk-button uk-button-default">Добавить</button>
    </form>
    </div>
  </div>
</div>
@endsection
