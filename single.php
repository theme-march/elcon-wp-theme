
<?php get_header(); ?>
<div id="banner-area" class="banner-area"  style="background-image:url(<?php  echo get_template_directory_uri() ?>/images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">News</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">News</a></li>
                      <li class="breadcrumb-item active" aria-current="page">News Right sidebar</li>
                    </ol>
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


        <div class="author-box d-nlock d-sm-flex">
          <div class="author-img mb-4 mb-md-0">
            <img loading="lazy" src="images/news/avator1.png" alt="author">
          </div>
          <div class="author-info">
            <h3>Elton Themen<span>Site Engineer</span></h3>
            <p class="mb-2">Lisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad vene minim
              veniam, quis nostrud exercitation nisi ex ea commodo.</p>
            <p class="author-url mb-0">Website: <span><a href="#">http://www.example.com</a></span></p>

          </div>
        </div> <!-- Author box end -->

        <!-- Post comment start -->
        <div id="comments" class="comments-area">
          <h3 class="comments-heading">07 Comments</h3>

          <ul class="comments-list">
            <li>
              <div class="comment d-flex">
                <img loading="lazy" class="comment-avatar" alt="author" src="images/news/avator1.png">
                <div class="comment-body">
                  <div class="meta-data">
                    <span class="comment-author mr-3">Michelle Aimber</span>
                    <span class="comment-date float-right">January 17, 2016 at 1:38 pm</span>
                  </div>
                  <div class="comment-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p>
                  </div>
                  <div class="text-left">
                    <a class="comment-reply font-weight-bold" href="#">Reply</a>
                  </div>
                </div>
              </div><!-- Comments end -->

              <ul class="comments-reply">
                <li>
                  <div class="comment d-flex">
                    <img loading="lazy" class="comment-avatar" alt="author" src="images/news/avator2.png">
                    <div class="comment-body">
                      <div class="meta-data">
                        <span class="comment-author mr-3">Tom Harnandez</span>
                        <span class="comment-date float-right">January 17, 2016 at 1:38 pm</span>
                      </div>
                      <div class="comment-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                          laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p>
                      </div>
                      <div class="text-left">
                        <a class="comment-reply font-weight-bold" href="#">Reply</a>
                      </div>
                    </div>
                  </div><!-- Comments end -->
                </li>
              </ul><!-- comments-reply end -->
              <div class="comment d-flex last">
                <img loading="lazy" class="comment-avatar" alt="author" src="images/news/avator3.png">
                <div class="comment-body">
                  <div class="meta-data">
                    <span class="comment-author mr-3">Genelia Dusteen</span>
                    <span class="comment-date float-right">January 17, 2016 at 1:38 pm</span>
                  </div>
                  <div class="comment-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p>
                  </div>
                  <div class="text-left">
                    <a class="comment-reply font-weight-bold" href="#">Reply</a>
                  </div>
                </div>
              </div><!-- Comments end -->
            </li><!-- Comments-list li end -->
          </ul><!-- Comments-list ul end -->
        </div><!-- Post comment end -->

        <div class="comments-form border-box">
          <h3 class="title-normal">Add a comment</h3>

          <form role="form">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="message"><textarea class="form-control required-field" id="message" placeholder="Your Comment" rows="10" required></textarea></label>
                </div>
              </div><!-- Col 12 end -->

              <div class="col-md-4">
                <div class="form-group">
                  <label for="name"><input class="form-control" name="name" id="name" placeholder="Your Name" type="text" required></label>
                </div>
              </div><!-- Col 4 end -->

              <div class="col-md-4">
                <div class="form-group">
                  <label for="email"><input class="form-control" name="email" id="email" placeholder="Your Email" type="email" required></label>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="website"><input class="form-control" id="website" placeholder="Your Website" type="text" required></label>
                </div>
              </div>

            </div><!-- Form row end -->
            <div class="clearfix">
              <button class="btn btn-primary" type="submit" aria-label="post-comment">Post Comment</button>
            </div>
          </form><!-- Form end -->
        </div><!-- Comments form end -->
      </div><!-- Content Col end -->

<!-- <?php get_sidebar()?> -->

    </div><!-- Main row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->
<?php get_footer()?>