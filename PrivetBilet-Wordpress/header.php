<!DOCTYPE html>
<html lang="ru" class="page">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <title> </title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Onest:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU"></script>
  <?php wp_head() ?>
</head>

<body class="page__body">
  <div class="site-container">
    <header class="header">
      <div class="container">
        <div class="header__content">
          <a href="/" class="header__logo">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="image" width="136" height="57" alt="logo">
          </a>
          <div class="header__wrapper">
            <div class="header__nav">
              <div class="header__item">
                <a href="/" class="header__link">Главная</a>
              </div>
              <div class="header__item">
                <a href="/o-nas/" class="header__link">О нас</a>
              </div>
              <div class="header__item">
                <a href="/nashi-uslugi/" class="header__link">Услуги</a>
              </div>
              <div class="header__item">
                <a class="header__link">Авиакомпании
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6L8 10L12 6" stroke="#222220" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </a>
                <ul class="list-reset header__sublist">
                  <?php
                  $avia_pages = get_pages(array(
                      'meta_key' => '_wp_page_template',
                      'meta_value' => 'avia.php', // Укажите правильное имя файла шаблона
                      'hierarchical' => 0
                  ));
                  
                  foreach ($avia_pages as $page) {
                      echo '<li class="header__subitem">';
                      echo '<a href="' . get_permalink($page->ID) . '" class="header__sublink">' . $page->post_title . '</a>';
                      echo '</li>';
                  }
                  ?>
                </ul>
              </div>
              <div class="header__item">
                <a href="/voprosy/" class="header__link">Вопросы</a>
              </div>
              <div class="header__item">
                <a href="/kontakty/" class="header__link">Контакты</a>
              </div>
              <div class="header__item">
                <a href="/blog/" class="header__link">Блог</a>
              </div>
            </div>
            <button class="btn-reset header__btn" data-graph-path="modal6">Оставить заявку</button>
            <button class="btn-reset burger" aria-label="Открыть меню" aria-expanded="false" data-burger>
              <span class="burger__line"></span>
            </button>
          </div>

        </div>
      </div>
    </header>

















