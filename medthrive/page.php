<?php get_header(); ?>

<?php if (have_posts()):
while (have_posts()) : the_post(); ?>
<section>
<div class="wrapper default-page pt-5 pb-5" style="background: url(<?php
  if (has_post_thumbnail()) {
  	the_post_thumbnail_url('full');
  } else {
    echo get_template_directory_uri().'/images/img-main1a.jpg';
  }
?>) left no-repeat; background-size:cover;">
  <div class="container slowfade" style="padding:6em 0 4em 0;">

  </div>
</div>

<div class="wrapper">
  <div class="container content-container" style="margin-top:-6em;">

        <?php include('sections/breadcrumb.php'); ?>
        <!-- article -->
        <article id="post-<?php the_ID(); ?>">
          <?php if(!(get_field('remove_title_subtitle'))){ ?>

              <h2><?php
                if(get_field('page_intro')){
                  the_field('page_intro');
                } else {
                  echo get_the_title(wp_get_post_parent_id( $post_ID ));
                }
              ?></h2>
              <h1><?php
              if(get_field('page_title')){
                the_field('page_title');
              } else {
                the_title();
              }
              ?></h1>

          <?php } ?>
          <?php

              the_content();

            if( have_rows('after_content_links') ):
              while ( have_rows('after_content_links') ) : the_row();
              ?>
              <a href="<?php the_sub_field('link'); ?>" class="btn btn-outline-primary mt-2"><?php the_sub_field('text'); ?></a>

              <?php
              endwhile;
            endif;
          ?>
        </article>
        <!-- /article -->
        <?php
        //services = id 8
        //website = id 510
        //brand = id 503
        //digital = id 508
        //social = id 513
        //market = id 506
        if ($post->post_parent == 8 || $post->ID == 8) { ?>
          <div class="sidebar sticky dark full-only">
            <?php if($post->ID == 8 || $post->ID == 503 || $post->ID == 506 || $post->ID == 508 || $post->ID == 510 || $post->ID == 513){ ?>
              <h5>Service Areas</h5>
              <?php footer_nav_1(); ?>
            <?php } else { ?>
              <h5>Services</h5>
              <?php footer_nav_2(); ?>
            <?php } ?>
          </div>
          <div class="sidebar mobile-only">
            <?php if($post->ID == 8 || $post->ID == 503 || $post->ID == 506 || $post->ID == 508 || $post->ID == 510 || $post->ID == 513){ ?>
              <h5>Service Areas</h5>
              <?php footer_nav_1(); ?>
            <?php } else { ?>
              <h5>Services</h5>
              <?php footer_nav_2(); ?>
            <?php } ?>
          </div>
        <?php } ?>
  </div>
</div>

<?php endwhile; endif; ?>
</section>

<?php include('sections/after-content-sections.php'); ?>

<?php get_footer(); ?>
