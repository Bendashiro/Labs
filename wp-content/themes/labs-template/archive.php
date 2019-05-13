<?php
get_header();
// Ce fichier template spécial de wordpress est appelé pour afficher les catégories ou taxonomie ou autre archive. Voir le wp hierarchy
// https://wphierarchy.com/
get_template_part('templates/banner');
?>
<br>
<div class="container single-post-container">
    <h1>
        <?php the_archive_title(); ?>
    </h1>
    <br>
    <div class="row">
        <!-- Dans cette boucle nous allons récupérer tout les post qui correspondent à la recherche -->
        <div class="col-md-8 col-sm-7 blog-posts">
            <?php while (have_posts()) : the_post(); ?>
                <div class="single-post">
                    <!-- Single Post -->
                    <div class="post-thumbnail">
                        <img src="<?= the_post_thumbnail_url(); ?>" alt="">
                        <div class="post-date">
                            <h2><?= get_the_date("j"); ?></h2>
                            <h3><?= get_the_date("F Y"); ?></h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title"><?= the_title(); ?></h2>
                        <div class="post-meta">
                            <a href=""><?php the_author(); ?></a>
                            <?php
                            $tags = get_the_tags();
                            foreach ($tags as $tag) {
                                ?>
                                <a href="<?php echo get_tag_link($tag); ?>"><?= $tag->name; ?></a>
                            <?php
                        }
                        ?>
                            <a href=""><?= get_comments_number() ?> Comments</a>
                        </div>
                        <?php if (have_comments()) : ?>
                            <a href=""><?= get_comment_count(); ?></a>
                        <?php endif; ?>
                        <p><?= the_excerpt(); ?></p>
                        <a href="<?= the_permalink(get_the_ID()) ?>" class="read-more">Read More</a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="col-md-4 col-sm-5 sidebar">
            <?php dynamic_sidebar('blog-sidebar') ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>