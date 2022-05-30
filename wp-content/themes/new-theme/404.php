<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="banner-content content-padding">
                    <h1 class="text-white bg-banner">ОШИБКА 404</h1>
                    <br><h3 class="text-white">Странца не найдена</h3>
					<a href="/" class="btn btn-white btn-circled">Перейти на главную</a>
                </div>
            </div>
        </div>
    </div>
</div>
	

<?php
get_footer();
