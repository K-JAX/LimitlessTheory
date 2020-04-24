<?php
/*
Template Name: Front
*/
get_header(); 
?>

<main data-aos="fade" data-aos-duration="1000" class="conatin-fluid">
	<!-- Hero Section 1 -->
	<?php if( have_rows('hero_section_1') ): while( have_rows('hero_section_1') ): the_row(); ?>
	<header class="front-hero " role="banner">

		<div class="container">
			<div>
			<?php get_template_part( 'template-parts/content', 'front-header-svg' ); ?>
			</div>

			<div class="jumbotron pt-5">

				<div class="row pt-5" style="justify-content: space-between;">
					<div class="tagline text-white col-12 col-lg-5">
						<!-- Title -->
						<h1 data-aos="fade-up" data-aos-duration="800" class="display-4 font-weight-light"><?php echo get_sub_field('title'); ?></h1>
						<!-- Description -->
						<div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"><?php echo get_sub_field('description'); ?></div>
						<!-- CTA -->
						<?php if( have_rows('ctas') ): while ( have_rows('ctas') ): the_row(); ?>
							<?php if(get_sub_field('cta_link')): ?>
							<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="btn btn-primary" role="button" class="download large button sites-button hide-for-small-only" alt="Check out the <?php echo get_sub_field('cta_link')['title']; ?> Page" href="<?php echo get_sub_field('cta_link')['url']; ?>"><?php echo get_sub_field('cta_link')['title']; ?></a>
							<?php endif; ?>
						<?php endwhile; endif; ?>
					</div>

					
					<div data-aos="flip-up" data-aos-duration="300" data-aos-delay="2000" class="col-12 col-lg-4 bg-white h-25 px-0 border-0">
						<?php get_sidebar('home'); ?>
					</div>

				</div>
				<!-- Spotify Embed code -->
				<div class="row">
					<iframe src="<?php echo get_sub_field('spotify_embed_code'); ?>" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
				</div>
					
			</div>
		</div>
	</header>
	<?php endwhile; endif; ?>

	<!-- Intro feature Section 2 -->
	<?php if( have_rows('intro_feature_section_2') ): while( have_rows('intro_feature_section_2') ): the_row(); ?>
	<section class="container-fluid my-5" >
		<div class="container">
			<!-- Display blog posts? -->
			<?php if( get_sub_field('display_blog_posts') == 1 ): ?>
				<!-- if posts while posts - 3 most recent -->
				<?php
				$args = array(
					'post_type'			=> 'post',
					'posts_per_page'	=> 2
				);
				$the_query = new WP_Query( $args );
				if( $the_query->have_posts() ): ?>
					<ul class="post-list row list-unstyled" style="justify-content: space-around;">
						<?php while ( $the_query->have_posts() ): $the_query->the_post(); $count++;
						$image = get_the_post_thumbnail_url( $post_id ) ? get_the_post_thumbnail_url( $post_id ) : 'https://via.placeholder.com/348x232';
						echo '<li data-aos="fade-up" data-aos-duration="700" data-aos-delay="'. round($count * 1.5) .'00" class="card col-lg-4 px-0 distant-shadow">
									<img class="card-img top" src="'. $image .'" />
									<div class="card-body">
										<div class="card-title"><h3 class="h4">' . get_the_title() . '</h3></div>
										<div class="card-text">' . get_the_excerpt() . '</div>
										<a class="btn btn-secondary" href="'. get_the_permalink() .'"><span>Read more</span></a>
									</div>
							</li>';
						endwhile; $count=0; ?>
					</ul>
				<?php endif; ?>
			<?php endif; wp_reset_postdata(); ?>

			<div class="container my-5 py-5">
				<div class="row">
				<!-- Title -->
					<h2 class="display-4 text-uppercase text-center w-100 font-weight-lighter spaced"><?php echo get_sub_field('title'); ?></h2>
				</div>

				<div class="row my-5" style="justify-content: space-between;">
					<div data-aos="fade-right" data-aos-duration="1000" class="col-lg-7 col-12">
					<!-- Instagram feed embed -->
					<?php echo get_sub_field('instagram_feed_embed'); ?>
					</div>
					<div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500" class="col-lg-5 col-12 card">
					<!-- Twitter feed embed -->
					<?php echo get_sub_field('twitter_feed_embed'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php endwhile; endif; ?>
	<!-- About Feature Section 3 -->
	<?php if( have_rows('about_feature_section_3') ): while( have_rows('about_feature_section_3') ): the_row(); ?>
	<section class="container-fluid my-5 py-5 text-white" >
		<!-- Alignment -->
		<div class="row flex-<?php echo get_sub_field('alignment') == 'left' ? 'row' : 'row-reverse'; ?> bg-black" style="justify-content: space-between; min-height: 442px;" >

			<!-- Image -->
			<div data-aos="fade-up" data-aos-duration="700" class="col-md-6">
				<img class="absolute-to-relative" style="bottom:0;" alt="<?php echo get_sub_field('image')['alt']; ?>" src="<?php echo get_sub_field('image')['url']; ?>" />
			</div>

			<div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500" class="col-md-6 my-5 text-right pr-5">
				<!-- Title -->
				<h2 class="display-4"><?php echo get_sub_field('title'); ?></h2>

				<!-- Description -->
				<div><?php echo get_sub_field('description'); ?></div>

				<!-- CTA Link -->
				<?php if( !empty(get_sub_field('cta_link')) ): ?>
				<a class="btn btn-secondary" href="<?php echo get_sub_field('cta_link')['url']; ?>"><span><?php echo get_sub_field('cta_link')['title']; ?></span></a>
				<?php endif; ?>
			</div>
		
		</div>
	</section>
	<?php endwhile; endif;?>

	<!-- Service Feature Section 4 -->
	<?php if( have_rows('service_feature_section_4') ): while( have_rows('service_feature_section_4') ): the_row(); ?>
	<section class="container-fluid my-5 text-center" >
		<div class="container">
			<!-- Title --> 
			<h2 data-aos="fade-up" data-aos-duration="700" class="h1 text-uppercase  w-100 font-weight-light spaced"><?php echo get_sub_field('title'); ?></h2>
			<!-- Description -->
			<div data-aos="fade-up" data-aos-duration="700" data-aos-delay="500" class="my-1"><?php echo get_sub_field('description'); ?></div>

		<!-- Service Repeater -->
		<?php if( have_rows('service_repeater') ): ?>
			<ul class="row flex-row list-unstyled" style="justify-content: space-around;">
			<?php while( have_rows('service_repeater') ): the_row(); $count++ ?>
				<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo round($count * 1.5); ?>00" href="<?php echo get_sub_field('service_link')['url']; ?>">
					<li>
						<figure>
						<!-- Service Icon -->
							<img src="<?php echo get_sub_field('service_icon')['url']; ?>" alt="<?php echo get_sub_field('service_icon')['alt']; ?>" />

						<!-- Service Name -->
							<figcaption class="h4" style="color: <?php echo get_sub_field('text_color'); ?>;">
								<?php echo get_sub_field('service_link')['title']; ?>
							</figcaption>
						
						</figure>
					</li>
				</a>
			<?php endwhile; $count=0; ?>
			</ul>
		<?php endif; ?>
		</div>
	</section>
	<?php endwhile; endif;?>

	<!-- Final CTA Section 5 -->
	<?php if( have_rows('final_cta_section_5') ): while( have_rows('final_cta_section_5') ): the_row(); ?>
	<section class="container my-5 py-5 text-center" >

		<!-- Title -->
		<h2 data-aos="fade-up" data-aos-duration="700" class="text-uppercase w-100 font-weight-light spaced"><?php echo get_sub_field('title'); ?></h2>
		<!-- Description -->
		<div data-aos="fade-up" data-aos-duration="700" data-aos-delay="300" class="mt-4 mb-5"><?php echo get_sub_field('description'); ?></div>
		

		<!-- Subscription form shortcode -->
		<div data-aos="fade-up" data-aos-duration="700" data-aos-delay="500" class="row subscription-form"><?php echo do_shortcode(get_sub_field('subscription_form_shortcode')); ?></div>
	</section>		
	<?php endwhile; endif;?>
</main>
<?php get_footer();
