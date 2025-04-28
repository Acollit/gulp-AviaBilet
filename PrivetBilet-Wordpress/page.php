<?php get_header(); ?>
  <main class="main">
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <p class="hero__descr">
              Сервис по оформлению документов об авиаперелете
            </p>
            <h1 class="hero__title">
              <?php the_field('title'); ?>
            </h1>
            <button class="btn-reset hero__btn" data-graph-path="modal6">
              Оформить заявление
              <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2004_990)">
                  <path d="M1.66138 11.5317H21.1931M21.1931 11.5317L11.4272 1.76581M21.1931 11.5317L11.4272 21.2975"
                    stroke="white" stroke-width="1.86017" stroke-linecap="round" />
                </g>
                <defs>
                  <clipPath id="clip0_2004_990">
                    <rect width="22.322" height="22.322" fill="white" transform="translate(0.266357 0.370728)" />
                  </clipPath>
                </defs>
              </svg>
            </button>
          </div>
        </div>
      </section>

      <section class="benefits">
        <div class="container">
          <h2 class="benefits__title">
            Наши преимущества
          </h2>
          <ul class="list-reset benefits__list">
            <li class="benefits__item">
              <p class="benefits__subtitle">
                100%
              </p>
              <p class="benefits__text">
                оригинальные справки о перелётах
              </p>
            </li>
            <li class="benefits__item">
              <p class="benefits__subtitle">
                1 день
              </p>
              <p class="benefits__text">
                оформление справок за 1 день
              </p>
            </li>
            <li class="benefits__item">
              <p class="benefits__subtitle">
                24/7

              </p>
              <p class="benefits__text">
                поддержка от наших специалистов

              </p>
            </li>
          </ul>
        </div>
      </section>

      <section class="steps">
        <div class="container">
          <h2 class="steps__title">
            Как мы работаем?
          </h2>
          <div class="steps__content">
            <div class="steps__item">
              <div class="steps__inner">
                <p class="steps__subtitle">
                  Вы оставляете
                  заявку
                </p>
                <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M9.77075 50.25V19.5417C9.77075 8.37504 12.5624 5.58337 23.7291 5.58337H43.2708C54.4374 5.58337 57.2291 8.37504 57.2291 19.5417V47.4584C57.2291 47.8492 57.2291 48.24 57.2012 48.6309"
                    stroke="#7866FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M17.727 41.875H57.2291V51.6458C57.2291 57.0338 52.8462 61.4167 47.4583 61.4167H19.5416C14.1537 61.4167 9.77075 57.0338 9.77075 51.6458V49.8313C9.77075 45.4483 13.3441 41.875 17.727 41.875Z"
                    stroke="#7866FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M22.3334 19.5416H44.6667" stroke="#7866FF" stroke-width="3" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M22.3334 29.3125H36.2917" stroke="#7866FF" stroke-width="3" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
              <span class="steps__count">1</span>
            </div>
            <div class="steps__item">
              <div class="steps__inner">
                <p class="steps__subtitle">
                  Уточняем детали заказа

                </p>
                <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M61.4167 33.5C61.4167 48.91 48.91 61.4167 33.5 61.4167C18.09 61.4167 5.58337 48.91 5.58337 33.5C5.58337 18.09 18.09 5.58337 33.5 5.58337C48.91 5.58337 61.4167 18.09 61.4167 33.5Z"
                    stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M43.857 42.3775L35.2029 37.213C33.6954 36.3196 32.467 34.17 32.467 32.4113V20.9655"
                    stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <span class="steps__count">2</span>
            </div>
            <div class="steps__item">
              <div class="steps__inner">
                <p class="steps__subtitle">
                 <span>Вы</span> оплачиваете услугу
                </p>
                <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M35.3425 7.02984L35.2588 7.22525L27.1629 26.0132H19.2067C17.3083 26.0132 15.4938 26.404 13.8467 27.1019L18.7321 15.4328L18.8438 15.1536L19.0392 14.7069C19.095 14.5394 19.1508 14.3719 19.2346 14.2323C22.8917 5.77359 27.0233 3.84734 35.3425 7.02984Z"
                    stroke="#7866FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M50.3896 26.5715C49.1334 26.1806 47.7934 26.0131 46.4534 26.0131H27.163L35.2588 7.2252L35.3425 7.02979C35.7613 7.16937 36.1521 7.36479 36.5709 7.53229L42.7405 10.1285C46.1742 11.5523 48.575 13.0319 50.0267 14.8185C50.3059 15.1535 50.5292 15.4606 50.7246 15.8235C50.9759 16.2144 51.1713 16.6052 51.283 17.024C51.3946 17.2752 51.4784 17.5265 51.5342 17.7498C52.288 20.0948 51.8413 22.9702 50.3896 26.5715Z"
                    stroke="#7866FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M60.0815 39.6371V45.0809C60.0815 45.6392 60.0536 46.1975 60.0257 46.7559C59.4953 56.4988 54.0515 61.4121 43.7223 61.4121H21.9473C21.2773 61.4121 20.6073 61.3563 19.9653 61.2726C11.0878 60.6863 6.34192 55.9405 5.75567 47.063C5.67192 46.4209 5.61609 45.7509 5.61609 45.0809V39.6371C5.61609 34.0259 9.02192 29.1963 13.8794 27.1025C15.5544 26.4046 17.3411 26.0138 19.2394 26.0138H46.4861C47.854 26.0138 49.194 26.2092 50.4223 26.5721C55.9778 28.275 60.0815 33.4675 60.0815 39.6371Z"
                    stroke="#7866FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M18.7321 15.4327L13.8467 27.1019C8.98921 29.1957 5.58337 34.0252 5.58337 39.6365V31.4569C5.58337 23.5286 11.2225 16.9123 18.7321 15.4327Z"
                    stroke="#7866FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M60.0727 31.4555V39.6351C60.0727 33.4934 55.9969 28.273 50.4136 26.598C51.8652 22.9688 52.284 20.1213 51.5861 17.7484C51.5302 17.4972 51.4465 17.2459 51.3348 17.0226C56.5273 19.7026 60.0727 25.2022 60.0727 31.4555Z"
                    stroke="#7866FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <span class="steps__count">3</span>
            </div>
            <div class="steps__item">
              <div class="steps__inner">
                <p class="steps__subtitle">
                  Высылаем фото готового документа

                </p>
                <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M25.1249 61.4166H41.8749C55.8332 61.4166 61.4166 55.8332 61.4166 41.8749V25.1249C61.4166 11.1666 55.8332 5.58325 41.8749 5.58325H25.1249C11.1666 5.58325 5.58325 11.1666 5.58325 25.1249V41.8749C5.58325 55.8332 11.1666 61.4166 25.1249 61.4166Z"
                    stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M25.125 27.9167C28.2085 27.9167 30.7083 25.4169 30.7083 22.3333C30.7083 19.2497 28.2085 16.75 25.125 16.75C22.0414 16.75 19.5416 19.2497 19.5416 22.3333C19.5416 25.4169 22.0414 27.9167 25.125 27.9167Z"
                    stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M7.45386 52.902L21.2168 43.6616C23.4222 42.182 26.6047 42.3495 28.5868 44.0524L29.508 44.862C31.6855 46.7324 35.203 46.7324 37.3805 44.862L48.9939 34.8957C51.1714 33.0253 54.6889 33.0253 56.8664 34.8957L61.4168 38.8041"
                    stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <span class="steps__count">4</span>
            </div>
            <div class="steps__item">
              <div class="steps__inner">
                <p class="steps__subtitle">
                  Отправляем документы
                  <span>(скан и/или оригинал)</span>
                  

                </p>
                <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M41.875 5.58325V33.4999C41.875 36.5708 39.3625 39.0833 36.2917 39.0833H5.58337V21.2724C7.62129 23.7012 10.748 25.2087 14.2097 25.1249C17.0293 25.0691 19.5696 23.9803 21.468 22.1658C22.3334 21.4399 23.0593 20.5186 23.6176 19.5136C24.6226 17.8107 25.1809 15.8007 25.125 13.7069C25.0413 10.4407 23.5897 7.56534 21.3284 5.58325H41.875Z"
                    stroke="#7866FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M61.4167 39.0833V47.4583C61.4167 52.0924 57.6759 55.8333 53.0417 55.8333H50.25C50.25 52.7624 47.7375 50.2499 44.6667 50.2499C41.5959 50.2499 39.0834 52.7624 39.0834 55.8333H27.9167C27.9167 52.7624 25.4042 50.2499 22.3334 50.2499C19.2625 50.2499 16.75 52.7624 16.75 55.8333H13.9584C9.32421 55.8333 5.58337 52.0924 5.58337 47.4583V39.0833H36.2917C39.3625 39.0833 41.875 36.5708 41.875 33.4999V13.9583H47.0118C49.0218 13.9583 50.8643 15.047 51.8693 16.7779L56.6429 25.1249H53.0417C51.5063 25.1249 50.25 26.3812 50.25 27.9166V36.2916C50.25 37.827 51.5063 39.0833 53.0417 39.0833H61.4167Z"
                    stroke="#7866FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M22.3333 61.4167C25.4169 61.4167 27.9167 58.9169 27.9167 55.8333C27.9167 52.7497 25.4169 50.25 22.3333 50.25C19.2497 50.25 16.75 52.7497 16.75 55.8333C16.75 58.9169 19.2497 61.4167 22.3333 61.4167Z"
                    stroke="#7866FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M44.6667 61.4167C47.7503 61.4167 50.25 58.9169 50.25 55.8333C50.25 52.7497 47.7503 50.25 44.6667 50.25C41.5831 50.25 39.0834 52.7497 39.0834 55.8333C39.0834 58.9169 41.5831 61.4167 44.6667 61.4167Z"
                    stroke="#7866FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M61.4167 33.5V39.0833H53.0417C51.5062 39.0833 50.25 37.8271 50.25 36.2917V27.9167C50.25 26.3813 51.5062 25.125 53.0417 25.125H56.6429L61.4167 33.5Z"
                    stroke="#7866FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M25.125 13.707C25.1808 15.8007 24.6226 17.8108 23.6176 19.5137C23.0592 20.5187 22.3333 21.44 21.4679 22.1658C19.5696 23.9804 17.0292 25.0692 14.2096 25.125C10.748 25.2087 7.62124 23.7012 5.58332 21.2725C5.19249 20.8537 4.8575 20.3792 4.55042 19.9046C3.46167 18.2575 2.84749 16.3034 2.79166 14.2096C2.70791 10.6921 4.27122 7.48163 6.78372 5.38788C8.68205 3.82455 11.0828 2.84748 13.707 2.79165C16.6382 2.73582 19.3184 3.79665 21.3284 5.58332C23.5896 7.5654 25.0412 10.4407 25.125 13.707Z"
                    stroke="#7866FF" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M9.60339 14.0421L12.423 16.722L18.2575 11.0828" stroke="#7866FF" stroke-width="3"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <span class="steps__count">5</span>
            </div>
            <div class="steps__item">

            </div>
          </div>
        </div>
      </section>

      <section class="feed">
        <div class="container">
          <h2 class="feed__title">
            Отзывы клиентов

          </h2>
          <div class="swiper feed__swiper">
            <div class="swiper-wrapper">
              <?php if (have_rows('feed-item', 'options')): ?>
                <?php while (have_rows('feed-item', 'options')): the_row(); ?>
                   <div class="swiper-slide">
                    <div class="feed__item">
                      <img loading="lazy" src="<?php the_sub_field('feed-img', 'options'); ?>" class="image" width="80" height="80" alt="avatar">
                      <div class="feed__inner">
                        <p class="feed__name">
                          <?php the_sub_field('feed-name', 'options'); ?>
                        </p>
                        <p class="feed__text">
                          <?php the_sub_field('feed-text', 'options'); ?>
                        </p>
                      </div>
                    </div>
                  </div>
               
                <?php endwhile; ?>
              <?php endif; ?>
             
              

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

      <section class="company">
        <div class="container">
          <h2 class="company__title">
            Список авиакомпаний, с которыми сотрудничаем:

          </h2>
          <div class="company__content">
            <?php if (have_rows('company-item')): ?>
              <?php while (have_rows('company-item')): the_row(); ?>
                <div class="company__item">
                  <img loading="lazy" src="<?php the_sub_field('company-item-img'); ?>" class="image"  alt="company">
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
            

          </div>
        </div>
      </section>
      <section class="form form--mb">
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

      <section class="pay">
        <div class="container">
          <h2 class="pay__title">
            Способы оплаты
          </h2>
          <div class="pay__box">
            <p class="pay__descr">
              Оплата услуги осуществляется через перевод на карту

            </p>
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/sber.svg" class="image" width="424" height="66" alt="svg">
          </div>
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