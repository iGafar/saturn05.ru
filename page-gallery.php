<?php
/*
Template Name: gallery
*/
?>

<?php get_header(); ?>

<main class="main">
  <section class="pathway">
    <div class="container">
      <a href="http://saturn05/.html">Главная</a> >
      <a href="http://saturn05/gallery/">Фотогалерея</a>
    </div>
  </section>

  <section class="gallery">
    <div class="container">
      <h2>Фотогалерея (<span class="gallery-count">0</span>)</h2>

      <ul class="gallery__list">

        <?php
        global $post;

        $myposts = get_posts([
          'numberposts' => -1,
          'category' => 3
        ]);

        if ($myposts) {
          foreach ($myposts as $post) {
            setup_postdata($post);
            ?>


            <li class="gallery__list-item">
                <p>
                  <?php the_post_thumbnail(
                    array(238, 330),
                    array(
                      'class' => 'gallery__list-item-img',
                    )
                  ); ?>
                </p>
                <figcaption><?php the_title(); ?></figcaption>
            </li>


          <?php }
        }
        wp_reset_postdata(); ?>

      </ul>

      <div class="pop-up">
        <span>&times;</span>
      </div>


    </div>
  </section>



</main>

<?php get_footer(); ?>