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

		<section>
				
				<?php 
					global $wp_customize;
					echo '<div class="content-windows">';
					/* SECTION HEADER */
					$zerif_latestnews_title = get_theme_mod('zerif_latestnews_title');
					/* title */
					if( !empty($zerif_latestnews_title) ):
					echo '<h2 class="title-section">' . wp_kses_post( $zerif_latestnews_title ) . '</h2>';
					else:
					echo '<h2 class="title-section">' . __('Latest news','zerif-lite') . '</h2>';
					endif;
					/* subtitle */
					$zerif_latestnews_subtitle = get_theme_mod('zerif_latestnews_subtitle');
					if( !empty($zerif_latestnews_subtitle) ):
					echo '<div class="section-legend">'.wp_kses_post( $zerif_latestnews_subtitle ).'</div>';
					elseif ( isset( $wp_customize ) ):
					echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';
					endif;
					echo '</div><!-- END .section-header -->';
					echo '<div class="clear"></div>';
					echo do_shortcode('[recent_products per_page="4" columns="4"]'); 
				?>

		</section>
	</main>

<?php get_footer(); ?>
