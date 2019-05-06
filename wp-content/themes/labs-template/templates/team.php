  <!-- Team Section -->
  <div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
      <div class="section-title">
      <?php
            $text = get_theme_mod('setting-title-d', __('Get in <span>the Lab</span> and meet the team'));
            $text = str_replace("[" , "<span>" ,$text);
            $text = str_replace("]" , "</span>" ,$text);
          ?>
        <h2><?= $text; ?></h2>
      </div>
      <div class="row">
        <?php
        $args = [
          'post_type' => 'Team',
          'posts_per_page' => '1',
          'orderby' => 'rand'
        ];
        $queryE = new WP_Query($args);
        while($queryE->have_posts()) : $queryE->the_post();
        ?>
        <!-- single member -->
        <div class="col-sm-4">
          <div class="member">
            <?php the_post_thumbnail(); ?>
            <h2><?php the_title(); ?></h2>
            <h3><?php the_content(); ?></h3>
          </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
        <!-- single member -->
        <div class="col-sm-4">
          <div class="member">
            <img src="<?= get_template_directory_uri(); ?>/img/team/2.jpg" alt="">
            <h2>Christinne Williams</h2>
            <h3>Junior developer</h3>
          </div>
        </div>
        <?php
        $args = [
          'post_type' => 'Team',
          'posts_per_page' => '1',
          'orderby' => 'rand'
        ];
        $queryF = new WP_Query($args);
        while($queryF->have_posts()) : $queryF->the_post();
        ?>
        <!-- single member -->
        <div class="col-sm-4">
          <div class="member">
            <?= the_post_thumbnail(); ?>
            <h2><?php the_title(); ?></h2>
            <h3><?php the_content(); ?></h3>
          </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
  <!-- Team Section end-->