<?
get_header();
?>
<!--MAIN BANNER AREA START -->
<canvas id="q"></canvas>

<div class="putin-wrapper">
      <img id = 'putin-img' src="<?=get_template_directory_uri()?>/images/bg/putin.png" alt="putin">
    </div>

<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay only-banner"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="banner-content content-padding">
                    <h1 class="text-white"><?=the_title()?></h1>
                    <p><?=the_excerpt()?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->
<section class="section blog-wrap class-blog">
    <div class="container">
        <div class="row">
            <main class="col-lg-8">
                <?
                    while(have_posts()): the_post();

                        get_template_part('template-parts/content', get_post_type());

                    endwhile;?>

            </main>
            <?get_sidebar();?>
        </div>
    </div>
</section>

<?get_footer();?>