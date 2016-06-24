<?php get_header(); ?>

	<main>

		<section class="slider-section">

			<div class="slider-home swiper-container">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">Slide 1</div>
		            <div class="swiper-slide">Slide 2</div>
		            <div class="swiper-slide">Slide 3</div>
		            <div class="swiper-slide">Slide 4</div>
		        </div>

		        <div class="swiper-pagination"></div>

		        <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
		        <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
		    </div>

		</section>

		<section class="servicios-section">
			<div class="content-windows">
				<h3 class="title-section">Servicios</h3> 
				<div class="categorias-home">
					<ul>
						<li>
							<div class="category-boxes hum-category">
						
							</div>
						</li>
						<li>
							<div class="category-boxes sum-category">
						
							</div>
						</li>
						<li>
							<div class="category-boxes vet-category">
						
							</div>
						</li>
					</ul>
					
				</div>
			</div>
		</section>

		<section class="products-home">
				
				<?php 
					global $wp_customize;
					echo '<div class="content-windows">';
					echo '<h3 class="subtitle-section">' . 'Ultimos productos' . '</h3>';
					echo do_shortcode('[recent_products per_page="12" columns="4" orderby="date"]'); 
					echo '</div>';
				?>

		</section>
	</main>

<?php get_footer(); ?>
