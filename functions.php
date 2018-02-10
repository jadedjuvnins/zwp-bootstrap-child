<?php

// Import parent stylesheet and ZWP styles

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   
   wp_enqueue_style('zwp-front-style', get_stylesheet_directory_uri().'/inc/assets/css/main.css', array('parent-style'));
   
   wp_enqueue_style('zwp-magnific-popup-style', get_stylesheet_directory_uri().'/inc/assets/vendors/magnific-popup/magnific-popup.min.css', array('parent-style'));
   
   wp_enqueue_style('zwp-swiper-style', get_stylesheet_directory_uri().'/inc/assets/vendors/swiper/swiper.css', array('parent-style'));
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

// Scripts for ZWP bootstrap child

function zwp_assets() {
	wp_register_script( 'typed', get_stylesheet_directory_uri() . '/inc/assets/vendors/typed/typed.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'typed' );
	
	wp_register_script( 'swiper', get_stylesheet_directory_uri() . '/inc/assets/vendors/swiper/swiper.jquery.js', array( 'jquery' ), true  );
	wp_enqueue_script( 'swiper' );
	
	wp_register_script( 'magnific-pop', get_stylesheet_directory_uri() . '/inc/assets/vendors/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ), true  );
	wp_enqueue_script( 'magnific-pop' );
	
	wp_register_script( 'match-height', get_stylesheet_directory_uri() . '/inc/assets/vendors/jquery.matchHeight/jquery.matchHeight.min.js', array( 'jquery' ), true  );
	wp_enqueue_script( 'match-height' );
	
	wp_register_script( 'iso-layout', get_stylesheet_directory_uri() . '/inc/assets/vendors/isotope-layout/isotope.pkgd.js', array( 'jquery' ), true  );
	wp_enqueue_script( 'iso-layout' );
	
	wp_register_script( 'images-loaded', get_stylesheet_directory_uri() . '/inc/assets/vendors/imagesloaded/imagesloaded.pkgd.js', array( 'jquery' ), true  );
	wp_enqueue_script( 'images-loaded' );
}

add_action( 'wp_enqueue_scripts', 'zwp_assets' );