<?get_header();?>
  <canvas id="q"></canvas>

  <section class="container" style="height: 100vh">
    <div class="putin-wrapper">
      <img id = 'putin-img' src="<?=get_template_directory_uri()?>/images/bg/putin.png" alt="putin">
    </div> 

    <div class="banner-area banner-3">
      <div class="overlay dark-overlay"></div>
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                  <h5 class="subtitle"><?=get_post_meta($post_id->ID, 'subtitle', true)?></h5>
                  <h1 class="banner-title">Мы делаем SEO-продвижение и оказываем digital услуги</h1>
                  <p>
                    К нам обращаются, когда нужно создать лендинг под новый товар или услугу, еще, если нужно продвинуть
                    имеющийся сайт в топ по поисковым запросам.
                  </p>

                  <a href="#" class="btn btn-white btn-circled">Начать сотрудничество</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?get_footer()?>
