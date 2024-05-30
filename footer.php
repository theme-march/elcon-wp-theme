
<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            
              <?php
              $footer_header = get_theme_mod('footer_header_text_setting');
              echo '<h3 class="widget-title">' . esc_html($footer_header) . '</h3>';
              ?>

              <?php $image = get_theme_mod( 'footer_image_setting_url', '' ); ?>


            
            <img loading="lazy" width="200px" class="footer-logo" src="<?php echo esc_url( $image ); ?>" alt="Constra">
            <?php
              $footer_desp = get_theme_mod('footer_desp_text_setting');
              echo '<p>' . esc_html($footer_desp) . '</p>';
              ?>
            <div class="footer-social">
              <ul>
                <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://github.com/themefisher" aria-label="Github"><i class="fab fa-github"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
          <?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
              <div id="footer-widget" class="widget-area">
                  <?php dynamic_sidebar( 'footer-widget' ); ?>
              </div>
          <?php endif; ?>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
          
              <?php  $footer_right_desp = get_theme_mod('footer_right_text_setting');
              echo  wp_kses_post($footer_right_desp) ; ?>
             
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info">
              <?php $options = get_option( 'elecon_prefix_options' );?>
              <span>
                <?php echo esc_html( $options['opt-text-hkglg'])?>
              </span>
              
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <ul class="list-unstyled">
                <li><a href="about.html">About</a></li>
                <li><a href="team.html">Our people</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="news-left-sidebar.html">Blog</a></li>
                <li><a href="pricing.html">Pricing</a></li>
              </ul>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  </div><!-- Body inner end -->
  <?php wp_footer()?>
  </body>

  </html>