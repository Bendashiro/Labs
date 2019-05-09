<div class="container">
    <div class="row">
        <div class="col-8">
            <?php foreach ($mails as $mail) : ?>
                <div class="postbox">
                    <div class="inside">
                        <strong>client :</strong>
                        <?= $mail->email; ?>
                        <a href="<?php menu_page_url('mail-client'); ?>&action=show&id=<?= $mail->id; ?>" class="btn btn-primary">Show</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>