<?php 

/*
Template Name: Custom Blog Post Type Page
*/

get_header();

?>


<div id="banner-area" class="banner-area"
    style="background-image:url(<?php  echo get_template_directory_uri() ?>/images/banner/banner1.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title"><?php echo bloginfo('name') ?></h1>
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
            <div class="col-lg-12 mb-5 mb-lg-0 order-0 order-lg-1">
                <?php
            // Custom query to retrieve custom post type posts
                $args = array(
                    'post_type' => 'Blog_Post', // Replace 'custom_post' with your custom post type slug
                    'posts_per_page' => 3 ,// Display all posts
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ,
                );
                $custom_query = new WP_Query( $args );
                ?>
            <?php if ($custom_query->have_posts()) : ?>
                    <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                        <div class="post">
                            <div class="post-media post-image">
                            <?php 
                // Display the featured image
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail('large', ['class' => 'featured-image']);
                                endif;
                            ?>
                                
                            </div>

                            <div class="post-body">
                                <div class="entry-header">
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
                                        <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
                                    </h2>
                                </div><!-- header end -->

                                <div class="entry-content">
                                    <p>   <?php the_excerpt(); ?></p>
                                </div>

                                <div class="post-footer">
                                    <a href="<?php  the_permalink()?>" class="btn btn-primary">Continue Reading</a>
                                </div>

                            </div><!-- post-body end -->
                        </div><!-- 1st post end -->
                      <?php endwhile;?>
                    <?php  else : ?>
                        <p><?php esc_html_e('No shows found.', 'text_domain'); ?></p>
                <?php endif ;?>

                  <?php
                    // Pagination
                    $pagination_args = array(
                        'total'        => $custom_query->max_num_pages,
                        'current'      => max(1, get_query_var('paged')),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 2,
                        'prev_text'    => __('« Previous'),
                        'next_text'    => __('Next »'),
                        'add_args'     => false,
                        'add_fragment' => '',
                    );
                    echo paginate_links($pagination_args);
                    ?>

            </div><!-- Content Col end -->

        </div><!-- Main row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->
<?php get_footer(); ?>