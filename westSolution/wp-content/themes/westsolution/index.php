<?php /* Template Name: Blog */ ?>

<?php get_header('blog'); ?>
<?php $page_id = 2 ?>
<main class="main" style="min-height: 100vh; padding-top:10vh; ">
		<section class="content container">
		<div class="title__inner blog-preview__title-inner">
    <span class="pretitle">Our stories</span>
    <h2 class="title">Blog</h2>
  </div>
			<div class="container content__container">
				<div class="posts">
					<ul class="post-grid list-reset">
											<?php
						// проверяем есть ли посты в глобальном запросе - переменная $wp_query
						if( have_posts() ){
							// перебираем все имеющиеся посты и выводим их
							while( have_posts() ){
								the_post();
								?>

							<?php 
							$post_id = get_the_ID();
							?>

						<li class="post-grid__item">

						<article class="blog-preview__item">

						<?php
									$category = get_the_category();
									$cat_link = get_category_link( $category[0] );
								?>

						<div class="blog-preview__item-img-box">
							<a href="<?php the_permalink(); ?>">
								<img class="blog-preview__item-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="blog preview photo">
							</a>
							<div class="blog-preview__item-date-box">
								<div class="blog-preview__item-date">
								<?php echo get_the_date('d'); ?><span><?php echo get_the_date('M'); ?></span>
								</div>
							</div>
						</div>
						<div class="blog-preview__item-content">

							<div class="blog-preview__item-title">
								<a href="<?php the_permalink(); ?>">
									<h3>
										<?php the_title(); ?>
									</h3>
								</a>
							</div>
							<div class="blog-preview__item-text">
								<a href="<?php the_permalink(); ?>">
									<p>
									<?php echo get_the_excerpt(); ?>
									</p>
								</a>
							</div>
							</a>
						</div>
						<div class="blog-preview__item-bottom">
							<div class="blog-preview__item-views">
								<img class="blog-preview__item-views-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blog/eye.svg" alt="count views icon">
								<span class="blog-preview__item-views-count"><?php echo get_post_meta( $post->ID, 'views', true ); ?></span>
							</div>
							<div class="blog-preview__item-comments">
								<img class="blog-preview__item-viecommentsws-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blog/comment.svg"
									alt="count comment icon">
								<span class="blog-preview__item-comments-count">17</span>
							</div>
							<a href="<?php echo $cat_link;  ?>" class="blog-post__category">
										<?php echo $category[0]->cat_name; ?>
									</a>
						</div>

					</article>

						</li>

								<?php
							}
							?>

							<?php
						}
						// постов нет
						else {
							?>
						<?php
						}

						?>
					

					<?php

					// задаем нужные нам критерии выборки данных из БД
					$args = [
						'posts_per_page' => 10,
						'offset' => 1,
						'orderby' => 'date'
					];

					$query = new WP_Query( $args );

					// Цикл
						while ( $query->have_posts() ) : $query->the_post();?>


							<?php endwhile ?>


					</ul>
					<?php echo custom_pagination();?>
				</div>
			</div>
		</section>
	</main>

  <?php get_footer(); ?>


