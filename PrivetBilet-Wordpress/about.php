<?php get_header(); ?>
<?php 
/* Template Name: about */
?>
  <main class="main">
    <section class="hero-content">
      <div class="container">
        <div class="hero-content__content">
          <div class="hero-content__inner">
            <div class="hero-content__wrapper">
              <div class="hero-content__bread">
                <a href="/" class="hero-content__link">Главная</a>
                <a  class="hero-content__link">О нас</a>
              </div>
              <h1 class="hero-content__title">
                Исследуйте мир с Привет Билет !
              </h1>
              <p class="hero-content__text">
                Мы предлагаем вам лучшие решения для путешествий: <span>посадочные талоны, маршрутные квитанции и справки о перелетах!</span> 
              </p>
            </div>
            
            <button class="btn-reset hero-content__btn" data-graph-path="modal6">Оставить заявку</button>
          </div>
          <div class="hero-content__block">
          
          </div>
        </div>
        
        
      </div>
    </section>
    <section class="mission">
      <div class="container">
        <div class="mission__content">
          <h2 class="mission__title">
            Наша миссия
          </h2>
          <p class="mission__text">
            Наша миссия заключается в том, чтобы обеспечить доступ к качественным услугам в сфере авиаперевозок, делая каждую поездку комфортной и беззаботной. <span>Мы стремимся быть надежным партнером для путешественников, предоставляя им всю необходимую информацию и поддержку.</span> 
          </p>
          <p class="mission__text mission__text--mb">
            Мы стремимся быть надежным партнером для путешественников, предоставляя им всю необходимую информацию и поддержку.
          </p>
        </div>
      </div>
    </section>
    <section class="values">
      <div class="container">
        <h2 class="values__title">
          Ценности компании
        </h2>
        <ul class="list-reset values__list">
          <li class="values__list-item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/values-1.svg" class="image" width="48" height="48" alt="svg">
            <p class="values__subtitle">
              Клиентоориентированность
            </p>
            <p class="values__text">
                Мы ставим интересы клиентов на первое место и стремимся превзойти их ожидания.
            </p>
          </li>
          <li class="values__list-item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/values-2.svg" class="image" width="58" height="58" alt="svg">
            <p class="values__subtitle">
              Надежность
            </p>
            <p class="values__text">
               Мы гарантируем безопасность и точность предоставляемых услуг 
            </p>
          </li>
          <li class="values__list-item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/values-3.svg" class="image" width="48" height="48" alt="svg">
            <p class="values__subtitle">
                Команда
            </p>
            <p class="values__text">
               Мы ценим каждого сотрудника и верим в силу командной работы для достижения общих целей. 
            </p>
          </li>
          <li class="values__list-item">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/values-4.svg" class="image" width="48" height="48" alt="svg">
            <p class="values__subtitle">
                Ответственность:
            </p>
            <p class="values__text">
                Мы осознаем свою ответственность перед клиентами и обществом, стремясь к устойчивому развитию
            </p>
          </li>
        </ul>
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
      <section class="form form--mb form--mr">
        <div class="container">
          <div class="form__content">
            <h2 class="form__title">
              Оставьте заявку на восстановление авиа документов

            </h2>
            <div action="#" class="form__form">
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
  </main>

<?php get_footer(); ?>