<div class="menu" data-menu>
  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-2.svg" class="menu__logo image" width="148" height="62" alt="svg">
  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-close.svg" class="menu__close image"  data-menu-item width="16" height="15" alt="svg">
 
  <ul class="list-reset menu__list">
    <li class="menu__item">
      <a href="/catalog" class="menu__link">Главная </a>
    </li>
    <li class="menu__item">
      <a href="/o-nas/" class="menu__link">О нас</a>
    </li>
    <li class="menu__item">
      <a href="/nashi-uslugi/" class="menu__link">Услуги</a>
    </li>
    <li class="menu__item">
      <a class="menu__link">Авиакомпании 
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 6L8 10L12 6" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </a>
      <div class="menu__sublist">
        <?php
          $avia_pages = get_pages(array(
              'meta_key' => '_wp_page_template',
              'meta_value' => 'avia.php', // Укажите правильное имя файла шаблона
              'hierarchical' => 0
          ));
          
          foreach ($avia_pages as $page) {

            echo '<a href="' . get_permalink($page->ID) . '" class="menu__sublink">' . $page->post_title . '</a>';

          }
          ?>
      </div>
    </li>
    <li class="menu__item">
      <a href="/voprosy/" class="menu__link">Вопросы</a>
    </li>
    <li class="menu__item">
      <a href="/kontakty/" class="menu__link">Контакты</a>
    </li>
    <li class="menu__item">
      <a href="/blog/" class="menu__link">Блог</a>
    </li>
  </ul>
  <button class="btn-reset menu__btn" data-graph-path="modal6">Оставить заявку</button>

