<?php get_header(); ?>

<?php include('sections/header.php'); ?>

<div id="main">
  <div class="wrapper">
    <div class="container">
        <!-- article -->
        <article id="post-<?php the_ID(); ?>" class="post-single-item">
          <h4>
            <?php the_category(' | '); ?>
            <span>&nbsp;|&nbsp;<?php echo get_the_date('M d, Y'); ?></span>
          </h4>
          <h1><?php the_title(); ?></h1>
          <div class="author"><?php echo get_the_author(); ?></div>

          <?php include('sections/social-share.php'); ?>

          <a class="image" href="<?php echo get_permalink(); ?>"> <img src="<?php if ( has_post_thumbnail() ) {
            	the_post_thumbnail_url('large');
            } else{
              echo($themeRoot . 'images/img-main1.jpg');
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

        <div class="row mb-5">
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

<?php get_footer(); ?>
