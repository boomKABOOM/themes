<?php /* Template Name: Home Page Template */ get_header(); ?>
<main>
<div class="wrapper slider dark" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php the_field('bg_image'); ?>) left no-repeat; background-size:cover;">
  <div class="slide">
    <div class="container slowfade">
      <div class="row slide--content">
        <div class="col-12 col-md-8 slide-up inactive">
          <h3>
          <?php
            if(get_field('title')){
              the_field('title');
            } else {
              echo 'Be Your Best';
            }
          ?>
          </h3>
          <h4>
          <?php
            if(get_field('text')){
              the_field('text');
            } else {
              echo 'A hands–on PT approach which creates health awareness, sets realistic goals and builds enthusiasm to stay energized for the best life has to offer.';
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

<div class="wrapper home-page-styles bg-img-half" style="background:url(<?php the_post_thumbnail_url(); ?>) top right no-repeat; background-size:45%;">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <article>
          <h3><?php the_field('section_header'); ?></h3>
          <?php
          if (have_posts()):
            while (have_posts()) : the_post();
              the_content();
            endwhile;
          endif;
          ?>
          <a href="/our-clinic/" class="btn btn-outline-primary">Learn More</a>
        </article>
      </div>
    </div>
  </div>
</div>

<?php include('sections/our-therapies.php'); ?>

<?php include('sections/cta-block.php'); ?>

<?php
if(get_field('add_related_content')){
  include('sections/posts-or-pages-custom.php');
} else {
  include('sections/posts-recent.php');
}
?>
</main>

<?php include('sections/testimonials.php'); ?>

<div class="bg-offwhite-grad"></div>
<?php include('sections/email-signup.php'); ?>

<?php get_footer(); ?>