</div>
<div class="graph-modal">
  <div class="graph-modal__container" role="dialog" aria-modal="true" id="modal" data-graph-target="modal">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="graph-modal__img image" width="136" height="58" alt="svg">
      <p class="graph-modal__title">
        Оформить справку о перелёте
      </p>
      <p class="graph-modal__descr">
        Какой вариант вам удобнее?
      </p>
      <div class="graph-modal__block">
        <div class="graph-modal__block-item">
          <p class="graph-modal__block-title">
            У вас есть билет? 
          </p>
          <p class="graph-modal__block-descr">
            Просто загрузите его!
          </p>
          <p class="graph-modal__block-text">
              Мы оформим справку на основе данных из билета
          </p>
          <button class="btn-reset graph-modal__block-btn" data-graph-path="modal2">Загрузить билет</button>
        </div>
        <div class="graph-modal__block-item">
          <p class="graph-modal__block-title">
            Нет билета?
          </p>
          <p class="graph-modal__block-descr">
            Заполните форму
          </p>
          <p class="graph-modal__block-text">
            Введите данные о пассажире и перелёте
          </p>
          <button class="btn-reset graph-modal__block-btn" data-graph-path="modal3">Заполнить форму</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="graph-modal__container" role="dialog" aria-modal="true" id="modal2" data-graph-target="modal2">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="graph-modal__img image" width="136" height="58" alt="svg">
      <p class="graph-modal__title">
        Оформить справку о перелёте
      </p>
    
      <?php echo do_shortcode('[contact-form-7 id="4afd460" title="Modal-1"]'); ?>
    </div>
  </div>
  <div class="graph-modal__container" role="dialog" aria-modal="true" id="modal3" data-graph-target="modal3">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="graph-modal__img image" width="136" height="58" alt="svg">
      <p class="graph-modal__title">
        Оформить справку о перелёте
      </p>
    
      <?php echo do_shortcode('[contact-form-7 id="ce8c87c" title="Modal-2"]'); ?>
    </div>
  </div>
  
  <div class="graph-modal__container" role="dialog" aria-modal="true" id="modal4" data-graph-target="modal4">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="graph-modal__img image" width="136" height="58" alt="svg">
      <p class="graph-modal__title">
        Оформить посадочный талон
      </p>
    
      <?php echo do_shortcode('[contact-form-7 id="7d0aa2d" title="Modal-3"]'); ?>
    </div>
  </div>
  <div class="graph-modal__container" role="dialog" aria-modal="true" id="modal5" data-graph-target="modal5">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="graph-modal__img image" width="136" height="58" alt="svg">
      <p class="graph-modal__title">
        Оформить маршрутную квитанцию
      </p>
    
      <?php echo do_shortcode('[contact-form-7 id="0e5a58e" title="Modal-4"]'); ?>
    </div>
  </div>
  <div class="graph-modal__container" role="dialog" aria-modal="true" id="modal" data-graph-target="modal6">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="graph-modal__img image" width="136" height="58" alt="svg">
      <p class="graph-modal__title">
        Выберите одну из 3-х услуг
      </p>
    
      <div class="graph-modal__wrapper">
        <button class="btn-reset graph-modal__wrapper-item" data-graph-path="modal8">
          <p class="graph-modal__wrapper-text">
            Посадочный талон
          </p>
        </button>
        <button class="btn-reset graph-modal__wrapper-item" data-graph-path="modal10">
          <p class="graph-modal__wrapper-text">
            Маршрутная квинтанция
          </p>
        </button>
        <button class="btn-reset graph-modal__wrapper-item" data-graph-path="modal">
          <p class="graph-modal__wrapper-text">
            Справка о перелете
          </p>
        </button>
      </div>

      <button class="btn-reset graph-modal__wrapper-btn">Выбрать</button>
      
    </div>
  </div>
  <div class="graph-modal__container" role="dialog" aria-modal="true" id="modal7" data-graph-target="modal7">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content">
      <p class="graph-modal__subtitle">
        Заявка отправлена
      </p>
      <p class="graph-modal__text">Мы скоро свяжемся с вами</p>
    </div>
  </div>
  <div class="graph-modal__container" role="dialog" aria-modal="true" id="modal8" data-graph-target="modal8">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="graph-modal__img image" width="136" height="58" alt="svg">
      <p class="graph-modal__title">
        Оформить посадочный талон
      </p>
      <p class="graph-modal__descr">
        Какой вариант вам удобнее?
      </p>
      <div class="graph-modal__block">
        <div class="graph-modal__block-item">
          <p class="graph-modal__block-title">
            У вас есть билет? 
          </p>
          <p class="graph-modal__block-descr">
            Просто загрузите его!
          </p>
          <p class="graph-modal__block-text">
              Мы оформим справку на основе данных из билета
          </p>
          <button class="btn-reset graph-modal__block-btn" data-graph-path="modal9">Загрузить билет</button>
        </div>
        <div class="graph-modal__block-item">
          <p class="graph-modal__block-title">
            Нет билета?
          </p>
          <p class="graph-modal__block-descr">
            Заполните форму
          </p>
          <p class="graph-modal__block-text">
            Введите данные о пассажире и перелёте
          </p>
          <button class="btn-reset graph-modal__block-btn" data-graph-path="modal4">Заполнить форму</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="graph-modal__container" role="dialog" aria-modal="true" id="modal9" data-graph-target="modal9">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="graph-modal__img image" width="136" height="58" alt="svg">
      <p class="graph-modal__title">
        Оформить посадочный талон
      </p>
    
      <?php echo do_shortcode('[contact-form-7 id="e07e4a8" title="Modal-5"]'); ?>
    </div>
  </div>
  <div class="graph-modal__container" role="dialog" aria-modal="true" id="modal10" data-graph-target="modal10">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="graph-modal__img image" width="136" height="58" alt="svg">
      <p class="graph-modal__title">
        Оформить Маршрутную квитанцию
      </p>
      <p class="graph-modal__descr">
        Какой вариант вам удобнее?
      </p>
      <div class="graph-modal__block">
        <div class="graph-modal__block-item">
          <p class="graph-modal__block-title">
            У вас есть билет? 
          </p>
          <p class="graph-modal__block-descr">
            Просто загрузите его!
          </p>
          <p class="graph-modal__block-text">
              Мы оформим справку на основе данных из билета
          </p>
          <button class="btn-reset graph-modal__block-btn" data-graph-path="modal11">Загрузить билет</button>
        </div>
        <div class="graph-modal__block-item">
          <p class="graph-modal__block-title">
            Нет билета?
          </p>
          <p class="graph-modal__block-descr">
            Заполните форму
          </p>
          <p class="graph-modal__block-text">
            Введите данные о пассажире и перелёте
          </p>
          <button class="btn-reset graph-modal__block-btn" data-graph-path="modal5">Заполнить форму</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="graph-modal__container" role="dialog" aria-modal="true" id="modal11" data-graph-target="modal11">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="graph-modal__img image" width="136" height="58" alt="svg">
      <p class="graph-modal__title">
        Оформить Маршрутную квитанцию
      </p>
    
      <?php echo do_shortcode('[contact-form-7 id="8156c7b" title="Modal-6"]'); ?>
    </div>
  </div>
</div>


<footer class="footer">
      <div class="container">
        <div class="footer__content">
          <a href="/" class="footer__logo">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-2.svg" class="image" width="136" height="58" alt="svg">
          </a>
      
          <div class="footer__nav">
            <a href="/" class="footer__link">Главная</a>
            <a href="/o-nas/" class="footer__link">О нас</a>
            <a href="/nashi-uslugi/" class="footer__link">Услуги</a>
            <a href="/voprosy/" class="footer__link">Вопросы</a>
            <a href="/kontakty/" class="footer__link">Контакты</a>
            <a href="/blog/" class="footer__link">Блог</a>
          </div>
          <button class="btn-reset footer__btn" data-graph-path="modal6">Оставить заявку</button>
         
          
        </div>
        <p class="footer__cap">©Privet Bilet, 2025</p>
      </div>
    </footer>
    <?php wp_footer() ?>
  </div>
</body>

</html>