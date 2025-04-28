      
<?php get_header(); ?>
<?php 
/* Template Name: contacts */
?>
<main class="main">
  <div class="bread">
    <div class="container">
      <div class="bread__wrapper">
        <h1 class="bread__title">
          Контакты
        </h1>
        <ul class="list-reset bread__list">
          <li class="bread__list-item">
            <a href="/" class="bread__list-link">Главная</a>
          </li>
          <li class="bread__list-item">
            <a class="bread__list-link"><?php the_title(); ?></a>
          </li>
        </ul>
      </div>
      
    </div>
  </div>
  <section class="contacts">
    <div class="container">
      <h2 class="contacts__title">Оформите все необходимые <br> авиадокументы уже сегодня!</h2>
     <div class="contacts__content">
      <div class="contacts__inner">
        <p class="contacts__subtitle">
          Контакты
        </p>
        <p class="contacts__descr">
          Адрес
        </p>
        <p class="contacts__address">
           Россия, г. Томск, Коларовский тр-т, 3 
        </p>
        <p class="contacts__descr">
          Контакты
        </p>
        <a href="tel:+73822709505" class="contacts__phone">+7 (3822) 70-95-05</a>
        <a href="tel:+79016080280" class="contacts__phone">+7 (901) 608-02-80</a>
        <a href="#" id="copy-email" class="contacts__mail">privet-bilet8@yandex.ru</a>
        <p class="contacts__descr">
          Соцсети
        </p>
        <div class="contacts__socials">
          <a href="https://t.me/privet_bilet8">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/tg.svg" class="image" width="32" height="32" alt="svg">
          </a>
          <a href="https://wa.me/79222110789">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/wat.svg" class="image" width="32" height="32" alt="svg">
          </a>
        </div>
        
      </div>
      <div class="contacts__form">
        <p class="contacts__form-title">
          Оставьте заявку на восстановление авиа документов
        </p>
        <label class="contacts__label">
          <input type="text" name="Имя" class="input-reset contacts__input" placeholder="Ваше имя">
        </label>
        <label class="contacts__label">
          <input type="email" name="Имя" class="input-reset contacts__input" placeholder="Email">
        </label>
        <label class="contacts__label">
          <input type="tel" name="Имя" class="input-reset contacts__input" placeholder="+7 (999) 999 99 99">
        </label>

        <div class="contacts__box">
          <button class="btn-reset contacts__btn">Оставить заявку</button>
          <div class="contacts__checkbox">
            <input type="checkbox" class="input-reset contacts__check">
            <span class="contacts__span">Нажимая на кнопку «Отправить», вы даете согласие на обработку персональных данных</span>
          </div>
        </div>
      </div>
     </div>
     


    </div>
    
  </section>
  <section class="form form--mb form--mr">
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
  <div class="contacts__map" id="map"></div>
 </main> 


<?php get_footer(); ?>