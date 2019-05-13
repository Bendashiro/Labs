<div class="container">
    <div class="row">
        <div class="col-8">
            <?php foreach ($news as $new) : ?>
                <div class="postbox">
                    <div class="inside">
                        <strong>client :</strong>
                        <?= $new->email; ?>
                        <?php if ('delete-news') : ?>
                            <form action="<?php get_site_url(); ?>?action=news-delete" method="post">
                                <input type="hidden" name="id" value="<?= $new->id ?>">
                                <button type="submit" class="button">supprimer</button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>