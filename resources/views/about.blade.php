@extends('layouts.mainlayout')

@section('content')
<div class="" uk-grid>

  <div class="uk-width-1-6"></div>
  <div class="uk-width-5-6">
    <div uk-grid>
      <div class="uk-width-5-6">
        <h1 class="about-title">About</h1>
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
          <div class="uk-width-3-4">
            <div class="about-article">
              <div uk-grid>
                <div class="uk-width-2-3">
                  <h2 class="about-article-title">
                    This is title for the article About
                  </h2>
                </div>
              </div>
              <div uk-grid>
                <p class="about-article-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas nulla, earum quasi incidunt sed tempore atque quibusdam saepe nesciunt, maxime sapiente ex fugit corrupti consequatur officiis, aspernatur autem harum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis illo quo commodi vel eos aut, perspiciatis laboriosam id consequatur ipsa minima error omnis. Voluptas sit, quae consequatur quos suscipit esse.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis modi aliquid tempore? Sunt, atque, possimus repellendus adipisci itaque sed nisi dolores, eius id numquam illum modi quasi, iusto! Alias, a!
                </p>
              </div>
            </div>

            <div class="about-article">
              <div uk-grid>
                <div class="uk-width-2-3">
                  <h2 class="about-article-title">
                    This is title for the article About 2
                  </h2>
                </div>
              </div>
              <div uk-grid>
                <p class="about-article-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas nulla, earum quasi incidunt sed tempore atque quibusdam saepe nesciunt, maxime sapiente ex fugit corrupti consequatur officiis, aspernatur autem harum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis illo quo commodi vel eos aut, perspiciatis laboriosam id consequatur ipsa minima error omnis. Voluptas sit, quae consequatur quos suscipit esse.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis modi aliquid tempore? Sunt, atque, possimus repellendus adipisci itaque sed nisi dolores, eius id numquam illum modi quasi, iusto! Alias, a!
                </p>
              </div>
            </div>

            <div class="about-article">
              <div uk-grid>
                <div class="uk-width-2-3">
                  <h2 class="about-article-title">
                    This is title for the article About 3
                  </h2>
                </div>
              </div>
              <div uk-grid>
                <p class="about-article-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas nulla, earum quasi incidunt sed tempore atque quibusdam saepe nesciunt, maxime sapiente ex fugit corrupti consequatur officiis, aspernatur autem harum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis illo quo commodi vel eos aut, perspiciatis laboriosam id consequatur ipsa minima error omnis. Voluptas sit, quae consequatur quos suscipit esse.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis modi aliquid tempore? Sunt, atque, possimus repellendus adipisci itaque sed nisi dolores, eius id numquam illum modi quasi, iusto! Alias, a!
                </p>
              </div>
            </div>
          </div>
          <div class="uk-width-1-4">
            <h2 class="about-article-title" style="text-align:center;">
              People
            </h2>

            <div class="person-info">
              <img src="/img/person.png" alt="" class="person-info-image">
              <p class="person-info-name">
                Иванов Иван Иванович
              </p>
              <p class="person-info-description">
                <b>Тут всякая информация о том, кем человек работает, какие функции выполняет и так далее</b>
              </p>
            </div>

            <div class="person-info">
              <img src="/img/person.png" alt="" class="person-info-image">
              <p class="person-info-name">
                Иванов Иван Иванович
              </p>
              <p class="person-info-description">
                <b>Тут всякая информация о том, кем человек работает, какие функции выполняет и так далее</b>
              </p>
            </div>

            <div class="person-info">
              <img src="/img/person.png" alt="" class="person-info-image">
              <p class="person-info-name">
                Иванов Иван Иванович
              </p>
              <p class="person-info-description">
                <b>Тут всякая информация о том, кем человек работает, какие функции выполняет и так далее</b>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="uk-width-1-6"></div>
    </div>
  </div>
</div>

@endsection
