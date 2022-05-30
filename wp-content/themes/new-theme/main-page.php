
<?get_header();?>
<?
/*
Template Name: main page
*/
?>
  <canvas id="q"></canvas>

  <section class="container" style="height: 100vh">
    <div class="putin-wrapper">
      <img id = 'putin-img' src="<?=get_template_directory_uri()?>/images/bg/putin.png" alt="putin">
    </div> 


      <div class="overlay dark-overlay"></div>
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                  <h5 class="subtitle"><?=get_post_meta($post->ID, 'subtitle', true)?></h5>
                  <h1 class="banner-title"><?=get_post_meta($post->ID, 'description', true)?></h1>
                  <p>
                    Три столетия открываем людям глаза на оправду. Проливаем свет на мировые заговоры 
                  </p>

                  <a href="/contact/" class="btn btn-white btn-circled">Начать сотрудничество</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </section>


<?get_footer()?>
