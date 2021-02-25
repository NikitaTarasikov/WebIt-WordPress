<?php
/*
Template Name: Портфолио
*/
?>

<?php
	get_header();
?>

<section class="work" id="Portfolio">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-12 ">
					<h3 class="work__title title">Наши работы</h3>
					<p class="work__text">Ниже представлены лучшие наши работы</p>
					<div class="work__buttons text-center">
						<button val="off" class="button work__buttons-item work__buttons-item--active" filter="all">Посмотреть
							все</button>
						<button val="off" class="button work__buttons-item" filter="wd">Интернет магазины</button>
						<button val="off" class="button work__buttons-item" filter="ud">Лендинги</button>
						<button val="off" class="button work__buttons-item" filter="moc">Корпоративные сайты</button>
					</div>
				</div>
			</div>
			<div class="row filter">
			<?php
						$posts = get_posts( array(
							'numberposts' => -1,
							'category_name'    => 'portfolio',
							'orderby'     => 'date',
							'order'       => 'ASC',
							'post_type'   => 'post',
							'suppress_filters' => true, 
						) );

						foreach( $posts as $post ){
							setup_postdata($post);
						
							?>
							
								<?php
									$field = get_field('filter-value');
									if($field == 'wd'){
										?>
										<div class="filter-container col-xl-4 col-md-6 " filter="wd">
										<?php
									}
									if($field == 'ud'){
										?>
										<div class="filter-container col-xl-4 col-md-6 " filter="ud">
										
										<?php
									}	
									if($field == 'moc'){
										?>
										<div class="filter-container col-xl-4 col-md-6 " filter="moc">
										
										<?php
									}
								?>
									<div class="filter-container__box">
									<?php
										$image = get_field('filter-container_img');

										if(!empty($image)): 
										?>
											<img class="filter-container__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
										<?php endif;
									?>
									</div>
									<div class="filter-container__content">
										<h5 class="filter-container__title"><?php the_title(); ?></h5>
										<p class="filter-container__text"><?php the_field('filter-container_text'); ?></p>
										<a class="filter-container__btn button" href="<?php the_field('filter-container_btn'); ?>">Подробнее</a>
									</div>
								</div>
							<?php
						}

						wp_reset_postdata(); 
				?>
				<!--<div class="filter-container col-xl-4 col-md-6 " filter="wd">
					<div class="filter-container__box">
						<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/work_item1.webp" type="image/webp"><img class="filter-container__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/work_item1.jpg" alt="work_item3"></picture>
					</div>
					<div class="filter-container__content">
						<h5 class="filter-container__title">Сайт</h5>
						<p class="filter-container__text">Очередная, изысканная работа наших мастеров</p>
						<a class="filter-container__btn button" href="#">Подробнее</a>
					</div>
				</div>-->
				<!--<div class="filter-container col-xl-4 col-md-6 " filter="ud">

					<div class="filter-container__box">
						<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/work_item2.webp" type="image/webp"><img class="filter-container__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/work_item2.jpg" alt="work_item3"></picture>
					</div>
					<div class="filter-container__content">
						<h5 class="filter-container__title">Сайт</h5>
						<p class="filter-container__text">Очередная, изысканная работа наших мастеров</p>
						<a class="filter-container__btn button" href="#">Подробнее</a>
					</div>
				</div>
				<div class="filter-container col-xl-4 col-md-6 " filter="ud">

					<div class="filter-container__box">
						<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/work_item3.webp" type="image/webp"><img class="filter-container__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/work_item3.jpg" alt="work_item3"></picture>
					</div>
					<div class="filter-container__content">
						<h5 class="filter-container__title">Сайт</h5>
						<p class="filter-container__text">Очередная, изысканная работа наших мастеров</p>
						<a class="filter-container__btn button" href="#">Подробнее</a>
					</div>
				</div>
				<div class="filter-container col-xl-4 col-md-6 " filter="moc">

					<div class="filter-container__box">
						<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/work_item4.webp" type="image/webp"><img class="filter-container__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/work_item4.jpg" alt="work_item3"></picture>
					</div>
					<div class="filter-container__content">
						<h5 class="filter-container__title">Сайт</h5>
						<p class="filter-container__text">Очередная, изысканная работа наших мастеров</p>
						<a class="filter-container__btn button" href="#">Подробнее</a>
					</div>
				</div>
				<div class="filter-container col-xl-4 col-md-6 " filter="moc">

					<div class="filter-container__box">
						<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/work_item5.webp" type="image/webp"><img class="filter-container__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/work_item5.jpg" alt="work_item3"></picture>
					</div>
					<div class="filter-container__content">
						<h5 class="filter-container__title">Сайт</h5>
						<p class="filter-container__text">Очередная, изысканная работа наших мастеров</p>
						<a class="filter-container__btn button" href="#">Подробнее</a>
					</div>
				</div>
				<div class="filter-container col-xl-4 col-md-6 " filter="wd">

					<div class="filter-container__box">
						<picture><source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/work_item6.webp" type="image/webp"><img class="filter-container__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/work_item6.jpg" alt="work_item3"></picture>
					</div>
					<div class="filter-container__content">
						<h5 class="filter-container__title">Сайт</h5>
						<p class="filter-container__text">Очередная, изысканная работа наших мастеров</p>
						<a class="filter-container__btn button" href="#">Подробнее</a>
					</div>
				</div>-->
			</div>
		</div>
	</section>

<?php
	get_footer();
?>