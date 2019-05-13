<?php

get_header();

get_template_part("templates/banner");

?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-7 blog-posts">
            <div class="blog-posts">
                <h1>Résultat de la recherche pour
                    <span>"
                        <?php echo get_search_query(); ?>"</span>
                </h1>
                <?php
                // $args = [
                //     'post-type' => 'post'
                // ];
                // $art = new WP_Query($args);
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        ?>
                        <!-- Post item -->
                        <!-- Single Post -->
                        <div class="single-post">
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
                                    <?php
                                    $tags = get_the_tags();
                                    foreach ($tags as $tag) {
                                        ?>
                                        <a href="<?php echo get_tag_link($tag); ?>"><?= $tag->name; ?></a>
                                    <?php
                                }
                                ?>
                                    </a>
                                    <?php if (have_comments()) : ?>
                                        <a href=""><?php get_comment_count(); ?></a>
                                    <?php endif; ?>
                                </div>
                                <p><?= the_excerpt(); ?></p>
                            </div>
                        </div>
                        </a>
                        <a href="<?= the_permalink(get_the_ID()) ?>" class="read-more">Read More</a>

                    <?php
                endwhile;
            endif;
            if (!(have_posts())) :
                ?>
                    <br>
                    <h3><?= __("Il n'y a rien de correspondant à votre recherche") ?></h3>
                <?php endif; ?>

            </div>
        </div>
        <div class="col-md-4 col-sm-5 sidebar">
            <?php get_template_part('templates/sidebar'); ?>
        </div>
    </div>
</div>
<?php

get_template_part("templates/newsletter");

get_footer();
