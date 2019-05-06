<?php
get_header();
?>
<div class="container single-post-container">
</div>
<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <?php while (have_posts()) : the_post(); ?>
                    <div class="single-post">
                        <div class="post-thumbnail">
                            <?php
                            // Ajout ajoute l'image thumbnail du post en choisissant parmis les 4 tailles de base 
                            // thumbnail | medium | medium_large | large
                            // il est possible de passer un deuxième paramètre pour passer des attributs (voir la doc de la funnction)
                            the_post_thumbnail('medium_large');
                            ?>
                            <div class="post-date">
                                    <?= the_date('d', '<h2>', '</h2>');?>
                                    <?= the_date('m-y', '<h3>', '</h3>')?>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title"><?= the_title(); ?></h2>
                            <div class="post-meta">
                                <a href=""><?= the_meta(); ?></a>
                                <a href=""><?= the_meta(); ?></a>
                                <a href="">2 Comments</a>
                            </div>
                            <p><?= the_content(); ?></p>
                        </div>
                        <!-- Post Author -->
                        <div class="author">
                            <div class="avatar">
                                <img src="img/avatar/03.jpg" alt="">
                            </div>
                            <div class="author-info">
                                <h2>Lore Williams, <span>Author</span></h2>
                                <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                            </div>
                        </div>
                        <!-- Post Comments -->
                        <div class="comments">
                            <h2>Comments (2)</h2>
                            <ul class="comment-list">
                                <li>
                                    <div class="avatar">
                                        <img src="img/avatar/01.jpg" alt="">
                                    </div>
                                    <div class="comment-text">
                                        <h3>Michael Smith | 03 nov, 2017 | Reply</h3>
                                        <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="img/avatar/02.jpg" alt="">
                                    </div>
                                    <div class="comment-text">
                                        <h3>Michael Smith | 03 nov, 2017 | Reply</h3>
                                        <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Comment Form -->
                        <div class="row">
                            <div class="col-md-9 comment-from">
                                <h2>Leave a comment</h2>
                                <form class="form-class">
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
                <?php get_template_part('templates/sidebar'); ?>
            </div>
        </div>
    </div>
    <!-- page section end-->
<?php endwhile; ?>
</div>
<?php

get_template_part('templates/newsletter');

get_footer();
?>