  <!-- Team Section -->
  <div class="team-section spad" id="team">
    <div class="overlay"></div>
    <div class="container">
      <div class="section-title">
        <?php
        $text = get_theme_mod('setting-title-d', __('Get in <span>the Lab</span> and meet the team'));
        $text = str_replace("[", "<span>", $text);
        $text = str_replace("]", "</span>", $text);
        ?>
        <h2><?= $text; ?></h2>
      </div>
      <div class="row">
        <?php
        $args = [
          'post_type' => 'Team',
          'posts_per_page' => '2',
          'orderby' => 'rand',
        ];
        $queryE = new WP_Query($args);
        $i = 0;
        while ($queryE->have_posts()) : $queryE->the_post();
          ?>
          <!-- single member -->
          <?php
          $i++;
          $i == 1 ?
            $post1 = [
              "title" => get_the_title(),
              "content" => get_the_content(),
              "url" => get_the_post_thumbnail_url()
            ]
            : $post2 = [
              'title' => get_the_title(),
              "content" => get_the_content(),
              "url" => get_the_post_thumbnail_url()
            ];
        endwhile;
        wp_reset_postdata();
        ?>
        <div class="col-sm-4">
          <div class="member">
            <img src="<?= $post1['url'] ?>" alt="">
            <h2><?= $post1['title'] ?></h2>
            <h3><?= $post1['content'] ?></h3>
          </div>
        </div>
        <!-- single member -->
        <div class="col-sm-4">
          <div class="member">
            <img src="<?= get_theme_mod('setting-image-team'); ?>" alt="">
            <h2><?= get_theme_mod('setting-team-a', 'Christinne Williams'); ?></h2>
            <h3><?= get_theme_mod('setting-team-b', 'Junior developer'); ?></h3>
          </div>
        </div>
        <!-- single member -->
        <div class="col-sm-4">
          <div class="member">
            <img src="<?= $post2['url'] ?>" alt="">
            <h2><?= $post2['title'] ?></h2>
            <h3><?= $post2['content'] ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team Section end-->