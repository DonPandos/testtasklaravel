<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.4/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.4/dist/js/uikit-icons.min.js"></script>
  <link rel="stylesheet" href="/css/uikit.css">
  <link rel="stylesheet" href="/css/app.css">
  <title></title>
</head>
<body>
  <div class="header" uk-grid>
    <div class="uk-width-1-6@m uk-width-1-6@l">
    </div>
    <div class="uk-width-5-6@m uk-width-5-6@l">
      <div uk-grid>
        <div class="uk-width-1-4@m">
          <div class="header-logo uk-position-absolute">
            <h1 class="header-logo-text">BLOGNAME</h1>
          </div>
        </div>
        <div class="uk-width-3-4@m">
          <ul class="uk-list-inline header-menu">
            <li><a href="" class="uk-button ">Home</a></li>
            <li><a href="" class="uk-button ">About</a></li>
            <li><a href="" class="uk-button ">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
  @yield('content')
  </div>
  <div class="footer" uk-grid>
    <div class="uk-width-1-2@m" uk-grid>
      <div class="uk-width-1-6@m"></div>
      <div class="uk-width-5-6@m"></div>
    </div>
    <div class="uk-width-1-2@m" uk-grid>
      <div class="uk-width-5-6@m"></div>
      <div class="uk-width-1-6@m"></div>
    </div>
  </div>
</body>
</html>
