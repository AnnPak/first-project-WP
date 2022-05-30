<? get_header(); ?>
<?

?>
<!--MAIN BANNER AREA START -->
<canvas id="q"></canvas>

<div class="putin-wrapper">
    <img id='putin-img' src="<?= get_template_directory_uri() ?>/images/bg/putin.png" alt="putin">
</div>
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay only-banner"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white">
                        <? if (is_category()) {
                            echo __('Рубрика: ') . get_queried_object()->name;
                        } ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->

<section class="section blog-wrap class-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <? $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 12)); ?>

                    <? if ($wpb_all_query->have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

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

                        <? endwhile; ?>

                    <?php else : ?>
                        Записей нет.
                    <?php endif; ?>
                    <?php $args = [
                        'base'         => '%_%',
                        'format'       => '?page=%#%',
                        'total'        => 1,
                        'current'      => 0,
                        'show_all'     => False,
                        'end_size'     => 1,
                        'mid_size'     => 2,
                        'prev_next'    => True,
                        'prev_text'    => __('« Previous'),
                        'next_text'    => __('Next »'),
                        'type'         => 'plain',
                        'add_args'     => False,
                        'add_fragment' => '',
                        'before_page_number' => '',
                        'after_page_number'  => ''
                    ];

                    echo paginate_links($args); ?>

                </div>


            </div>
            <? get_sidebar() ?>
        </div>
    </div>
</section>

<? get_footer() ?>