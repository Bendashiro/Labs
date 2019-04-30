<?php while(have_posts()) : the_post(); ?>
<!-- page section -->
<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
					<div class="post-item">
						<div class="post-thumbnail">
							<!-- <img src="<?= get_template_directory_uri(); ?>/img/blog/blog-2.jpg" alt=""> -->
							<div class="post-date">
								<?= the_date(); ?>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title"><?= the_title(); ?></h2>
							<div class="post-meta">
								<?= the_meta() ?>
								<a href="">Design, Inspiration</a>
								<a href="">2 Comments</a>
							</div>
							<p><?php the_content(); ?></p>
							<a href="<?= the_permalink(); ?>" class="read-more">Read More</a>
						</div>
					</div>
					<!-- Pagination -->
					<div class="page-pagination">
						<a class="active" href="">01.</a>
						<a href="">02.</a>
						<a href="">03.</a>
					</div>
				</div>
				<?php get_template_part('templates/sidebar') ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>
	<!-- page section end-->