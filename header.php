<?php
/*
Template Name: header
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>
    Учебный центр "Сатурн" - подготовка и повышение квалификации частных
    охранников, подготовка и переподготовка водителей в Махачкале
  </title>

  <?php wp_head(); ?>



</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="impaired">
        <div class="container">
          <?php echo do_shortcode('[bvi text="Версия для слабовидящих"]'); ?>
          <div class="burger">
            <span class="burger-item"></span>
            <span class="burger-item"></span>
            <span class="burger-item"></span>
          </div>
        </div>
      </div>
      <div class="header-top">
        <div class="container">
          <div class="header-top__logo">
            <?php the_custom_logo(); ?>
            <figcaption>Учебный центр “Сатурн”</figcaption>
          </div>
          <div class="header-top__info">
            <p>Махачкала, пр. И.Шамиля, 37 &ldquo;а&rdquo;</p>
            <ul>
              <li><a href="tel:+79898787564">
              8 (989) 878-75-64
                </a></li>
              <li><a href="tel:+79898787565">
              8 (989) 878-75-65
                </a></li>
            </ul>
          </div>
        </div>
      </div>

      <span class="header-top-line"></span>

      <div class="header-center">
        <div class="container">
          <nav class="header-center__nav">
            <ul class="header-center__nav-list">
              <li class="header-center__nav-list-item">
                <a href="http://saturn05/home/">Главная</a>
              </li>
              <li class="header-center__nav-list-item">
                <a href="http://saturn05/about/">О нас</a>
              </li>
              <li class="header-center__nav-list-item">
                <a href="http://saturn05/intelligence/">Сведения об образовательной организации</a>

                <ul class="header-center__nav__intelligence">
                  <li><a href="http://saturn05/basic/">Основные cведения</a></li>
                  <li>
                    <a href="http://saturn05/intelligence/structure/">Структуры и органы управления образовательной
                      организации</a>
                  </li>
                  <li><a href="http://saturn05/intelligence/documents/">Документы</a></li>
                  <li><a href="http://saturn05/intelligence/education/">Образование</a></li>
                  <li><a href="http://saturn05/intelligence/education-standart/">Образовательный стандарты</a></li>
                  <li>
                    <a href="http://saturn05/intelligence/management/">Руководство. Педагогический (научно-педагогический)
                      состав</a>
                  </li>
                  <li>
                    <a href="http://saturn05/intelligence/material/">Материально-техническое обеспечение и оснащенность
                      образовательного процесса</a>
                  </li>
                  <li>
                    <a href="http://saturn05/intelligence/scholarship/">Стипендии и иные виды материальной поддержки</a>
                  </li>
                  <li><a href="http://saturn05/intelligence/paid-services/">Платные образовательные услуги</a></li>
                  <li><a href="http://saturn05/intelligence/finance/">Финансово-хозяйственная деятельность</a></li>
                  <li>
                    <a href="http://saturn05/intelligence/vacant/">Вакантные места для приема (перевода)</a>
                  </li>
                </ul>
              </li>
              <li class="header-center__nav-list-item">
                <a href="http://saturn05/services/">Услуги</a>

                <ul class="header-center__nav__services">
                  <li><a href="http://saturn05/services/private-training/">Обучение частных охранников</a></li>
                  <li>
                    <a href="http://saturn05/services/security-promotion/">Повышение квалификации частных охранников</a>
                  </li>
                  <li>
                    <a href="http://saturn05/services/manager-promotion/">Повышение квалификации руководителей ЧОО</a>
                  </li>
                  <li><a href="http://saturn05/services/gun-sightting/">Пристрелка оружия</a></li>
                  <li>
                    <a href="http://saturn05/services/consultation/">Консультации по подготовке документов на ношение
                      оружия</a>
                  </li>
                  <li>
                    <a href="http://saturn05/services/shooting-training/">Обучение: практическая стрельба, стрельба из пистолета,
                      винтовки, травматического оружия</a>
                  </li>
                  <li>
                    <a href="http://saturn05/services/drivers-promotion/">Подготовка и переподготовка водителей транспортных
                      средств</a>
                  </li>
                </ul>
              </li>
              <li class="header-center__nav-list-item">
                <a href="http://saturn05/gallery/">Фотогалерея</a>
              </li>
              <li class="header-center__nav-list-item">
                <a href="http://saturn05/contacts/">Контакты</a>
              </li>
            </ul>
          </nav>

          <form class="header-center__search" action="#" method="get">
            <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
          </form>
        </div>
      </div>

      <span class="header-bottom-line"></span>

      <div class="header-bottom">
        <div class="container">
          <h1 class="header-bottom__info">
            Российская Федерация республика Дагестан частное учреждение
            дополнительного профессионального образования «УЧЕБНЫЙ ЦЕНТР
            «САТУРН»
          </h1>
          <div class="swiper">
            <div class="swiper-wrapper">

              <?php
              global $post;

              $myposts = get_posts([
                'numberposts' => -1,
                'category' => 2
              ]);

              if ($myposts) {
                foreach ($myposts as $post) {
                  setup_postdata($post);
                  ?>

                  <div class="swiper-slide">


                    <?php the_post_thumbnail(
                      array(800, 440),
                      array(
                        'class' => 'swiper-slide-img'
                      )
                    ); ?>


                  </div>

                <?php }
              }
              wp_reset_postdata(); ?>

            </div>
            <div class="swiper-pagination"></div>

            <div class="swiper-scrollbar"></div>
          </div>
        </div>
      </div>
    </header>