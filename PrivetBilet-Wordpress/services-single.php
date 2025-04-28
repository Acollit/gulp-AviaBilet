<?php get_header(); ?>
<?php 
/* Template Name: services-inner */
?>
  <main class="main">
    <section class="hero-content">
      <div class="container">
        <div class="hero-content__content hero-content__content--two">
          <div class="hero-content__inner">
            <div class="hero-content__wrapper">
              <div class="hero-content__bread">
                <a href="/" class="hero-content__link">Главная</a>
                <a href="/nashi-uslugi/" class="hero-content__link">Наши услуги</a>
                <a  class="hero-content__link"><?php the_title(); ?></a>
              </div>
              <h1 class="hero-content__title">
                <?php the_title(); ?>
              </h1>
              <p class="hero-content__text">
               <?php the_field('hero-content-text'); ?>
              </p>
              
            </div>
            
            <button class="btn-reset hero-content__btn" data-graph-path="modal">Оставить заявку</button>
          </div>
          <img loading="lazy" src="<?php the_field('hero-content-img'); ?>" class="hero-content__img image" width="622" height="330" alt="img">
          <div class="hero-content__block hero-content__block--active">
            <img loading="lazy" src="<?php the_field('hero-content-img'); ?>" class="hero-content__block-img image" width="264" height="214" alt="img">
          </div>
        </div>
        
      </div>
    </section>
    <section class="type">
      <div class="container">
        <h2 class="type__title">
          <?php the_field('type-title'); ?>
        </h2>
        <p class="type__descr">
          <?php the_field('type-descr'); ?>
        </p>
        <div class="type__content">
          <div class="type__item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/type-svg.svg" class="image" width="24" height="24" alt="img">
            <div class="type__inner">
              <p class="type__subtitle">
                Справка о факте перелёта 
              </p>  
              <p class="type__text">
                подтверждение поездки на регулярных и чартерных рейсах. 
              </p>
            </div>
          </div>
          <div class="type__item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/type-svg.svg" class="image" width="24" height="24" alt="img">
            <div class="type__inner">
              <p class="type__subtitle">
                Справка об отсутствии прямого рейса
              </p>  
              <p class="type__text">
                официальная информация по направлениям из России и мира.
              </p>
            </div>
          </div>
          <div class="type__item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/type-svg.svg" class="image" width="24" height="24" alt="img">
            <div class="type__inner">
              <p class="type__subtitle">
                Справка о ближайшем пункте пересечения границы
              </p>  
              <p class="type__text">
                точные данные для отчётности.
              </p>
            </div>
          </div>
          <div class="type__item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/type-svg.svg" class="image" width="24" height="24" alt="img">
            <div class="type__inner">
              <p class="type__subtitle">
                Справка о факте перелёта по ВПД
              </p>  
              <p class="type__text">
                подтверждение поездки на регулярных и чартерных рейсах по ВПД.
              </p>
            </div>
          </div>
          <div class="type__item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/type-svg.svg" class="image" width="24" height="24" alt="img">
            <div class="type__inner">
              <p class="type__subtitle">
                Справка для восстановления посадочного талона
              </p>  
              <p class="type__text">
                если билет утерян, а подтверждение необходимо.
              </p>
            </div>
          </div>
          <div class="type__item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/type-svg.svg" class="image" width="24" height="24" alt="img">
            <div class="type__inner">
              <p class="type__subtitle">
                Справка о расстояниях до границы РФ
              </p>  
              <p class="type__text">
                расчёт для всех авиакомпаний.
              </p>
            </div>
          </div>
          <div class="type__item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/type-svg.svg" class="image" width="24" height="24" alt="img">
            <div class="type__inner">
              <p class="type__subtitle">
                Справка о стоимости перелёта
              </p>  
              <p class="type__text">
                с учётом использованного билета, трансферного тарифа и даже разбивки по участкам.
              </p>
            </div>
          </div>
          <div class="type__item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/type-svg.svg" class="image" width="24" height="24" alt="img">
            <div class="type__inner">
              <p class="type__subtitle">
                Справка о тарифах 
              </p>  
              <p class="type__text">
                минимальная и максимальная стоимость на конкретную дату.
              </p>
            </div>
          </div>
          <div class="type__item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/type-svg.svg" class="image" width="24" height="24" alt="img">
            <div class="type__inner">
              <p class="type__subtitle">
                Справка о стоимости сверхнормативного багажа
              </p>  
              <p class="type__text">
                подтверждение трат на перевозку.
              </p>
            </div>
          </div>
          <div class="type__item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/type-svg.svg" class="image" width="24" height="24" alt="img">
            <div class="type__inner">
              <p class="type__subtitle">
                Справка о стоимости планируемого перелёта
              </p>  
              <p class="type__text">
                расчёт цены будущей поездки.
              </p>
            </div>
          </div>
          <div class="type__item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/type-svg.svg" class="image" width="24" height="24" alt="img">
            <div class="type__inner">
              <p class="type__subtitle">
                Ортодромическая справка
              </p>  
              <p class="type__text">
                стоимость перелёта с учётом точки пересечения границы РФ.
              </p>
            </div>
          </div>
          <div class="type__item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/type-svg.svg" class="image" width="24" height="24" alt="img">
            <div class="type__inner">
              <p class="type__subtitle">
                Справка об отмене или задержке рейса 
              </p>  
              <p class="type__text">
                официальное подтверждение для возврата средств или компенсации.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="type-content">
      <div class="container">
        <h2 class="type-content__title">
          <?php the_field('type-content-title'); ?>
        </h2>
        <div class="type-content__content">
          <?php if (have_rows('type-content-item')): ?>
            <?php while (have_rows('type-content-item')): the_row(); ?>
              <div class="type-content__item">
                <div class="type-content__wrapper">
                  <p class="type-content__subtitle">
                    <?php the_sub_field('type-content-subtitle'); ?>
                  </p>
                  <p class="type-content__descr">
                    <?php the_sub_field('type-content-descr'); ?>
                  </p>
                  <p class="type-content__price">
                    <?php the_sub_field('type-content-price'); ?>
                  </p>
                  <ul class="list-reset type-content__list">
                    <?php if (have_rows('type-content-list-item')): ?>
                      <?php while (have_rows('type-content-list-item')): the_row(); ?>
                        <li class="type-content__list-item">
                          <?php the_sub_field('type-content-list-text'); ?>
                        </li>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </ul>
                </div>
                
                <button class="btn-reset type-content__btn" data-graph-path="modal">Оформить справку</button>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          
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