<?php
/**
 * The template for displaying the Slider
 *
 * @package Catch Themes
 * @subpackage Catch Responsive
 * @since Catch Responsive 1.0 
 */

if ( ! defined( 'CATCHRESPONSIVE_THEME_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}


if( !function_exists( 'catchresponsive_featured_slider' ) ) :
/**
 * Add slider.
 *
 * @uses action hook catchresponsive_before_content.
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_featured_slider() {
	global $post, $wp_query;
	//catchresponsive_flush_transients();
	// get data value from options
	$options 		= catchresponsive_get_theme_options();
	$enableslider 	= $options['featured_slider_option'];
	$sliderselect 	= $options['featured_slider_type'];
	$imageloader	= isset ( $options['featured_slider_image_loader'] ) ? $options['featured_slider_image_loader'] : 'true';

	// Get Page ID outside Loop
	$page_id = $wp_query->get_queried_object_id();

	// Front page displays in Reading Settings
	$page_on_front = get_option('page_on_front') ;
	$page_for_posts = get_option('page_for_posts'); 
 
	if ( $enableslider == 'entire-site' || ( ( is_front_page() || ( is_home() && $page_for_posts != $page_id ) ) && $enableslider == 'homepage' ) ) {
		if( ( !$catchresponsive_featured_slider = get_transient( 'catchresponsive_featured_slider' ) ) ) {
			echo '<!-- refreshing cache -->';
		
			$catchresponsive_featured_slider = '
				<section id="feature-slider">
					<div class="wrapper">
						<div class="cycle-slideshow" 
						    data-cycle-log="false"
						    data-cycle-pause-on-hover="true"
						    data-cycle-swipe="true"
						    data-cycle-auto-height=container
						    data-cycle-fx="'. esc_attr( $options['featured_slide_transition_effect'] ) .'"
							data-cycle-speed="'. esc_attr( $options['featured_slide_transition_length'] ) * 1000 .'"
							data-cycle-timeout="'. esc_attr( $options['featured_slide_transition_delay'] ) * 1000 .'"
							data-cycle-loader="'. esc_attr( $imageloader ) .'"
							data-cycle-slides="> article"
							>
						    
						    <!-- prev/next links -->
						    <div class="cycle-prev"></div>
						    <div class="cycle-next"></div>

						    <!-- empty element for pager links -->
	    					<div class="cycle-pager"></div>';

							// Select Slider
							if ( $sliderselect == 'demo-featured-slider' && function_exists( 'catchresponsive_demo_slider' ) ) {
								$catchresponsive_featured_slider .=  catchresponsive_demo_slider( $options );
							}
							elseif ( $sliderselect == 'featured-page-slider' && function_exists( 'catchresponsive_page_slider' ) ) {
								$catchresponsive_featured_slider .=  catchresponsive_page_slider( $options );
							}
			
			$catchresponsive_featured_slider .= '
						</div><!-- .cycle-slideshow -->
					</div><!-- .wrapper -->
				</section><!-- #feature-slider -->';
			
			set_transient( 'catchresponsive_featured_slider', $catchresponsive_featured_slider, 86940 );
		}
		echo $catchresponsive_featured_slider;
	}
}
endif;
add_action( 'catchresponsive_before_content', 'catchresponsive_featured_slider', 10 );


if ( ! function_exists( 'catchresponsive_demo_slider' ) ) :
/**
 * This function to display featured posts slider
 *
 * @get the data value from customizer options
 *
 * @since Catch Responsive 1.0
 *
 */
function catchresponsive_demo_slider( $options ) {
	$catchresponsive_demo_slider ='
							<article class="post hentry slides demo-image displayblock">
							<figure class="slider-image">
							<a title="Slider Image 1" href="'. esc_url( home_url( '/' ) ) .'">
							<img src="http://drive.google.com/uc?export=view&id=0B-W4p6laoiP3T1N0V2RlVFJqSHc
" class="wp-post-image" alt="Slider Image 1" title="Slider Image 1">
							</a>
							</figure>
							<div class="entry-container">
							<header class="entry-header">
							<h1 class="entry-title">
							<a title="Slider Image 1" href="#">
							<span>Nombramiento de Brigadas de Emergencia</span>
							</a>
							</h1>
							</header>
							<div class="entry-content">
							<p>Representantes de las 4 Brigadas de Emergencia</p>
							</div>   
							</div>             
							</article><!-- .slides --> 	
								
							<article class="post hentry slides demo-image displaynone">
							<figure class="Slider Image 2">
							<a title="Slider Image 2" href="'. esc_url( home_url( '/' ) ) .'">
							<img src="'. get_template_directory_uri() . '/images/gallery/slide/slide-2.png" class="wp-post-image" alt="Slider Image 2" title="Slider Image 2">
							</a>
							</figure>
							<div class="entry-container">
							<header class="entry-header">
							<h1 class="entry-title">
							<a title="Slider Image 2" href="#">
							<span>Capacitación de la Ley 29783 - Ley de Seguridad y Salud en el Trabajo</span>
							</a>
							</h1>
							</header>
							<div class="entry-content">
							<p>Jefes y resposables de áreas</p>
							</div>   
							</div>             
							</article>

							<article class="post hentry slides demo-image displaynone">
							<figure class="Slider Image 3">
							<a title="Slider Image 3" href="'. esc_url( home_url( '/' ) ) .'">
							<img src="'. get_template_directory_uri() . '/images/gallery/slide/slide-3.png" class="wp-post-image" alt="Slider Image 3" title="Slider Image 3">
							</a>
							</figure>
							<div class="entry-container">
							<header class="entry-header">
							<h1 class="entry-title">
							<a title="Slider Image 3" href="#">
							<span>Nombramiento de la Política de Calidad y SSOMA.</span>
							</a>
							</h1>
							</header>
							<div class="entry-content">
							<p>Todos los Colaboradores</p>
							</div>   
							</div>             
							</article>

							<article class="post hentry slides demo-image displaynone">
							<figure class="Slider Image 4">
							<a title="Slider Image 4" href="'. esc_url( home_url( '/' ) ) .'">
							<img src="'. get_template_directory_uri() . '/images/gallery/slide/slide-4.png" class="wp-post-image" alt="Slider Image 4" title="Slider Image 4">
							</a>
							</figure>
							<div class="entry-container">
							<header class="entry-header">
							<h1 class="entry-title">
							<a title="Slider Image 4" href="#">
							<span>Capacitación de la Campaña de Reciclaje de Papel en la Empresa</span>
							</a>
							</h1>
							</header>
							<div class="entry-content">
							<p>Representante de Aldeas Infantiles y Gerente de Administración y Finanzas</p>
							</div>   
							</div>             
							</article>

							<article class="post hentry slides demo-image displaynone">
							<figure class="Slider Image 5">
							<a title="Slider Image 5" href="'. esc_url( home_url( '/' ) ) .'">
							<img src="'. get_template_directory_uri() . '/images/gallery/slide/slide-5.png" class="wp-post-image" alt="Slider Image 5" title="Slider Image 5">
							</a>
							</figure>
							<div class="entry-container">
							<header class="entry-header">
							<h1 class="entry-title">
							<a title="Slider Image 5" href="#">
							<span>Dinamica - Trabajo en Equipo</span>
							</a>
							</h1>
							</header>
							<div class="entry-content">
							<p>A cargo del área de Psicología Ocupacional - María Tello</p>
							</div>   
							</div>             
							</article>

								<!-- .slides --> ';
	return $catchresponsive_demo_slider;
}
endif; // catchresponsive_demo_slider


if ( ! function_exists( 'catchresponsive_page_slider' ) ) :
/**
 * This function to display featured page slider
 *
 * @param $options: catchresponsive_theme_options from customizer
 *
 * @since Catch Responsive 1.0
 */
function catchresponsive_page_slider( $options ) {
	$quantity		= $options['featured_slide_number'];
	$more_link_text	=	$options['excerpt_more_text'];

    global $post;

    $catchresponsive_page_slider = '';
    $number_of_page 		= 0; 		// for number of pages
	$page_list				= array();	// list of valid page ids

	//Get number of valid pages
	for( $i = 1; $i <= $quantity; $i++ ){
		if( isset ( $options['featured_slider_page_' . $i] ) && $options['featured_slider_page_' . $i] > 0 ){
			$number_of_page++;

			$page_list	=	array_merge( $page_list, array( $options['featured_slider_page_' . $i] ) );
		}

	}

	if ( !empty( $page_list ) && $number_of_page > 0 ) {
		$get_featured_posts = new WP_Query( array(
			'posts_per_page'	=> $quantity,
			'post_type'			=> 'page',
			'post__in'			=> $page_list,
			'orderby' 			=> 'post__in'
		));
		$i=0; 

		while ( $get_featured_posts->have_posts()) : $get_featured_posts->the_post(); $i++;
			$title_attribute = the_title_attribute( array( 'before' => __( 'Permalink to: ', 'catch-responsive' ), 'echo' => false ) );
			$excerpt = get_the_excerpt();
			if ( $i == 1 ) { $classes = 'page pageid-'.$post->ID.' hentry slides displayblock'; } else { $classes = 'page pageid-'.$post->ID.' hentry slides displaynone'; }
			$catchresponsive_page_slider .= '
			<article class="'.$classes.'">
				<figure class="slider-image">';
				if ( has_post_thumbnail() ) {
					$catchresponsive_page_slider .= '<a title="Permalink to '.the_title('','',false).'" href="' . get_permalink() . '">
						'. get_the_post_thumbnail( $post->ID, 'catchresponsive-slider', array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ), 'class'	=> 'attached-page-image' ) ).'
					</a>';
				}
				else {
					//Default value if there is no first image
					$catchresponsive_image = '<img class="pngfix wp-post-image" src="'.get_template_directory_uri().'/images/gallery/no-featured-image-1200x514.jpg" >';
					
					//Get the first image in page, returns false if there is no image
					$catchresponsive_first_image = catchresponsive_get_first_image( $post->ID, 'catchresponsive-slider', array( 'title' => esc_attr( $title_attribute ), 'alt' => esc_attr( $title_attribute ), 'class' => 'attached-page-image' ) );

					//Set value of image as first image if there is an image present in the page
					if ( '' != $catchresponsive_first_image ) {
						$catchresponsive_image =	$catchresponsive_first_image;
					}

					$catchresponsive_page_slider .= '<a title="Permalink to '.the_title('','',false).'" href="' . get_permalink() . '">
						'. $catchresponsive_image .'
					</a>';
				}
				
				$catchresponsive_page_slider .= '
				</figure><!-- .slider-image -->
				<div class="entry-container">
					<header class="entry-header">
						<h1 class="entry-title">
							<a title="Permalink to '.the_title('','',false).'" href="' . get_permalink() . '">'.the_title( '<span>','</span>', false ).'</a>
						</h1>
						<div class="assistive-text">'.catchresponsive_page_post_meta().'</div>
					</header>';
					if( $excerpt !='') {
						$catchresponsive_page_slider .= '<div class="entry-content"><p>'. $excerpt.'</p></div>';
					}
					$catchresponsive_page_slider .= '
				</div><!-- .entry-container -->
			</article><!-- .slides -->';
		endwhile; 

		wp_reset_query();
  	}
	return $catchresponsive_page_slider;
}
endif; // catchresponsive_page_slider