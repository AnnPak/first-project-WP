<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new-theme
 */

?>

	<!--  FOOTER AREA START  -->
    <section id="footer" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-sm-8 col-md-8">
          <?if (!dynamic_sidebar('sidebar-footer-txt') ): dynamic_sidebar( 'sidebar-footer-txt' ); endif;?>
          </div>
          <div class="col-lg-2 col-sm-4 col-md-4">
            <?
             wp_nav_menu(
              array(
                'menu_id'        => 'footer-menu',
                'container'       => 'div',
                'container_class'      => 'footer-widget footer-link',
                'menu_class'      => '',
                'echo'            => true,
                'items_wrap'      => '<h4>Информация</h4><ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 2,
              )
            );
            ?>
          </div>

          
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="footer-widget footer-text">
              <h4>Наши контакты</h4>
              <p class="mail"><span>Email:</span> promdise@gmail.com</p>
              <p><span>Телефон :</span>+7 888 888 88 88</p>
              <p><span>Адрес:</span> Абсолютно секретно</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="footer-copy">© 2018 Promodise inc. Все права защищены.</div>
          </div>
        </div>
      </div>
    </section>
</div><!-- #page -->

<?php wp_footer(); ?>


<?wp_footer();?>
    <!--  FOOTER AREA END  -->

    <!-- 
    Essential Scripts
    =====================================-->

  </body>
</html>
