<?php get_header()?>
<div id="banner-area" class="banner-area"  style="background-image:url(<?php  echo get_template_directory_uri() ?>/images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title"><?php the_title()?></h1>
                <nav aria-label="breadcrumb">
                <?php echo mj_wp_breadcrumb()?>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
        <?php 
             if(have_posts()) :
                while(have_posts()) : the_post();
                the_content();
                endwhile;else :
        ?>; 
            <?php
            echo esc_html_e("<h1>Sorry, you are not allowed to</h1>")
            ?>
     
        <?php endif?>
   
    </div>
  </div><!-- Container end -->
</section><!-- Main container end -->

<?php get_footer()?>