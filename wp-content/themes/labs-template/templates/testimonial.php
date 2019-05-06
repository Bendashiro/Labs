  <!-- Testimonial section -->
  <div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-4">
          <div class="section-title left">
            <h2><?= get_theme_mod('setting-title-b', __('What our clients say')); ?></h2>
          </div>
          <div class="owl-carousel" id="testimonial-slide">
            <?php
            $args = [
              'post_type' => 'Testimonial',
              'posts_per_page' => '6',
              'orderby' => 'rand'
            ];
            $queryF = new WP_Query($args);
            while ($queryF->have_posts()) : $queryF->the_post();
              ?>
              <!-- single testimonial -->
              <div class="testimonial">
                <span>‘​‌‘​‌</span>
                <p><?= the_content(); ?></p>
                <div class="client-info">
                  <div class="avatar">
                    <?= the_post_thumbnail(); ?>
                  </div>
                  <div class="client-name">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
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
    </div>
  </div>
  <!-- Testimonial section end-->