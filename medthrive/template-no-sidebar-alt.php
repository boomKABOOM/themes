<?php /* Template Name: No Sidebar Alt Template */ get_header(); ?>

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
      <?php
          the_content();
        if( have_rows('after_content_links') ):
          while ( have_rows('after_content_links') ) : the_row();
          ?>
          <small><a href="<?php the_sub_field('link'); ?>" class="btn btn-outline-primary text-small mt-2"><?php the_sub_field('text'); ?></a></small>

          <?php
          endwhile;
        endif;
      ?>
    </article>
    <!-- /article -->
  </div>
</div>

<?php endwhile; endif; ?>
</section>

<?php include('sections/after-content-sections.php'); ?>

<?php get_footer(); ?>
