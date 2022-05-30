<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="seo & digital marketing" />
    <meta
      name="keywords"
      content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company"
    />
<?wp_head();?>
    <!-- <title>Promodise - seo and digital агентство</title> -->


    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body data-spy="scroll" data-target=".fixed-top">
    <nav class="navbar navbar-expand-lg trans-navigation">
      <div class="container">
        <a class="navbar-brand" href="index.html">
			<?
			if( has_custom_logo() ){
				// логотип есть выводим его
				echo get_custom_logo();
			}?>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#mainNav"
          aria-controls="mainNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars"></i>
          </span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
			<?
      wp_nav_menu(
				array(
					'menu_id'        => 'primary-menu',
          'container'       => 'false',
          'menu_class'      => 'navbar-nav',
          'echo'            => true,
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new bootstrap_4_walker_nav_menu(),
				)
			);
			?>
         
        </div>
      </div>
    </nav>
    <!--MAIN HEADER AREA END -->