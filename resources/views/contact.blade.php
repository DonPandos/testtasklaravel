@extends('layouts.mainlayout')

@section('content')

<div class="" uk-grid>

  <div class="uk-width-1-6"></div>
  <div class="uk-width-5-6">
    <div uk-grid>
      <div class="uk-width-5-6">
        <h1 class="about-title">Contact</h1>
        <hr class="about-title-line" align="center" width="100%" size="2" color="#000000" />
      </div>
      <div class="uk-width-1-6"></div>
    </div>
  </div>

</div>

<div uk-grid>
  <div class="uk-width-1-6"></div>
  <div class="uk-width-5-6">
    <div uk-grid>
      <div class="uk-width-5-6">
        <div uk-grid class="uk-grid-divider">
          <div class="uk-width-3-4 contact-map">
            <h2 class="contact-map-title">Мы находимся тут</h2>
            <img src="img/map.png" alt="" class="contact-map-image">
          </div>
          <div class="uk-width-1-4">
            <div class="contact-section">
              <h3 class="contact-section-title">Адрес</h3>
              <p class="contact-section-text">АдресАдресАдресАдрес АдресАдресАдресАдрес АдресАдресАдресАдрес</p>
            </div>

            <div class="contact-section">
              <h3 class="contact-section-title">Номер телефона</h3>
              <p class="contact-section-text">+380*********</p>
              <p class="contact-section-text">+380*********</p>
              <p class="contact-section-text">+380*********</p>

            </div>

            <div class="contact-section">
              <h3 class="contact-section-title">Соц. сети</h3>
              <a href="" class="contact-section-link uk-button uk-button-link">Вконтакте</a> <br>
              <a href="" class="contact-section-link uk-button uk-button-link">Телеграмм</a> <br>
              <a href="" class="contact-section-link uk-button uk-button-link">Инстаграмм</a>
            </div>


          </div>
        </div>
      </div>
      <div class="uk-width-1-6"></div>
    </div>
  </div>
</div>

@endsection('content')
