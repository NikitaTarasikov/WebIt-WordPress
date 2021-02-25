<?php
/*
Template Name: Команда
*/
?>

<?php
	get_header();
?>

<section class="team">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8">
					<h1 class="team__title title">Наша команда</h1>
					<p class="team__text">Познакомьтесь с нашими мастерами</p>
				</div>
			</div>
			<div class="row multiple-items justify-content-center">
				<?php
						$posts = get_posts( array(
							'numberposts' => -1,
							'category_name'    => 'team_slider',
							'orderby'     => 'date',
							'order'       => 'ASC',
							'post_type'   => 'post',
							'suppress_filters' => true, 
						) );

						foreach( $posts as $post ){
							setup_postdata($post);
						
							?>
				<div class="co-xl-4">
					<div class="team__card">
					
						<?php
										$image = get_field('team_card-img');

										if(!empty($image)): 
										?>
											<img class="team__card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

										<?php endif;
									?>
						<h3 class="team__card-title"><?php the_title(); ?></h3>
						<p class="team__card-text"><?php the_field('team_card-text'); ?></p>
						<a class="button" href="<?php echo get_permalink(); ?>">Подробнее</a>
					</div>
				</div>
							<?php
						}

						wp_reset_postdata(); 
				?>

			</div>
		</div>
	</section>

<?php
	get_footer();
?>