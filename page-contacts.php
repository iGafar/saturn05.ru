<?php
/*
Template Name: contacts
*/
?>

<?php get_header(); ?>

<div class="main">
  <section class="pathway">
    <div class="container">
      <a href="http://saturn05/.html">Главная</a> >
      <a href="http://saturn05/contacts/">Контакты</a>
    </div>
  </section>

  <section class="contacts-page">
    <div class="container">
      <h2 class="contacts-page__title">Контакты</h2>

      <div class="contacts-page__text" style="overflow: hidden">
        <p>
          <strong>Адрес:</strong>&nbsp;г.Махачкала, пр-т И.Шамиля 37
          “а”<br />
          <strong>Телефон: </strong
          ><a href="tel:+79898787564">8 (989) 878-75-64</a>,
          <a href="tel:+79898787565">8 (989) 878-75-65</a><br />
          <strong>E-mail: </strong
          ><a href="mialto:ucsaturn05@mail.ru">ucsaturn05@mail.ru</a
          ><br />
          <br />
        </p>

        <h3 class="userform_title">Обратная связь</h3>

        <form class="form"
        >
          <?php echo do_shortcode('[contact-form-7 id="e629a44" title="Контактная форма"]') ?>
        </form>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
