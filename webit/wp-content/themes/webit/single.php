<?php

get_header();
?>

<div id="primary" class="content-area wrapper page">
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

	
<?php
	get_footer();
?>
</div>
