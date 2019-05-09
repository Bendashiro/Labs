<?php

$args = [
	'post_type' => 'post',
	'posts_per_page' => '3',
];

$query = new WP_Query($args); ?>

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
								<?php
								$tags = get_the_tags();
								foreach ($tags as $tag) {
									?>
									<a href="<?php echo get_tag_link($tag); ?>"><?= $tag->name; ?></a>
								<?php
							}
							?>
								<a href=""><?php get_comment_count(); ?></a>
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
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			$total_pages = $query->max_num_pages;
			if ($total_pages > 1) {
				$current_page = max(1, get_query_var('paged'));
				echo paginate_links([
					'base' => get_pagenum_link(1) . '%_%',
					'format' => '/page/%#%',
					// 'format' => '?paged=%#%',
					'current' => $current_page,
					'total' => $total_pages,
					'prev_text' => __('« Previous' . '<br>'),
					'next_text' => __('<br>' . 'Next »'),
					'show_all'           => false,
					'end_size'           => 1,
					'mid_size'           => 2,
					'prev_next'          => true,
					'type'               => 'plain',
					'add_args'           => false,
					'add_fragment'       => '',
					'before_page_number' => '',
					'after_page_number'  => ''
				]);
			}
			wp_reset_postdata();

			?>
			</div>
			</div>
			<?php dynamic_sidebar('blog-sidebar') ?>
		</div>
	</div>
</div>
<!-- page section end-->