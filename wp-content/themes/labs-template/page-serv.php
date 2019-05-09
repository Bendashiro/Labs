<?php

get_header();

get_template_part('templates/banner');

?>

<!-- services section -->
<div class="services-section spad">
  <div class="container">
    <div class="section-title dark">
      <?php
      $text = get_theme_mod('setting-title-c', __('Get in <span>the Lab</span> and see the services'));
      $text = str_replace("[", "<span>", $text);
      $text = str_replace("]", "</span>", $text);
      ?>
      <h2><?= $text; ?></h2>
    </div>
    <!-- <div class="row"> -->
    <?php
    $args = array(
      'post_type' => 'Services',
      'orderby' => 'rand',
      'posts_per_page' => 9,
      'paged' => $paged
    );
    $count = 0;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $query = new WP_Query($args);
    while ($query->have_posts()) : $query->the_post();
      if ($count % 3 === 0) : ?>
        <div class="row">
        <?php endif; ?>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="<?= get_post_meta(get_the_ID(), 'key_selected_icon', true); ?>"></i>
            </div>
            <div class="service-text">
              <h2><?= the_title(); ?></h2>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </div>
        <!-- services section end -->
        <?php if ($count % 3 === 2) : ?>
        </div>
      <?php endif;
    $count++
    ?>
    <?php endwhile; ?>
    <div class="page-pagination">
      <!-- </div> -->
      <?php
      $current_page = max(1, get_query_var('paged'));
      echo paginate_links([
        'format' => 'page/%#%',
        'current' => $paged,
        'total' => $query->max_num_pages,
        'prev_text' => __('« Précédent' . '<br>'),
        'next_text' => __('<br>' . 'Suivant »'),
      ]);
      // wp_reset_postdata();
      ?>
    </div>
  </div>
</div>


<!-- features section -->
<div class="team-section spad">
  <div class="overlay"></div>
  <div class="container">
    <div class="section-title">
      <?php
      $text = get_theme_mod('setting-title-h', __('Get in <span>the Lab</span> and discover the world'));
      $text = str_replace("[", "<span>", $text);
      $text = str_replace("]", "</span>", $text);
      ?>
      <h2><?= $text; ?></h2>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4 features">
        <?php
        $args = [
          'post_type' => 'Projects',
          'orderby' => 'rand',
          'posts_per_page' => '3',
        ];
        $queryB = new WP_Query($args);
        while ($queryB->have_posts()) : $queryB->the_post();
          ?>
          <!-- feature item -->
          <div class="icon-box light left">
            <div class="service-text">
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
            </div>
            <div class="icon">
              <i class="<?= get_post_meta(get_the_ID(), 'key_selected_icon', true) ?>"></i>
            </div>
          </div>
        <?php
      endwhile;
      wp_reset_postdata();
      ?>
      </div>
      <!-- Devices -->
      <div class="col-md-4 col-sm-4 devices">
        <div class="text-center">
          <img src="<?= get_theme_mod('setting-image-f'); ?>" alt="">
        </div>
      </div>
      <div class="col-md-4 col-sm-4 features">
        <?php
        $args = [
          'post_type' => 'Projects',
          'orderby' => 'rand',
          'posts_per_page' => '3',
        ];
        $queryC = new WP_Query($args);
        while ($queryC->have_posts()) : $queryC->the_post();
          ?>
          <!-- feature item -->
          <div class="icon-box light">
            <div class="icon">
              <i class="<?= get_post_meta(get_the_ID(), 'key_selected_icon', true) ?>"></i>
            </div>
            <div class="service-text">
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        <?php
      endwhile;
      wp_reset_postdata();
      ?>
      </div>
    </div>
    <div class="text-center mt100">
      <a href="#rien" class="site-btn"><?= get_theme_mod('setting-button-e', __('Browse')); ?></a>
    </div>
  </div>
</div>
<!-- features section end-->


<!-- services card section-->
<div class="services-card-section spad" id="rien">
  <div class="container">
    <div class="row">
      <?php
      $args = [
        'post_type' => 'Services',
        'order' => 'DESC',
        'posts_per_page' => '3',
      ];
      $queryD = new WP_Query($args);
      while ($queryD->have_posts()) : $queryD->the_post();
        ?>
        <!-- Single Card -->
        <div class="col-md-4 col-sm-6">
          <div class="sv-card">
            <div class="card-img">
              <img src="<?= the_post_thumbnail(); ?>" alt="">
            </div>
            <div class="card-text">
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    ?>
    </div>
  </div>
</div>
<!-- services card section end-->

<?php

get_template_part('templates/newsletter');

get_template_part('templates/contact-form');

get_footer();

?>