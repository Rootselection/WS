<?php get_header('blog'); ?>
<?php gt_set_post_view(); ?>

<?php
// проверяем есть ли посты в глобальном запросе - переменная $wp_query
if( have_posts() ){
	// перебираем все имеющиеся посты и выводим их
	while( have_posts() ){
		the_post();
		?>

<main class="main container" style="min-height: 100vh; padding-top:10vh; ">
		<div class="post-banner">
		<?php echo get_the_post_thumbnail(); ?>
		</div>
		<section style="margin-bottom: 60px" class="post-content">
			<div class="container post-content__container">
				<div class="post-wrapper">
					<div class="post">

						<h1 class="blog-title post-title"><?php the_title(); ?></h1>
						<?php the_content('', 'true '); ?>
					</div>
					<div class="post-meta">
						<?php
									$category = get_the_category();
									$cat_link = get_category_link( $category[0] );
								?>
									<a href="<?php echo $cat_link;  ?>" class="post-category">
										<?php echo $category[0]->cat_name; ?>
									</a>
							<time class="post-date"><?php the_date( 'j M Y' ); ?></time>
						</div>
					<div class="post-links">
						<?php previous_post_link('%link', 'Предыдущая статья', true); ?>
						<?php next_post_link('%link', 'Следующая статья', true); ?>
						
					</div>
				</div>
			</div>
		</section>
	</main>


		<?php
	}
	?>
	<?php
}
// постов нет
else {
}
?>

<?php get_footer(); ?>