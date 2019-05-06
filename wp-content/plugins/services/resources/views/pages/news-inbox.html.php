<div class="container">
    <div class="row">
        <div class="col-8">
            <?php foreach ($news as $new) : ?>
                <div class="postbox">
                    <div class="inside">
                        <strong>client :</strong>
                        <?= $new->email; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>