<?php

/**
 * The main search wrapper
 *
 * @package POPS
 */

get_header( 'blog' );

?>


<section class="row main-container text-center">
	<div class="header-container">
		<h1 class="margin-bottom-container"><?php _e( 'Search results with keyword', TEXT_DOMAIN ); ?></h1>
		<p class="header__ingress"><?php echo get_search_query() ?></p>
	</div>
	<div class="blog-search">
		<h2 class="search-toggle">
			<i class="fa fa-search" aria-hidden="true"></i>
		</h2>
		<div class="search-container">
			<?php get_search_form(); ?>
		</div>
	</div>
</section>
</header>

<style>
	.wave {
		background: url(<?php echo UTILS()->get_image_uri(); ?>/slice_blog.svg) repeat-x center;
	}
</style>

<div class="wave"></div>

<main class="blog-archive">
	<section class="container-fluid">
		<?php
		if ( have_posts() ) :
			echo do_shortcode( '[ajax_load_more post_type="post" posts_per_page="4" button_label="Lataa lisää"]' );
		else:
			get_template_part('partials/no-results', 'search');
		endif;
		?>
	</section>
</main>


<?php get_footer();
?>
