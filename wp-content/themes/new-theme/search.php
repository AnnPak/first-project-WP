<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package new-theme
 */

get_header();
?>
<canvas id="q"></canvas>
<div class="putin-wrapper">
      <img id = 'putin-img' src="<?=get_template_directory_uri()?>/images/bg/putin.png" alt="putin">
    </div>
<div class="page-banner-area page-contact" id="page-banner">
	<div class="overlay dark-overlay only-banner"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-sm-12 col-md-12">
				<div class="banner-content content-padding">
					<h1 class="text-white">
						<? printf(esc_html__('Результаты поиска по&nbsp;фразе: %s', 'new-theme'), '<span>' . get_search_query() . '</span>');?>
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="section blog-wrap class-blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">


					<?php if (have_posts()) : ?>

							<?php
							/* Start the Loop */
							while (have_posts()) : the_post(); ?>

								<div class="col-lg-6">
									<div class="blog-post">
										<? if (has_post_thumbnail()) :

											the_post_thumbnail('medium', array(
												'src'   => $src,
												'class' => "img-fluid",
												'alt'   => trim(strip_tags($wp_postmeta->_wp_attachment_image_alt)),
											));
										else :
											echo '<img class="img-fluid" src = "' . get_template_directory_uri() . '/images/blog/blog-1.jpg"/>';
										endif;
										?>

										<!-- <img src="images/blog/blog-1.jpg" alt="" class="img-fluid"> -->
										<div class="mt-4 mb-3 d-flex">
											<div class="post-author mr-3">
												<i class="fa fa-user"></i>
												<span class="h6 text-uppercase"><? the_author() ?></span>
											</div>

											<div class="post-info">
												<i class="fa fa-calendar-check"></i>
												<span><?= the_time('j F Y'); ?></span>
											</div>
										</div>
										<a href="<?= get_the_permalink() ?>" class="h4 "><?php the_title(); ?></a>
										<p class="mt-3"><?= the_excerpt(); ?></p>
										<a href="<?= get_the_permalink() ?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
									</div>
								</div>

						<? endwhile;


							the_posts_navigation();

						else :

							get_template_part('template-parts/content', 'none');

						endif;
						?>
				</div>
				
			</div>
			<?get_sidebar()?>
		</div>
</section>
<?php

get_footer();
