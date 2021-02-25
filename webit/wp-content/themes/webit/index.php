<?php
	get_header();
?>

	<section class="first" id="Home">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<h1 class="first__title "><?php the_field('first_title'); ?></h1>
					<p class="first__text"><?php the_field('first_text'); ?></p>
					<a class="first__btn button" href="javascript://0" onclick="slowScroll ('#About')">О нас
					</a>
					<a class="first__btn button" href="javascript://0" onclick="slowScroll ('#Contact')">Контакты</a>

				</div>
			</div>
		</div>
	</section>
	<section class="about" id="About">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8">
					<h1 class="about__title title"><?php the_field('about_title'); ?></h1>
					<p class="about__text"><?php the_field('about_text'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="about__item col-xl-4 col-md-6">
				<img class="about__item-img" src="<?php the_field('about_item-img--first'); ?>" alt="">
					<h3 class="about__item-title"><?php the_field('about_item-title--first'); ?></h3>
					<p class="about__item-text"><?php the_field('about_item-text--first'); ?></p>
				</div>
				<div class="about__item col-xl-4 col-md-6">
						<img class="about__item-img" src="<?php the_field('about_item-img--second'); ?>" alt="">
					<h3 class="about__item-title"><?php the_field('about_item-title--second'); ?></h3>
					<p class="about__item-text"><?php the_field('about_item-text--second'); ?></p>
				</div>
				<div class="about__item col-xl-4 col-md-12">
					<img class="about__item-img" src="<?php the_field('about_item-img--third'); ?>" alt="">
					<h3 class="about__item-title"><?php the_field('about_item-title--third'); ?></h3>
					<p class="about__item-text"><?php the_field('about_item-text--third'); ?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="services" id="Servicing">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8">
					<h1 class="services__title title"><?php the_field('services_title'); ?></h1>
					<p class="services__text"><?php the_field('services_text'); ?></p>
				</div>
			</div>
			<div class="row justify-content-center">
				<?php
						$posts = get_posts( array(
							'numberposts' => 6,
							'category_name'    => 'service',
							'orderby'     => 'date',
							'order'       => 'ASC',
							'post_type'   => 'post',
							'suppress_filters' => true, 
						) );

						foreach( $posts as $post ){
							setup_postdata($post);
						
							?>
				<div class="col-xl-4 col-md-6">
					<div class="services__card">
					<img class="services__card-img" src="<?php the_field('services_card-img'); ?>" alt="">
						<h3 class="services__card-title" class="services__h3"><?php the_title(); ?></h3>
						<p class="services__text"><?php the_field('services_text'); ?></p>
					</div>
				</div>
				<?php
						}

						wp_reset_postdata(); 
				?>
			</div>
		</div>
	</section>


	<section class="pricing">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8">
					<h1 class="pricing__titile"> Цены</h1>
					<p class="pricing__text">У нас есть пакеты услуг для каждого</p>
				</div>
			</div>
			<div class="row justify-content-around">
			<?php
						$posts = get_posts( array(
							'numberposts' => 3,
							'category_name'    => 'price',
							'orderby'     => 'date',
							'order'       => 'ASC',
							'post_type'   => 'post',
							'suppress_filters' => true, 
						) );

						foreach( $posts as $post ){
							setup_postdata($post);
						
							?>
				<div class="col-xl-4 col-md-6">
					<div class="price">
						<div class="price__head">
							<p class="price__head-text"></p> <?php the_title(); ?></p>
							<sup class="price__head-sup">$</sup><?php the_field('price_head-sup'); ?> <sub class="price__head-sub">в месяц</sub>
						</div>
						<div class="price__body">
						<?php
							$field = get_field('price_body-list');

							if($field == '3'){
							?>
								<ul class="price__body-list">
									<li class="price__body-item"><?php the_field('price_body-item--one'); ?></li>
									<li class="price__body-item"><?php the_field('price_body-item--two'); ?></li>
									<li class="price__body-item"><?php the_field('price_body-item--three'); ?></li>
								</ul>
							<?php
							}
							if( $field == '4'){
								?>
								<ul class="price__body-list">
									<li class="price__body-item"><?php the_field('price_body-item--one'); ?></li>
									<li class="price__body-item"><?php the_field('price_body-item--two'); ?></li>
									<li class="price__body-item"><?php the_field('price_body-item--three'); ?></li>
									<li class="price__body-item"><?php the_field('price_body-item--four'); ?></li>
								</ul>
								<?php
							}
						?>
							
						</div>
						<?php
							$field = get_field('price_footer--btn');
							if( $field == 'on'){
								?>
									<div class="price__footer">
										<button class="price__footer-btn">Заказать</button>
									</div>
								<?php
							}
						?>
						
					</div>
				</div>
				<?php
						}

						wp_reset_postdata(); 
				?>

			</div>
		</div>
	</section>

	<section class="form" id="Contact">
		<div class="container">
			<div class="row  justify-content-center">
				<div class="col-xl-8">
					<h1 class="form__title title"><?php the_field('form_title'); ?></h1>
					<p class="form__text"><?php the_field('form_text') ?></p>
				</div>
			</div>
		
		
			<?php echo do_shortcode('[contact-form-7 id="217" title="Контактная форма"]'); ?>
			
		</div>
	</section>
	<?php
		get_footer();
	?>