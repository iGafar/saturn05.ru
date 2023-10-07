<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<main class="main">
  <section class="school">
    <div class="container">
      <h2 class="school__title">
        Частная школа по профессиональной подготовке охранников в
        Махачкале
      </h2>
      <div class="school__block">
        <div class="school__block-img">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/left.jpg" alt="стрельба" />
        </div>
        <p class="school__block-text">
          Наш учебный центр подготовки охранников располагает программой
          подготовки, которая учитывает как индивидуальную работу с
          оружием, так и работу в команде. Проводим не только обучение
          частных охранников, но и повышаем уже имеющуюся квалификацию.
          Выпускаем специалистов, которые прошли специальные программы,
          разработанные по новым технологиям, и направленным на борьбу с
          вооруженными грабителями. Мы приглашаем к обучению новичков и
          профессионалов в нашу школу по подготовке частных охранников, и
          гарантируем высокий уровень обучения. Наша школа подготовки
          охранников ждет всех желающих!
        </p>
        <div class="school__block-img">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/right.jpg" alt="охрана" />
        </div>
      </div>
    </div>
  </section>

  <section class="driving">
    <div class="container">
      <h2 class="driving__title">Автошкола Сатурн</h2>

      <div class="driving__block">
        <p class="driving__block-text">
          Подготовка водителей транспортных средств категории «В»
        </p>

        <div class="driving__block-imgs">
          <div class="driving__block-img">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/driving-img-1.jpg" alt="Автошкола" />
          </div>
          <div class="driving__block-img">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/driving-img-2.png" alt="Автошкола" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contacts">
    <div class="container">
      <h2 class="contacts__title">Контакты</h2>

      <div class="contacts__block">
        <div class="contacts__block-item">
          <p><a href="tel:+79898787564">
          8 (989) 878-75-64
            </a></p>
          <p><a href="tel:+79898787565">
          8 (989) 878-75-65
            </a></p>
        </div>
        <div class="contacts__block-item">
          <p>
            <a href="mialto:ucsaturn05@mail.ru">ucsaturn05@mail.ru
            </a>
          </p>
        </div>
        <div class="contacts__block-item">
          <p>
            <a href="https://yandex.ru/maps/-/CDU8z8Y~">г. Махачкала, пр-т И.Шамиля 37 “а”</a>
          </p>
        </div>
        <div class="contacts__block-item">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/contacts_map.png" alt="карта" />
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>