<?php



if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function west_scripts() {
	wp_enqueue_style( 'west-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'west-style', 'rtl', 'replace' );
	wp_enqueue_style('swiper-slider', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
	wp_enqueue_style( 'odometer', get_template_directory_uri()."/assets/css/odometer-theme-default.css", array(), _S_VERSION );
	wp_enqueue_style( 'main', get_template_directory_uri()."/assets/css/main.min.css", array(), _S_VERSION );

	//wp_enqueue_script('jquery-migrate-3.0.1.min', get_template_directory_uri()."/assets/js/jquery-migrate-3.0.1.min.js", array(), _S_VERSION, true);
	wp_enqueue_script('swiper-slider', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
	wp_enqueue_script('odometer', get_template_directory_uri()."/assets/js/odometer.js", array(), _S_VERSION, true);
	wp_enqueue_script('main', get_template_directory_uri()."/assets/js/main.min.js", array(), _S_VERSION, true);



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'west_scripts' );

// image to post
add_theme_support('post-thumbnails');

function custom_pagination() {
	ob_start();
	?>
			<?php
				global $wp_query;
				$current = max( 1, absint( get_query_var( 'paged' ) ) );
				$pagination = paginate_links( array(
					'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
					'format' => '?paged=%#%',
					'current' => $current,
					'total' => $wp_query->max_num_pages,
					'type' => 'array',
					'prev_text' => null,
					'next_text' => null,
				) ); ?>
			<?php if ( ! empty( $pagination ) ) : ?>
				<ul class="pagination list-reset">
					<?php foreach ( $pagination as $key => $page_link ) : ?>
						<li class="pagination__item<?php if ( strpos( $page_link, 'pagination__item--current' ) !== false ) { echo ' active'; } ?>"><?php echo $page_link ?></li>
					<?php endforeach ?>
				</ul>
			<?php endif ?>
	<?php
	$links = ob_get_clean();
	return apply_filters( 'sa_bootstap_paginate_links', $links );
}

// post views count
function gt_get_post_view() {
	$count = get_post_meta( get_the_ID(), 'post_views_count', true );
	if ($count > 0) return $count - 1;
}
function gt_set_post_view() {
	$key = 'post_views_count';
	$post_id = get_the_ID();
	$count = (int) get_post_meta( $post_id, $key, true );
	$count++;
	update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
	$columns['post_views'] = 'Views';
	return $columns;
}
function gt_posts_custom_column_views( $column ) {
	if ( $column === 'post_views') {
			echo gt_get_post_view();
	}
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );

// Custom next button on single page
function posts_link_next_class($format){
	$format = str_replace('href=', 'class="post-links__link post-links__link--next" href=', $format);
	return $format;
}
add_filter('next_post_link', 'posts_link_next_class');

function posts_link_prev_class($format) {
	$format = str_replace('href=', 'class="post-links__link post-links__link--prev" href=', $format);
	return $format;
}
add_filter('previous_post_link', 'posts_link_prev_class');


// Подсчет количества посещений страниц
add_action( 'wp_head', 'kama_postviews' );

/**
 * @param array $args
 *
 * @return null
 */
function kama_postviews( $args = [] ){
	global $user_ID, $post, $wpdb;

	if( ! $post || ! is_singular() )
		return;

	$rg = (object) wp_parse_args( $args, [
		// Ключ мета поля поста, куда будет записываться количество просмотров.
		'meta_key' => 'views',
		// Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
		'who_count' => 0,
		// Исключить ботов, роботов? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.
		'exclude_bots' => false,
	] );

	$do_count = false;
	switch( $rg->who_count ){

		case 0:
			$do_count = true;
			break;
		case 1:
			if( ! $user_ID )
				$do_count = true;
			break;
		case 2:
			if( $user_ID )
				$do_count = true;
			break;
	}

	if( $do_count && $rg->exclude_bots ){

		$notbot = 'Mozilla|Opera'; // Chrome|Safari|Firefox|Netscape - все равны Mozilla
		$bot = 'Bot/|robot|Slurp/|yahoo';
		if(
			! preg_match( "/$notbot/i", $_SERVER['HTTP_USER_AGENT'] ) ||
			preg_match( "~$bot~i", $_SERVER['HTTP_USER_AGENT'] )
		){
			$do_count = false;
		}

	}

	if( $do_count ){

		$up = $wpdb->query( $wpdb->prepare(
			"UPDATE $wpdb->postmeta SET meta_value = (meta_value+1) WHERE post_id = %d AND meta_key = %s",
			$post->ID, $rg->meta_key
		) );

		if( ! $up )
			add_post_meta( $post->ID, $rg->meta_key, 1, true );

		wp_cache_delete( $post->ID, 'post_meta' );
	}

}

function include_template_function( $template_path ) {
	if ( get_post_type() == 'team' ) {
			if ( is_single() ) {
					// checks if the file exists in the theme first,
					// otherwise serve the file from the plugin
					if ( $theme_file = locate_template( array ( 'single-team.php' ) ) ) {
							$template_path = $theme_file;
					} else {
							$template_path = plugin_dir_path( __FILE__ ) . '/single-team.php';
					}
			}
	}
	return $template_path;
}




