<?get_header();?>
<?
/*
Template Name: contact page
*/
?>
  <!--MAIN BANNER AREA START -->
  <canvas id="q"></canvas>

  <div class="putin-wrapper">
    <img id='putin-img' src="<?= get_template_directory_uri() ?>/images/bg/putin.png" alt="putin">
  </div>
    <div class="page-banner-area page-contact" id="page-banner">
      <div class="overlay dark-overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <div class="banner-content content-padding">
              <h1 class="text-white">Давайте обсудим работу над&nbsp;вашим проектом</h1>
              <p>Напишите нам и вам ответит проектный менеджер</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--MAIN HEADER AREA END -->
    <!--  Contact START  -->
    <section class="section-padding blog-wrap class-blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-md-12">
            <div class="mb-5">
              <h2 class="mb-2">Напишите нам</h2>
              <p>
                Обычно, мы видим заявку сразу, а перезваниваем или пишем в ответ в течение часа. Иногда ответ может
                занять до одного дня.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 col-sm-12">
            <?= do_shortcode('[contact-form-7 id="183" title="Контактная форма"]')?>
          </div>

          <div class="col-lg-5 pl-4 mt-4 mt-lg-0">
            <h4>Адрес офиса</h4>
            <p class="mb-3">Абсолютно секретно</p>
            <h4>Телефон</h4>
            <p class="mb-3">+7 888 888 88 88</p>
            <h4>E-Mail</h4>
            <p class="mb-3">support@email.com</p>
          </div>
        </div>
      </div>
    </section>
    <!--  CONTACT END  -->

    <!--  Google Map START  -->
    <section id="map" class="section-padding blog-wrap class-blog">

          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A95f560bd10f0d0add9e355bb1ac6371dfe00ccb0719edeeee0befe8ab017fbae&amp;source=constructor" width="100%" height="600" frameborder="0"></iframe>
    </section>
    <!--  Google Map END  -->

    <?get_footer()?>