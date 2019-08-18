<?php
  const PARADIGMA_WEEKDAY = 'ближайшее время';
  const PARADIGMA_WEEKEND = 'понедельник';
  $day = date('w');
  if ($day == 0) {
    $thank_message_day = PARADIGMA_WEEKEND;
  } else {
    $thank_message_day = PARADIGMA_WEEKDAY;
  }
?>

<!DOCTYPE html>
<html lang="ru-RU">
  <head>
    <!--meta information-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--meta information end-->

    <!--title-->
    <title>Paradigma</title>
    <!--title end-->

    <!--favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--favicons end-->

    <!--styles-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/lightbox/lightbox.css">
    <link rel="stylesheet" href="css/styles.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <!--styles end-->
  </head>


  <!-- <body class="page page_theme-chrismas">  CHRISTMAS THEME -->
  <body class="page">

<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/847907631/?label=tVU3CKyus3IQr5aolAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

	<!--totop-->
	<a id="mark-totop"></a>
	<a class="totop totop_style_right-slide"></a>
	<!--totop end-->


    <!--overlay-->
    <div class="overlay popup--nerve--overlay form--nerve--overlay popup-portfolio--nerve--overlay popup-portfolio--nerve--hide popup--nerve--hide popup-portfolio-logos--nerve--hide"></div>
    <!--overlay end-->


    <!--popup-message-->
    <div class="popup-message form--nerve--message-box">

      <img class="popup-message__icon" src="images/popup-message/popup-message-icon.png" alt="check">
      <p class="popup-message__caption">Спасибо за Вашу заявку</p>
      <p class="popup-message__text">В <?= $thank_message_day ?> наш менеджер свяжеться с Вами</p>
    </div>
    <!--popup-message end-->


		<!--popup-form-->
    <div class="popup popup_form popup--nerve--popup form--nerve--popup">
      <div class="popup-closer popup__popup-closer popup--nerve--hide">
        <div class="popup-closer__line-one"></div>
        <div class="popup-closer__line-two"></div>
      </div>
      <div class="popup__content">
        <div class="consultant popup__consultant">
          <div class="consultant__tablet"><span class="consultant__name">Владислав</span><span class="consultant__rang">Аккаунт менеджер</span></div>
        </div>
        <div class="get-call popup__get-call">
          <p class="get-call__caption popup--nerve--header"></p>
          <p class="get-call__description">Введите ваше имя и телефон.<br>Специалист веб студии Paradigma свяжется с вами,чтобы ответить на ваши вопросы.</p>
          <form class="get-call__form form--nerve--form" method="post">
            <input class="get-call__input" type="text" name="name" required placeholder="Введите имя*">
            <input class="get-call__input" type="tel" name="phone" required placeholder="Введите телефон*">
            <input class="get-call__input state--hidden" type="email" name="email" placeholder="Введите e-mail">
            <input class="get-call__stat popup--nerve--stat" type="hidden" name="stat" value="Не важно">
            <button class="button button_hover_expand-height get-call__submit" type="submit" value="Отправить" data-name="Отправить">Отправить</button>
          </form>
          <p class="get-call__post-info">или позвоните нам по телефону<a href="tel:+380990573410">+38(099)057-34-10</a></p>
        </div>
      </div>
    </div>
    <!--popup-form end-->


    <!--popup-portfolio-->
    <div class="popup popup_portfolio popup-portfolio--nerve--popup">
      <div class="popup-closer popup__popup-closer popup-portfolio--nerve--hide">
        <div class="popup-closer__line-one"></div>
        <div class="popup-closer__line-two"></div>
      </div>

      <!--portfolio-->
      <div class="portfolio">
        <p class="portfolio__header portfolio--nerve--header"></p>

        <!--portfolio block-->
        <div class="portfolio__block">
          <!--image-->
          <div class="portfolio__image">

            <img class="portfolio--nerve--img1" src="images/filler.png" alt="portfolio">
          </div>

          <!--info-->
          <div class="portfolio__info">
            <p class="portfolio__label">Тематика: <span class="portfolio__text portfolio--nerve--theme"></span></p>

            <p class="portfolio__label">Срок реализации проекта: <span class="portfolio__text portfolio--nerve--deadline"></span></p>

            <p class="portfolio__label">Посмотреть:  <span class="portfolio__text portfolio--nerve--link"></span></p>
            <p class="portfolio__text portfolio--nerve--b1t1"></p>

            <p class="portfolio__text portfolio--nerve--b1t2"></p>
          </div>
        </div>
        <!--portfolio block end-->

        <!--portfolio block-->
        <div class="portfolio__block portfolio__block_reversed">
          <!--image-->
          <div class="portfolio__image">

            <img class="portfolio--nerve--img2" src="images/filler.png" alt="portfolio">
          </div>

          <!--info-->
          <div class="portfolio__info">
            <p class="portfolio__label">Решение: </p>

            <p class="portfolio__text portfolio--nerve--b2t1"></p>

            <p class="portfolio__text portfolio--nerve--b2t2"></p>
          </div>
        </div>
        <!--portfolio block end-->

        <!--portfolio bottom images-->
        <div class="portfolio__bottom-images">
          <div class="portfolio__bottom-image">

            <img class="portfolio--nerve--img3" src="images/filler.png" alt="portfolio">
          </div>
          <div class="portfolio__bottom-image">

            <img class="portfolio--nerve--img4" src="images/filler.png" alt="portfolio">
          </div>
        </div>
        <!--portfolio bottom images end-->

        <!--portfolio form-->
        <div class="get-call portfolio__get-call">
          <form class="get-call__form form--nerve--form" method="post">
            <div class="get-call__input-group">
              <input class="get-call__input" type="text" name="name" required placeholder="Введите имя*">
              <input class="get-call__input" type="tel" name="phone" required placeholder="Введите телефон*">
              <input class="get-call__input" type="email" name="email" placeholder="Введите e-mail">
              <input class="get-call__stat" type="hidden" name="stat" value="Заказать подобный сайт (с открытого портфолио)">
            </div>
            <button class="button button_hover_expand-height get-call__submit form--nerve--not-in-popup" type="submit" value="Заказать подобный сайт" data-name="Заказать подобный сайт">Заказать подобный сайт</button>
          </form>
        </div>
        <!--portfolio form end-->
      </div>
      <!--portfolio end-->

    </div>
    <!--popup-portfolio end-->


		<!--popup-portfolio-logos-->
    <div class="popup popup_portfolio-logos popup-portfolio-logos--nerve--popup" id="popup_portfolio-logos">
      <div class="popup-closer popup__popup-closer popup-portfolio-logos--nerve--hide">
        <div class="popup-closer__line-one"></div>
        <div class="popup-closer__line-two"></div>
      </div>

      <!--portfolio-->
      <div class="portfolio">
        <p class="portfolio__header portfolio--nerve--header"></p>

        <div class="portfolio__logo">

          <img src="images/filler.png" alt="portfolio" id="portfolio-logos--nerve--logo">
        </div>
        <!--portfolio bottom images-->
        <div class="portfolio__bottom-images">
          <div class="portfolio__bottom-image">

            <img src="images/filler.png" alt="portfolio" id="portfolio-logos--nerve--img1">
          </div>
          <div class="portfolio__bottom-image">

            <img src="images/filler.png" alt="portfolio" id="portfolio-logos--nerve--img2">
          </div>
        </div>
        <!--portfolio bottom images end-->

        <!--portfolio form-->
        <div class="get-call portfolio__get-call">
          <form class="get-call__form form--nerve--form" method="post">
            <div class="get-call__input-group">
              <input class="get-call__input" type="text" name="name" required placeholder="Введите имя*">
              <input class="get-call__input" type="tel" name="phone" required placeholder="Введите телефон*">
              <input class="get-call__input" type="email" name="email" placeholder="Введите e-mail">
              <input class="get-call__stat" type="hidden" name="stat" value="Заказать логотип (с открытого портфолио)">
            </div>
            <button class="button button_hover_expand-height get-call__submit form--nerve--not-in-popup" type="submit" value="Заказать логотип" data-name="Заказать логотип">Заказать логотип</button>
          </form>
        </div>
        <!--portfolio form end-->
      </div>
      <!--portfolio end-->

    </div>
    <!--popup-portfolio-logos end-->



    <!--popup mobile panel-->
    <div class="popup-mobile-panel popup-mobile-panel--nerve--panel">
      <div class="popup-mobile-panel__logo"><img src="images/logo/logo_small.png" alt="logo paradigma"></div>
      <!--popup-closer-->
      <div class="popup-closer popup-mobile-panel__popup-closer popup-mobile-panel--nerve--hide">
        <div class="popup-closer__line-one"></div>
        <div class="popup-closer__line-two"></div>
      </div>
      <!--popup-closer end-->

      <!--popup-mobile-panel phones-->
      <div class="popup-mobile-panel__phones-box">

        <a href="tel:+380990573410">+38(099) 057 34 10</a>

        <a href="tel:+380979188608">+38(097) 918 86 08</a>
      </div>
      <!--popup-mobile-panel phones end-->

      <!--menu-->
      <ul class="menu popup-mobile-panel__menu">
        <li class="menu__item"><a class="menu__link menu--nerve--works-activator" href="#">Наши кейсы</a></li>
        <li class="menu__item"><a class="menu__link menu--nerve--best-activator" href="#">Преимущества</a></li>
        <li class="menu__item"><a class="menu__link menu--nerve--scheme-activator" href="#">Схема работы</a></li>
        <li class="menu__item"><a class="menu__link menu--nerve--contacts-activator" href="#">Контакты</a></li>
      </ul>
      <!--menu end-->

    </div>
    <!--popup mobile panel end-->




    <!--navigation-->
    <nav class="main-nav">
      <div class="container main-nav__container">
        <!--logo-->
        <div class="logo main-nav__logo">
          <div class="logo__img"><img class="logo__big-image" src="images/logo/logo.png" alt="Logo Paradigma"><img class="logo__small-image" src="images/logo/logo_small.png" alt="Logo Paradigma"></div>
          <h2 class="logo__text">Web Studio</h2>
        </div>
        <!--logo end-->

        <!--menu-->
        <ul class="menu main-nav__menu">
          <li class="menu__item"><a class="menu__link menu--nerve--works-activator" href="#">Наши кейсы</a></li>
          <li class="menu__item"><a class="menu__link menu--nerve--best-activator" href="#">Преимущества</a></li>
          <li class="menu__item"><a class="menu__link menu--nerve--scheme-activator" href="#">Схема работы</a></li>
          <li class="menu__item"><a class="menu__link menu--nerve--contacts-activator" href="#">Контакты</a></li>
        </ul>
        <!--menu end-->

        <!--main nav phones-->
        <div class="main-nav__phones-box">

          <a href="tel:+380990573410">+38 (099) 057 34 10</a>

          <a href="tel:+380979188608">+38 (097) 918 86 08</a>
        </div>
        <!--main nav phones end-->

        <!--button get call-->


        <button class="button button_hover_expand-height main-nav__get-call popup--nerve--show" data-popup-header="Заказать звонок" data-name="Заказать звонок" data-stat="Заказать звонок в навигации">Заказать звонок</button>
        <!--button get call end-->

        <!--burger-->
        <div class="burger main-nav__burger popup-mobile-panel--nerve--show">
          <div class="burger__layer burger__layer_pos_top"></div>
          <div class="burger__layer burger__layer_pos_middle"></div>
          <div class="burger__layer burger__layer_pos_bottom"></div>
        </div>
        <!--burger end-->
      </div>
    </nav>
    <!--navigation end-->


		<!--header-->
    <header class="header">
      <!-- video.header__video(id="video" autoplay loop preload)source(src='media/header.mp4' type='video/mp4')
      -->
      <!--.header__overlay-->
      <div class="container header__container">
        <p class="header__text">Больше, чем просто сайты</p>
        <h1 class="header__header">Разработка</h1>
        <p class="header__text">Эффективных / продающих<br>сайтов от <span class="header__text header__text_bold">профессионалов</span></p>
      </div>
    </header>
    <!--header end-->


    <!--main content-->
		<!--hot-action-->
    <div class="hot-action">
      <div class="container hot-action__container">
        <div class="hot-action__text-box"><span class="hot-action__text hot-action__text_caption">Ограниченное предложение!</span><span class="hot-action__text">Лендинг</span><span class="hot-action__text hot-action__text_offer"><b>со скидкой 30%</b></span><span class="hot-action__text hot-action__text_gift">+ хостинг в подарок</span></div>
        <div class="hot-action__meta">
          <div class="hot-action__price-box"><span class="hot-action__price-old">14 900 грн.</span><span class="hot-action__price-new">10 400 грн.</span></div><a class="button button_hover_expand-width hot-action__order popup--nerve--show" data-popup-header="Лендинг со скидкой 30%" data-name="Заказать" data-stat="Ограниченное предложение">Заказать</a>
        </div>
      </div>
    </div>
    <!--hot-action end-->


		<!--screen -prices-->
		<div class="screen-prices">
			<div class="screen-prices__container">
				<h3 class="caption screen-prices__caption">Виды сайтов для <span class="caption__colored">Вашего бизнеса</span></h3>

				<div class="screen-prices__booklets">
		 <!--booklet-->
          <div class="booklet booklet_type_card booklet_corner booklet_hide">
            <div class="booklet__icon"></div>
            <p class="booklet__caption">Легкий старт</p>
            <hr class="booklet__line">
            <div class="booklet__text">
              <p>Простое решение для ознакомления с вашей новой услугой или компанией. Все лаконично, как на визитке (до 5 разделов сайта).</p>
            </div>
            <button class="button button_hover_expand-height booklet__button popup--nerve--show" data-email-instead-phone="0" data-popup-header="Заказать (Легкий старт)" data-name="Заказать" data-stat="Заказать (Легкий старт)">  <span class="bold">&nbsp;9 600 грн.</span></button>
          </div>
          <!--booklet end-->

				 <!--booklet-->
          <div class="booklet booklet_type_landing booklet_corner">
            <div class="booklet__icon"></div>
            <p class="booklet__caption">Лендинг</p>
            <hr class="booklet__line">
            <div class="booklet__text">
              <p>Самый популярный и действенный инструмент для усиления эффективности рекламы товара, услуги или промоакции</p>
            </div>
            <button class="button button_hover_expand-height booklet__button popup--nerve--show" data-email-instead-phone="0" data-popup-header="Заказать (Лендинг)" data-name="Заказать" data-stat="Заказать (Лендинг)">  <s>14 900 грн.</s> <span class="bold">&nbsp;10 400 грн.</span></button>
          </div>
          <!--booklet end-->

          <!--booklet-->
          <div class="booklet booklet_type_corp booklet_corner">
            <div class="booklet__icon"></div>
            <p class="booklet__caption">Корпоративный</p>
            <hr class="booklet__line">
            <div class="booklet__text">
              <p>Инструмент для компании, которая хочет получить новых клиентов и поддерживать связь с постоянными</p>
            </div>
            <button class="button button_hover_expand-height booklet__button popup--nerve--show" data-email-instead-phone="0" data-popup-header="Заказать (Корпоративный)" data-name="Заказать" data-stat="Заказать (Корпоративный)">
              <span class="bold">&nbsp;18 500 грн.</span>
            </button>
          </div>
          <!--booklet end-->

          <!--booklet-->
          <div class="booklet booklet_type_catalog booklet_corner">
            <div class="booklet__icon"></div>
            <p class="booklet__caption">Каталог</p>
            <hr class="booklet__line">
            <div class="booklet__text">
              <p>Большой ассортимент товаров, но привязываться к электронным платежам нет надобности, тогда каталог идеальный инструмент.</p>
            </div>
            <button class="button button_hover_expand-height booklet__button popup--nerve--show" data-email-instead-phone="0" data-popup-header="Заказать (Каталог)" data-name="Заказать" data-stat="Заказать (Каталог)"> <span class="bold">26 400 грн.</span></button>
          </div>
          <!--booklet end-->

          <!--booklet-->
          <div class="booklet booklet_type_shop booklet_corner">
            <div class="booklet__icon"></div>
            <p class="booklet__caption">Магазин</p>
            <hr class="booklet__line">
            <div class="booklet__text">
              <p>Проверенный инструмент интернет-торговли. Идеальный выбор для среднего и большого бизнеса</p>
            </div>
            <button class="button button_hover_expand-height booklet__button popup--nerve--show" data-email-instead-phone="0" data-popup-header="Заказать (Магазин)" data-name="Заказать" data-stat="Заказать (Магазин)"> <span class="bold">39
                    200 грн.</span></button>
          </div>
          <!--booklet end-->

				</div>

				<div class="screen-prices__buttons">
					<button class="button button_hover_expand-width screen-prices__portfolio menu--nerve--works-activator" data-name="Посмотреть работы">Посмотреть работы</button>
				</div>
			</div>
		</div>
		<!--screen -prices end-->


		<!--screen portfolio logos-->
		<div class="screen-logos">
			<div class="screen-logos__container">
				<h3 class="caption screen-logos__caption">Разработка <span class="caption__colored">логотипа</span></h3>

				<div class="container screen-logos__service-logo-container">
					<div class="service-logo screen-logos__service-logo">
						<div class="service-logo__graphics">
							<div class="service-logo__icons-box">
								<div class="service-logo__icon"></div>
								<div class="service-logo__icon"></div>
								<div class="service-logo__icon"></div>
							</div>
						</div>
						<div class="service-logo__info-box">
							<p class="service-logo__label">Веб сайт + <span class="service-logo__label_red">Логотип</span></p>
							<hr class="service-logo__line">
							<div class="service-logo__text">
								<p>Логотип является элементом айдентики (идентификации). Уникальный логотип позволяет повысить узнаваемость компании или продукта вашей деятельности.</p>
								<p>Хотите повысить узнаваемость вашего бренда?</p>
							</div>
						  <button class="button button_hover_expand-height service-logo__button popup--nerve--show" data-email-instead-phone="0" data-popup-header="Заказать (логотип)" data-name="Заказать" data-stat="Заказать (логотип)"> <span class="bold">2 500 грн.</span></button>
						</div>
					</div>

				</div>
				<div class="container screen-logos__works-container">
					<p class="screen-logos__label">Примеры разработаных логотипов:</p>
					<div class="screen-portfolio__works">
            <!--work-->
            <div class="work popup-portfolio-logos--nerve--show" data-name="terra">
              <div class="work__image"><img src="images/screen-logos/l-05.jpg" alt="portfolio Paradigma"></div>
              <div class="work__overlay work__overlay_touch">
                <p class="work__type">Гейминг</p>
                <p class="work__name">«Gameterra»</p>
                <div class="work__arrow"></div>
              </div>
            </div>
            <!--work end-->

						<!--work-->
						<div class="work popup-portfolio-logos--nerve--show" data-name="vinil">
							<div class="work__image"><img src="images/screen-logos/l-01.jpg" alt="portfolio Paradigma"></div>
							<div class="work__overlay work__overlay_touch">
								<p class="work__type">Интерьер</p>
								<p class="work__name">«Vinil Sky»</p>
								<div class="work__arrow"></div>
							</div>
						</div>
						<!--work end-->

						<!--work-->
						<div class="work popup-portfolio-logos--nerve--show" data-name="hb">
							<div class="work__image"><img src="images/screen-logos/l-03.jpg" alt="portfolio Paradigma"></div>
							<div class="work__overlay work__overlay_touch">
								<p class="work__type">Спортивное питание</p>
								<p class="work__name">«Health Balance»</p>
								<div class="work__arrow"></div>
							</div>
						</div>
						<!--work end-->

						<!--work-->
						<div class="work popup-portfolio-logos--nerve--show" data-name="kelt">
							<div class="work__image"><img src="images/screen-logos/l-04.jpg" alt="portfolio Paradigma"></div>
							<div class="work__overlay work__overlay_touch">
								<p class="work__type">Туризм</p>
								<p class="work__name">«Kelt»</p>
								<div class="work__arrow"></div>
							</div>
						</div>
						<!--work end-->

            <!--work-->
            <div class="work popup-portfolio-logos--nerve--show" data-name="oms">
              <div class="work__image"><img src="images/screen-logos/l-02.jpg" alt="portfolio Paradigma"></div>
              <div class="work__overlay work__overlay_touch">
                <p class="work__type">Медицина</p>
                <p class="work__name">«Доктор ЧЛХ»</p>
                <div class="work__arrow"></div>
              </div>
            </div>
            <!--work end-->

					</div>
				</div>
			</div>
		</div>
		<!--screen portfolio logos end-->



    <!--screen competitors-->
    <div class="screen-competitors" id="getcall">
      <div class="container screen-competitors__container">
        <p class="screen-competitors__caption">Мы ценим Ваше время!</p>
        <p class="screen-competitors__text">Выезд специалиста для консультации к Вам в офис <span class="screen-competitors__text_bold"> совершенно бесплатно!</span></p>
        <div class="get-call screen-competitors__get-call">
          <form class="get-call__form form--nerve--form" method="post">
            <input class="get-call__input" type="text" name="name" required placeholder="Введите имя*">
            <input class="get-call__input" type="tel" name="phone" required placeholder="Введите телефон*">
            <input class="get-call__stat" type="hidden" name="stat" value="Заказать выезд + консультацию">
            <button class="button button_hover_expand-height get-call__submit" type="submit" value="Заказать консультацию" data-name="Заказать консультацию">Заказать консультацию</button>
          </form>
        </div>
      </div>
    </div>
    <!--screen competitors end-->


		<!--screen portfolio-->
    <div class="screen-portfolio menu--nerve--works-target">
      <div class="container screen-portfolio__container flying-info flying-info_portfolio">
        <div class="flying-info__container">

          <span class="flying-info__text">Более 100</span>

          <span class="flying-info__text">успешно</span>

          <span class="flying-info__text">реализованных</span>

          <span class="flying-info__text">проектов</span>
        </div>
        <h3 class="caption screen-portfolio__caption"><span class="caption__colored">Примеры эффективных </span>сайтов от Paradigma</h3>

        <div class="screen-portfolio__works">
          <!--work-->
          <div class="work popup-portfolio--nerve--show" data-index="10">
            <div class="work__image"><img src="images/screen-portfolio/portfolio_cover_health-balance.jpg" alt="portfolio Paradigma"></div>
            <div class="work__overlay work__overlay_touch">
              <p class="work__type">Магазин</p>
              <p class="work__name">«Health balance»</p>
              <div class="work__arrow"></div>
            </div>
          </div>
          <!--work end-->

          <!--work-->
          <div class="work popup-portfolio--nerve--show" data-index="11">
            <div class="work__image"><img src="images/screen-portfolio/portfolio_cover_vinil-sky.jpg" alt="portfolio Paradigma"></div>
            <div class="work__overlay work__overlay_touch">
              <p class="work__type">Landing Page</p>
              <p class="work__name">«Vinil Sky»</p>
              <div class="work__arrow"></div>
            </div>
          </div>
          <!--work end-->

          <!--work-->
          <div class="work popup-portfolio--nerve--show" data-index="12">
            <div class="work__image"><img src="images/screen-portfolio/portfolio_cover_elnav.jpg" alt="portfolio Paradigma"></div>
            <div class="work__overlay work__overlay_touch">
              <p class="work__type">Каталог</p>
              <p class="work__name">«ELNAV»</p>
              <div class="work__arrow"></div>
            </div>
          </div>
          <!--work end-->

          <!--work-->
          <div class="work popup-portfolio--nerve--show" data-index="1">
            <div class="work__image"><img src="images/screen-portfolio/portfolio_cover_lemberg.jpg" alt="portfolio Paradigma"></div>
            <div class="work__overlay work__overlay_touch">
              <p class="work__type">Корпоративный</p>
              <p class="work__name">«Lemberg Restaurant»</p>
              <div class="work__arrow"></div>
            </div>
          </div>
          <!--work end-->

          <!--work-->
          <div class="work hide-mobile popup-portfolio--nerve--show" data-index="2">
            <div class="work__image"><img src="images/screen-portfolio/portfolio_cover_crystal.jpg" alt="portfolio Paradigma"></div>
            <div class="work__overlay work__overlay_touch">
              <p class="work__type">Портал</p>
              <p class="work__name">«МФК Кристал Херсон»</p>
              <div class="work__arrow"></div>
            </div>
          </div>
          <!--work end-->

          <!--work-->
          <div class="work hide-mobile popup-portfolio--nerve--show" data-index="3">
            <div class="work__image"><img src="images/screen-portfolio/portfolio_cover_childf.jpg" alt="portfolio Paradigma"></div>
            <div class="work__overlay work__overlay_touch">
              <p class="work__type">Каталог</p>
              <p class="work__name">«Children’s Fashion»</p>
              <div class="work__arrow"></div>
            </div>
          </div>
          <!--work end-->

          <!--work-->
          <div class="work hide-mobile popup-portfolio--nerve--show" data-index="4">
            <div class="work__image"><img src="images/screen-portfolio/portfolio_cover_wof.jpg" alt="portfolio Paradigma"></div>
            <div class="work__overlay work__overlay_touch">
              <p class="work__type">Корпоративный</p>
              <p class="work__name">«Мир мебели»</p>
              <div class="work__arrow"></div>
            </div>
          </div>
          <!--work end-->

          <!--work-->
          <div class="work popup-portfolio--nerve--show" data-index="5">
            <div class="work__image"><img src="images/screen-portfolio/portfolio_cover_bminers.jpg" alt="portfolio Paradigma"></div>
            <div class="work__overlay work__overlay_touch">
              <p class="work__type">Landing Page</p>
              <p class="work__name">«B-miners»</p>
              <div class="work__arrow"></div>
            </div>
          </div>
          <!--work end-->

          <!--work-->
          <div class="work popup-portfolio--nerve--show" data-index="6">
            <div class="work__image"><img src="images/screen-portfolio/portfolio_cover_kvid.jpg" alt="portfolio Paradigma"></div>
            <div class="work__overlay work__overlay_touch">
              <p class="work__type">Каталог</p>
              <p class="work__name">«ГУ Держпраці»</p>
              <div class="work__arrow"></div>
            </div>
          </div>
          <!--work end-->

          <!--work-->
          <div class="work hide-mobile popup-portfolio--nerve--show" data-index="7">
            <div class="work__image"><img src="images/screen-portfolio/portfolio_cover_centr.jpg" alt="portfolio Paradigma"></div>
            <div class="work__overlay work__overlay_touch">
              <p class="work__type">Каталог</p>
              <p class="work__name">«Херсон-Центр»</p>
              <div class="work__arrow"></div>
            </div>
          </div>
          <!--work end-->

          <!--work-->
          <div class="work hide-mobile popup-portfolio--nerve--show" data-index="8">
            <div class="work__image"><img src="images/screen-portfolio/portfolio_cover_language.jpg" alt="portfolio Paradigma"></div>
            <div class="work__overlay work__overlay_touch">
              <p class="work__type">Каталог</p>
              <p class="work__name">«Языковые курсы»</p>
              <div class="work__arrow"></div>
            </div>
          </div>
          <!--work end-->

          <!--work-->
          <div class="work hide-mobile popup-portfolio--nerve--show" data-index="9">
            <div class="work__image"><img src="images/screen-portfolio/portfolio_cover_tir.jpg" alt="portfolio Paradigma"></div>
            <div class="work__overlay work__overlay_touch">
              <p class="work__type">Корпоративный</p>
              <p class="work__name">«Tir Tranzit Ukraine»</p>
              <div class="work__arrow"></div>
            </div>
          </div>
          <!--work end-->

        </div>

        <button class="button button_hover_expand-height screen-portfolio__get-call popup--nerve--show" data-popup-header="Получить качественный сайт" data-name="Получить такой же качественный сайт" data-stat="Получить такой же качественный сайт(portfolio)">Получить такой же качественный сайт</button>
        <button class="button button_hover_expand-height screen-portfolio__expand" data-name="Показать еще работы">Показать еще работы</button>
      </div>
    </div>
    <!--screen portfolio end-->

		<!--screen actions-->
    <div class="screen-actions">
      <div class="container screen-actions__container">
        <h2 class="caption caption_white screen-actions__caption"> <span class="caption__colored">Специальные  </span>предложения</h2>

        <div class="screen-actions__content">
          <div class="action-v2 screen-actions__action-v2">
            <div class="action-v2__body">
              <p class="action-v2__name">
                 Легкий старт <span class="action-v2__name_red">быстро и выгодно!</span></p>
              <p class="action-v2__price">
                <span class="bold">&nbsp;9 200</span><span class="action-v2__price_low">&nbsp;грн.</span>
              </p>
              <p class="action-v2__plus">+</p>
              <p class="action-v2__gift"> <span class="bold">в подарок </span>хостинг на 1 год</p>
              <p class="action-v2__time">До конца акции осталось:</p>
              <div class="action-v2__timer"><script src="js/c76cb79aa96abd43ac7dfd8a0b8f2e03.js"></script></div>
            </div>
            <div class="action-v2__buttons">
              <button class="button button_hover_expand-height action-v2__get-call popup--nerve--show" data-popup-header="Заказать Легкий старт" data-name="Заказать Легкий старт" data-stat="Заказать Легкий старт сайт(акции)">Заказать Легкий старт</button>
            </div>
          </div>

          <div class="action-v2 screen-actions__action-v2">
            <div class="action-v2__body">
              <p class="action-v2__name">
                 Лендинг <span class="action-v2__name_red">со скидкой 45%</span></p>
              <p class="action-v2__price">Всего за <span class="bold">7 900</span><span class="action-v2__price_low">&nbsp;грн.</span></p>
              <p class="action-v2__plus">+</p>
              <p class="action-v2__gift"> <span class="bold">в подарок </span>хостинг на 1 год</p>
              <p class="action-v2__time">До конца акции осталось:</p>
              <div class="action-v2__timer"><script src="js/4fd48792bf8660294f918d915b20a5f9.js"></script></div>
            </div>
            <div class="action-v2__buttons">
              <button class="button button_hover_expand-height action-v2__get-call popup--nerve--show" data-popup-header="Заказать Лендинг" data-name="Заказать Лендинг" data-stat="Заказать Лендинг(акции)">Заказать Лендинг</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--screen actions end-->


		<!--screen-team-->
    <div class="screen-team">
      <div class="container screen-team__container flying-info flying-info_team">
        <div class="flying-info__container">

          <span class="flying-info__text">3 года</span>

          <span class="flying-info__text">в веб</span>

          <span class="flying-info__text">разработке</span>
        </div>
        <h3 class="caption screen-team__caption">Команда <span class="caption__colored">Paradigma</span></h3>

        <div class="team screen-team__members">
          <!--member-->
          <div class="mate team__mate screen-team__mate">
            <div class="mate__photos-box" title="Владислав, Менеджер по продажам :)">
              <div class="mate__photo-serious">

                <img class="mate__photo" src="images/team/am-serious.jpg" alt="Paradigma account manager"/>
              </div>
              <div class="mate__photo-fun">

                <img class="mate__photo" src="images/team/am-fun.jpg" alt="Paradigma account manager"/>
              </div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Владислав</span>
              <hr class="mate__line"><span class="mate__role">Account manager</span>
            </div>
          </div>
          <!--member ends-->

          <!--member-->
          <div class="mate team__mate screen-team__mate">
            <div class="mate__photos-box" title="Иван, Проект менеджер :D">
              <div class="mate__photo-serious">

                <img class="mate__photo" src="images/team/pm-serious.jpg" alt="Paradigma account manager"/>
              </div>
              <div class="mate__photo-fun">

                <img class="mate__photo" src="images/team/pm-fun.jpg" alt="Paradigma account manager"/>
              </div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Иван</span>
              <hr class="mate__line"><span class="mate__role">Project manager</span>
            </div>
          </div>
          <!--member ends-->

          <!--member-->
          <div class="mate team__mate screen-team__mate">
            <div class="mate__photos-box" title="Александра, Дизайнер ^_^">
              <div class="mate__photo-serious">

                <img class="mate__photo" src="images/team/ui-serious.jpg" alt="Paradigma account manager"/>
              </div>
              <div class="mate__photo-fun">

                <img class="mate__photo" src="images/team/ui-fun.jpg" alt="Paradigma account manager"/>
              </div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Александра</span>
              <hr class="mate__line"><span class="mate__role">UI/UX designer</span>
            </div>
          </div>
          <!--member ends-->

          <!--member-->
          <div class="mate team__mate screen-team__mate">
            <div class="mate__photos-box" title="Александр, Front-end dev =)">
              <div class="mate__photo-serious">

                <img class="mate__photo" src="images/team/fe-serious.jpg" alt="Paradigma account manager"/>
              </div>
              <div class="mate__photo-fun">

                <img class="mate__photo" src="images/team/fe-fun.jpg" alt="Paradigma account manager"/>
              </div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Александр</span>
              <hr class="mate__line"><span class="mate__role">Front-end developer</span>
            </div>
          </div>
          <!--member ends-->

          <!--member-->
          <div class="mate team__mate screen-team__mate">
            <div class="mate__photos-box" title="Егор, Back-end dev O_o">
              <div class="mate__icon mate__icon_coder"></div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Егор</span>
              <hr class="mate__line"><span class="mate__role">Back-end developer</span>
            </div>
          </div>
          <!--member ends-->

          <!--member-->
          <div class="mate team__mate screen-team__mate">
            <div class="mate__photos-box" title="Максим, Тестировщик T_T">
               <div class="mate__icon mate__icon_coder"></div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Максим</span>
              <hr class="mate__line"><span class="mate__role">Back-end developer</span>
            </div>
          </div>
          <!--member ends-->

          <!--member-->
          <div class="mate team__mate screen-team__mate">
            <div class="mate__photos-box" title="Тина, Контент менеджер &gt;:B">
              <div class="mate__icon mate__icon_dark mate__icon_tester"></div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Виталий</span>
              <hr class="mate__line"><span class="mate__role">QA engineer</span>
            </div>
          </div>
          <!--member ends-->

          <!--member-->
		    <!--member-->
          <div class="mate team__mate screen-team__mate">
            <div class="mate__photos-box" title="Тина, Контент менеджер &gt;:B">
                  <div class="mate__icon mate__icon_content"></div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Тина</span>
              <hr class="mate__line"><span class="mate__role">Web designer</span>
            </div>
          </div>
          <!--member ends-->
          
      

        </div>
        <div class="team team_mobile screen-team__members owl-carousel owl-carousel-team owl-theme">
          <!--member-->
          <div class="mate team__mate">
            <div class="mate__photos-box" title="Владислав, Менеджер по продажам :)">
              <div class="mate__photo-serious">

                <img class="mate__photo" src="images/team/am-serious.jpg" alt="Paradigma account manager"/>
              </div>
              <div class="mate__photo-fun">

                <img class="mate__photo" src="images/team/am-fun.jpg" alt="Paradigma account manager"/>
              </div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Владислав</span>
              <hr class="mate__line"><span class="mate__role">Менеджер по продажам</span>
            </div>
          </div>
          <!--member ends-->

          <!--member-->
          <div class="mate team__mate">
            <div class="mate__photos-box" title="Иван, Проект менеджер :D">
              <div class="mate__photo-serious">

                <img class="mate__photo" src="images/team/pm-serious.jpg" alt="Paradigma account manager"/>
              </div>
              <div class="mate__photo-fun">

                <img class="mate__photo" src="images/team/pm-fun.jpg" alt="Paradigma account manager"/>
              </div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Иван</span>
              <hr class="mate__line"><span class="mate__role">Проект менеджер</span>
            </div>
          </div>
          <!--member ends-->

          <!--member-->
          <div class="mate team__mate">
            <div class="mate__photos-box" title="Александра, Дизайнер ^_^">
              <div class="mate__photo-serious">

                <img class="mate__photo" src="images/team/ui-serious.jpg" alt="Paradigma account manager"/>
              </div>
              <div class="mate__photo-fun">

                <img class="mate__photo" src="images/team/ui-fun.jpg" alt="Paradigma account manager"/>
              </div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Александра</span>
              <hr class="mate__line"><span class="mate__role">Дизайнер</span>
            </div>
          </div>
          <!--member ends-->

          <!--member-->
          <div class="mate team__mate">
            <div class="mate__photos-box" title="Александр, Front-end dev =)">
              <div class="mate__photo-serious">

                <img class="mate__photo" src="images/team/fe-serious.jpg" alt="Paradigma account manager"/>
              </div>
              <div class="mate__photo-fun">

                <img class="mate__photo" src="images/team/fe-fun.jpg" alt="Paradigma account manager"/>
              </div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Александр</span>
              <hr class="mate__line"><span class="mate__role">Front-end dev</span>
            </div>
          </div>
          <!--member ends-->

          <!--member-->
          <div class="mate team__mate">
            <div class="mate__photos-box" title="Егор, Back-end dev O_o">
              <div class="mate__icon mate__icon_coder"></div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Егор</span>
              <hr class="mate__line"><span class="mate__role">Back-end dev</span>
            </div>
          </div>
          <!--member ends-->

          <!--member-->
          <div class="mate team__mate">
            <div class="mate__photos-box" title="Максим, Тестировщик T_T">
              <div class="mate__icon mate__icon_dark mate__icon_tester"></div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Максим</span>
              <hr class="mate__line"><span class="mate__role">Тестировщик </span>
            </div>
          </div>
          <!--member ends-->

          <!--member-->
          <div class="mate team__mate">
            <div class="mate__photos-box" title="Тина, Контент менеджер &gt;:B">
              <div class="mate__icon mate__icon_content"></div>
            </div>
            <div class="mate__info-box"><span class="mate__name">Тина</span>
              <hr class="mate__line"><span class="mate__role">Контент менеджер </span>
            </div>
          </div>
          <!--member ends-->

        </div>
      </div>
    </div>
    <!--screen-team end-->


    <!--screen-how-to-->
    <div class="screen-how-to menu--nerve--best-target">
      <div class="container screen-how-to__container">
        <h3 class="caption caption_white screen-how-to__caption"><span class="caption__colored">Преимущества  </span>нашей студии</h3>

        <div class="screen-how-to__booklets">
          <div class="screen-how-to__booklets-box">
            <!--booklet-->
            <div class="large-booklet large-booklet_omit screen-how-to__large-booklet">
              <p class="large-booklet__caption">Фриланс или маленькая<br>непроверенная вебстудия</p>
              <div class="large-booklet__icon large-booklet__icon_type_bicycle"></div>
              <div class="large-booklet__description-box">
                <div class="large-booklet__text">
                  <p>
                    Сайт сделанный фрилансером или маленькой студией можно сравнить
                    с велосипедом.
                  </p>
                  <p>
                     Стоит <span class="state--bold">не дорого</span>, но далеко на нем не уедешь :) </p>
                  <p>Про комфорт говорить не приходиться</p>
                </div>

                <div class="large-booklet__text">
                  <p> <span class="state--bold">Основные фразы клиентов: </span><br>Я столько денег сэкономил, правда <span class="state--bold">не все работает…</span></p>
                </div>

                <div class="large-booklet__text">
                  <p> <span class="state--bold">Из чего складывается стоимость сайта: </span>
                    Сколько не будет спать программист (он же дизайнер и
                    верстальщик)
                  </p>
                </div>

                <div class="large-booklet__text">
                  <p> <span class="state--bold">Цена разработки сайта (например корпоративного): </span><br>от 4 000 грн.</p>
                </div>

                <div class="large-booklet__text">
                  <p> <span class="state--bold">Качество: </span>как повезет</p>
                </div>
              </div>
            </div>
            <!--booklet ends-->


            <!--booklet-->
            <div class="large-booklet screen-how-to__large-booklet">
              <p class="large-booklet__caption">Мы – хорошее качество<br>по доступной цене </p>
              <div class="large-booklet__icon large-booklet__icon_type_car"></div>
              <div class="large-booklet__description-box">
                <div class="large-booklet__text">
                  <p>
                    Сайты созданные нами можно сравнить с автомобилем сделанным в
                    Германии или в Японии. Он надежный, качественный и не является
                    предметом роскоши как яхта или вертолет.
                  </p>
                  <p>
                     Но еще более приятно купить такое авто <span class="state--bold">не дорого. </span>Мы предлагаем <span class="state--bold">сайт премиум класса, по доступной цене.</span></p>
                </div>

                <div class="large-booklet__text">
                  <p> <span class="state--bold">Основные фразы наших клиентов: </span><br>Спасибо, сделали все, <span class="state--bold">как обещали </span>и цена нормальная!</p>
                </div>

                <div class="large-booklet__text">
                  <p> <span class="state--bold">Из чего складывается стоимость сайта: </span>
                    Сложность проекта. Базовый проект имеет фиксированную стоимость
                    и она не меняется.
                  </p>
                  <p>
                    Дополнительно обсчитываем только тот функционал, который не
                    входит в стандартный комплект и действительно нужен клиенту
                  </p>
                </div>

                <div class="large-booklet__text">
                  <p> <span class="state--bold">Цена разработки сайта (например корпоративного): </span><br>от 18 170 грн.</p>
                </div>

                <div class="large-booklet__text">
                  <p> <span class="state--bold">Качество: </span>высокое</p>
                </div>
              </div>
            </div>
            <!--booklet ends-->


            <!--booklet-->
            <div class="large-booklet large-booklet_omit screen-how-to__large-booklet">
              <p class="large-booklet__caption">Дорогая, известная<br>веб-студия</p>
              <div class="large-booklet__icon large-booklet__icon_type_helicopter"></div>
              <div class="large-booklet__description-box">
                <div class="large-booklet__text">
                  <p>
                    Сайт созданный дорогой веб-студией можно сравнить с покупкой
                    вертолета.
                  </p>
                  <p>Да, это роскошно, <span class="state--bold">дорого, </span>удобно и не так как у всех.</p>
                  <p>Но вопрос, нужен ли Вам вертолет?</p>
                </div>

                <div class="large-booklet__text">
                  <p> <span class="state--bold">Основные фразы клиентов: </span><br>Знаете сколько я за сайт отдал? Делала лучшая студия города!</p>
                  <p>
                     Тут есть все, даже 1С и куча настроек в админке, <span class="state--bold">правда оно мне пока не надо…</span></p>
                </div>

                <div class="large-booklet__text">
                  <p> <span class="state--bold">Из чего складывается стоимость сайта: </span>
                    Первое за что платит клиент это ИМЯ. Так же в стоимость входит
                    аренда большого красивого офиса. Чай, кофе, печеньки персоналу
                    и клиентам.
                  </p>
                  <p>
                    Дорогие презентации проекта для клиента. Куча дополнительно
                    функционала в сайте на всякий случай…
                  </p>
                </div>

                <div class="large-booklet__text">
                  <p> <span class="state--bold">Цена разработки сайта (например корпоративного): </span><br>от 35 000 грн.</p>
                </div>

                <div class="large-booklet__text">
                  <p> <span class="state--bold">Качество: </span>высокое или супер высокое</p>
                </div>
              </div>
            </div>
            <!--booklet ends-->
          </div>
        </div>


        <div class="screen-how-to__hint">
          <p>СДЕЛАЙТЕ ПРАВИЛЬНЫЙ ВЫБОР</p>
        </div>
        <button class="button button_hover_expand-height screen-how-to__get-call popup--nerve--show" data-popup-header="ЗАКАЗАТЬ САЙТ ПРЕМИУМ КЛАССА" data-name="ЗАКАЗАТЬ САЙТ ПРЕМИУМ КЛАССА" data-stat="ЗАКАЗАТЬ САЙТ ПРЕМИУМ КЛАССА">ЗАКАЗАТЬ САЙТ ПРЕМИУМ КЛАССА</button>
      </div>
    </div>
    <!--screen-how-to end-->


		<!--screen comments-->
		<div class="screen-comments">
			<div class="container screen-comments__container flying-info flying-info_comments">
				<div class="flying-info__container">

					<span class="flying-info__text">Десятки</span>

					<span class="flying-info__text">благодарных</span>

					<span class="flying-info__text">клиентов</span>
				</div>
				<h3 class="caption screen-comments__caption"><span class="caption__colored">Отзывы </span>клиентов</h3>

				<div class="screen-comments__comments owl-carousel owl-carousel-s3 owl-theme">
							 <!--comment-->
              <a class="comment" href="images/screen-comments/comment-000-full.jpg" data-lightbox="paradigma"><img src="images/screen-comments/comment-000.jpg" alt="brand">
                <div class="comment__desc">
                  <p>Прочитать отзыв от<br> ТОВ "САНТРАНС Україна"</p>
                  <div class="comment__arrow"></div>
                </div></a>
              <!--comment end-->
                    <!--comment-->
              <a class="comment" href="images/screen-comments/comment-004-full.jpg" data-lightbox="paradigma"><img src="images/screen-comments/comment-004.jpg" alt="brand">
                <div class="comment__desc">
                  <p>Прочитать отзыв от<br> Футбольный клуб "КРИСТАЛ ХЕРСОН"</p>
                  <div class="comment__arrow"></div>
                </div></a>
              <!--comment end-->
              <!--comment-->
							<a class="comment" href="images/screen-comments/comment-001-full.jpg" data-lightbox="paradigma"><img src="images/screen-comments/comment-001.jpg" alt="brand">
								<div class="comment__desc">
									<p>Прочитать отзыв от<br>Lemberg Waldhotel</p>
									<div class="comment__arrow"></div>
								</div></a>
							<!--comment end-->

							<!--comment-->
							<a class="comment" href="images/screen-comments/comment-003-full.jpg" data-lightbox="paradigma"><img src="images/screen-comments/comment-003.jpg" alt="brand">
								<div class="comment__desc">
									<p>Прочитать отзыв от<br> ELNAV</p>
									<div class="comment__arrow"></div>
								</div></a>
							<!--comment end-->
              <!--comment-->
              <a class="comment" href="images/screen-comments/comment-002-full.jpg" data-lightbox="paradigma"><img src="images/screen-comments/comment-002.jpg" alt="brand">
                <div class="comment__desc">
                  <p>Прочитать отзыв от<br>ГУ Держпраці</p>
                  <div class="comment__arrow"></div>
                </div></a>
              <!--comment end-->

				</div>
			</div>
		</div>
		<!--screen comments end-->


    <!--screen scheme-->
    <div class="screen-scheme menu--nerve--scheme-target">
      <div class="container screen-scheme__container">
        <h3 class="caption screen-scheme__caption"><span class="caption__colored">Схема </span>работы</h3>

      </div>
      <div class="container screen-scheme__container">
        <div class="scheme screen-scheme__scheme">
          <!--top row-->
          <div class="scheme__row">
            <!--scheme element-->
            <div class="scheme__element scheme--nerver--recipient-0 scheme--nerve--activator" data-index="0"><span class="scheme__number">0</span>
              <div class="scheme__info">
                <p>Заявка/обращение</p>
                <button class="button button_hover_expand-height scheme__get-call popup--nerve--show" data-popup-header="Оставить заявку" data-name="Оставить заявку" data-stat="Оставить заявку(work scheme)">Оставить заявку</button>
              </div>
            </div>
            <!--scheme element end-->

            <!--scheme element-->
            <div class="scheme__element scheme--nerver--recipient-2 scheme--nerve--activator" data-index="2"><span class="scheme__number">2</span>
              <div class="scheme__info">
                <p>Техническое<br>планирование</p>
              </div>
            </div>
            <!--scheme element end-->

            <!--scheme element-->
            <div class="scheme__element scheme--nerver--recipient-4 scheme--nerve--activator" data-index="4"><span class="scheme__number">4</span>
              <div class="scheme__info">
                <p>Верстка и<br>программирование</p>
              </div>
            </div>
            <!--scheme element end-->

            <!--scheme element-->
            <div class="scheme__element scheme--nerver--recipient-6 scheme--nerve--activator" data-index="6"><span class="scheme__number">6</span>
              <div class="scheme__info">
                <p>Финальная проверка<br>и запуск проекта</p>
              </div>
            </div>
            <!--scheme element end-->
          </div>
          <!--top row end-->

          <!--points row-->
          <div class="scheme__row scheme__row_point">
            <div class="scheme__point scheme--nerve--activator scheme--nerver--recipient-0" data-index="0"></div>
            <div class="scheme__point scheme--nerve--activator scheme--nerver--recipient-1" data-index="1"></div>
            <div class="scheme__point scheme--nerve--activator scheme--nerver--recipient-2" data-index="2"></div>
            <div class="scheme__point scheme--nerve--activator scheme--nerver--recipient-3" data-index="3"></div>
            <div class="scheme__point scheme--nerve--activator scheme--nerver--recipient-4" data-index="4"></div>
            <div class="scheme__point scheme--nerve--activator scheme--nerver--recipient-5" data-index="5"></div>
            <div class="scheme__point scheme--nerve--activator scheme--nerver--recipient-6" data-index="6"></div>
          </div>
          <!--points row end-->

          <!--bottom row-->
          <div class="scheme__row">
            <!--scheme element-->
            <div class="scheme__element scheme--nerver--recipient-1 scheme--nerve--activator" data-index="1"><span class="scheme__number">1</span>
              <div class="scheme__info">
                <p>Определение<br>целей</p>
              </div>
            </div>
            <!--scheme element end-->

            <!--scheme element-->
            <div class="scheme__element scheme--nerver--recipient-3 scheme--nerve--activator" data-index="3"><span class="scheme__number">3</span>
              <div class="scheme__info">
                <p>Создание<br>дизайн-макета</p>
              </div>
            </div>
            <!--scheme element end-->

            <!--scheme element-->
            <div class="scheme__element scheme--nerver--recipient-5 scheme--nerve--activator" data-index="5"><span class="scheme__number">5</span>
              <div class="scheme__info">
                <p>Тестирование и<br>наполнение</p>
              </div>
            </div>
            <!--scheme element end-->
          </div>
          <!--bottom row end-->

        </div>
      </div>
    </div>
    <!--screen scheme end-->


    <!--main content end-->


		<!--footer-->
    <footer class="footer menu--nerve--contacts-target">
      <div class="container footer__container">
        <!--address-->
        <div class="footer__address-box">
          <p class="footer__address">Киевская область, г. Ирпень,<br>ул. Укаринская, 83 б</p>
          <p class="footer__address">г. Херсон, ул. Ушакова, 25, оф. 405</p>
          <div class="icons footer__icons">
            <div class="icons__row">

              <a class="icons__icon icons__icon_type_skype" href="callto:tryhub.ivan" title="skype"></a>
              <a class="icons__icon icons__icon_type_fb" rel="nofollow" href="https://www.facebook.com/webparadigma/" target="_blank" title="facebook"></a>
              <a class="icons__icon icons__icon_type_tg" href="tg://resolve?domain=vlad19880508" title="telegram"></a>
              <a class="icons__icon icons__icon_type_vb" href="viber://chat?number=+380990573410" title="viber"></a>
            </div>
          </div>
        </div>
        <!--address end-->

        <!--contacts-->
        <div class="footer__contact-box">
          <div class="footer__contact footer__contact_type_phone">

            <a href="tel:+830990573410">+38 (099) 057 34 10</a>
          </div>
          <div class="footer__contact footer__contact_type_phone">

            <a href="tel:+830979188608">+38 (097) 918 86 08</a>
          </div>
          <div class="footer__contact footer__contact_type_phone">

            <a href="tel:+380633706065">+38 (063) 37 06 065</a>
          </div>
          <div class="footer__contact footer__contact_type_email">

            <a href="mailto:paradigma.in.ua@gmail.com">paradigma.in.ua@gmail.com</a>
          </div>
        </div>
        <!--contacts end-->

        <!--forms-->
        <div class="get-call footer__get-call">
          <form class="get-call__form form--nerve--form" method="post">
            <input class="get-call__input" type="text" name="name" required placeholder="Введите имя*">
            <input class="get-call__input" type="email" name="email" placeholder="Введите e-mail*" required>
            <input class="get-call__stat" type="hidden" name="stat" value="Подписаться на новые акции!(footer)">
            <button class="button button_hover_expand-height get-call__submit" type="submit" value="Подписаться на новые акции!" data-name="Подписаться на новые акции!">Подписаться на новые акции!</button>
          </form>
        </div>
        <!--forms end-->
      </div>
    </footer>
    <!--footer end-->
    <div class="map">
      <div class="map__content" id="map"></div>
    </div>


    <!--scripts-->


       <!-- Google Code for &#1055;&#1077;&#1088;&#1077;&#1093;&#1086;&#1076; Conversion Page -->
<script>
/* <![CDATA[ */
var google_conversion_id = 847907631;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "tVU3CKyus3IQr5aolAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script src="//www.googleadservices.com/pagead/conversion.js">
</script>



    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
		<script src="vendor/lightbox/lightbox.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/timer.min.js"></script>
    <script src="js/etimer.js"></script>
    <script src="js/script.min.js"></script>

		<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJhDRXQmaiDkn_kyO2sr-0vzSHbZqnz_4&amp;callback=initMap"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-83571898-1', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- Yandex.Metrika counter --> <script> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter44737333 = new Ya.Metrika({ id:44737333, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/44737333" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
    <!--scripts end-->

  </body>
</html>
