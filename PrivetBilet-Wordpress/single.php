<?php get_header(); ?>

<main class="main">
  
  <section class="post">
    <div class="container">
      <div class="post__wrapper">
        <div class="post__filter">
          <p class="post__name">
            Поиск
          </p>
          <div class="post__serch">
            <?php echo do_shortcode('[searchwp_form id=1]'); ?>
          </div>
          <p class="post__name">
            Категории
          </p>
          <div class="post__cats">
            <?php 
              // Получаем все категории, включая пустые, кроме "Без рубрики"
              $categories = get_categories(array(
                  'hide_empty' => false, // Получаем все категории, включая пустые
                  'exclude' => array(get_option('default_category')) // Исключаем категорию "Без рубрики"
              )); 

              // Проходим по каждой категории
              foreach ($categories as $category) {
                  // Получаем ссылку на категорию
                  $category_link = get_category_link($category->term_id);
                  // Получаем количество постов в категории
                  $post_count = $category->count;
              ?>
                  <a href="<?php echo esc_url($category_link); ?>" class="post__cat">
                    <?php echo esc_html($category->name); ?>(<?php echo esc_html($post_count); ?>)
                  </a>
            <?php } ?>
          </div>
          <p class="post__name">
            Последние записи
          </p>
          <div class="post__last">
            <?php  $args=array(  
              'orderby'=>'date', 
              'orderby' => 'DESC',				  
              'showposts' => 3,  
              );  
              query_posts($args); 
              if (have_posts()) : while (have_posts()) : the_post();?>
                  <a href="<?php the_permalink(); ?>" class="post__last-item">
                    <p class="post__last-name"><?php the_title(); ?></p>
                    <div class="post__last-time">
                      <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_18_1685)">
                          <path d="M1.16379 14.8571H13.8366V5.71429H1.16379V14.8571ZM4.62001 4V1.42857C4.62001 1.34524 4.59301 1.27679 4.53901 1.22321C4.485 1.16964 4.416 1.14286 4.332 1.14286H3.75596C3.67195 1.14286 3.60295 1.16964 3.54895 1.22321C3.49494 1.27679 3.46794 1.34524 3.46794 1.42857V4C3.46794 4.08333 3.49494 4.15179 3.54895 4.20536C3.60295 4.25893 3.67195 4.28571 3.75596 4.28571H4.332C4.416 4.28571 4.485 4.25893 4.53901 4.20536C4.59301 4.15179 4.62001 4.08333 4.62001 4ZM11.5325 4V1.42857C11.5325 1.34524 11.5055 1.27679 11.4515 1.22321C11.3974 1.16964 11.3284 1.14286 11.2444 1.14286H10.6684C10.5844 1.14286 10.5154 1.16964 10.4614 1.22321C10.4074 1.27679 10.3804 1.34524 10.3804 1.42857V4C10.3804 4.08333 10.4074 4.15179 10.4614 4.20536C10.5154 4.25893 10.5844 4.28571 10.6684 4.28571H11.2444C11.3284 4.28571 11.3974 4.25893 11.4515 4.20536C11.5055 4.15179 11.5325 4.08333 11.5325 4ZM14.9887 3.42857V14.8571C14.9887 15.1667 14.8747 15.4345 14.6467 15.6607C14.4186 15.8869 14.1486 16 13.8366 16H1.16379C0.851772 16 0.581755 15.8869 0.353741 15.6607C0.125726 15.4345 0.0117188 15.1667 0.0117188 14.8571V3.42857C0.0117188 3.11905 0.125726 2.85119 0.353741 2.625C0.581755 2.39881 0.851772 2.28571 1.16379 2.28571H2.31587V1.42857C2.31587 1.03571 2.45688 0.699405 2.73889 0.419643C3.02091 0.139881 3.35993 0 3.75596 0H4.332C4.72802 0 5.06704 0.139881 5.34906 0.419643C5.63108 0.699405 5.77209 1.03571 5.77209 1.42857V2.28571H9.22831V1.42857C9.22831 1.03571 9.36932 0.699405 9.65134 0.419643C9.93335 0.139881 10.2724 0 10.6684 0H11.2444C11.6405 0 11.9795 0.139881 12.2615 0.419643C12.5435 0.699405 12.6845 1.03571 12.6845 1.42857V2.28571H13.8366C14.1486 2.28571 14.4186 2.39881 14.6467 2.625C14.8747 2.85119 14.9887 3.11905 14.9887 3.42857Z" fill="#AAAAAA" />
                        </g>
                        <defs>
                          <clipPath id="clip0_18_1685">
                            <rect width="15" height="16" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                      <?php the_time('d.m.Y'); ?>
                    </div>
                    
                  </a>
              <?php endwhile; else: ?>
              <?php endif; ?>
            <?php wp_reset_query();?>
          </div>
          <p class="post__name">
            Теги
          </p>
          <div class="post__tegs">
            <button class="post__tag">Авиа Путешествия</button>
            <button class="post__tag">Посадочный талон</button>
            <button class="post__tag">Сроки</button>
            <button class="post__tag">Возврат Авиабилетов</button>
            <button class="post__tag">Справка о перелете</button>
            <button class="post__tag">Маршрутная квитанция</button>
            <button class="post__tag">Виды справок</button>
            <button class="post__tag">Стоимость</button>    
          </div>
        </div>
        <div class="post__content">
          <img loading="lazy" src="<?php the_field('post-img'); ?>" class="post__img image" width="910" height="335" alt="img">
          <div class="post__wrap">
            <p class="post__time">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_162_2563)">
                  <path d="M1.31028 14.8571H13.9831V5.71429H1.31028V14.8571ZM4.7665 4V1.42857C4.7665 1.34524 4.7395 1.27679 4.68549 1.22321C4.63149 1.16964 4.56249 1.14286 4.47848 1.14286H3.90244C3.81844 1.14286 3.74943 1.16964 3.69543 1.22321C3.64143 1.27679 3.61442 1.34524 3.61442 1.42857V4C3.61442 4.08333 3.64143 4.15179 3.69543 4.20536C3.74943 4.25893 3.81844 4.28571 3.90244 4.28571H4.47848C4.56249 4.28571 4.63149 4.25893 4.68549 4.20536C4.7395 4.15179 4.7665 4.08333 4.7665 4ZM11.6789 4V1.42857C11.6789 1.34524 11.6519 1.27679 11.5979 1.22321C11.5439 1.16964 11.4749 1.14286 11.3909 1.14286H10.8149C10.7309 1.14286 10.6619 1.16964 10.6079 1.22321C10.5539 1.27679 10.5269 1.34524 10.5269 1.42857V4C10.5269 4.08333 10.5539 4.15179 10.6079 4.20536C10.6619 4.25893 10.7309 4.28571 10.8149 4.28571H11.3909C11.4749 4.28571 11.5439 4.25893 11.5979 4.20536C11.6519 4.15179 11.6789 4.08333 11.6789 4ZM15.1352 3.42857V14.8571C15.1352 15.1667 15.0212 15.4345 14.7931 15.6607C14.5651 15.8869 14.2951 16 13.9831 16H1.31028C0.998257 16 0.72824 15.8869 0.500225 15.6607C0.27221 15.4345 0.158203 15.1667 0.158203 14.8571V3.42857C0.158203 3.11905 0.27221 2.85119 0.500225 2.625C0.72824 2.39881 0.998257 2.28571 1.31028 2.28571H2.46235V1.42857C2.46235 1.03571 2.60336 0.699405 2.88538 0.419643C3.1674 0.139881 3.50642 0 3.90244 0H4.47848C4.87451 0 5.21353 0.139881 5.49554 0.419643C5.77756 0.699405 5.91857 1.03571 5.91857 1.42857V2.28571H9.37479V1.42857C9.37479 1.03571 9.5158 0.699405 9.79782 0.419643C10.0798 0.139881 10.4189 0 10.8149 0H11.3909C11.7869 0 12.126 0.139881 12.408 0.419643C12.69 0.699405 12.831 1.03571 12.831 1.42857V2.28571H13.9831C14.2951 2.28571 14.5651 2.39881 14.7931 2.625C15.0212 2.85119 15.1352 3.11905 15.1352 3.42857Z" fill="#565353" />
                </g>
                <defs>
                  <clipPath id="clip0_162_2563">
                    <rect width="15" height="16" fill="white" transform="translate(0.146484)" />
                  </clipPath>
                </defs>
              </svg>
              <?php the_time('d.m.Y'); ?>   
            </p>
            <p class="post__com">
              <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_162_2558)">
                  <path d="M14.166 5.5C14.166 6.40625 13.8535 7.24349 13.2285 8.01172C12.6035 8.77995 11.7546 9.38672 10.6816 9.83203C9.60872 10.2773 8.43685 10.5 7.16602 10.5C6.80143 10.5 6.42383 10.4792 6.0332 10.4375C5.00195 11.349 3.80404 11.9792 2.43945 12.3281C2.18424 12.401 1.88737 12.4583 1.54883 12.5C1.46029 12.5104 1.38086 12.487 1.31055 12.4297C1.24023 12.3724 1.19466 12.2969 1.17383 12.2031V12.1953C1.1582 12.1745 1.1569 12.1432 1.16992 12.1016C1.18294 12.0599 1.18815 12.0339 1.18555 12.0234C1.18294 12.013 1.19466 11.9883 1.2207 11.9492L1.26758 11.8789L1.32227 11.8125L1.38477 11.7422C1.42122 11.7005 1.50195 11.6107 1.62695 11.4727C1.75195 11.3346 1.8418 11.2357 1.89648 11.1758C1.95117 11.1159 2.0319 11.013 2.13867 10.8672C2.24544 10.7214 2.33008 10.5885 2.39258 10.4688C2.45508 10.349 2.52539 10.1953 2.60352 10.0078C2.68164 9.82031 2.74935 9.6224 2.80664 9.41406C1.98893 8.95052 1.3444 8.3776 0.873047 7.69531C0.401693 7.01302 0.166016 6.28125 0.166016 5.5C0.166016 4.82292 0.350911 4.17578 0.720703 3.55859C1.09049 2.94141 1.58789 2.40885 2.21289 1.96094C2.83789 1.51302 3.58268 1.15755 4.44727 0.894531C5.31185 0.63151 6.2181 0.5 7.16602 0.5C8.43685 0.5 9.60872 0.722656 10.6816 1.16797C11.7546 1.61328 12.6035 2.22005 13.2285 2.98828C13.8535 3.75651 14.166 4.59375 14.166 5.5Z" fill="#565353" />
                </g>
                <defs>
                  <clipPath id="clip0_162_2558">
                    <rect width="14.04" height="12" fill="white" transform="translate(0.146484 0.5)" />
                  </clipPath>
                </defs>
              </svg>
              <?php
                $comment_count = get_comments_number();
                echo $comment_count . ' ';
                echo _n('комментарий', 'комментария', $comment_count, 'your-text-domain');
              ?>
            </p>
          </div>
          <h1 class="post__title">
            <?php the_title(); ?>
          </h1>
          <div class="post__inner">
            <?php the_content(); ?>
          </div>
          <div class="post__comment">
            <?php
              comment_form([
                  'fields' => [
                      'author' => '<input id="author" class="post__input" name="author" type="text" placeholder="Ваше имя" required>',
                      'email'  => '<input id="email" class="post__input" name="email" type="email" placeholder="Ваш email" required>',
                  ],
                  'comment_field'        => '<textarea id="comment" class="post__message" name="comment" placeholder="Ваш комментарий" required></textarea>',
                  'label_submit'         => 'Опубликовать',
                  'class_submit'         => 'btn-reset post__btn',
              ]);
            ?>
          </div>
        </div>
      </div>
      
    </div>
 
  </section>
  

 </main> 


<?php get_footer(); ?>