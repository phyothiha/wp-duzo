<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package duzo
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="container py-8">
			<div class="grid items-center grid-cols-12 gap-4 md:gap-8 lg:gap-12">
				<div class="col-span-12 md:col-span-6">
					<div class="h-[300px] md:h-[350px] lg:h-[500px] xl:h-auto">
						<img src="https://cdn-ilbadjn.nitrocdn.com/pdWbTPTFYdEkdAZOXGfMdLexqObVDkjD/assets/images/optimized/rev-4036da8/vietnamesefoodies.com/wp-content/uploads/2022/10/dhmlily9.jpg" />
					</div>
				</div>

				<div class="col-span-12 md:col-span-6">
					<div class="mb-4">
						<h1 class="uppercase comp-heading-h1 comp-heading-font comp-text-white">
							Welcome to DUZO
						</h1>
					</div>
					
					<div class="mb-8">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ad, provident explicabo a minus quidem consequuntur ipsa? Excepturi iste dolorem vel voluptas ducimus ipsam deleniti velit quam sunt praesentium. Doloribus.
						</p>
					</div>
					
					<div>
						<a href="#" class="button button-fill">
							Read More
						</a>
					</div>
				</div>
			</div>
		</section>
		
		<section class="container py-8">
			<div class="grid grid-cols-12 gap-4 md:gap-8 lg:gap-12">
				<?php get_template_part( 'partials/section-home', 'ingredients' ); ?>
				<?php get_template_part( 'partials/section-home', 'ingredients' ); ?>
				<?php get_template_part( 'partials/section-home', 'ingredients' ); ?>
			</div>
		</section>
		
		<section class="container py-8">
			<div class="mb-4 md:mb-8 md:w-10/12 lg:w-8/12">
				<h2 class="comp-heading-h2 comp-heading-font comp-text-white">
					All dishes are beautifully prepared using the freshest ingredients using classic techniques
				</h2>
			</div>

			<div class="grid grid-cols-12 gap-4 md:gap-8 lg:gap-12">
				<div class="col-span-12 lg:col-span-6">
					<div class="mb-4 md:mb-8 md:pr-16 lg:pr-8 lg:mb-16 md:ml-auto md:w-10/12 lg:w-full">
						<p class="xl:leading-7 xl:text-base">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias exercitationem aut ab, ullam est quos nesciunt dolor delectus natus, ipsum quibusdam aspernatur asperiores fugiat fuga autem eius quae corporis officia.
						</p>
					</div>

					<div class="md:w-[384px] xl:w-[512px]">
						<img src="https://vietnamesefoodies.com/wp-content/uploads/2022/10/feature-home.jpg" />
					</div>
				</div>
				
				<div class="col-span-12 lg:col-span-6">
					<div class="mb-4 md:mb-8 lg:mb-16 md:w-[384px] xl:w-[512px] md:ml-auto">
						<img src="https://vietnamesefoodies.com/wp-content/uploads/2022/10/feature-home2.jpg" />
					</div>

					<div class="md:pl-16 lg:pl-8 md:ml-auto md:w-10/12 lg:w-full">
						<p class="xl:leading-7 xl:text-base">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias exercitationem aut ab, ullam est quos nesciunt dolor delectus natus, ipsum quibusdam aspernatur asperiores fugiat fuga autem eius quae corporis officia.
						</p>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Discover Menu -->
		<section class="container py-8 space-y-4 md:space-y-8">    
			<div class="grid grid-cols-12 gap-4 md:items-center md:gap-8 lg:gap-12">
				<div class="col-span-12 md:col-span-6">
					<div class="mb-4">
						<h2 class="comp-heading-h2 comp-heading-font comp-text-white">
							Our <span class="text-primary">Delicious Menu</span>
						</h2>
					</div>

					<div class="mb-8">
						<p class="lg:text-base">
							A variety of naturally healthy paleo, vegan, keto, dairy-free and gluten-free dishes, with many dishes cooked in broth or water instead of oil.					
						</p>
					</div>

					<div>
						<a href="#" class="button button-fill">
							More Delicious Dishes
						</a>
					</div>
				</div>
			
				<div class="col-span-12 md:col-span-6">
					<div class="lg:h-[350px] lg:mx-auto">
						<img src="https://vietnamesefoodies.com/wp-content/uploads/2022/10/feature-home2.jpg" />
					</div>
				</div>
			</div>	
			
			<div class="grid grid-cols-12 gap-4 md:gap-8 lg:gap-12">
				<?php get_template_part( 'partials/section-home', 'menu' ); ?>
				<?php get_template_part( 'partials/section-home', 'menu' ); ?>
				<?php get_template_part( 'partials/section-home', 'menu' ); ?>
				<?php get_template_part( 'partials/section-home', 'menu' ); ?>
			</div>
		</section>
		
		<!-- Visit Our Restaurant -->
		<section class="container py-8">
			<div class="grid items-center grid-cols-12">
				<div class="col-span-12 lg:col-span-6">
					<div class="p-4 comp-bg-white md:p-8">
						<div>
							<h3 class="text-center comp-heading-h3 comp-heading-font text-primary">
								Visit Our
							</h3>
						</div>
							
						<div class="mb-4 md:mb-8 lg:mb-6">
							<h3 class="text-center uppercase comp-heading-h3 comp-heading-font comp-text-black">
								Restaurant
							</h3>
						</div>
						
						<div class="p-4 border md:p-8 lg:p-4 border-primary comp-text-black">
							<div class="gap-4 mb-4 space-y-4 md:space-y-0 md:flex">
								<div class="md:w-1/2">
									<div>
										<h4 class="mb-1 font-medium comp-heading-h4 comp-text-black">
											Lunch Time
										</h4>
									</div>

									<div>
										<p>
											Monday to Sunday
										</p>
									</div>

									<div>
										<p>
											10.30am - 3:00pm
										</p>
									</div>
								</div>

								<div class="md:w-1/2">
									<div>
										<h4 class="mb-1 font-medium comp-heading-h4 comp-text-black">
											Dinner Time
										</h4>
									</div>

									<div>
										<p>
											Monday to Sunday
										</p>
									</div>

									<div>
										<p>
											5.30pm - 11:00pm
										</p>
									</div>
								</div>
							</div>

							<div class="mb-4">
								<div>
									<h4 class="mb-1 font-medium comp-heading-h4 comp-text-black">
										Location
									</h4>
								</div>

								<div>
									<p>
										732/21 Second Street, Manchester Kingston United Kingdom
									</p>
								</div>
							</div>

							<div class="mb-8">
								<div>
									<h4 class="mb-1 font-medium comp-heading-h4 comp-text-black">
										Contact Us
									</h4>
								</div>

								<div>
									<p>
										+387648592568
									</p>
								</div>
							</div>

							<div>
								<a href="#" class="button button-fill">
									Online Reservation
								</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="w-full h-full col-span-12 lg:col-span-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.171509330427!2d55.27692297607373!3d25.197437977710862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f682829c85c07%3A0xa5eda9fb3c93b69d!2sDubai%20Mall!5e0!3m2!1sen!2smm!4v1741785227809!5m2!1sen!2smm" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</section>
	
		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
