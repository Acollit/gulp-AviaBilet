<?php get_header(); ?>
<?php 
/* Template Name: services */
?>
  <main class="main">
    <section class="hero-content">
      <div class="container">
        <div class="hero-content__content hero-content__content--accent">
          <div class="hero-content__inner">
            <div class="hero-content__wrapper">
              <div class="hero-content__bread">
                <a href="/" class="hero-content__link">Главная</a>
                <a  class="hero-content__link">Наши услуги</a>
              </div>
              <h1 class="hero-content__title">
                Наши услуги
              </h1>
              <p class="hero-content__text">
                Мы предлагаем широкий спектр услуг, чтобы сделать ваше путешествие максимально комфортным.
              </p>
              <p class="hero-content__descr">
                Наша команда профессионалов поможет вам быстро и легко оформить все необходимые документы. Мы гарантируем высокое качество обслуживания и конфиденциальность ваших данных.
              </p>
            </div>
            
            <button class="btn-reset hero-content__btn" data-graph-path="modal6">Оставить заявку</button>
          </div>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/services-1.webp" class="hero-content__img image" width="622" height="330" alt="img">
          <div class="hero-content__block hero-content__block--accent">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/services-1.webp" class="hero-content__block-img image" width="348" height="184" alt="img">
          </div>
        </div>
        
      </div>
    </section>
    
    <section class="services">
    <div class="container">
      <div class="services__content">
        <div class="services__item">
          <p class="services__subtitle">Посадочный талон</p>
          <p class="services__text">
            <?php the_field('ser-talon'); ?>
          </p>
          <p class="services__price">
           Стоимость оформления - <span>от 2000 руб</span>
          </p>
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/services-item-1.webp"
              class="services__img image" width="324" height="174" alt="img">
            <div class="services__btns">
              <button class="btn-reset services__btn" data-graph-path="modal8">Выбрать услугу</button>
              <a href="/nashi-uslugi/posadochnyj-talon" class="services__link">Подробнее</a>
            </div>
          </div>
          <div class="services__item">
            <p class="services__subtitle">Справка о перелете</p>
            <p class="services__text">
              <?php the_field('ser-perelete'); ?>
            </p>
            <p class="services__price">
              Стоимость оформления - <span>от 1500 руб</span>
            </p>
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/services-item-3.webp"
              class="services__img image" width="324" height="174" alt="img">
            <div class="services__btns">
              <button class="btn-reset services__btn" data-graph-path="modal">Выбрать услугу</button>
              <a href="/nashi-uslugi/spravka-o-perelete" class="services__link">Подробнее</a>
            </div>
          </div>
          <div class="services__item">
            <p class="services__subtitle">Маршрутная квитанция</p>
            <p class="services__text">
              <?php the_field('ser-kvitancziya'); ?>
            </p>
            <p class="services__price">
              Стоимость оформления - <span>от 1500 руб</span>
            </p>
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/services-item-2.webp"
              class="services__img image" width="324" height="174" alt="img">
            <div class="services__btns">
              <button class="btn-reset services__btn" data-graph-path="modal10">Выбрать услугу</button>
              <a href="/nashi-uslugi/marshrutnaya-kvitancziya" class="services__link">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="form">
        <div class="container">
          <div class="form__content">
            <h2 class="form__title">
              Оставьте заявку на восстановление авиа документов

            </h2>
            <div class="form__form">
              <label class="form__label">
                <span class="form__caption">ФИО</span>
                <input type="text" name="Имя" class="input-reset form__input" placeholder="Иванова Мария Ивановна">
              </label>
              <label class="form__label">
                <span class="form__caption">Email</span>
                <input type="email" name="Имя" class="input-reset form__input" placeholder="maria@gmail.com">
              </label>
              <label class="form__label">
                <span class="form__caption">Номер телефона</span>
                <input type="tel" name="Имя" class="input-reset form__input" placeholder="+7 (999) 999 99 99">
              </label>

              <div class="form__box">
                <button class="btn-reset form__btn">Оставить заявку</button>
                <div class="form__checkbox">
                  <input type="checkbox" class="input-reset form__check">
                  <span class="form__descr">Нажимая на кнопку я даю согласие на обработку персональных данных</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="form form--mb">
        <div class="container">
          <div class="form__content">
            <h2 class="form__title">
              Оставьте заявку на восстановление авиа документов

            </h2>
            <div class="form__form">
              <label class="form__label">
                <span class="form__caption">ФИО</span>
                <input type="text" name="Имя" class="input-reset form__input" placeholder="Иванова Мария Ивановна">
              </label>
              <label class="form__label">
                <span class="form__caption">Email</span>
                <input type="email" name="Имя" class="input-reset form__input" placeholder="maria@gmail.com">
              </label>
              <label class="form__label">
                <span class="form__caption">Номер телефона</span>
                <input type="tel" name="Имя" class="input-reset form__input" placeholder="+7 (999) 999 99 99">
              </label>

              <div class="form__box">
                <button class="btn-reset form__btn">Оставить заявку</button>
                <div class="form__checkbox">
                  <input type="checkbox" class="input-reset form__check">
                  <span class="form__descr">Нажимая на кнопку я даю согласие на обработку персональных данных</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pay">
        <div class="container">
          
          <h2 class="pay__subtitle">
            <?php the_field('seo-title'); ?>
          
          </h2>
          <div class="pay__strong">
            <?php the_field('seo-text'); ?>
          
          </div>
        </div>
        <div class="pay__wrapper">
          <div class="container">
            <p class="pay__wrapper-title">
              Как оформить заявку?
            </p>
            <p class="pay__wrapper-text">
              Оставьте заявку на восстановление документов через <a target="_blank" href="https://t.me/privet_bilet8">Телеграм</a>, <a target="_blank" href="https://wa.me/79222110789">WhatsApp</a> или через нашу почту <a href="#" id="copy-email"> privet-bilet8@yandex.ru</a> — мы свяжемся с вами и оперативно решим
              ваш вопрос. <br>
              <br>
              Восстановите авиадокументы быстро и без лишних сложностей! 🚀
            </p>
          </div>
        </div>
      </section>
  </main>

<?php get_footer(); ?>