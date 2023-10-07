<?php
/*
Template Name: footer
*/
?>

<footer class="footer">
  <div class="container">
    <div class="footer-top">
      <figure class="footer__logo">
        <?php the_custom_logo(); ?>
        <figcaption>Учебный центр “Сатурн”</figcaption>
      </figure>

      <div class="footer__menu">
        <h3>Меню</h3>
        <!-- <?php wp_nav_menu([
          'theme_location' => 'footer-menu',
          'container' => 'nav',
          'container_class' => 'footer__nav',
          'menu_class' => 'footer__nav-list'
        ]) ?> -->
        <nav class="footer__nav">
          <ul class="footer__nav-list">
            <li class="footer__nav-list-item">
              <a href="http://saturn05/">Главная</a>
            </li>
            <li class="footer__nav-list-item">
              <a href="http://saturn05/about/">О нас</a>
            </li>
            <li class="footer__nav-list-item">
              <a href="http://saturn05/services/">Услуги</a>
            </li>
            <li class="footer__nav-list-item">
              <a href="http://saturn05/gallery/">Фотогалерея</a>
            </li>
            <li class="footer__nav-list-item">
              <a href="http://saturn05/contacts/">Контакты</a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="footer__contacts">
        <h3>Контакты</h3>
        <ul class="footer__contacts-list">
          <li>
            <a href="tel:+79898787564">
              8 (989) 878-75-64
            </a>
            <a href="tel:+79898787564">
              8 (989) 878-75-64
            </a>
          </li>
          <li>
            <a href="mialto:ucsaturn05@mail.ru">ucsaturn05@mail.ru
            </a>
          </li>
          <li>
            <a target="_blank" href="https://yandex.ru/maps/-/CDU8z8Y~">г. Махачкала, пр-т И.Шамиля 37 “а”</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>
        © 2014 | Частное учреждение дополнительного профессионального
        образования «Учебный центр «САТУРН»
      </p>
      <div class="footer-bottom__block">
        <div class="liveinternet-block">
          <!--LiveInternet counter--><a href="https://www.liveinternet.ru/click" target="_blank"><img id="licnt80C7"
              width="88" height="31" style="border:0"
              title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня"
              src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7" alt="" /></a>
          <script>(function (d, s) {
              d.getElementById("licnt80C7").src =
              "https://counter.yadro.ru/hit?t13.4;r" + escape(d.referrer) +
              ((typeof (s) == "undefined") ? "" : ";s" + s.width + "*" + s.height + "*" +
                (s.colorDepth ? s.colorDepth : s.pixelDepth)) + ";u" + escape(d.URL) +
              ";h" + escape(d.title.substring(0, 150)) + ";" + Math.random()
            })
              (document, screen)</script><!--/LiveInternet-->

        </div>


        <div class="footer-copyright-item">
          <a href="https://tecama.ru/">
            <img src="https://razvitieschool.ru/wp-content/themes/razvitie/assets/images/tecama.png" alt="текама" />
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>

<?php wp_footer(); ?>


</body>

</html>