<?
/*
Template Name: services page
*/

get_header(); ?>

<canvas id="q"></canvas>

<div class="putin-wrapper">
    <img id='putin-img' src="<?= get_template_directory_uri() ?>/images/bg/putin.png" alt="putin">
</div>
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay only-banner"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class=" content-padding">
                    <h1 class="text-white"> Провокационные теории, подтвержденные фактами </h1>
                    <p class="text-white">Мы помогаем смотреть на мир по-другому</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="blog-wrap class-blog">
    <div class="container">
        <?= the_content() ?>
    </div>
</section>

<canvas id="q2"></canvas>
<!--  SERVICE PARTNER START  -->
<section id="service-head">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12 m-auto">
                <div class="heading text-white text-center">
                    <h4 class="section-title text-white">Даже в самые сложные времена мы прийдем на помощь</h4>
                    <p class="text-white">
                       Мы сможем выполнить любую задачу любой сложности <br />
                        от мелких капризов, до раскрытия заговора глобального масштаба.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  SERVICE PARTNER END  -->
<!--  SERVICE AREA START  -->
<section id="service">
    <div class="container">
        <div class="row">
            <?php
            global $post;

            $query = new WP_Query([
                'posts_per_page' => 6,
                'post_type'        => 'service',
            ]);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="service-box">
                            <div class="service-img-icon">
                                <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
                            </div>

                            <div class="service-inner">
                                <h4><?= the_title() ?></h4>
                                <p>
                                    <?= the_excerpt() ?>
                                </p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                // Постов не найдено
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>

        </div>
    </div>
</section>
<!--  SERVICE AREA END  -->

<!--  PARTNER START  -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center text-lg-left">
                <div class="mb-5">
                    <h2 class="text-white">Эти компании доверяют нам</h2>
                </div>
            </div>
        </div>
        <div class="parthers-wrap">
            <?php
            global $post;

            $query = new WP_Query([
                'posts_per_page' => 6,
                'post_type'        => 'partners',
            ]);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
            <div class="parther-item">
                <div class="col-lg-3 col-sm-6 col-md-3 text-center partners-logo">
                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="partner" class="partners-img" />
                </div>
                <div class="parther-title">
                    <h4><?= the_title() ?></h4>
                </div>
            </div>

            <?php
                }
            } else {
                // Постов не найдено
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>

        </div>
    </div>
</section>

<? get_footer();
