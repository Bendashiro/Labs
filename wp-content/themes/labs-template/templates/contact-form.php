  <!-- Contact section -->
  <div class="contact-section spad fix">
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
          <p><?= get_theme_mod('setting-para-j',__('Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.')); ?> </p>
          <h3 class="mt60"><?= get_theme_mod('setting-title-g' ,__('Main Office')); ?></h3>
          <?php
            $adress = get_theme_mod('setting-para-k', __('C/ Libertad, 34 <br> 05200 Arévalo '));
            $adress = str_replace("µ", "<br>", $adress);
            ?>
            <p><?= $adress; ?></p>
          <p class="con-item"><?= get_theme_mod('setting-para-l','0034 37483 2445 322'); ?></p>
          <p class="con-item"><?= get_theme_mod('setting-para-m',__('hello@company.com')); ?></p>
        </div>
        <!-- contact form -->
        <div class="col-md-6 col-pull">
          <form class="form-class" id="con_form">
            <div class="row">
              <div class="col-sm-6">
                <input type="text" name="name" placeholder="Your name">
              </div>
              <div class="col-sm-6">
                <input type="text" name="email" placeholder="Your email">
              </div>
              <div class="col-sm-12">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button class="site-btn">send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact section end-->