<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OZON — интернет-магазин. Миллионы товаров по выгодным ценам</title>
  <link rel="icon" type="image/x-icon" href="https://www.ozon.ru/public/favicon.ico">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/style.css">

  <link nonce="" rel="preload" as="font" href="//cdn2.ozone.ru/s3/frontend-ozon-ru-public/fonts/GT-Eesti-Pro-Display-Bold.woff2" type="font/woff2" crossorigin="anonymous">
  <link nonce="" rel="preload" as="font" href="//cdn2.ozone.ru/s3/frontend-ozon-ru-public/fonts/GT-Eesti-Pro-Display-Medium.woff2" type="font/woff2" crossorigin="anonymous">
  <link nonce="" rel="preload" as="font" href="//cdn2.ozone.ru/s3/frontend-ozon-ru-public/fonts/GT-Eesti-Pro-Display-Medium-Italic.woff2" type="font/woff2" crossorigin="anonymous">
  <link nonce="" rel="preload" as="font" href="//cdn2.ozone.ru/s3/frontend-ozon-ru-public/fonts/GT-Eesti-Pro-Display-Regular.woff2" type="font/woff2" crossorigin="anonymous">

</head>
<body>
  <div class="container nav__container">
      <div class="nav__left">
        <button type="button" class="btn btn-secondary">RUB</button>

        <div class="nav__left-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="icon__map"><path fill="currentColor" d="M8 9a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path><path fill="currentColor" d="M8 0a7 7 0 0 0-7 7c0 2.91 1.713 5.148 3.285 6.596a15.845 15.845 0 0 0 2.945 2.13c.155.085.32.172.406.205a1 1 0 0 0 .728 0c.086-.033.25-.12.406-.206a15.846 15.846 0 0 0 2.945-2.13C13.287 12.149 15 9.91 15 7a7 7 0 0 0-7-7ZM3 7a5 5 0 0 1 10 0c0 2.09-1.237 3.833-2.64 5.125A13.846 13.846 0 0 1 8 13.863a13.847 13.847 0 0 1-2.36-1.738C4.237 10.833 3 9.09 3 7Z"></path></svg>
          <a class="link-secondary" href="#">Волгоград</a>
          <span style="margin: 0 4px;">•</span>
          <a class="link-primary" href="#">Укажите адрес доставки</a>
        </div>
      </div>

      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active active__nav" aria-current="page" href="#">Стать продавцом</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Покупать как компания</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Мобильное приложение</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Реферальная программа</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Подарочные сертификаты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Помощь</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Пункты выдачи</a>
        </li>
      </ul>
    </div>
  <header>
    <div class="container header__container">
      <div class="header-search">
        <div class="search-img__item">
          <a href="#" class="search-img__link">
            <img src="https://ir.ozone.ru/s3/cms/8e/tf9/wc200/logo-logo-ozon-blue-png.png" alt="OZON" class="search-img__pictures">
          </a>
        </div>

        <div class="search-catalog__btn">
          <button type="button" class="btn btn-primary" id="catalog__btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="margin-right: 6px"><path fill="currentColor" d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm2 0a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Zm0 6a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Zm1 5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H8Zm-4-4a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm1 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"></path></svg>Каталог</button>


          <!-- каталог -->
          <div class="catalog">
            <div class="container catalog__container">
              <div class="catalog__categories">
                <ul class="categories__item">
                  <li class="categories__list">
                    <a href="">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1g"><path fill="currentColor" d="M11.62 17.08c-.13.05-.23.12-.33.21-.18.19-.29.45-.29.71 0 .13.03.26.08.38.05.13.12.23.21.33.19.18.45.29.71.29.26 0 .52-.11.71-.29.18-.19.29-.45.29-.71 0-.26-.11-.52-.29-.71-.1-.09-.2-.16-.33-.21a1 1 0 0 0-.76 0ZM14 5a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h4Z"></path><path fill="currentColor" d="M19 4c0-1.654-1.346-3-3-3H8C6.346 1 5 2.346 5 4v16c0 1.654 1.346 3 3 3h8c1.654 0 3-1.346 3-3V4Zm-2 0v16c0 .551-.449 1-1 1H8c-.551 0-1-.449-1-1V4c0-.551.449-1 1-1h8c.551 0 1 .449 1 1Z"></path></svg>
                      </span>
                      <span>
                        Электроника
                      </span>
                      <span class="categories__icon-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="g1d"><path fill="currentColor" d="M9.293 6.293a1 1 0 0 0 0 1.414L13.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 0Z"></path></svg>
                      </span>
                    </a>
                  </li>

                  <li class="categories__list">
                    <a href="">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1g"><path fill="currentColor" d="M11.62 17.08c-.13.05-.23.12-.33.21-.18.19-.29.45-.29.71 0 .13.03.26.08.38.05.13.12.23.21.33.19.18.45.29.71.29.26 0 .52-.11.71-.29.18-.19.29-.45.29-.71 0-.26-.11-.52-.29-.71-.1-.09-.2-.16-.33-.21a1 1 0 0 0-.76 0ZM14 5a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h4Z"></path><path fill="currentColor" d="M19 4c0-1.654-1.346-3-3-3H8C6.346 1 5 2.346 5 4v16c0 1.654 1.346 3 3 3h8c1.654 0 3-1.346 3-3V4Zm-2 0v16c0 .551-.449 1-1 1H8c-.551 0-1-.449-1-1V4c0-.551.449-1 1-1h8c.551 0 1 .449 1 1Z"></path></svg>
                      </span>
                      <span>
                        Электроника
                      </span>
                      <span class="categories__icon-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="g1d"><path fill="currentColor" d="M9.293 6.293a1 1 0 0 0 0 1.414L13.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 0Z"></path></svg>
                      </span>
                    </a>
                  </li>

                  <li class="categories__list">
                    <a href="">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1g"><path fill="currentColor" d="M11.62 17.08c-.13.05-.23.12-.33.21-.18.19-.29.45-.29.71 0 .13.03.26.08.38.05.13.12.23.21.33.19.18.45.29.71.29.26 0 .52-.11.71-.29.18-.19.29-.45.29-.71 0-.26-.11-.52-.29-.71-.1-.09-.2-.16-.33-.21a1 1 0 0 0-.76 0ZM14 5a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h4Z"></path><path fill="currentColor" d="M19 4c0-1.654-1.346-3-3-3H8C6.346 1 5 2.346 5 4v16c0 1.654 1.346 3 3 3h8c1.654 0 3-1.346 3-3V4Zm-2 0v16c0 .551-.449 1-1 1H8c-.551 0-1-.449-1-1V4c0-.551.449-1 1-1h8c.551 0 1 .449 1 1Z"></path></svg>
                      </span>
                      <span>
                        Электроника
                      </span>
                      <span class="categories__icon-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="g1d"><path fill="currentColor" d="M9.293 6.293a1 1 0 0 0 0 1.414L13.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 0Z"></path></svg>
                      </span>
                    </a>
                  </li>

                  <li class="categories__list">
                    <a href="">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1g"><path fill="currentColor" d="M11.62 17.08c-.13.05-.23.12-.33.21-.18.19-.29.45-.29.71 0 .13.03.26.08.38.05.13.12.23.21.33.19.18.45.29.71.29.26 0 .52-.11.71-.29.18-.19.29-.45.29-.71 0-.26-.11-.52-.29-.71-.1-.09-.2-.16-.33-.21a1 1 0 0 0-.76 0ZM14 5a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h4Z"></path><path fill="currentColor" d="M19 4c0-1.654-1.346-3-3-3H8C6.346 1 5 2.346 5 4v16c0 1.654 1.346 3 3 3h8c1.654 0 3-1.346 3-3V4Zm-2 0v16c0 .551-.449 1-1 1H8c-.551 0-1-.449-1-1V4c0-.551.449-1 1-1h8c.551 0 1 .449 1 1Z"></path></svg>
                      </span>
                      <span>
                        Электроника
                      </span>
                      <span class="categories__icon-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="g1d"><path fill="currentColor" d="M9.293 6.293a1 1 0 0 0 0 1.414L13.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 0Z"></path></svg>
                      </span>
                    </a>
                  </li>

                  <li class="categories__list">
                    <a href="">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1g"><path fill="currentColor" d="M11.62 17.08c-.13.05-.23.12-.33.21-.18.19-.29.45-.29.71 0 .13.03.26.08.38.05.13.12.23.21.33.19.18.45.29.71.29.26 0 .52-.11.71-.29.18-.19.29-.45.29-.71 0-.26-.11-.52-.29-.71-.1-.09-.2-.16-.33-.21a1 1 0 0 0-.76 0ZM14 5a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h4Z"></path><path fill="currentColor" d="M19 4c0-1.654-1.346-3-3-3H8C6.346 1 5 2.346 5 4v16c0 1.654 1.346 3 3 3h8c1.654 0 3-1.346 3-3V4Zm-2 0v16c0 .551-.449 1-1 1H8c-.551 0-1-.449-1-1V4c0-.551.449-1 1-1h8c.551 0 1 .449 1 1Z"></path></svg>
                      </span>
                      <span>
                        Электроника
                      </span>
                      <span class="categories__icon-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="g1d"><path fill="currentColor" d="M9.293 6.293a1 1 0 0 0 0 1.414L13.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 0Z"></path></svg>
                      </span>
                    </a>
                  </li>

                  <li class="categories__list">
                    <a href="">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1g"><path fill="currentColor" d="M11.62 17.08c-.13.05-.23.12-.33.21-.18.19-.29.45-.29.71 0 .13.03.26.08.38.05.13.12.23.21.33.19.18.45.29.71.29.26 0 .52-.11.71-.29.18-.19.29-.45.29-.71 0-.26-.11-.52-.29-.71-.1-.09-.2-.16-.33-.21a1 1 0 0 0-.76 0ZM14 5a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h4Z"></path><path fill="currentColor" d="M19 4c0-1.654-1.346-3-3-3H8C6.346 1 5 2.346 5 4v16c0 1.654 1.346 3 3 3h8c1.654 0 3-1.346 3-3V4Zm-2 0v16c0 .551-.449 1-1 1H8c-.551 0-1-.449-1-1V4c0-.551.449-1 1-1h8c.551 0 1 .449 1 1Z"></path></svg>
                      </span>
                      <span>
                        Электроника
                      </span>
                      <span class="categories__icon-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="g1d"><path fill="currentColor" d="M9.293 6.293a1 1 0 0 0 0 1.414L13.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 0Z"></path></svg>
                      </span>
                    </a>
                  </li>

                  <li class="categories__list">
                    <a href="">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1g"><path fill="currentColor" d="M11.62 17.08c-.13.05-.23.12-.33.21-.18.19-.29.45-.29.71 0 .13.03.26.08.38.05.13.12.23.21.33.19.18.45.29.71.29.26 0 .52-.11.71-.29.18-.19.29-.45.29-.71 0-.26-.11-.52-.29-.71-.1-.09-.2-.16-.33-.21a1 1 0 0 0-.76 0ZM14 5a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h4Z"></path><path fill="currentColor" d="M19 4c0-1.654-1.346-3-3-3H8C6.346 1 5 2.346 5 4v16c0 1.654 1.346 3 3 3h8c1.654 0 3-1.346 3-3V4Zm-2 0v16c0 .551-.449 1-1 1H8c-.551 0-1-.449-1-1V4c0-.551.449-1 1-1h8c.551 0 1 .449 1 1Z"></path></svg>
                      </span>
                      <span>
                        Электроника
                      </span>
                      <span class="categories__icon-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="g1d"><path fill="currentColor" d="M9.293 6.293a1 1 0 0 0 0 1.414L13.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 0Z"></path></svg>
                      </span>
                    </a>
                  </li>

                  <li class="categories__list">
                    <a href="">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1g"><path fill="currentColor" d="M11.62 17.08c-.13.05-.23.12-.33.21-.18.19-.29.45-.29.71 0 .13.03.26.08.38.05.13.12.23.21.33.19.18.45.29.71.29.26 0 .52-.11.71-.29.18-.19.29-.45.29-.71 0-.26-.11-.52-.29-.71-.1-.09-.2-.16-.33-.21a1 1 0 0 0-.76 0ZM14 5a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h4Z"></path><path fill="currentColor" d="M19 4c0-1.654-1.346-3-3-3H8C6.346 1 5 2.346 5 4v16c0 1.654 1.346 3 3 3h8c1.654 0 3-1.346 3-3V4Zm-2 0v16c0 .551-.449 1-1 1H8c-.551 0-1-.449-1-1V4c0-.551.449-1 1-1h8c.551 0 1 .449 1 1Z"></path></svg>
                      </span>
                      <span>
                        Электроника
                      </span>
                      <span class="categories__icon-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="g1d"><path fill="currentColor" d="M9.293 6.293a1 1 0 0 0 0 1.414L13.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 0Z"></path></svg>
                      </span>
                    </a>
                  </li>

                  <li class="categories__list">
                    <a href="">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1g"><path fill="currentColor" d="M11.62 17.08c-.13.05-.23.12-.33.21-.18.19-.29.45-.29.71 0 .13.03.26.08.38.05.13.12.23.21.33.19.18.45.29.71.29.26 0 .52-.11.71-.29.18-.19.29-.45.29-.71 0-.26-.11-.52-.29-.71-.1-.09-.2-.16-.33-.21a1 1 0 0 0-.76 0ZM14 5a1 1 0 0 1 0 2h-4a1 1 0 0 1 0-2h4Z"></path><path fill="currentColor" d="M19 4c0-1.654-1.346-3-3-3H8C6.346 1 5 2.346 5 4v16c0 1.654 1.346 3 3 3h8c1.654 0 3-1.346 3-3V4Zm-2 0v16c0 .551-.449 1-1 1H8c-.551 0-1-.449-1-1V4c0-.551.449-1 1-1h8c.551 0 1 .449 1 1Z"></path></svg>
                      </span>
                      <span>
                        Электроника
                      </span>
                      <span class="categories__icon-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="g1d"><path fill="currentColor" d="M9.293 6.293a1 1 0 0 0 0 1.414L13.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 0Z"></path></svg>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
  
              <div class="catalog__product">
                <div class="product__text">
                  <span class="product__title">
                    Электроника
                  </span>
                  <span class="product__description"> 
                    388816 товаров
                  </span>
                </div>
                <div class="product__column">
                  <div class="product__column-list">
                    <ul class="footer-description__list_one header__nav">
                      <li class="list__item">
                        <span class="list__title">Оптические приборы</span>
                      </li>
                      <li class="list__item"><a href="" class="list__link">Телескопы</a></li>
                      <li class="list__item"><a href="" class="list__link">Микроскопы</a></li>
                      <li class="list__item"><a href="" class="list__link">Окуляры</a></li>
                      <li class="list__item"><a href="" class="list__link">Аксессуары для телескопов</a></li>
                      <li class="list__item"><a href="" class="list__link">Аксессуары для микроскопов</a></li>
                    </ul>

                    <ul class="footer-description__list_one header__nav">
                      <li class="list__item">
                        <span class="list__title">Оптические приборы</span>
                      </li>
                      <li class="list__item"><a href="" class="list__link">Телескопы</a></li>
                      <li class="list__item"><a href="" class="list__link">Микроскопы</a></li>
                      <li class="list__item"><a href="" class="list__link">Окуляры</a></li>
                      <li class="list__item"><a href="" class="list__link">Аксессуары для телескопов</a></li>
                      <li class="list__item"><a href="" class="list__link">Аксессуары для микроскопов</a></li>
                    </ul>

                    <ul class="footer-description__list_one header__nav">
                      <li class="list__item">
                        <span class="list__title">Телефоны и смарт-часы</span>
                      </li>
                      <li class="list__item"><a href="" class="list__link">Смартфоны</a></li>
                      <li class="list__item"><a href="" class="list__link">Смарт-часы и фитнес-браслеты</a></li>
                      <li class="list__item"><a href="" class="list__link">Сим карты</a></li>
                      <li class="list__item"><a href="" class="list__link">Мобильные телефоны</a></li>
                      <li class="list__item"><a href="" class="list__link">Проводные телефоны</a></li>
                      <li class="list__item"><a href="" class="list__link">Акссесуары для смартфонов</a></li>
                      <li class="list__item"><a href="" class="list__link">Акссесуары для смартфонов</a></li>

                    </ul>
                  </div>
                  <div class="product__column-list">
                    <ul class="footer-description__list_one header__nav">
                      <li class="list__item">
                        <span class="list__title">Телефоны и смарт-часы</span>
                      </li>
                      <li class="list__item"><a href="" class="list__link">Смартфоны</a></li>
                      <li class="list__item"><a href="" class="list__link">Смарт-часы и фитнес-браслеты</a></li>
                      <li class="list__item"><a href="" class="list__link">Сим карты</a></li>
                      <li class="list__item"><a href="" class="list__link">Мобильные телефоны</a></li>
                      <li class="list__item"><a href="" class="list__link">Проводные телефоны</a></li>
                      <li class="list__item"><a href="" class="list__link">Акссесуары для смартфонов</a></li>
                      <li class="list__item"><a href="" class="list__link">Акссесуары для смартфонов</a></li>
                    </ul>
                  </div>
                  <div class="product__column-list">
                    <ul class="footer-description__list_one header__nav">
                      <li class="list__item">
                        <span class="list__title">Ноутбуки, планшеты и электронные книги</span>
                      </li>
                      <li class="list__item"><a href="" class="list__link">Ноутбуки</a></li>
                      <li class="list__item"><a href="" class="list__link">Игровые ноутбуки</a></li>
                      <li class="list__item"><a href="" class="list__link">Планшеты</a></li>
                      <li class="list__item"><a href="" class="list__link">Электронные книги</a></li>
                      <li class="list__item"><a href="" class="list__link">Аксессуары для ноутбуков</a></li>
                      <li class="list__item"><a href="" class="list__link">Аксессуары для планшетов</a></li>
                    </ul>

                    <ul class="footer-description__list_one header__nav">
                      <li class="list__item">
                        <span class="list__title">Телефоны и смарт-часы</span>
                      </li>
                      <li class="list__item"><a href="" class="list__link">Смартфоны</a></li>
                      <li class="list__item"><a href="" class="list__link">Смарт-часы и фитнес-браслеты</a></li>
                      <li class="list__item"><a href="" class="list__link">Сим карты</a></li>
                      <li class="list__item"><a href="" class="list__link">Мобильные телефоны</a></li>
                      <li class="list__item"><a href="" class="list__link">Проводные телефоны</a></li>
                      <li class="list__item"><a href="" class="list__link">Акссесуары для смартфонов</a></li>
                      <li class="list__item"><a href="" class="list__link">Акссесуары для смартфонов</a></li>

                    </ul>

                    <ul class="footer-description__list_one header__nav">
                      <li class="list__item">
                        <span class="list__title">Оптические приборы</span>
                      </li>
                      <li class="list__item"><a href="" class="list__link">Телескопы</a></li>
                      <li class="list__item"><a href="" class="list__link">Микроскопы</a></li>
                      <li class="list__item"><a href="" class="list__link">Окуляры</a></li>
                      <li class="list__item"><a href="" class="list__link">Аксессуары для телескопов</a></li>
                      <li class="list__item"><a href="" class="list__link">Аксессуары для микроскопов</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          



        </div>

        <div class="search__input-form">
          <form class="w-100 search__form" role="search">
            <button type="button" class="btn btn-light"><span class="btn-light__text">Везде</span>
              <span style="width: 16px; height: 16px; margin-right: 4px; display: flex;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path fill="currentColor" d="m4 6 4 5 4-5H4Z"></path></svg>
              </span>
            </button>

            <input type="search" class="form-control" placeholder="Искать на Ozon" aria-label="Search">

          </form>
          <div class="search__btn">
            <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path fill="currentColor" d="M11 5a6 6 0 1 0 0 12 6 6 0 0 0 0-12Zm-8 6a8 8 0 1 1 14.281 4.955l4.419 4.33a1 1 0 1 1-1.4 1.43l-4.444-4.357A8 8 0 0 1 3 11Z"></path></svg></button>
          </div>
        </div>

        <div class="search-icon__description">
            <ul class="search-icon">
              <li class="search-icon__item">
                <a href="#" class="search-icon__link">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="a7yb"><path fill="currentColor" d="M8 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-8.3 4.286c.016.015.185.165.5.323.376.187.971.391 1.8.391.829 0 1.425-.204 1.8-.391.175-.088.355-.19.5-.323a1 1 0 0 1 1.407 1.421C15.587 16.827 14.357 18 12 18c-2.358 0-3.587-1.173-3.707-1.293A1 1 0 0 1 9.7 15.286Z"></path><path fill="currentColor" d="M11 2a1 1 0 0 1 1-1c6.075 0 11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12a11 11 0 0 1 6.23-9.914 1 1 0 0 1 1.36.524c.292.72.69 1.565 1.362 2.233C10.592 5.481 11.524 6 13 6a1 1 0 1 1 0 2c-2.024 0-3.458-.743-4.459-1.74-.6-.596-1.027-1.267-1.34-1.875A9 9 0 1 0 12 3a1 1 0 0 1-1.001-1Z"></path></svg></span>
                  <span class="search-icon__text">Войти</span>
                </a>
              </li>
              <li class="search-icon__item">
                <a href="#" class="search-icon__link">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="gh7"><path fill="currentColor" d="M12.486 1.126a1 1 0 0 0-.972 0l-9 5A1 1 0 0 0 2 7v9.98a1.003 1.003 0 0 0 .515.894l9 5a1 1 0 0 0 .989-.01l8.982-4.99A1 1 0 0 0 22 17V7a1 1 0 0 0-.514-.874l-9-5ZM11 20.3l-7-3.888V8.7l2 1.11V13a1 1 0 1 0 2 0v-2.078l3 1.666v7.713ZM7.5 8.356 5.06 7 12 3.144 14.441 4.5l-6.94 3.856ZM9.56 9.5l6.94-3.856L18.941 7l-6.94 3.856L9.558 9.5ZM13 20.3v-7.712L20 8.7v7.712L13 20.3Z"></path></svg></span>
                  <span class="search-icon__text">Заказы</span>
                </a>
              </li>
              <li class="search-icon__item">
                <a href="#" class="search-icon__link">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="h9j"><path fill="currentColor" d="M7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Zm5 17c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Z"></path></svg></span>
                  <span class="search-icon__text">Избранное</span>
                </a>
              </li>
              <li class="search-icon__item">
                <a href="#" class="search-icon__link">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="cb5"><path fill="currentColor" d="M6 6a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2h4a1 1 0 0 1 .986 1.164l-1.582 9.494A4 4 0 0 1 17.46 22H6.54a4 4 0 0 1-3.945-3.342L1.014 9.164A1 1 0 0 1 2 8h4V6Zm2 2h5a1 1 0 1 1 0 2H3.18l1.389 8.329A2 2 0 0 0 6.54 20h10.92a2 2 0 0 0 1.972-1.671L20.82 10H17a1 1 0 0 1-1-1V6a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2Z"></path></svg></span>
                  <span class="search-icon__text">Корзина</span>
                </a>
              </li>
            </ul>
          </div>
      </div>

      <div class="header__nav">
        <ul class="nav">
          <li class="header__nav-item">
            <a class="header__nav-link header_active" href="#">
              <span class="header__nav-icon" style="background-image:url('https://cdn1.ozone.ru/s3/cms/cd/tc6/union.svg');"></span>
              Ozon fresh
            </a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="#">
              <span class="header__nav-icon" style="background-image:url('https://cdn1.ozone.ru/s3/cms/52/tae/union_13.png');"></span>
              Ozon Карта
            </a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="#">
              <span class="header__nav-icon" style="background-image:url('https://cdn1.ozone.ru/s3/cms/fb/t19/ic_m_plane.svg');"></span>
              Билеты, Отели, Туры
            </a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="#">
              <span class="header__nav-icon" style="background-image:url('https://cdn1.ozone.ru/s3/cms/17/t22/ic_m_dresses.png');"></span>
              Одежда и обувь
            </a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="#">
              <span class="header__nav-icon" style="background-image:url('https://cdn1.ozone.ru/s3/cms/cc/tf7/ic_m_electronics.png');"></span>
              Электроника
            </a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="#">
              <span class="header__nav-icon" style="background-image:url('https://cdn1.ozone.ru/s3/cms/a8/te3/union_8.png');"></span>
              Дом и сад
            </a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="#">
              <span class="header__nav-icon" style="background-image:url('https://cdn1.ozone.ru/s3/cms/ff/tc3/union_3.png');"></span>
              Детские товары
            </a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="#">
              <span class="header__nav-icon" style="background-image:url('https://cdn1.ozone.ru/s3/cms/47/t41/union_14.png');"></span>
              Акции
            </a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="#">
              <span class="header__nav-icon" style="background-image:url('https://cdn1.ozone.ru/s3/cms/07/tcb/ic_m_status_points3x.svg');"></span>
              Premium
            </a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="#">
              <span class="header__nav-icon" style="background-image:url('https://cdn1.ozone.ru/s3/cms/8e/tfb/union_18.png');"></span>
              Бренды
            </a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="#">
              <span class="header__nav-icon" style="background-image:url('https://cdn1.ozone.ru/s3/cms/3f/tae/union_17.png');"></span>
              Рассрочка
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>




  <main>
    <div class="container main-container">
      <?php
      include 'phpindex.php';
      ?>
    </div>
    
  </main>

  <style>
    
  </style>




  <footer class="footer">
    <div class="container footer__container">
      <div class="footer-title">
        <div class="footer-title__img">
          <a target="_self" href="https://job.ozon.ru/" class="footer-title__img-link">
            <img loading="lazy" src="https://ir.ozone.ru/s3/cms/12/tdb/group_357672.png" alt="Ozon Job">
          </a>
        </div>
        <div class="footer-title__item">
          <a target="_self" href="https://job.ozon.ru/it/" class="footer-title__link"><span class="di4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1i"><path fill="currentColor" d="M11 20v1H6a1 1 0 1 0 0 2h12a1 1 0 1 0 0-2h-5v-1a3 3 0 0 0-3-3H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-4a1 1 0 1 0 0 2h4a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H4a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h6a1 1 0 0 1 1 1Z"></path><path fill="currentColor" d="M12 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path></svg></span><span>IT</span></a>
          <a target="_self" href="https://job.ozon.ru/office/" class="footer-title__link"><span class="di4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1i"><path fill="currentColor" d="m21.867 15.127.244-.028a1 1 0 0 0 .889-.994V8a1 1 0 0 0-1-1h-3V6a5 5 0 0 0-5-5h-4a5 5 0 0 0-5 5v1H2a1 1 0 0 0-1 1v6.105a1 1 0 0 0 .889.994l.244.028.437 3.493A5 5 0 0 0 7.53 23h8.938a5 5 0 0 0 4.961-4.38l.437-3.493ZM7 6a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v2a1 1 0 0 0 1 1h3v4.211l-6 .67V13a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v.882l-6-.67V9h11a1 1 0 1 0 0-2H7V6Zm4 9.01a.8.8 0 0 0 0-.022V14h2v2h-2v-.99Zm-2 .884V17a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.106l4.823-.539-.377 3.017A3 3 0 0 1 16.469 21H7.53a3 3 0 0 1-2.977-2.628l-.377-3.017 4.823.54Z"></path></svg></span><span>Офис</span></a>
          <a target="_self" href="https://job.ozon.ru/fintech/" class="footer-title__link"><span class="di4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1i"><path fill="currentColor" d="M16 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"></path><path fill="currentColor" d="M23 14a2 2 0 0 1-2 2v3a3 3 0 0 1-3 3H4a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h14a3 3 0 0 1 3 3v3a2 2 0 0 1 2 2v4Zm-4 5v-3h-4a4 4 0 0 1 0-8h1a1 1 0 1 1 0 2h-1a2 2 0 1 0 0 4h6v-4h-1a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1Z"></path></svg></span><span>Финтех</span></a>
          <a target="_self" href="https://job.ozon.ru/fulfillment/" class="footer-title__link"><span class="di4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1i"><path fill="currentColor" d="m1.427 8.18 10-7a1 1 0 0 1 1.146 0l10 7A1 1 0 0 1 23 9v13a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V9a1 1 0 0 1 .427-.82ZM3 21h2v-4a1 1 0 0 1 1-1h2v-4a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v4h2a1 1 0 0 1 1 1v4h2V9.52l-9-6.3-9 6.3V21Zm10-3v3h4v-3h-1v1a1 1 0 1 1-2 0v-1h-1Zm-6 3h4v-3h-1v1a1 1 0 1 1-2 0v-1H7v3Zm3-8v3h4v-3h-1v1a1 1 0 1 1-2 0v-1h-1Z"></path></svg></span><span>Фулфилмент</span></a>
          <a target="_self" href="https://job.ozon.ru/fresh/" class="footer-title__link"><span class="di4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1i"><path fill="currentColor" d="M8 14a1 1 0 0 1 1 1c0 .612.285 1.072.805 1.418.549.366 1.343.582 2.195.582a1 1 0 1 1 0 2c-1.148 0-2.354-.284-3.305-.918C7.715 17.428 7 16.388 7 15a1 1 0 0 1 1-1Z"></path><path fill="currentColor" d="M12 1c-1.384 0-2.5.277-3.28.56a7.76 7.76 0 0 0-.91.397 4.65 4.65 0 0 0-.326.186c-.485.31-.61.954-.308 1.426.053.082.163.244.335.457a7.81 7.81 0 0 0 1.03 1.05c.927.784 2.347 1.632 4.318 1.914a1 1 0 1 0 .283-1.98c-1.691-.241-2.835-1.013-3.517-1.646A7.696 7.696 0 0 1 12 3c1.365 0 2.659.32 3.577.922C16.457 4.498 17 5.327 17 6.5c0 1.238-.791 2.312-1.902 3.194a6.587 6.587 0 0 0-.761-.546C13.38 8.56 11.952 8 10 8c-4.052 0-7 2.948-7 7 0 2.63 1.331 4.664 3.237 6.005C8.121 22.331 10.581 23 13 23c2.432 0 4.426-.677 5.832-1.86A5.977 5.977 0 0 0 21 16.5c0-1.543-.625-2.646-1.253-3.352a5.097 5.097 0 0 0-.857-.769 3.9 3.9 0 0 0-.391-.246c-.49-.265-1.134-.099-1.393.42a1.001 1.001 0 0 0 .44 1.338s.085.047.189.12c.138.099.328.252.518.466.372.419.747 1.066.747 2.023 0 1.206-.496 2.3-1.457 3.11-.97.817-2.475 1.39-4.543 1.39-2.08 0-4.12-.581-5.612-1.63C5.919 18.336 5 16.87 5 15c0-2.948 2.052-5 5-5 1.548 0 2.619.44 3.288.852.592.364.89.721.918.756a1 1 0 0 0 1.349.224C17.115 10.792 19 9.031 19 6.5c0-1.933-.957-3.354-2.327-4.251C15.34 1.377 13.635 1 12 1Z"></path></svg></span><span>Fresh</span></a>
          <a target="_self" href="https://job.ozon.ru/logistic/" class="footer-title__link"><span class="di4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1i"><path fill="currentColor" d="M1 4a1 1 0 0 1 1-1h11a1 1 0 1 1 0 2H3v12h1.17a3.001 3.001 0 0 1 5.66 0H12V8a1 1 0 0 1 1-1h3.078a5 5 0 0 1 3.904 1.877l1.922 2.403A5 5 0 0 1 23 14.403V18a1 1 0 0 1-1 1h-1.17a3.001 3.001 0 0 1-5.66 0H9.83a3.001 3.001 0 0 1-5.66 0H2a1 1 0 0 1-1-1V4Zm13 13h1.17a3.001 3.001 0 0 1 5.66 0H21v-2.597a3 3 0 0 0-.657-1.874l-1.923-2.403A3 3 0 0 0 16.077 9H14v2h2a1 1 0 1 1 0 2h-2v4Zm-6 1a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm10-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2Z"></path></svg></span><span>Логистика</span></a>
          <a target="_self" href="https://job.ozon.ru/internships/" class="footer-title__link"><span class="di4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1i"><path fill="currentColor" d="M12.414 3.09a1 1 0 0 0-.828 0l-11 5a1 1 0 0 0 0 1.82L4 11.462V18a1 1 0 0 0 .277.69c.154.162.333.301.513.432.311.226.768.51 1.39.79C7.428 20.472 9.318 21 12 21c2.682 0 4.572-.527 5.82-1.088a7.828 7.828 0 0 0 1.39-.79c.18-.13.357-.27.512-.43.177-.186.278-.435.278-.692v-6.538l2-.909V13a1 1 0 1 0 2 0V9a1 1 0 0 0-.586-.91l-11-5ZM6 17.528v-5.157l5.586 2.54a1 1 0 0 0 .828 0L18 12.37v5.157a5.93 5.93 0 0 1-1 .56c-.978.44-2.588.912-5 .912s-4.022-.473-5-.912a5.927 5.927 0 0 1-1-.56ZM20.583 9l-1.976.898a1.02 1.02 0 0 0-.04.019L12 12.902 3.417 9 12 5.098 20.583 9ZM24 17a1 1 0 1 0-2 0v1a1 1 0 1 0 2 0v-1Z"></path></svg></span><span>Стажировки</span></a>
          <a target="_self" href="https://job.ozon.ru/events/" class="footer-title__link"><span class="di4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d1i"><path fill="currentColor" d="M8 2v1H6a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3h-2V2a1 1 0 1 0-2 0v1h-4V2a1 1 0 0 0-2 0ZM5 9V6a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V5h4v1a1 1 0 1 0 2 0V5h2a1 1 0 0 1 1 1v3H5Zm0 2h14v7a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-7Z"></path></svg></span><span>События</span></a>
        </div>
      </div>

      <div class="footer-description">
        <div class="footer-description__qr">
          <img loading="lazy" src="https://ir.ozone.ru/s3/cms/28/t9c/qr-code_1.png" class="qr-title__img">
          <p class="qr__text">Наведите камеру и скачайте бесплатное приложение Ozon</p>
          <div class="qr__link">
            <img loading="lazy" src="https://ir.ozone.ru/s3/cms/0e/ta0/group_357649.png" class="qr-description__img">
            <img loading="lazy" src="https://ir.ozone.ru/s3/cms/9b/te1/group_357648.png" class="qr-description__img">
            <img loading="lazy" src="https://ir.ozone.ru/s3/cms/20/tcc/group_357647.png" class="qr-description__img">
          </div>
        </div>

        <div class="footer-description__item">
          <div class="footer-description__list">
            <ul class="footer-description__list_one header__nav">
              <li class="list__item">
                <span class="list__title">Ozon интернет-магазин</span>
              </li>
              <li class="list__item"><a href="" class="list__link">Об Ozon / About Ozon</a></li>
              <li class="list__item"><a href="" class="list__link">Вакансии</a></li>
              <li class="list__item"><a href="" class="list__link">Стать курьером</a></li>
              <li class="list__item"><a href="" class="list__link">Бренд Ozon</a></li>
              <li class="list__item"><a href="" class="list__link">Реквизиты</a></li>
              <li class="list__item"><a href="" class="list__link">Информация для СМИ</a></li>
              <li class="list__item"><a href="" class="list__link">Арт-проект Ozon Ballon</a></li>
              <li class="list__item"><a href="" class="list__link">Устойчивое развитие</a></li>
              <li class="list__item"><a href="" class="list__link">Ozon Забота</a></li>
            </ul>

            <ul class="footer-description__list_two header__nav">
              <li class="list__item">
                <span class="list__title">Зарабатывать с Ozon</span>
              </li>
              <li class="list__item"><a href="" class="list__link">Об Ozon / About Ozon</a></li>
              <li class="list__item"><a href="" class="list__link">Вакансии</a></li>
              <li class="list__item"><a href="" class="list__link">Стать курьером</a></li>
              <li class="list__item"><a href="" class="list__link">Бренд Ozon</a></li>
              <li class="list__item"><a href="" class="list__link">Реквизиты</a></li>
              <li class="list__item"><a href="" class="list__link">Информация для СМИ</a></li>
              <li class="list__item"><a href="" class="list__link">Арт-проект Ozon Ballon</a></li>
            </ul>

            <ul class="footer-description__list_three header__nav">
              <li class="list__item">
                <span class="list__title">Покупать как компания</span>
              </li>
              <li class="list__item"><a href="" class="list__link">Добавить компанию</a></li>
              <li class="list__item"><a href="" class="list__link">Мои компании</a></li>
              <li class="list__item"><a href="" class="list__link">Подарочные сертификаты</a></li>
            </ul>

            <ul class="footer-description__list_four header__nav">
              <li class="list__item">
                <span class="list__title">Помощь</span>
              </li>
              <li class="list__item"><a href="" class="list__link">Как сделать заказ</a></li>
              <li class="list__item"><a href="" class="list__link">Оплата</a></li>
              <li class="list__item"><a href="" class="list__link">Доставка</a></li>
              <li class="list__item"><a href="" class="list__link">Возврат товаров</a></li>
              <li class="list__item"><a href="" class="list__link">Контакты</a></li>
              <li class="list__item"><a href="" class="list__link">Безопасность</a></li>
              <li class="list__item"><a href="" class="list__link">Условия обработки данных</a></li>
              <li class="list__item"><a href="" class="list__link">Горячая линия комплаенс</a></li>

            </ul>
          </div>

          <div class="footer-description__down">
            <div class="description-down__item-icon">
              <a title="VK" target="_blank" href="https://vk.com/ozon" rel="noopener" class="description-down__icon description-down__icon_odn" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d8q"><path fill="currentColor" d="M12.982 19C5.466 19 1.18 13.745 1 5h3.765c.124 6.418 2.9 9.137 5.098 9.698V5h3.546v5.536c2.17-.239 4.452-2.761 5.221-5.536h3.546a10.79 10.79 0 0 1-1.698 4.002 10.558 10.558 0 0 1-3.126 2.977 10.895 10.895 0 0 1 3.563 2.893A11.153 11.153 0 0 1 23 19h-3.903a6.94 6.94 0 0 0-2.104-3.377 6.726 6.726 0 0 0-3.584-1.626V19h-.427Z"></path></svg></a>
              <a title="Одноклассники" target="_blank" href="https://ok.ru/ozon" rel="noopener" class="description-down__icon description-down__icon_vk"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d8q"><path fill="currentColor" d="M11.945 12.394a6.226 6.226 0 0 1-4.366-1.81 6.164 6.164 0 0 1-1.82-4.344 6.241 6.241 0 0 1 1.812-4.378A6.303 6.303 0 0 1 11.945 0a6.203 6.203 0 0 1 4.406 1.83 6.143 6.143 0 0 1 1.779 4.41 6.051 6.051 0 0 1-1.789 4.375 6.109 6.109 0 0 1-4.396 1.78Zm0-8.718a2.588 2.588 0 0 0-1.854.78 2.563 2.563 0 0 0-.723 1.87 2.434 2.434 0 0 0 .749 1.794 2.459 2.459 0 0 0 1.828.684 2.528 2.528 0 0 0 1.81-.703 2.505 2.505 0 0 0 .767-1.776 2.552 2.552 0 0 0-.724-1.868 2.578 2.578 0 0 0-1.853-.781Zm2.49 13.847 3.523 3.419a1.749 1.749 0 0 1 0 2.479 1.621 1.621 0 0 1-1.246.579 1.63 1.63 0 0 1-1.245-.58l-3.522-3.418-3.436 3.419a1.72 1.72 0 0 1-1.289.512 2.067 2.067 0 0 1-1.288-.512 1.751 1.751 0 0 1-.382-1.91c.088-.213.218-.406.382-.57l3.608-3.418a17.912 17.912 0 0 1-3.694-1.624 1.855 1.855 0 0 1-.601-2.479 1.808 1.808 0 0 1 1.177-.807 1.822 1.822 0 0 1 1.4.294 8.096 8.096 0 0 0 8.332 0 1.82 1.82 0 0 1 2.577.513 1.855 1.855 0 0 1-.516 2.479 18.645 18.645 0 0 1-3.78 1.624Z"></path></svg></a>
              <a title="Telegram" target="_blank" href="https://t.me/ozonru" rel="noopener" class="description-down__icon description-down__icon_tg"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="d8q"><path fill="currentColor" d="M2.512 10.749c5.906-2.54 9.844-4.215 11.814-5.024 5.626-2.31 6.795-2.711 7.557-2.725.168-.003.542.038.785.233.205.164.261.386.288.541.027.156.06.51.034.788-.305 3.162-1.624 10.837-2.295 14.379-.284 1.498-.843 2-1.384 2.05-1.177.107-2.07-.767-3.21-1.505-1.782-1.154-2.79-1.872-4.52-2.998-2-1.301-.704-2.016.436-3.185.298-.306 5.482-4.96 5.582-5.383.012-.053.024-.25-.094-.353-.119-.104-.294-.069-.42-.04-.179.04-3.027 1.898-8.545 5.575-.808.548-1.54.815-2.197.801-.723-.015-2.114-.403-3.149-.735-1.268-.407-2.276-.623-2.189-1.314.046-.36.548-.728 1.507-1.105Z"></path></svg></a>
            </div>
            <div class="description-down__item">
              <a target="_self" href="//docs.ozon.ru/common/pravila-prodayoi-i-rekvizity/soobshchenie-ob-avtorskih-pravah" class="description-down__text">
                © 1998 – 2023 ООО «Интернет Решения». Все права защищены.
              </a>
              <button class="btn btn-primary description-down__btn">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="x5-d9"><path fill="currentColor" d="M8 5a2.947 2.947 0 0 0-2.84 2.158l-.002.01-.908 3.147A4.989 4.989 0 0 1 6 10c1.494 0 2.834.655 3.75 1.693A3.983 3.983 0 0 1 12 11c.835 0 1.61.256 2.25.693A4.988 4.988 0 0 1 18 10c.463 0 .912.063 1.338.181L18.06 6.914v-.001A3 3 0 0 0 15.264 5H15a1 1 0 1 1 0-2h.264a5 5 0 0 1 4.66 3.187l2.707 6.924a5 5 0 1 1-9.382.326A1.99 1.99 0 0 0 12 13a1.99 1.99 0 0 0-1.25.438 5 5 0 1 1-9.406-.265l1.89-6.555A4.947 4.947 0 0 1 8 3a1 1 0 0 1 0 2Zm-2 7a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm12 0a3 3 0 1 0-.002 6A3 3 0 0 0 18 12Z"></path></svg>
                </span>
                <span>Для слабовидящих</span>
              </button>
            </div>
          </div>
        </div>

        
          
        </div>
      </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>
</html>
