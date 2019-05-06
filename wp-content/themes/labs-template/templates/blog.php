<?php
$args = [
	'post_type' => 'post',
];

$query = new WP_Query($args);

while ($query->have_posts()) : $query->the_post(); ?>
	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
					<div class="post-item">
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
							<!-- <img src="<?= get_template_directory_uri(); ?>/img/blog/blog-2.jpg" alt=""> -->
							<div class="post-date">
								<?= the_date('d','<h2>','</h2>',true);?>
								<h3>
								<?=	get_the_date('y-m')?>
								</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title"><?= the_title(); ?></h2>
							<div class="post-meta">
								<?= the_meta(); ?>
								<a href="<?= the_permalink(); ?>"><?php the_meta(); ?></a>
								<a href="">2 Comments</a>
							</div>
							<p><?php the_excerpt(); ?></p>
							<a href="<?= the_permalink(); ?>" class="read-more">Read More</a>
						</div>
					</div>
					<!-- Pagination -->
					<!-- <div class="page-pagination">
						<a class="active" href="">01.</a>
						<a href="">02.</a>
						<a href="">03.</a> -->
					</div>
				</div>
				<?php get_template_part('templates/sidebar') ?>
			</div>
		</div>
	</div>
<?php
endwhile;
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
<!-- page section end-->