  <!-- newsletter section -->
  <div class="newsletter-section spad" id="news">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2>Newsletter</h2>
        </div>
        <div class="col-md-9">
          <?php
          if (isset($_SESSION['noticeN'])) :
            $status = $_SESSION['noticeN']['status'];
            $message = $_SESSION['noticeN']['message'];
            ?>
            <div class="alert alert-<?= $status; ?> is-dismissible">
              <p><?= $message; ?></p>
            </div>
            <?php
            unset($_SESSION['noticeN']);
          endif;
          ?>
          <!-- newsletter form -->
          <form action="<?= admin_url('admin-post.php'); ?>#news" method="post" class="nl-form">
            <?php wp_nonce_field('send-news'); ?>
            <input type="hidden" name="action" value="send-news">
            <input name="email2" type="text" placeholder="Your e-mail here" value="<?= $_SESSION['old']['email2'];?>">
            <button class="site-btn btn-2">Newsletter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- newsletter section end-->