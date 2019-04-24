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
            $text = str_replace("[" , "<span>" ,$text);
            $text = str_replace("]" , "</span>" ,$text);
          ?>
        <h2><?= $text; ?></h2>
      </div>
      <div class="row">
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-023-flask"></i>
            </div>
            <div class="service-text">
              <h2>Get in the lab</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-011-compass"></i>
            </div>
            <div class="service-text">
              <h2>Projects online</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-037-idea"></i>
            </div>
            <div class="service-text">
              <h2>SMART MARKETING</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-039-vector"></i>
            </div>
            <div class="service-text">
              <h2>Social Media</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-036-brainstorming"></i>
            </div>
            <div class="service-text">
              <h2>Brainstorming</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-026-search"></i>
            </div>
            <div class="service-text">
              <h2>Documented</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-018-laptop-1"></i>
            </div>
            <div class="service-text">
              <h2>Responsive</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-043-sketch"></i>
            </div>
            <div class="service-text">
              <h2>Retina ready</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-012-cube"></i>
            </div>
            <div class="service-text">
              <h2>Ultra modern</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <a href="" class="site-btn">Browse</a>
      </div>
    </div>
  </div>
  <!-- services section end -->


  <!-- features section -->
  <div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
      <div class="section-title">
      <?php
            $text = get_theme_mod('setting-title-h', __('Get in <span>the Lab</span> and discover the world'));
            $text = str_replace("[" , "<span>" ,$text);
            $text = str_replace("]" , "</span>" ,$text);
          ?>
        <h2><?= $text; ?></h2>
      </div>
      <div class="row">
        <!-- feature item -->
        <div class="col-md-4 col-sm-4 features">
          <div class="icon-box light left">
            <div class="service-text">
              <h2>Get in the lab</h2>
              <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
            </div>
            <div class="icon">
              <i class="flaticon-002-caliper"></i>
            </div>
          </div>
          <!-- feature item -->
          <div class="icon-box light left">
            <div class="service-text">
              <h2>Projects online</h2>
              <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
            </div>
            <div class="icon">
              <i class="flaticon-019-coffee-cup"></i>
            </div>
          </div>
          <!-- feature item -->
          <div class="icon-box light left">
            <div class="service-text">
              <h2>SMART MARKETING</h2>
              <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
            </div>
            <div class="icon">
              <i class="flaticon-020-creativity"></i>
            </div>
          </div>
        </div>
        <!-- Devices -->
        <div class="col-md-4 col-sm-4 devices">
          <div class="text-center">
            <img src="<?= get_theme_mod('setting-image-f'); ?>" alt="">
          </div>
        </div>
        <!-- feature item -->
        <div class="col-md-4 col-sm-4 features">
          <div class="icon-box light">
            <div class="icon">
              <i class="flaticon-037-idea"></i>
            </div>
            <div class="service-text">
              <h2>Get in the lab</h2>
              <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
            </div>
          </div>
          <!-- feature item -->
          <div class="icon-box light">
            <div class="icon">
              <i class="flaticon-025-imagination"></i>
            </div>
            <div class="service-text">
              <h2>Projects online</h2>
              <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
            </div>
          </div>
          <!-- feature item -->
          <div class="icon-box light">
            <div class="icon">
              <i class="flaticon-008-team"></i>
            </div>
            <div class="service-text">
              <h2>SMART MARKETING</h2>
              <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt100">
        <a href="" class="site-btn"><?= get_theme_mod('setting-button-e', __('Browse')); ?></a>
      </div>
    </div>
  </div>
  <!-- features section end-->


  <!-- services card section-->
  <div class="services-card-section spad">
    <div class="container">
      <div class="row">
        <!-- Single Card -->
        <div class="col-md-4 col-sm-6">
          <div class="sv-card">
            <div class="card-img">
              <img src="<?= get_template_directory_uri(); ?>/img/card-1.jpg" alt="">
            </div>
            <div class="card-text">
              <h2>Get in the lab</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- Single Card -->
        <div class="col-md-4 col-sm-6">
          <div class="sv-card">
            <div class="card-img">
              <img src="<?= get_template_directory_uri(); ?>/img/card-2.jpg" alt="">
            </div>
            <div class="card-text">
              <h2>Projects online</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
        <!-- Single Card -->
        <div class="col-md-4 col-sm-12">
          <div class="sv-card">
            <div class="card-img">
              <img src="<?= get_template_directory_uri(); ?>/img/card-3.jpg" alt="">
            </div>
            <div class="card-text">
              <h2>SMART MARKETING</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- services card section end-->


<?php

get_template_part('templates/newsletter');

get_template_part('templates/contact-form');

get_footer();

?>