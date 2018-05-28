<?php get_header(); ?>

<?php include('sections/header.php'); ?>

<div class="wrapper">
  <div class="container">
        <!-- article -->
        <article id="post-<?php the_ID(); ?>" class="post-single-item">
          <h2>
            <?php the_category(' | '); ?>
          </h2>
          <h1><?php the_title(); ?></h1>


          <?php include('sections/social-share.php'); ?>

          <a class="image" href="<?php echo get_permalink(); ?>"> <img src="<?php if ( has_post_thumbnail() ) {
            	the_post_thumbnail_url('large');
            } else{
              echo($themeRoot . 'images/img-main1.jpg');
            }
            ?>" /></a>
          <?php
            the_content();
          ?>
        </article>
        <!-- /article -->

        <div class="row">
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

<?php get_footer(); ?>
