      
<?php get_header(); ?>
<?php 
/* Template Name: quest */
?>
<main class="main">
  <div class="bread">
    <div class="container">
      <div class="bread__wrapper">
        <h1 class="bread__title">
          Часто задаваемые вопросы
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
  <section class="quest">
    <div class="container">
      <h1 class="quest__title">
        Вопросы-Ответы
      </h1>
      <div class="quest__content">
       
        <?php if(have_rows('quest')): ?>
          <?php while(have_rows('quest')): the_row(); ?>
              
              <div class="quest__item">
                <div class="quest__inner">
                  <span class="quest__subtitle"><?php the_sub_field('quest-name'); ?></span>
                  <button class="btn-reset quest__btn">
                    <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.58023 7.54801L0.520235 6.48701L6.29723 0.708013C6.3898 0.614858 6.49988 0.54093 6.62113 0.490482C6.74238 0.440034 6.87241 0.414062 7.00373 0.414062C7.13506 0.414062 7.26509 0.440034 7.38634 0.490482C7.50759 0.54093 7.61767 0.614858 7.71023 0.708013L13.4902 6.48701L12.4302 7.54701L7.00523 2.12301L1.58023 7.54801Z" fill="black" />
                    </svg>
                  </button>
                </div>
                <p class="quest__text">
                 <?php the_sub_field('quest-text'); ?>
                </p>
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
 </main> 


<?php get_footer(); ?>