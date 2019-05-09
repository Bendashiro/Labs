  <!-- About section -->
  <div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
      <div class="container">
        <div class="row">
          <?php
          $args = [
            'post_type' => 'Services',
            'posts_per_page' => '3',
            'orderby' => 'rand'
          ];
          $queryE = new WP_Query($args);
          while ($queryE->have_posts()) : $queryE->the_post();
            ?>
            <!-- single card -->
            <div class="col-md-4 col-sm-6">
              <div class="lab-card">
                <div class="icon">
                  <i class="<?= get_post_meta(get_the_ID(), 'key_selected_icon', true); ?>"></i>
                </div>
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
              </div>
            </div>
            <?php
            endwhile;
            wp_reset_query();
            ?>
          </div>
        </div>
      </div>
      <!-- card section end-->


      <!-- About contant -->
      <div class="about-contant">
        <div class="container">
          <div class="section-title">
            <?php
            $text = get_theme_mod('setting-title-a', __('Get in <span>the Lab</span> and discover the world'));
            $text = str_replace("[", "<span>", $text);
            $text = str_replace("]", "</span>", $text);
            ?>
            <h2><?= $text; ?></h2>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p><?= get_theme_mod('setting-para-a', __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.')); ?></p>
            </div>
            <div class="col-md-6">
              <p><?= get_theme_mod('setting-para-b', __('Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.')); ?></p>
            </div>
          </div>
          <div class="text-center mt60">
            <a href="?page_id=5" class="site-btn"><?= get_theme_mod('setting-button-a', __('Browse')); ?></a>
          </div>
          <!-- popup video -->
          <div class="intro-video">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <img src="<?= get_theme_mod('setting-video-a'); ?>" alt="">
                <a href="<?= get_theme_mod('setting-video-b', 'https://www.youtube.com/watch?v=BMAa4ZWFh6E'); ?>" class="video-popup">
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About section end -->