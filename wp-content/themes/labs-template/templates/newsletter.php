  <!-- newsletter section -->
  <div class="newsletter-section spad">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2>Newsletter</h2>
        </div>
        <div class="col-md-9">
          <!-- newsletter form -->
          <form action="<?= get_admin_url() . '/?action=send-news'; ?>" method="post" class="nl-form">
          <?php wp_nonce_field('send-news'); ?>
            <input name="email" type="text" placeholder="Your e-mail here" value="<?= isset($old['email']) ? $old['email'] : '' ?>">
            <button class="site-btn btn-2">Newsletter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- newsletter section end-->