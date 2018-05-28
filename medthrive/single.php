<?php get_header(); ?>

<section>
<div class="wrapper default-page pt-5 pb-5" style="background: url(<?php echo get_template_directory_uri(); ?>/images/img-main1a.jpg) left no-repeat; background-size:cover;">
  <div class="container slowfade" style="padding:6em 0 4em 0;">

  </div>
</div>

<div class="wrapper">
  <div class="wrapper">
    <div class="container content-container" style="margin-top:-6em;">
      <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">&larr; back to Resources<a>
      <!-- article -->
      <article id="post-<?php the_ID(); ?>" class="post-single-item">
        <h6 class="mb-0">
          <?php the_category(' | '); ?>
          <span>&nbsp;|&nbsp;<?php echo get_the_date('M d, Y'); ?></span>
        </h6>
        <em><?php the_field('author_info'); ?></em>
        <h1><?php the_title(); ?></h1>

        <?php include('sections/social-share.php'); ?>

        <a class="image" href="<?php echo get_permalink(); ?>"> <img src="<?php if ( has_post_thumbnail() ) {
          	the_post_thumbnail_url('large');
          } else{
            echo(get_template_directory_uri() . '/images/img-main1.jpg');
          }
          ?>" /></a>
        <?php
        if (have_posts()) :
        while (have_posts()) :
          the_post();
          the_content();
        endwhile;
        endif;?>
      </article>
      <!-- /article -->

      <hr/>

      <div class="row pb-5">
        <div class="col-6">
          <strong>PREVIOUS</strong><br/>
          <?php previous_post_link(); ?>
        </div>
        <div class="col-6 text-right">
          <strong>NEXT</strong><br/>
          <?php next_post_link(); ?>
        </div>
      </div>


    </div>
  </div>
</div>

<?php include('sections/after-content-sections.php'); ?>

<?php get_footer(); ?>
