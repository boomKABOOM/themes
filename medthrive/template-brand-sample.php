<meta name="googlebot-news,bingbot" content="noindex">

<?php /* Template Name: Brand Sample Template */ get_header(); ?>

<?php
$black_color = get_field('black_color');
if($black_color){ ?>

  <style>
    h1, h3, h4{
      color:<?php the_field('black_color'); ?> !important;
    }
    .parallax, .parallax *{
      color: #fff !important;
    }
  </style>

<?php } ?>

<?php if (have_posts()):
while (have_posts()) : the_post(); ?>
<section>
<div class="wrapper default-page pt-5 pb-5 parallax" style="background:linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(<?php
  if (has_post_thumbnail()) {
  	the_post_thumbnail_url('full');
  } else {
    echo get_template_directory_uri().'/images/img-main1a.jpg';
  }
?>) left no-repeat; background-size:cover;">
  <div class="container slowfade" style="padding:10em 0;">
    <?php the_field('intro_text'); ?>
  </div>
</div>

<div class="wrapper">
  <div class="container content-container" style="margin-top:-6em;">

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
        if(get_field('sticky_links')){ ?>
          <div class="sidebar sticky dark full-only">
            <?php the_field('sticky_links'); ?>
          </div>
          <div class="sidebar mobile-only">
            <?php the_field('sticky_links'); ?>
          </div>
        <?php } ?>
  </div>
</div>

<?php endwhile; endif; ?>
</section>

<?php include('sections/after-content-sections.php'); ?>

<?php get_footer(); ?>
