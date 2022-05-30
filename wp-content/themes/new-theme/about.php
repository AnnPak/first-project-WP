<?get_header();?>
<?
/*
Template Name: about page
*/
?>
<canvas id="q"></canvas>

  <div class="putin-wrapper">
      <img id='putin-img' src="<?= get_template_directory_uri() ?>/images/bg/putin.png" alt="putin">
  </div>
    <!--MAIN BANNER AREA START -->
    <div class="page-banner-area page-contact" id="page-banner">
      <div class="overlay dark-overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <div class="banner-content content-padding">
              <h1 class="text-white">Наша история</h1>
              <p>
                В этом месте мы рассказываем, как появилась на свет компания <br />
                и что делала все это время
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--MAIN HEADER AREA END -->

    <!--  ABout2  AREA START  -->
    <section class="section-padding blog-wrap class-blog">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-sm-12 col-md-8 mb-4">
            <h3 class="mb-3">Мы инновационное <br />сообщество, которое работает на благо цивилизации</h3>
            <p class="mb-4">
              Мы предоставляем уникальные услуги, <br />которыми вы сможете воспользоваться
              <b>только у нас</b>
            </p>

            <span class="h5 mb-4">К нам обращаются, когда нужно:</span>
            <ul class="about-list2 my-4">
              <li class="mb-2"><i class="icofont icofont-check-circled"></i>Создать проект пирамиды</li>

              <li class="mb-2">
                <i class="icofont icofont-check-circled"> </i> Оборудовать жилое помещение защитой от пришельцев
              </li>

              <li class="mb-2">
                <i class="icofont icofont-check-circled"> </i> Воспользоваться услугой тайного агента
              </li>
            </ul>

            <a href="/service/" class="mt-3 d-inline-block"
              >Подробнее об услугах <i class="fa fa-angle-right"></i
            ></a>
          </div>

          <div class="col-lg-6 col-md-4">
            <img src="images/about/about-4.jpg" alt="" class="img-fluid w-100" />
          </div>
        </div>
      </div>
    </section>
    <!--  ABOUT AREA END  -->
    <!--  HISTORY AREA  -->
    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="media img-block mb-3 mb-lg-0">
              <img src="<?= get_template_directory_uri() ?>/images/about/2.2.png" alt="" class="img-fluid rounded mr-3" />

              <div class="media-body">
                <h4 class="mb-3 text-white" >Оказываем услуги больше века</h4>
                <p class="text-white">К нам обращаются тогда, когда другие не могут вам помочь</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="media img-block">
              <img src="<?= get_template_directory_uri() ?>/images/about/2.2.png" alt="" class="img-fluid rounded mr-3" />

              <div class="media-body">
                <h4 class="mb-3 text-white">Наша задача — достигать целей наших клиентов!</h4>
                <p class="text-white">Всегда выполняем задачи в срок и отвечаем за качество</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  HISTORY AREA END  -->
    <!--  COUNTER AREA  -->
    <section class="section-padding pt-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="text-center border p-4 rounded mb-4">
              <span class="counter font-weight-normal">460</span>
              <h5 class="text-uppercase mt-2 text-white">Счастливых клиентов</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="text-center border p-4 rounded mb-4">
              <span class="counter font-weight-normal">60</span>
              <h5 class="text-uppercase mt-2 text-white">Завершенных проектов</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="text-center border p-4 rounded mb-4">
              <span class="counter font-weight-normal">30</span>
              <h5 class="text-uppercase mt-2 text-white">Людей в нашей команде</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="text-center border p-4 rounded">
              <span class="counter font-weight-normal">25</span>
              <h5 class="text-uppercase mt-2 text-white">Текущих проектов в работе</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
  
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
    <?get_footer()?>
