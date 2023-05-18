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
                <a href="login.php" class="search-icon__link">
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
    <section class="section__product">
      <div class="container container__product">
        <div class="nav__breadcrumb">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Shell</a></li>
              <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="13" class="eq9"><path fill="currentColor" d="M5.293 12.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 1.414L9.586 8l-4.293 4.293Z"></path></svg></span>
              
              <li class="breadcrumb-item"><a href="#">Автотовары</a></li>
              <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="13" class="eq9"><path fill="currentColor" d="M5.293 12.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 1.414L9.586 8l-4.293 4.293Z"></path></svg></span>
              
              <li class="breadcrumb-item"><a href="#">Масла и автохимия</a></li>
              <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="13" class="eq9"><path fill="currentColor" d="M5.293 12.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 1.414L9.586 8l-4.293 4.293Z"></path></svg></span>
              
              <li class="breadcrumb-item"><a href="#">Моторные масла</a></li>
              <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="13" class="eq9"><path fill="currentColor" d="M5.293 12.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 1.414L9.586 8l-4.293 4.293Z"></path></svg></span>
              
              <li class="breadcrumb-item"><a href="#">Автомобильные моторные масла</a></li>
            </ol>
          </nav>
        </div>

        <div class="marketing-marker">
          <span class="marker">Бестселлер</span>
        </div>

        <div class="product-card">
          <div class="header__text">
            <h1 class="product__header">Моторное масло Shell Helix HX8 5W-40 Синтетическое 4 л</h1>
          </div>
          
          <div class="product__comments">
            <ul class="left__comments">
              <li class="comments__star">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"/></svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"/></svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"/></svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"/></svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"/></svg>
                </span>
              </li>
              <li class="comments__reviews">
                <a href="">
                  7113 отзывов
                </a>
              </li>
              <li class="comments__video">
                <a href=""><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="_4-d9"><path fill="currentColor" d="M6.5 5.5c.15 0 .289.08.363.212l.64 1.134 1.16.224a.417.417 0 0 1 .224.695l-.84.893.213 1.36a.417.417 0 0 1-.593.44L6.5 9.896l-1.167.564a.417.417 0 0 1-.593-.44l.214-1.361-.84-.893a.417.417 0 0 1 .224-.695l1.159-.224.64-1.134A.417.417 0 0 1 6.5 5.5Z"></path><path fill="currentColor" d="M3 2a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h7c1.38 0 2.544-.933 2.893-2.203l1.552 1.035A1 1 0 0 0 16 12V4a1 1 0 0 0-1.555-.832l-1.552 1.035A3.001 3.001 0 0 0 10 2H3Zm8 4a1 1 0 0 0 1.555.832L14 5.869v4.263l-1.445-.964A1 1 0 0 0 11 10v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v1Z"></path></svg></span>
                  10 видео
                </a>
              </li>
              <li class="comments__questions">
                <a href=""><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="_4-d9"><path fill="currentColor" d="M9 10a1 1 0 1 1-1.016-1 1 1 0 0 1-.231-1.969l.004-.001.038-.011a2.9 2.9 0 0 0 .675-.304C8.853 6.475 9 6.239 9 6a1 1 0 1 0-2 0 1 1 0 0 1-2 0 3 3 0 1 1 6 0c0 1.26-.853 2.025-1.47 2.41a4.897 4.897 0 0 1-1.154.522A1.26 1.26 0 0 1 8.015 9 1 1 0 0 1 9 10Z"></path><path fill="currentColor" d="M0 10a4.002 4.002 0 0 0 3 3.874V15a1 1 0 0 0 1.447.894l3.156-1.577A3 3 0 0 1 8.944 14H11a5 5 0 0 0 5-5V5a5 5 0 0 0-5-5H5a5 5 0 0 0-5 5v5Zm2-5a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3v4a3 3 0 0 1-3 3H8.944a5 5 0 0 0-2.236.528L5 13.382V13a1 1 0 0 0-1-1 2 2 0 0 1-2-2V5Z"></path></svg></span>
                  397 вопросов
                </a> 
              </li>
              <li class="comments__favorite">
                <a href=""><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="_4-d9"><path fill="currentColor" d="M4.5 4C3.044 4 2 5.074 2 6.235c0 2.106 1.426 3.788 3.092 5.02A14.968 14.968 0 0 0 8 12.92a15.01 15.01 0 0 0 2.907-1.665C12.571 10.022 14 8.34 14 6.235 14 5.075 12.956 4 11.5 4c-1.29 0-2.312.847-2.524 1.804a1 1 0 0 1-1.952 0C6.812 4.847 5.79 4 4.5 4ZM8 15c-.528-.032-1.075-.36-1.539-.588a16.963 16.963 0 0 1-2.558-1.55C2.07 11.508 0 9.307 0 6.236 0 3.825 2.09 2 4.5 2c1.352 0 2.638.572 3.5 1.514C8.861 2.572 10.148 2 11.5 2 13.91 2 16 3.825 16 6.235c0 3.071-2.072 5.272-3.905 6.628a17.004 17.004 0 0 1-2.56 1.549C9.088 14.632 8.515 15 8 15Z"></path></svg></span>
                  В избранное
                </a> 
              </li>
              <li class="comments__compare">
                <a href=""><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="_4-d9"><path fill="currentColor" d="M1 3a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H2a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H2a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H2a1 1 0 0 1-1-1Zm12-3a1 1 0 0 1 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1V9a1 1 0 0 1 1-1Z"></path></svg></span>
                  Добавить к сравнению
                </a>
              </li>
              <li class="comments__share">
                <a href=""><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="_4-d9"><path fill="currentColor" d="M7.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1-1.414 1.414L9 4.414V9a1 1 0 1 1-2 0V4.414l-.293.293a1 1 0 0 1-1.414-1.414l2-2ZM2 9a3 3 0 0 1 3-3 1 1 0 0 1 0 2 1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1 1 1 0 1 1 0-2 3 3 0 0 1 3 3v3a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V9Z"></path></svg></span>
                  Поделиться
                </a>
              </li>
            </ul>
            
            <div class="right__comments">
              <span class="comments__code">Код товара: 140564894</span>
            </div>
          </div>  
        </div>

        <div class="og">
          <div class="product__info">
            <div class="product__img">
              <div class="product__img_left">
                <img loading="lazy" style="border: 2px solid var(--ozTextAction);" src="https://ir.ozone.ru/s3/multimedia-2/wc50/6092857862.jpg" srcset="https://ir.ozone.ru/s3/multimedia-2/wc100/6092857862.jpg 2x" class="_24-a">
                <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-m/wc50/6065468290.jpg" srcset="https://ir.ozone.ru/s3/multimedia-m/wc100/6065468290.jpg 2x" class="_24-a">
              </div>
              <div class="product__img_right">
                <img fetchpriority="high" elementtiming="lcp_eltiming_webGallery-1748176-default-1" data-lcp-name="webGallery-1748176-default-1" src="https://ir.ozone.ru/s3/multimedia-2/wc1000/6092857862.jpg" alt="Моторное масло Shell Helix HX8 5W-40 Синтетическое 4 л #1" class="w5k _24-a">
                <div class="product__img-price">
                  <span class="product__img-price_text">−13%</span>
                </div>
              </div>
            </div>

            <div class="product__info_categories">
              <div class="info__header_item">
                <a href="#">
                  <img title="Shell" loading="lazy" src="https://ir.ozone.ru/s3/multimedia-b/ws125/6190205723.jpg" srcset="https://ir.ozone.ru/s3/multimedia-b/ws250/6190205723.jpg 2x" class="ln8 _24-a" style="max-height:36px;">
                </a>

                <div class="info__header">
                  <a href="" class="header__nav-link" style="font-size: 16px;">Shell</a>
                  <div class="info__header_text">
                    <span>Оригинальный товар</span>
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="_4-d9" style="color:#b3bcc5; cursor: pointer;"><path fill="currentColor" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16ZM8 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1 3v4a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0Z"></path></svg>
                  </span>
                  </div>
                </div>
              </div>
              <div class="info__description">
                <dl class="description__item">
                  <dt class="description__item_text" ><span style="background-color: white;">Бренд</span></dt>
                  <dd class="description__item_link"><a href="/brand/shell-140564506/">Shell</a></dd>
                </dl>

                <dl class="description__item">
                  <dt class="description__item_text"><span style="background-color: white;">Серии</span></dt>
                  <dd class="description__item_link"><a href="/series/helix-hx8-87409036/">Helix HX8</a></dd>
                </dl>

                <dl class="description__item">
                  <dt class="description__item_text"><span style="background-color: white;">Партномер (артикул производителя)</span></dt>
                  <dd class="description__item_link">550051529</dd>
                </dl>

                <dl class="description__item">
                  <dt class="description__item_text">
                    <span style="background-color: white;">Вязкость по SAE</span>
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="_4-d9" style="color:#b3bcc5; cursor: pointer;"><path fill="currentColor" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16ZM8 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1 3v4a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0Z"></path></svg>
                    </span>
                  </dt>
                  <dd class="description__item_link">5W-40</dd>
                </dl>

                <dl class="description__item">
                  <dt class="description__item_text">
                    <span style="background-color: white;">Объем, л</span>
                  </dt>
                  <dd class="description__item_link">4</dd>
                </dl>
              </div>
              <a target="_self" href="#section-description--offset-140" class="lo8">Перейти к описанию</a>
            </div>
          </div>

          <div class="product-price">
            <div class="product-price__item">
                <div class="item-price">
                  <div class="item-price__value">
                    <span class="price-real">4 672 ₽</span>
                    <span class="price-discount">5 399 ₽</span>
                  </div>

                  <div class="item-price__card">
                    4 438 ₽  при оплате Ozon Картой
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="x4-a6 x4-a7 x4-a8" style="color:#fff;"><path fill="currentColor" d="M8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12Zm0-8a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1 2v3a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0Z"></path></svg>
                    </span>
                  </div>

                  <div class="item-price__best-link">
                    <a href="#">Есть дешевле, 3 679 ₽</a>
                  </div>

                  <div class="item-price__low-link">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="x5-d9"><path fill="#005bff" d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2ZM8 2a3 3 0 0 1 3 3c0 1.702.561 3.35 1.086 4.531A16.248 16.248 0 0 0 12.83 11H3.17a16.254 16.254 0 0 0 .744-1.469C4.439 8.351 5 6.701 5 5a3 3 0 0 1 3-3Zm6.556 7.988a14.277 14.277 0 0 1-.642-1.27C13.439 7.65 13 6.299 13 5A5 5 0 1 0 3 5c0 1.298-.439 2.65-.914 3.719-.233.526-.467.964-.642 1.27-.18.314-.444.63-.444 1.011v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1c0-.38-.264-.697-.444-1.012Z"></path></svg></span>
                    <a href="#">Узнать о снижении цены</a>
                  </div>
                </div>
                <div class="item__basket">
                  <button class="btn btn__basket btn-primary">Добавить в корзину</button>
                </div>
                <div class="item__delivery">
                  Доставка <b>послезавтра</b>
                </div>
            </div>

            <div class="product-price__questions">
              <div class="product-price__credit">
                <div class="credit__item">
                  <div class="product-price__credit-header">
                    <span class="price__credit-header_text">Ozon Рассрочка</span>
                    <a href="https://www.ozon.ru/section/limit" class="lo8">Подробнее</a>
                  </div>
                  <div class="product-price__credit-price">
                    <span class="price__credit-price_text">855 ₽</span>
                    <span style="font-size: 14px;">× 6 месяцев</span>
                  </div>
                </div>
              </div>

              <div class="product-price__faq">
                <div class="faq__item">
                  <div class="faq__title">Часто задаваемые вопросы</div>
                  <div class="faq-questions">
                    <a class="faq-questions__link" href="/my/deliveryPriceInfo" target="_blank">Условия доставки</a>
                    <a class="faq-questions__link" href="https://docs.ozon.ru/common/otmena-i-vozvrat-zakaza/kak-vernut-tovar" target="_blank">Возврат товаров</a>
                    <a class="faq-questions__link" href="https://docs.ozon.ru/common/oplata/sposoby-oplaty" target="_blank">Способы оплаты</a>
                    <a class="faq-questions__link" href="https://docs.ozon.ru/common/otmena-i-vozvrat-zakaza/vozvrat-deneg-i-ballov/" target="_blank">Возврат денег</a>
                  </div>
                </div>
              </div>

              <div class="product-price__delivery">
                <div class="delivery__item">
                  <h2 class="delivery__title">Информация о доставке</h2>
                  <div class="delivery__city">
                    <span class="city-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path fill="currentColor" d="M12 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-3 5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Z"></path><path fill="currentColor" d="M12 1a9 9 0 0 0-9 9c0 2.514 1.136 4.848 2.699 6.942 1.565 2.099 3.631 4.05 5.643 5.81a1 1 0 0 0 1.316 0c2.012-1.76 4.078-3.711 5.644-5.81C19.864 14.848 21 12.514 21 10a9 9 0 0 0-9-9Zm-7 9a7 7 0 0 1 14 0c0 1.904-.864 3.82-2.302 5.746-1.275 1.71-2.945 3.353-4.698 4.92-1.753-1.567-3.423-3.21-4.699-4.92C5.864 13.82 5 11.904 5 10Z"></path></svg>
                    </span>
                    <a href="#" class="city-text__link">
                      <span class="delivery__city-text">Волгоград, Волгоградская область</span>
                      <span class="delivery__city-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="wk1"><path fill="currentColor" d="M5.293 12.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 1.414L9.586 8l-4.293 4.293Z"></path></svg></span>
                    </a>
                  </div>
                  <div class="delivery__courier">
                    <span class="delivery__courier-title">Курьером Ozon</span>
                    <span class="delivery__descr">послезавтра, 3 марта - бесплатно</span>
                  </div>
                  <div class="delivery__point">
                    <a href="#" class="city-text__link">
                      <span class="delivery__city-text">Пункты выдачи и постаматы</span>
                      <span class="delivery__city-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="wk1"><path fill="currentColor" d="M5.293 12.293a1 1 0 1 0 1.414 1.414l5-5a1 1 0 0 0 0-1.414l-5-5a1 1 0 0 0-1.414 1.414L9.586 8l-4.293 4.293Z"></path></svg></span>
                    </a>
                    <span class="delivery__descr">послезавтра, 3 марта - бесплатно</span>
                  </div>
                </div>
              </div>
            </div>
            

          </div>
        </div>
        
      </div>
    </section>

    <section class="reviews">
      <div class="container container__reviews">
        <span class="reviews__img">
          <img loading="lazy" src="https://ir.ozone.ru/s3/video-1/01FS2551GNNYTGP81WK5TCXVMQ/cover/wc200/cover.jpg" srcset="https://ir.ozone.ru/s3/video-1/01FS2551GNNYTGP81WK5TCXVMQ/cover/wc400/cover.jpg 2x" class="zs5 z7-a">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="z5s"><path fill="currentColor" d="M14.286 11c.229 0 .458.06.661.178l6.429 3.75c.387.226.624.633.624 1.072 0 .44-.237.846-.624 1.072l-6.429 3.75a1.313 1.313 0 0 1-1.295.016A1.244 1.244 0 0 1 13 19.75v-7.5c0-.45.25-.866.652-1.088.197-.108.415-.162.634-.162Z"></path><path fill="currentColor" d="M1 16C1 7.716 7.716 1 16 1c8.284 0 15 6.716 15 15 0 8.284-6.716 15-15 15-8.284 0-15-6.716-15-15ZM16 3C8.82 3 3 8.82 3 16s5.82 13 13 13 13-5.82 13-13S23.18 3 16 3Z"></path></svg>
        </span>

        <span class="reviews__img">
          <img loading="lazy" src="https://ir.ozone.ru/s3/video-3/01FVC354PCNRR1TWHMESDFCE71/cover/wc200/cover.jpg" srcset="https://ir.ozone.ru/s3/video-3/01FVC354PCNRR1TWHMESDFCE71/cover/wc400/cover.jpg 2x" class="zs5 z7-a">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="z5s"><path fill="currentColor" d="M14.286 11c.229 0 .458.06.661.178l6.429 3.75c.387.226.624.633.624 1.072 0 .44-.237.846-.624 1.072l-6.429 3.75a1.313 1.313 0 0 1-1.295.016A1.244 1.244 0 0 1 13 19.75v-7.5c0-.45.25-.866.652-1.088.197-.108.415-.162.634-.162Z"></path><path fill="currentColor" d="M1 16C1 7.716 7.716 1 16 1c8.284 0 15 6.716 15 15 0 8.284-6.716 15-15 15-8.284 0-15-6.716-15-15ZM16 3C8.82 3 3 8.82 3 16s5.82 13 13 13 13-5.82 13-13S23.18 3 16 3Z"></path></svg>
        </span>

        <span class="reviews__img">
          <img loading="lazy" src="https://ir.ozone.ru/s3/video-3/01FX7BWND1C9SX9DVJDT9AK3DR/cover/wc200/cover.jpg" srcset="https://ir.ozone.ru/s3/video-3/01FX7BWND1C9SX9DVJDT9AK3DR/cover/wc400/cover.jpg 2x" class="zs5 z7-a">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="z5s"><path fill="currentColor" d="M14.286 11c.229 0 .458.06.661.178l6.429 3.75c.387.226.624.633.624 1.072 0 .44-.237.846-.624 1.072l-6.429 3.75a1.313 1.313 0 0 1-1.295.016A1.244 1.244 0 0 1 13 19.75v-7.5c0-.45.25-.866.652-1.088.197-.108.415-.162.634-.162Z"></path><path fill="currentColor" d="M1 16C1 7.716 7.716 1 16 1c8.284 0 15 6.716 15 15 0 8.284-6.716 15-15 15-8.284 0-15-6.716-15-15ZM16 3C8.82 3 3 8.82 3 16s5.82 13 13 13 13-5.82 13-13S23.18 3 16 3Z"></path></svg>
        </span>

        <span class="reviews__img">
          <img loading="lazy" src="https://ir.ozone.ru/s3/video-3/01FXDMMXEHG7T7Q7Y0GAX9CH3H/cover/wc200/cover.jpg" srcset="https://ir.ozone.ru/s3/video-3/01FXDMMXEHG7T7Q7Y0GAX9CH3H/cover/wc400/cover.jpg 2x" class="zs5 z7-a">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="z5s"><path fill="currentColor" d="M14.286 11c.229 0 .458.06.661.178l6.429 3.75c.387.226.624.633.624 1.072 0 .44-.237.846-.624 1.072l-6.429 3.75a1.313 1.313 0 0 1-1.295.016A1.244 1.244 0 0 1 13 19.75v-7.5c0-.45.25-.866.652-1.088.197-.108.415-.162.634-.162Z"></path><path fill="currentColor" d="M1 16C1 7.716 7.716 1 16 1c8.284 0 15 6.716 15 15 0 8.284-6.716 15-15 15-8.284 0-15-6.716-15-15ZM16 3C8.82 3 3 8.82 3 16s5.82 13 13 13 13-5.82 13-13S23.18 3 16 3Z"></path></svg>
        </span>

        <span class="reviews__img">
          <img loading="lazy" src="https://ir.ozone.ru/s3/video-4/01FZP27CWG5GK2F94VG1M5F60V/cover/wc200/cover.jpg" srcset="https://ir.ozone.ru/s3/video-4/01FZP27CWG5GK2F94VG1M5F60V/cover/wc400/cover.jpg 2x" class="zs5 z7-a">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="z5s"><path fill="currentColor" d="M14.286 11c.229 0 .458.06.661.178l6.429 3.75c.387.226.624.633.624 1.072 0 .44-.237.846-.624 1.072l-6.429 3.75a1.313 1.313 0 0 1-1.295.016A1.244 1.244 0 0 1 13 19.75v-7.5c0-.45.25-.866.652-1.088.197-.108.415-.162.634-.162Z"></path><path fill="currentColor" d="M1 16C1 7.716 7.716 1 16 1c8.284 0 15 6.716 15 15 0 8.284-6.716 15-15 15-8.284 0-15-6.716-15-15ZM16 3C8.82 3 3 8.82 3 16s5.82 13 13 13 13-5.82 13-13S23.18 3 16 3Z"></path></svg>
        </span>

        <span class="reviews__img">
          <img loading="lazy" src="https://ir.ozone.ru/s3/video-1/01G8WVW1HVGC5PC1SZ5WD5W7K2/cover/wc200/cover.jpg" srcset="https://ir.ozone.ru/s3/video-1/01G8WVW1HVGC5PC1SZ5WD5W7K2/cover/wc400/cover.jpg 2x" class="zs5 z7-a">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="z5s"><path fill="currentColor" d="M14.286 11c.229 0 .458.06.661.178l6.429 3.75c.387.226.624.633.624 1.072 0 .44-.237.846-.624 1.072l-6.429 3.75a1.313 1.313 0 0 1-1.295.016A1.244 1.244 0 0 1 13 19.75v-7.5c0-.45.25-.866.652-1.088.197-.108.415-.162.634-.162Z"></path><path fill="currentColor" d="M1 16C1 7.716 7.716 1 16 1c8.284 0 15 6.716 15 15 0 8.284-6.716 15-15 15-8.284 0-15-6.716-15-15ZM16 3C8.82 3 3 8.82 3 16s5.82 13 13 13 13-5.82 13-13S23.18 3 16 3Z"></path></svg>
        </span>

        <span class="reviews__img">
          <img loading="lazy" src="https://ir.ozone.ru/s3/video-10/01GB8CPM5RB4WXDE6711PHZNJA/cover/wc200/cover.jpg" srcset="https://ir.ozone.ru/s3/video-10/01GB8CPM5RB4WXDE6711PHZNJA/cover/wc400/cover.jpg 2x" class="zs5 z7-a">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="z5s"><path fill="currentColor" d="M14.286 11c.229 0 .458.06.661.178l6.429 3.75c.387.226.624.633.624 1.072 0 .44-.237.846-.624 1.072l-6.429 3.75a1.313 1.313 0 0 1-1.295.016A1.244 1.244 0 0 1 13 19.75v-7.5c0-.45.25-.866.652-1.088.197-.108.415-.162.634-.162Z"></path><path fill="currentColor" d="M1 16C1 7.716 7.716 1 16 1c8.284 0 15 6.716 15 15 0 8.284-6.716 15-15 15-8.284 0-15-6.716-15-15ZM16 3C8.82 3 3 8.82 3 16s5.82 13 13 13 13-5.82 13-13S23.18 3 16 3Z"></path></svg>
        </span>

        <span class="reviews__img">
          <img loading="lazy" src="https://ir.ozone.ru/s3/video-9/01GD5XGC0H9K3D5XFV836VHYMF/cover/wc200/cover.jpg" srcset="https://ir.ozone.ru/s3/video-9/01GD5XGC0H9K3D5XFV836VHYMF/cover/wc400/cover.jpg 2x" class="zs5 z7-a">
          <div class="z5s z5s__text">+661</div>
        </span>

      </div>
    </section>


    <section class="seller">
      <div class="container container__seller">
        <div class="seller-item">
          <div class="seller_left">
            <a class="seller-left__img">
              <img loading="lazy" src="https://ir.ozone.ru/graphics/ozon/logo/c96/ozon-logo.png" alt="OZON" >
            </a>
            <div class="seller-left__text">
              <span class="seller-left__title">Продавец</span>
              <span>
                <a title="OZON" href="https://www.ozon.ru/highlight/ozon-retail-186820/" class="seller-left__link">OZON</a>
              </span>
            </div>
          </div>
          <div class="seller_right">
            <div class="seller__card">
              <span style="margin-right: 12px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path fill="currentColor" d="M4 4a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h7a1 1 0 1 0 0-2H4a1 1 0 0 1-1-1v-6h19a1 1 0 0 0 1-1V7a3 3 0 0 0-3-3H4Zm17 4H3V7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v1Z"></path><path fill="currentColor" d="m18 18.586 4.293-4.293a1 1 0 0 1 1.414 1.414l-5 5a.997.997 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L18 18.586Z"></path></svg>
              </span>
              <span>Безопасная оплата онлайн</span>
            </div>
            <div class="seller__ref">
              <span style="margin-right: 12px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path fill="currentColor" d="M9.707 4.293a1 1 0 0 1 0 1.414L8.414 7H14a6 6 0 0 1 0 12H6a1 1 0 1 1 0-2h8a4 4 0 0 0 0-8H8.414l1.293 1.293a1 1 0 0 1-1.414 1.414l-3-3a1 1 0 0 1 0-1.414l3-3a1 1 0 0 1 1.414 0Z"></path></svg>
              </span>
              <span>Возврат 7 дней</span>
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="_4-d9" style="color:#b3bcc5; cursor: pointer;"><path fill="currentColor" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16ZM8 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1 3v4a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0Z"></path></svg>
              </span>
            </div>
          </div>
        </div>

      </div>
    </section>


    <section class="similar-products">
      <div class="container similar-products__container">
        <div class="similar-products__first-slider">
          <div class="similar-products__title">
            Похожие товары
          </div>
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div style="display: flex;">
                  <a class="similar-products__item">
                    <div class="similar-products__img">
                      <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-8/wc250/6569496320.jpg" srcset="https://ir.ozone.ru/s3/multimedia-8/wc500/6569496320.jpg 2x" alt="Моторное масло Castrol Magnatec Diesel B4 10W-40 Полусинтетическое 4 л Похожие товары">
                      
                      <div class="similar-products__icon">
                        <div class="similar-products__heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="similar-products__dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                        </div>
                      </div>
                      <div class="similar-products__img-price">
                        <span>−26%</span>
                      </div>
                    </div>
                    <div class="similar-products__price">
                      <div style="display: flex;">
                        <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background-color: rgb(16, 196, 76);">3 328 ₽</span>
                        <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">4 519 ₽</span>
                      </div>
                      
                      <span style="color: rgb(0, 26, 52); font-size: 14px;">895 ₽ / л</span>
                    </div>
                    <div class="similar-products__text">
                      <span class="similar-products__text_hover">Моторное масло Castrol Magnatec Diesel B4 10W-40 Полусинтетическое 4 л</span>
                      <div class="similar-products__reviews">
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                          <span>5.0</span>   
                        </span>
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                          <span>40</span> 
                        </span>
                        <span style="color: rgb(16, 196, 76); font-size: 14px;">
                          Оригинал
                        </span>
                      </div>
                    </div>
                    <div class="similar-products__btn">
                      <button class="btn btn-primary similar__btn">В корзину</button>
                      <span class="similar-products__btn-undertext">
                        <span>6 марта, </span>
                        <span style="color:#005bff">Ozon</span>
                      </span>
                    </div>
                  </a>

                  <a class="similar-products__item">
                    <div class="similar-products__img">
                      <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-o/wc250/6264528456.jpg" srcset="https://ir.ozone.ru/s3/multimedia-o/wc500/6264528456.jpg 2x" alt="Моторное масло RUXX OIL 5W-40 Синтетическое 4 л Похожие товары">

                      <div class="similar-products__icon">
                        <div class="similar-products__heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="similar-products__dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                        </div>
                      </div>

                      <div class="similar-products__img-price">
                        <span>−61%</span>
                      </div>

                    </div>
                    <div class="similar-products__price">
                      <div style="display: flex;">
                        <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background: linear-gradient(90deg, rgb(255, 49, 148) 3%, rgb(253, 143, 180) 97%);">2 365 ₽</span>
                        <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">6 024 ₽</span>
                      </div>
                      
                      <span style="color: rgb(0, 26, 52); font-size: 14px;">895 ₽ / л</span>
                    </div>
                    <div class="similar-products__text">
                      <span class="similar-products__text_hover">Моторное масло RUXX OIL 5W-40 Синтетическое 4 л</span>
                      <div class="similar-products__reviews">
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                          <span>5.0</span>   
                        </span>
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                          <span>40</span> 
                        </span>
                      </div>
                    </div>
                    <div class="similar-products__btn">
                      <button class="btn btn-primary similar__btn">В корзину</button>
                      <span class="similar-products__btn-undertext">
                        <span>10 марта, </span>
                        <span style="color:#005bff">Ozon</span>
                      </span>
                    </div>
                  </a>

                  <a class="similar-products__item">
                    <div class="similar-products__img">
                      <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-8/wc250/6569496320.jpg" srcset="https://ir.ozone.ru/s3/multimedia-8/wc500/6569496320.jpg 2x" alt="Моторное масло Castrol Magnatec Diesel B4 10W-40 Полусинтетическое 4 л Похожие товары">
                      
                      <div class="similar-products__icon">
                        <div class="similar-products__heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="similar-products__dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                        </div>
                      </div>
                      <div class="similar-products__img-price">
                        <span>−26%</span>
                      </div>
                    </div>
                    <div class="similar-products__price">
                      <div style="display: flex;">
                        <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background-color: rgb(16, 196, 76);">3 328 ₽</span>
                        <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">4 519 ₽</span>
                      </div>
                      
                      <span style="color: rgb(0, 26, 52); font-size: 14px;">895 ₽ / л</span>
                    </div>
                    <div class="similar-products__text">
                      <span class="similar-products__text_hover">Моторное масло Castrol Magnatec Diesel B4 10W-40 Полусинтетическое 4 л</span>
                      <div class="similar-products__reviews">
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                          <span>5.0</span>   
                        </span>
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                          <span>40</span> 
                        </span>
                        <span style="color: rgb(16, 196, 76); font-size: 14px;">
                          Оригинал
                        </span>
                      </div>
                    </div>
                    <div class="similar-products__btn">
                      <button class="btn btn-primary similar__btn">В корзину</button>
                      <span class="similar-products__btn-undertext">
                        <span>6 марта, </span>
                        <span style="color:#005bff">Ozon</span>
                      </span>
                    </div>
                  </a>

                  <a class="similar-products__item">
                    <div class="similar-products__img">
                      <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-o/wc250/6264528456.jpg" srcset="https://ir.ozone.ru/s3/multimedia-o/wc500/6264528456.jpg 2x" alt="Моторное масло RUXX OIL 5W-40 Синтетическое 4 л Похожие товары">

                      <div class="similar-products__icon">
                        <div class="similar-products__heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="similar-products__dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                        </div>
                      </div>

                      <div class="similar-products__img-price">
                        <span>−61%</span>
                      </div>

                    </div>
                    <div class="similar-products__price">
                      <div style="display: flex;">
                        <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background: linear-gradient(90deg, rgb(255, 49, 148) 3%, rgb(253, 143, 180) 97%);">2 365 ₽</span>
                        <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">6 024 ₽</span>
                      </div>
                      
                      <span style="color: rgb(0, 26, 52); font-size: 14px;">895 ₽ / л</span>
                    </div>
                    <div class="similar-products__text">
                      <span class="similar-products__text_hover">Моторное масло RUXX OIL 5W-40 Синтетическое 4 л</span>
                      <div class="similar-products__reviews">
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                          <span>5.0</span>   
                        </span>
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                          <span>40</span> 
                        </span>
                      </div>
                    </div>
                    <div class="similar-products__btn">
                      <button class="btn btn-primary similar__btn">В корзину</button>
                      <span class="similar-products__btn-undertext">
                        <span>10 марта, </span>
                        <span style="color:#005bff">Ozon</span>
                      </span>
                    </div>
                  </a>

                  <a class="similar-products__item">
                    <div class="similar-products__img">
                      <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-8/wc250/6569496320.jpg" srcset="https://ir.ozone.ru/s3/multimedia-8/wc500/6569496320.jpg 2x" alt="Моторное масло Castrol Magnatec Diesel B4 10W-40 Полусинтетическое 4 л Похожие товары">
                      
                      <div class="similar-products__icon">
                        <div class="similar-products__heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="similar-products__dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                        </div>
                      </div>
                      <div class="similar-products__img-price">
                        <span>−26%</span>
                      </div>
                    </div>
                    <div class="similar-products__price">
                      <div style="display: flex;">
                        <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background-color: rgb(16, 196, 76);">3 328 ₽</span>
                        <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">4 519 ₽</span>
                      </div>
                      
                      <span style="color: rgb(0, 26, 52); font-size: 14px;">895 ₽ / л</span>
                    </div>
                    <div class="similar-products__text">
                      <span class="similar-products__text_hover">Моторное масло Castrol Magnatec Diesel B4 10W-40 Полусинтетическое 4 л</span>
                      <div class="similar-products__reviews">
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                          <span>5.0</span>   
                        </span>
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                          <span>40</span> 
                        </span>
                        <span style="color: rgb(16, 196, 76); font-size: 14px;">
                          Оригинал
                        </span>
                      </div>
                    </div>
                    <div class="similar-products__btn">
                      <button class="btn btn-primary similar__btn">В корзину</button>
                      <span class="similar-products__btn-undertext">
                        <span>6 марта, </span>
                        <span style="color:#005bff">Ozon</span>
                      </span>
                    </div>
                  </a>

                  <a class="similar-products__item">
                    <div class="similar-products__img">
                      <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-o/wc250/6264528456.jpg" srcset="https://ir.ozone.ru/s3/multimedia-o/wc500/6264528456.jpg 2x" alt="Моторное масло RUXX OIL 5W-40 Синтетическое 4 л Похожие товары">

                      <div class="similar-products__icon">
                        <div class="similar-products__heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="similar-products__dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                        </div>
                      </div>

                      <div class="similar-products__img-price">
                        <span>−61%</span>
                      </div>

                    </div>
                    <div class="similar-products__price">
                      <div style="display: flex;">
                        <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background: linear-gradient(90deg, rgb(255, 49, 148) 3%, rgb(253, 143, 180) 97%);">2 365 ₽</span>
                        <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">6 024 ₽</span>
                      </div>
                      
                      <span style="color: rgb(0, 26, 52); font-size: 14px;">895 ₽ / л</span>
                    </div>
                    <div class="similar-products__text">
                      <span class="similar-products__text_hover">Моторное масло RUXX OIL 5W-40 Синтетическое 4 л</span>
                      <div class="similar-products__reviews">
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                          <span>5.0</span>   
                        </span>
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                          <span>40</span> 
                        </span>
                      </div>
                    </div>
                    <div class="similar-products__btn">
                      <button class="btn btn-primary similar__btn">В корзину</button>
                      <span class="similar-products__btn-undertext">
                        <span>10 марта, </span>
                        <span style="color:#005bff">Ozon</span>
                      </span>
                    </div>
                  </a>
                </div>

              </div>
              <div class="carousel-item">
                <div class="similar-products__item">
                  <div class="similar-products__img">
                    
                    <div style="display: flex;">
                      <a class="similar-products__item">
                        <div class="similar-products__img">
                          <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-8/wc250/6569496320.jpg" srcset="https://ir.ozone.ru/s3/multimedia-8/wc500/6569496320.jpg 2x" alt="Моторное масло Castrol Magnatec Diesel B4 10W-40 Полусинтетическое 4 л Похожие товары">
                          
                          <div class="similar-products__icon">
                            <div class="similar-products__heart">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="similar-products__dot">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                            </div>
                          </div>
                          <div class="similar-products__img-price">
                            <span>−26%</span>
                          </div>
                        </div>
                        <div class="similar-products__price">
                          <div style="display: flex;">
                            <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background-color: rgb(16, 196, 76);">3 328 ₽</span>
                            <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">4 519 ₽</span>
                          </div>
                          
                          <span style="color: rgb(0, 26, 52); font-size: 14px;">895 ₽ / л</span>
                        </div>
                        <div class="similar-products__text">
                          <span class="similar-products__text_hover">Моторное масло Castrol Magnatec Diesel B4 10W-40 Полусинтетическое 4 л</span>
                          <div class="similar-products__reviews">
                            <span style="margin-right: 5px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                              <span>5.0</span>   
                            </span>
                            <span style="margin-right: 5px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                              <span>40</span> 
                            </span>
                            <span style="color: rgb(16, 196, 76); font-size: 14px;">
                              Оригинал
                            </span>
                          </div>
                        </div>
                        <div class="similar-products__btn">
                          <button class="btn btn-primary similar__btn">В корзину</button>
                          <span class="similar-products__btn-undertext">
                            <span>6 марта, </span>
                            <span style="color:#005bff">Ozon</span>
                          </span>
                        </div>
                      </a>
    
                      <a class="similar-products__item">
                        <div class="similar-products__img">
                          <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-o/wc250/6264528456.jpg" srcset="https://ir.ozone.ru/s3/multimedia-o/wc500/6264528456.jpg 2x" alt="Моторное масло RUXX OIL 5W-40 Синтетическое 4 л Похожие товары">
    
                          <div class="similar-products__icon">
                            <div class="similar-products__heart">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="similar-products__dot">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                            </div>
                          </div>
    
                          <div class="similar-products__img-price">
                            <span>−61%</span>
                          </div>
    
                        </div>
                        <div class="similar-products__price">
                          <div style="display: flex;">
                            <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background: linear-gradient(90deg, rgb(255, 49, 148) 3%, rgb(253, 143, 180) 97%);">2 365 ₽</span>
                            <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">6 024 ₽</span>
                          </div>
                          
                          <span style="color: rgb(0, 26, 52); font-size: 14px;">895 ₽ / л</span>
                        </div>
                        <div class="similar-products__text">
                          <span class="similar-products__text_hover">Моторное масло RUXX OIL 5W-40 Синтетическое 4 л</span>
                          <div class="similar-products__reviews">
                            <span style="margin-right: 5px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                              <span>5.0</span>   
                            </span>
                            <span style="margin-right: 5px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                              <span>40</span> 
                            </span>
                          </div>
                        </div>
                        <div class="similar-products__btn">
                          <button class="btn btn-primary similar__btn">В корзину</button>
                          <span class="similar-products__btn-undertext">
                            <span>10 марта, </span>
                            <span style="color:#005bff">Ozon</span>
                          </span>
                        </div>
                      </a>
    
                      <a class="similar-products__item">
                        <div class="similar-products__img">
                          <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-8/wc250/6569496320.jpg" srcset="https://ir.ozone.ru/s3/multimedia-8/wc500/6569496320.jpg 2x" alt="Моторное масло Castrol Magnatec Diesel B4 10W-40 Полусинтетическое 4 л Похожие товары">
                          
                          <div class="similar-products__icon">
                            <div class="similar-products__heart">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="similar-products__dot">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                            </div>
                          </div>
                          <div class="similar-products__img-price">
                            <span>−26%</span>
                          </div>
                        </div>
                        <div class="similar-products__price">
                          <div style="display: flex;">
                            <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background-color: rgb(16, 196, 76);">3 328 ₽</span>
                            <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">4 519 ₽</span>
                          </div>
                          
                          <span style="color: rgb(0, 26, 52); font-size: 14px;">895 ₽ / л</span>
                        </div>
                        <div class="similar-products__text">
                          <span class="similar-products__text_hover">Моторное масло Castrol Magnatec Diesel B4 10W-40 Полусинтетическое 4 л</span>
                          <div class="similar-products__reviews">
                            <span style="margin-right: 5px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                              <span>5.0</span>   
                            </span>
                            <span style="margin-right: 5px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                              <span>40</span> 
                            </span>
                            <span style="color: rgb(16, 196, 76); font-size: 14px;">
                              Оригинал
                            </span>
                          </div>
                        </div>
                        <div class="similar-products__btn">
                          <button class="btn btn-primary similar__btn">В корзину</button>
                          <span class="similar-products__btn-undertext">
                            <span>6 марта, </span>
                            <span style="color:#005bff">Ozon</span>
                          </span>
                        </div>
                      </a>
    
                      <a class="similar-products__item">
                        <div class="similar-products__img">
                          <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-o/wc250/6264528456.jpg" srcset="https://ir.ozone.ru/s3/multimedia-o/wc500/6264528456.jpg 2x" alt="Моторное масло RUXX OIL 5W-40 Синтетическое 4 л Похожие товары">
    
                          <div class="similar-products__icon">
                            <div class="similar-products__heart">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="similar-products__dot">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                            </div>
                          </div>
    
                          <div class="similar-products__img-price">
                            <span>−61%</span>
                          </div>
    
                        </div>
                        <div class="similar-products__price">
                          <div style="display: flex;">
                            <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background: linear-gradient(90deg, rgb(255, 49, 148) 3%, rgb(253, 143, 180) 97%);">2 365 ₽</span>
                            <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">6 024 ₽</span>
                          </div>
                          
                          <span style="color: rgb(0, 26, 52); font-size: 14px;">895 ₽ / л</span>
                        </div>
                        <div class="similar-products__text">
                          <span class="similar-products__text_hover">Моторное масло RUXX OIL 5W-40 Синтетическое 4 л</span>
                          <div class="similar-products__reviews">
                            <span style="margin-right: 5px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                              <span>5.0</span>   
                            </span>
                            <span style="margin-right: 5px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                              <span>40</span> 
                            </span>
                          </div>
                        </div>
                        <div class="similar-products__btn">
                          <button class="btn btn-primary similar__btn">В корзину</button>
                          <span class="similar-products__btn-undertext">
                            <span>10 марта, </span>
                            <span style="color:#005bff">Ozon</span>
                          </span>
                        </div>
                      </a>

                      <a class="similar-products__item">
                        <div class="similar-products__img">
                          <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-o/wc250/6264528456.jpg" srcset="https://ir.ozone.ru/s3/multimedia-o/wc500/6264528456.jpg 2x" alt="Моторное масло RUXX OIL 5W-40 Синтетическое 4 л Похожие товары">
    
                          <div class="similar-products__icon">
                            <div class="similar-products__heart">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="similar-products__dot">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                            </div>
                          </div>
    
                          <div class="similar-products__img-price">
                            <span>−61%</span>
                          </div>
    
                        </div>
                        <div class="similar-products__price">
                          <div style="display: flex;">
                            <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background: linear-gradient(90deg, rgb(255, 49, 148) 3%, rgb(253, 143, 180) 97%);">2 365 ₽</span>
                            <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">6 024 ₽</span>
                          </div>
                          
                          <span style="color: rgb(0, 26, 52); font-size: 14px;">895 ₽ / л</span>
                        </div>
                        <div class="similar-products__text">
                          <span class="similar-products__text_hover">Моторное масло RUXX OIL 5W-40 Синтетическое 4 л</span>
                          <div class="similar-products__reviews">
                            <span style="margin-right: 5px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                              <span>5.0</span>   
                            </span>
                            <span style="margin-right: 5px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                              <span>40</span> 
                            </span>
                          </div>
                        </div>
                        <div class="similar-products__btn">
                          <button class="btn btn-primary similar__btn">В корзину</button>
                          <span class="similar-products__btn-undertext">
                            <span>10 марта, </span>
                            <span style="color:#005bff">Ozon</span>
                          </span>
                        </div>
                      </a>
    
                      <a class="similar-products__item">
                        <div class="similar-products__img">
                          <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-8/wc250/6569496320.jpg" srcset="https://ir.ozone.ru/s3/multimedia-8/wc500/6569496320.jpg 2x" alt="Моторное масло Castrol Magnatec Diesel B4 10W-40 Полусинтетическое 4 л Похожие товары">
                          
                          <div class="similar-products__icon">
                            <div class="similar-products__heart">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="similar-products__dot">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                            </div>
                          </div>
                          <div class="similar-products__img-price">
                            <span>−26%</span>
                          </div>
                        </div>
                        <div class="similar-products__price">
                          <div style="display: flex;">
                            <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background-color: rgb(16, 196, 76);">3 328 ₽</span>
                            <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">4 519 ₽</span>
                          </div>
                          
                          <span style="color: rgb(0, 26, 52); font-size: 14px;">895 ₽ / л</span>
                        </div>
                        <div class="similar-products__text">
                          <span class="similar-products__text_hover">Моторное масло Castrol Magnatec Diesel B4 10W-40 Полусинтетическое 4 л</span>
                          <div class="similar-products__reviews">
                            <span style="margin-right: 5px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                              <span>5.0</span>   
                            </span>
                            <span style="margin-right: 5px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                              <span>40</span> 
                            </span>
                            <span style="color: rgb(16, 196, 76); font-size: 14px;">
                              Оригинал
                            </span>
                          </div>
                        </div>
                        <div class="similar-products__btn">
                          <button class="btn btn-primary similar__btn">В корзину</button>
                          <span class="similar-products__btn-undertext">
                            <span>6 марта, </span>
                            <span style="color:#005bff">Ozon</span>
                          </span>
                        </div>
                      </a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
          </div>

        </div>

        <div class="similar-products__two-slider">
          <div class="similar-products__title">
            Покупают вместе
          </div>
                <div style="display: flex;">
                  <a class="similar-products__item">
                    <div class="similar-products__img">
                      <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-0/wc250/6435206088.jpg" srcset="https://ir.ozone.ru/s3/multimedia-0/wc500/6435206088.jpg 2x" alt="TSN Фильтр салона Угольный 9715 / 9.7.15  MITSUBISHI GRANDIS L200 LANCER VII OUTLANDER I  Покупают вместе" class="z7-a">
                      
                      <div class="similar-products__icon">
                        <div class="similar-products__heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="similar-products__dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                        </div>
                      </div>
                      <div class="similar-products__img-price">
                        <span>−19%</span>
                      </div>
                    </div>
                    <div class="similar-products__price">
                      <div style="display: flex;">
                        <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background-color: rgb(16, 196, 76);">449 ₽</span>
                        <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">555 ₽</span>
                      </div>
                      
                    </div>
                    <div class="similar-products__text">
                      <span class="similar-products__text_hover">TSN Фильтр салона Угольный 9715 / 9.7.15  MITSUBISHI GRANDIS L200 LANCER VII OUTLANDER I </span>
                      <div class="similar-products__reviews">
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                          <span>5.0</span>   
                        </span>
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                          <span>5</span> 
                        </span>
                      </div>
                    </div>
                    <div class="similar-products__btn">
                      <button class="btn btn-primary similar__btn">В корзину</button>
                      <span class="similar-products__btn-undertext">
                        <span>8 марта, </span>
                        <span>АВТОЭЛЬДОРАДО</span>
                      </span>
                    </div>
                  </a>

                  <a class="similar-products__item">
                    <div class="similar-products__img">
                      <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-h/wc250/6014130053.jpg" srcset="https://ir.ozone.ru/s3/multimedia-h/wc500/6014130053.jpg 2x" alt="MANNOL DEXRON III Масло трансмиссионное (4л) Покупают вместе">
                      
                      <div class="similar-products__icon">
                        <div class="similar-products__heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="similar-products__dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                        </div>
                      </div>
                      <div class="similar-products__img-price">
                        <span>−2%</span>
                      </div>
                    </div>
                    <div class="similar-products__price">
                      <div style="display: flex;">
                        <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background-color: rgb(16, 196, 76);">2 094 ₽</span>
                        <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">2 137 ₽</span>
                      </div>
                      
                      <span style="color: rgb(0, 26, 52); font-size: 14px;">534 ₽ / л</span>
                    </div>
                    <div class="similar-products__text">
                      <span class="similar-products__text_hover">MANNOL DEXRON III Масло трансмиссионное (4л)</span>
                      <div class="similar-products__reviews">
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                          <span>4.9</span>   
                        </span>
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                          <span>73</span> 
                        </span>
                        <span style="color: rgb(16, 196, 76); font-size: 14px;">
                          Оригинал
                        </span>
                      </div>
                    </div>
                    <div class="similar-products__btn">
                      <button class="btn btn-primary similar__btn">В корзину</button>
                      <span class="similar-products__btn-undertext">
                        <span>7 марта, </span>
                        <span>Профит-Лига</span>
                      </span>
                    </div>
                  </a>

                  <a class="similar-products__item">
                    <div class="similar-products__img">
                      <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-0/wc250/6435206088.jpg" srcset="https://ir.ozone.ru/s3/multimedia-0/wc500/6435206088.jpg 2x" alt="TSN Фильтр салона Угольный 9715 / 9.7.15  MITSUBISHI GRANDIS L200 LANCER VII OUTLANDER I  Покупают вместе" class="z7-a">
                      
                      <div class="similar-products__icon">
                        <div class="similar-products__heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="similar-products__dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                        </div>
                      </div>
                      <div class="similar-products__img-price">
                        <span>−19%</span>
                      </div>
                    </div>
                    <div class="similar-products__price">
                      <div style="display: flex;">
                        <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background-color: rgb(16, 196, 76);">449 ₽</span>
                        <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">555 ₽</span>
                      </div>
                      
                    </div>
                    <div class="similar-products__text">
                      <span class="similar-products__text_hover">TSN Фильтр салона Угольный 9715 / 9.7.15  MITSUBISHI GRANDIS L200 LANCER VII OUTLANDER I </span>
                      <div class="similar-products__reviews">
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                          <span>5.0</span>   
                        </span>
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                          <span>5</span> 
                        </span>
                      </div>
                    </div>
                    <div class="similar-products__btn">
                      <button class="btn btn-primary similar__btn">В корзину</button>
                      <span class="similar-products__btn-undertext">
                        <span>8 марта, </span>
                        <span>АВТОЭЛЬДОРАДО</span>
                      </span>
                    </div>
                  </a>

                  <a class="similar-products__item">
                    <div class="similar-products__img">
                      <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-h/wc250/6014130053.jpg" srcset="https://ir.ozone.ru/s3/multimedia-h/wc500/6014130053.jpg 2x" alt="MANNOL DEXRON III Масло трансмиссионное (4л) Покупают вместе">
                      
                      <div class="similar-products__icon">
                        <div class="similar-products__heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="similar-products__dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                        </div>
                      </div>
                      <div class="similar-products__img-price">
                        <span>−2%</span>
                      </div>
                    </div>
                    <div class="similar-products__price">
                      <div style="display: flex;">
                        <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background-color: rgb(16, 196, 76);">2 094 ₽</span>
                        <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">2 137 ₽</span>
                      </div>
                      
                      <span style="color: rgb(0, 26, 52); font-size: 14px;">534 ₽ / л</span>
                    </div>
                    <div class="similar-products__text">
                      <span class="similar-products__text_hover">MANNOL DEXRON III Масло трансмиссионное (4л)</span>
                      <div class="similar-products__reviews">
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                          <span>4.9</span>   
                        </span>
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                          <span>73</span> 
                        </span>
                        <span style="color: rgb(16, 196, 76); font-size: 14px;">
                          Оригинал
                        </span>
                      </div>
                    </div>
                    <div class="similar-products__btn">
                      <button class="btn btn-primary similar__btn">В корзину</button>
                      <span class="similar-products__btn-undertext">
                        <span>7 марта, </span>
                        <span>Профит-Лига</span>
                      </span>
                    </div>
                  </a>

                  <a class="similar-products__item">
                    <div class="similar-products__img">
                      <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-0/wc250/6435206088.jpg" srcset="https://ir.ozone.ru/s3/multimedia-0/wc500/6435206088.jpg 2x" alt="TSN Фильтр салона Угольный 9715 / 9.7.15  MITSUBISHI GRANDIS L200 LANCER VII OUTLANDER I  Покупают вместе" class="z7-a">
                      
                      <div class="similar-products__icon">
                        <div class="similar-products__heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="similar-products__dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                        </div>
                      </div>
                      <div class="similar-products__img-price">
                        <span>−19%</span>
                      </div>
                    </div>
                    <div class="similar-products__price">
                      <div style="display: flex;">
                        <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background-color: rgb(16, 196, 76);">449 ₽</span>
                        <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">555 ₽</span>
                      </div>
                      
                    </div>
                    <div class="similar-products__text">
                      <span class="similar-products__text_hover">TSN Фильтр салона Угольный 9715 / 9.7.15  MITSUBISHI GRANDIS L200 LANCER VII OUTLANDER I </span>
                      <div class="similar-products__reviews">
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                          <span>5.0</span>   
                        </span>
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                          <span>5</span> 
                        </span>
                      </div>
                    </div>
                    <div class="similar-products__btn">
                      <button class="btn btn-primary similar__btn">В корзину</button>
                      <span class="similar-products__btn-undertext">
                        <span>8 марта, </span>
                        <span>АВТОЭЛЬДОРАДО</span>
                      </span>
                    </div>
                  </a>

                  <a class="similar-products__item">
                    <div class="similar-products__img">
                      <img loading="lazy" src="https://ir.ozone.ru/s3/multimedia-h/wc250/6014130053.jpg" srcset="https://ir.ozone.ru/s3/multimedia-h/wc500/6014130053.jpg 2x" alt="MANNOL DEXRON III Масло трансмиссионное (4л) Покупают вместе">
                      
                      <div class="similar-products__icon">
                        <div class="similar-products__heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="#00192E" fill-rule="evenodd" d="M12 22c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278ZM7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Z" clip-rule="evenodd"></path><path fill="white" fill-rule="evenodd" d="M12 22c-.285-.018-.512-.123-.764-.24a21.77 21.77 0 0 1-1.273-.628 23.542 23.542 0 0 1-3.592-2.351C3.777 16.704 1 13.448 1 9a6 6 0 0 1 6-6 6.18 6.18 0 0 1 5 2.568A6.18 6.18 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Zm0-17.959A7.178 7.178 0 0 1 17 2a7 7 0 0 1 7 7c0 4.897-3.061 8.41-5.75 10.562a24.585 24.585 0 0 1-4.989 3.07c-.566.258-.92.368-1.261.368h-.032l-.033-.002c-.484-.032-.881-.218-1.12-.33a22.658 22.658 0 0 1-1.322-.653 24.524 24.524 0 0 1-3.747-2.454C3.058 17.41 0 13.896 0 9a7 7 0 0 1 7-7c1.918 0 3.701.776 5 2.041ZM3 9a4 4 0 0 1 4-4c1.957 0 3.652 1.396 4.02 3.2a1 1 0 0 0 1.96 0C13.348 6.396 15.043 5 17 5a4 4 0 0 1 4 4c0 3.552-2.22 6.295-4.625 8.22A21.58 21.58 0 0 1 12 19.91a21.525 21.525 0 0 1-4.377-2.69C5.217 15.295 3 12.551 3 9Z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="similar-products__dot">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" style="color: rgb(0, 26, 52);"><path fill="white" d="M0 12C0 5.373 5.373 0 12 0s12 5.373 12 12-5.373 12-12 12S0 18.627 0 12Z"></path><path fill="#001A34" d="M5 10a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm14 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm-5 2a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"></path></svg>
                        </div>
                      </div>
                      <div class="similar-products__img-price">
                        <span>−2%</span>
                      </div>
                    </div>
                    <div class="similar-products__price">
                      <div style="display: flex;">
                        <span class="similar-products__price-full" style="color: rgb(255, 255, 255); background-color: rgb(16, 196, 76);">2 094 ₽</span>
                        <span class="similar-products__price-discount_crossed" style="color: rgb(112, 127, 141);">2 137 ₽</span>
                      </div>
                      
                      <span style="color: rgb(0, 26, 52); font-size: 14px;">534 ₽ / л</span>
                    </div>
                    <div class="similar-products__text">
                      <span class="similar-products__text_hover">MANNOL DEXRON III Масло трансмиссионное (4л)</span>
                      <div class="similar-products__reviews">
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="#ffb800"><path d="M8.00002 0C8.3607 0 8.69342 0.182083 8.87078 0.476513L11.1141 4.20077L15.1897 4.93889C15.5476 5.00372 15.8396 5.246 15.9516 5.57121C16.0637 5.89643 15.9781 6.25304 15.7282 6.5019L12.7697 9.44886L13.5174 13.9172C13.575 14.2617 13.4239 14.6077 13.1252 14.8155C12.8265 15.0232 12.4295 15.0583 12.0945 14.9067L8.00002 13.0528L3.9055 14.9067C3.57058 15.0583 3.17355 15.0232 2.87483 14.8155C2.57611 14.6077 2.42505 14.2617 2.48269 13.9172L3.23034 9.44886L0.271822 6.5019C0.0219778 6.25304 -0.0636177 5.89643 0.0484322 5.57121C0.160482 5.246 0.452423 5.00372 0.810347 4.93889L4.88595 4.20077L7.12927 0.476513C7.30662 0.182083 7.63935 0 8.00002 0Z"></path></svg>
                          <span>4.9</span>   
                        </span>
                        <span style="margin-right: 5px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: rgb(112, 127, 141);"><path fill="currentColor" d="M8 4C5.803 4 4 5.803 4 8c0 .731.226 1.41.608 2.034a1 1 0 0 1 .147.522c0 .506-.07.934-.19 1.338.431-.069.76-.167.964-.276a1 1 0 0 1 .888-.027C6.984 11.851 7.464 12 8 12c2.197 0 4-1.803 4-4s-1.803-4-4-4ZM2 8c0-3.301 2.699-6 6-6s6 2.699 6 6-2.699 6-6 6c-.757 0-1.41-.176-1.998-.41a6.23 6.23 0 0 1-1.265.3c-.593.086-1.208.113-1.743.11a1 1 0 0 1-.888-1.447c.429-.859.6-1.248.64-1.745A5.769 5.769 0 0 1 2 8Z"></path></svg>
                          <span>73</span> 
                        </span>
                        <span style="color: rgb(16, 196, 76); font-size: 14px;">
                          Оригинал
                        </span>
                      </div>
                    </div>
                    <div class="similar-products__btn">
                      <button class="btn btn-primary similar__btn">В корзину</button>
                      <span class="similar-products__btn-undertext">
                        <span>7 марта, </span>
                        <span>Профит-Лига</span>
                      </span>
                    </div>
                  </a>

                  
                </div>
                    
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </main>


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
