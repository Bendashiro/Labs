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
                                <a href=""><?= get_comments_number() ?> Comments</a>
                            </div>
                            <p><?= the_excerpt(); ?></p>
                        </div>
                    </div>
                    </a>
                    <a href="<?= the_permalink(get_the_ID()) ?>" class="read-more">Read More</a>
                <?php
                endwhile;
                ?>
            </div>
        </div>
        <?php get_template_part('templates/sidebar'); ?>
    </div>
</div>
<?php

get_template_part("templates/newsletter");

get_footer();
