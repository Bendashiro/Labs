  <!-- Contact section -->
  <div class="contact-section spad fix" id="contact">
    <div class="container">
      <div class="row">
        <!-- contact info -->
        <div class="col-md-5 col-md-offset-1 contact-info col-push">
          <div class="section-title left">
            <?php
            $text = get_theme_mod('setting-title-f', __('Contact us'));
            $text = str_replace("[", "<span>", $text);
            $text = str_replace("]", "</span>", $text);
            ?>
            <h2><?= $text; ?></h2>
          </div>
          <p><?= get_theme_mod('setting-para-j', __('Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.')); ?> </p>
          <h3 class="mt60"><?= get_theme_mod('setting-title-g', __('Main Office')); ?></h3>
          <?php
          $adress = get_theme_mod('setting-para-k', __('C/ Libertad, 34 <br> 05200 Arévalo '));
          $adress = str_replace("µ", "<br>", $adress);
          ?>
          <p><?= $adress; ?></p>
          <p class="con-item"><?= get_theme_mod('setting-para-l', '0034 37483 2445 322'); ?></p>
          <p class="con-item"><?= get_theme_mod('setting-para-m', __('hello@company.com')); ?></p>
        </div>
        <!-- contact form -->
        <div class="col-md-6 col-pull">
          <?php
          if (isset($_SESSION['notice'])) :
            $status = $_SESSION['notice']['status'];
            $message = $_SESSION['notice']['message'];
            ?>
            <div class="alert alert-<?= $status; ?> is-dismissible">
              <p><?= $message; ?></p>
            </div>
            <?php
            unset($_SESSION['notice']);
          endif;
          ?>
          <form action="<?= admin_url('admin-post.php'); ?>#contact" method="post" class="form-class" id="con_form">
            <?php wp_nonce_field('send-mail'); ?>
            <input type="hidden" name="action" value="send-mail">
            <div class="row">
              <div class="col-sm-6">
                <input type="text" name="name" placeholder="Your name" value="<?= $_SESSION['old']['name'];?>">
              </div>
              <div class="col-sm-6">
                <input type="text" name="email" placeholder="Your email" value="<?= $_SESSION['old']['email'];?>">
              </div>
              <div class="col-sm-12">
                <input type="text" name="subjects" placeholder="Subject" value="<?= $_SESSION['old']['subjects'];?>">
                <textarea name="message" placeholder="Message"><?= $_SESSION['old']['message'];?></textarea>
                <button class="site-btn">send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact section end-->