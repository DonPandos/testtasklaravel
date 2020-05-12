<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/uikit.css">
  <title>Document</title>
</head>
<body>

  @if($errors->any())
  <div class="uk-alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form action="{{ route('form-submit') }}"  class="uk-form-horizontal uk-form-width-large">
    @csrf

    <div>
    <label for="firstname" class="uk-form-label">Имя</label>
    <input type="text" name="firstname" id="firstname" placeholder="Введите имя" class="uk-input">
    </div>

    <div>
    <label for="secondname" class="uk-form-label">Фамилия</label>
    <input type="text" name="secondname" id="secondname" placeholder="Введите фамилию" class="uk-input">
    </div>

    <div>
    <label for="patronymic" class="uk-form-label">Отчество</label>
    <input type="text" name="patronymic" id="patronymic" placeholder="Введите отчество" class="uk-input">
    </div>

    <div>
    <label for="phone" class="uk-form-label">Номер телефона</label>
    <input type="tel" name="phone" id="phone" placeholder="Введите номер телефона" class="uk-input" pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
    </div>

    <div>
    <label for="email" class="uk-form-label">Email</label>
    <input type="text" name="email" id="email" placeholder="Введите email" class="uk-input">
    </div>
    <button type="submit" name="button" class="uk-button uk-button-default">Отправить</button>
  </form>
</body>
</html>
