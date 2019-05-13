<?php

$args = [
	'post_type' => 'post',
	'posts_per_page' => '3',
	'paged' => $paged,
	'order' => 'DESC'
];

$query = new WP_Query($args);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>
<div class="page-section spad">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-7 blog-posts">
				<?php while ($query->have_posts()) : $query->the_post(); ?>
					<!-- page section -->
					<!-- Post item -->
					<div class="post-item">
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
							<div class="post-date">
								<h2>
									<?= get_the_date('d') ?>
								</h2>
								<h3>
									<?= get_the_date('y-m') ?>
								</h3>
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
									<a href=""><?= get_comments_number() >= 1 ? get_comments_number() . ' Comments' : get_comments_number() . ' Comment' ?></a>
							</div>
							<p><?php the_excerpt(); ?></p>
							<a href="<?= the_permalink(get_the_ID()) ?>" class="read-more">Read More</a>
						</div>
					</div>
				<?php
			endwhile;
			?>
				<div class="page-pagination">
					<?php

					$current_page = max(1, get_query_var('paged'));
					echo paginate_links([
						'format' => 'page/%#%',
						'current' => $paged,
						'total' => $query->max_num_pages,
						'prev_text' => __('« Précédent' . '<br>'),
						'next_text' => __('<br>' . 'Suivant »'),
					]);
					wp_reset_postdata();

					?>
				</div>
			</div>
			<div class="col-md-4 col-sm-5 sidebar">
				<?php dynamic_sidebar('blog-sidebar') ?>
			</div>
		</div>
	</div>
</div>
<!-- page section end-->