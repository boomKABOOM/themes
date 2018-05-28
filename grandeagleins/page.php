<?php get_header(); ?>

<?php include('sections/header.php'); ?>

<div id="main">
  <div class="header-image" style="background:url(<?php the_post_thumbnail_url(); ?> ) center no-repeat; background-size:cover;"></div>

<section>
<div class="wrapper">
  <div class="container">
    <div class="section-title pb-5">
      <div class="top-title">
        <div class="line"></div>
        <h2><?php the_field('page_intro'); ?></h2>
        <div class="line"></div>
      </div>
      <h3><?php the_field('page_title'); ?></h3>
    </div>
    <article>
    <?php
    if (have_posts()):
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    endif;
    ?>
  </article>
  </div>
</div>
</section>

<?php if(get_field('second_section_content')){ ?>
<section>
<div class="wrapper">
  <div class="container intro-block bg-img-half" style="background:#fff url(<?php the_field('second_section_image'); ?>) no-repeat; background-size:50%;">
    <img class="mobile-only" src="<?php the_field('second_section_image'); ?>"/>
    <div class="row">
      <div class="col-12 col-md-6 offset-0 offset-md-6 p-5" style="display: flex; align-items: center;">
        <article>
          <?php the_field('second_section_content'); ?>
        </article>
      </div>
    </div>
</div>
</section>
<?php } ?>

<?php include('sections/cta-block.php'); ?>

<?php if(get_field('add_process')) {
  include('sections/process.php');
} ?>

<?php if(get_field('add_testimonials')) {
  include('sections/testimonials.php');
} ?>


</div>

<?php get_footer(); ?>
