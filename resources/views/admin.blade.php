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
  <div class="row">
  <div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default">
  <div class="panel-heading btn-primary">
    <table class="uk-table uk-table-striped">
  <thead>
    <tr>
      <th>Фамилия</th>
      <th>Имя</th>
      <th>Отчество</th>
      <th>Номер телефона</th>
      <th>Email</th>
    </tr>
    </thead>
    @foreach($feedbacks as $feedback)
    <tr>
      <td>{{ $feedback->secondname }}</td>
      <td>{{ $feedback->firstname }}</td>
      <td>{{ $feedback->patronymic }}</td>
      <td>{{ $feedback->Phone }}</td>
      <td>{{ $feedback->email }}</td>
    </tr>
    @endforeach

    </table>
  </div>
  </div>
  </div>
  </div>

</body>
</html>
