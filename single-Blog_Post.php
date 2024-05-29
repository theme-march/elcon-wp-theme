
<?php get_header(); ?>


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

      <div class="col-lg-8 mb-5 mb-lg-0">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="post-content post-single">
          <div class="post-media post-image">
          <?php
            $custom_field_value = get_post_meta(get_the_ID(), '_my_custom_field', true);
            if (!empty($custom_field_value)) {
                echo '<p>Custom MetaBox text: ' . esc_html($custom_field_value) . '</p>';
            }
            ?>

          <?php 
                // Display the featured image
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail('large', ['class' => 'featured-image']);
                                endif;
                            ?>
                                
          </div>

          <div class="post-body">
             <div class="post-meta">
                                        <span class="post-author">
                                            <i class="far fa-user"></i><?php the_author_posts_link()?>
                                        </span>
                                        <span class="post-cat">
                                            <i class="far fa-folder-open"></i><?php the_category(',')?>
                                        </span>
                                        <span class="post-meta-date"><i class="far fa-calendar"></i> <?php the_date()?></span>
                                        <span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
                                                class="comments-link">Comments</a></span>
                                    </div>
              <h2 class="entry-title">
              <?php the_title(); ?>
              </h2>
            </div><!-- header end -->

            <div class="entry-content">
            <?php the_content(); ?>
            </div>

            <div class="tags-area d-flex align-items-center justify-content-between">
              <div class="post-tags">
                <a href="#">Construction</a>
                <a href="#">Safety</a>
                <a href="#">Planning</a>
              </div>
              <div class="share-items">
                <ul class="post-social-icons list-unstyled">
                  <li class="social-icons-head">Share:</li>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>

          </div><!-- post-body end -->
        </div><!-- post content end -->
        <?php endwhile;?>
            <?php  else : ?>
                <p><?php esc_html_e('No shows found.', 'text_domain'); ?></p>
      <?php endif ;?>



        <?php
        if (comments_open() || get_comments_number()) {
            comments_template();
        }
        ?>

    </div><!-- Main row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->


<?php get_footer()?>