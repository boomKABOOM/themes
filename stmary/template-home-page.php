<?php /* Template Name: Home Page Template */ get_header(); ?>
<main>
<div class="wrapper slider dark" style="background:url(<?php the_field('bg_image'); ?>) left no-repeat; background-size:cover;">
  <div class="slide">
    <div class="container slowfade">
      <div class="row slide--content">
        <div class="col-12 col-md-6 slide-up inactive bg-gold dark pt-3 pl-5">
          <h3>
          <?php
            if(get_field('title')){
              the_field('title');
            } else {
              echo 'Join Us for Mass';
            }
          ?>
          </h3>
          <h4>
          <?php
            if(get_field('text')){
              the_field('text');
            } else {
              echo 'Saturday:<br/>
              12 PM - 2 PM<br/><br/>
              Sunday:<br/>
              10 AM - 12 PM - 2 PM';
            }
          ?>
          </h4>
        </div>
        <div class="col-6"></div>
        <div class="col-12">
          <?php
          if( have_rows('btns') ):
            while ( have_rows('btns') ) : the_row();
            ?>
            <a href="<?php the_sub_field('btn_link'); ?>" class="btn btn-outline-primary btn-orange"><?php the_sub_field('btn_text'); ?></a>

            <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <img src="<?php the_post_thumbnail_url(); ?>" />
      </div>
      <div class="col-12 col-md-6">
        <article>
          <?php
          if (have_posts()):
            while (have_posts()) : the_post();
              the_content();
            endwhile;
          endif;
          ?>
          <a href="#" class="btn btn-outline-primary">Learn More</a>
        </article>
      </div>
    </div>
  </div>
</div>

<?php include('sections/posts-recent.php'); ?>


<?php include('sections/cta-block.php'); ?>

</main>

<?php include('sections/testimonials.php'); ?>

<?php get_footer(); ?>
