  <!-- Services section -->
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
      <div class="row">
        <?php
        $args = [
          'post_type' => 'Services',
          'orderby' => 'rand',
          'posts_per_page' => '9',
        ];
        $queryA = new WP_Query($args);
        while ($queryA->have_posts()) : $queryA->the_post();
          ?>
          <!-- single service -->
          <div class="col-md-4 col-sm-6">
            <div class="service">
              <div class="icon">
                <i class="<?= get_post_meta(get_the_ID(), 'key_selected_icon', true); ?>"></i>
              </div>
              <div class="service-text">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="text-center">
        <a href="services" class="site-btn"><?= get_theme_mod('setting-button-b', __('Browse')); ?></a>
      </div>
    </div>
  </div>
  <!-- services section end -->