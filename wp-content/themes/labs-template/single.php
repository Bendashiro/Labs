<?php
get_header();

get_template_part('templates/banner')
?>
<div class="container single-post-container">
</div>
<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <?php while (have_posts()) : the_post(); ?>
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
                            <p><?= the_content() ?></p>
                        </div>
                        <!-- Post Author -->
                        <!-- <div class="author">
                                <div class="avatar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/avatar/03.jpg" alt="">
                                </div>
                                <div class="author-info">
                                    <h2><?= the_author() ?></h2>
                                </div>
                            </div> -->
                        <!-- Post Comments -->
                    <?php endwhile; ?>
                    <!-- Post Comments -->
                    <?php
                    $postId = 'post_id=' . get_the_ID();
                    $comments = get_comments($postId);
                    ?>
                    <div class="comments">
                        <h2>Comments <?= get_comments_number(); ?></h2>
                        <ul class="comment-list">
                            <?php foreach ($comments as $comment) : ?>
                                <li>
                                    <div class="avatar">
                                        <img src="img/avatar/01.jpg" alt="">
                                    </div>
                                    <div class="comment-text">
                                        <h3><?= $comment->comment_author; ?> | <?= $comment->comment_date; ?> | Reply</h3>
                                        <p><?= get_comment_text($comment) ?></p>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <?php
                    get_template_part('templates/comment');
                    ?>
                </div>
            </div>
            <?php get_template_part('templates/sidebar'); ?>
        </div>
    </div>
</div>
<!-- page section end-->
</div>
<?php


get_template_part('templates/newsletter');

get_footer();
?>