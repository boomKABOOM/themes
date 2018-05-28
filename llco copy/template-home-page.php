<?php /* Template Name: Home Page Template */ get_header(); ?>

<div class="wrapper w-intro">
  <div class="container">
    <div class="row">
      <div class="col-6 offset-6 textcenter p-5">
        <img src="<?php echo $themeRoot; ?>images/logo-full.png" />
        <a class="boxlink" href="<?php the_field('intro_link'); ?>" id="hoverswitch">Meet Marisa.</a>
      </div>
    </div>
  </div>
</div>

<?php include('sections/header.php'); ?>

<div id="main">
<?php if(get_field('add_intro_block')){ ?>

<div class="wrapper w-header">
  <div class="container">
    <div class="section-title">
      <div class="top-title">
        <div class="line"></div>
        <h2>Test Test Test</h2>
        <div class="line"></div>
      </div>
      <h3>Test Test Test</h3>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="intro-block desc" style="background:rgba(255,255,255,.5) url('<?php get_img_field_url('intro_image'); ?>') bottom left no-repeat; background-size:50%;">
          <div class="modules-row right">
            <div class="col-6 offset-6 pt-5">
              <?php the_field('intro_text'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 textcenter">
        <a class="boxlink" href="<?php the_field('intro_link'); ?>" id="hoverswitch">More about Nicole.</a>
      </div>
    </div>
  </div>
</div>

<?php } ?>


<main>
<div class="wrapper slider dark" style="background:url(<?php the_field('bg_image'); ?>) bottom left no-repeat; background-size:cover;">
  <div class="slide">
    <div class="container slowfade">
      <div class="row slide--content">
        <div class="col-6 col-md-6 slide-up inactive">
          <h3>
          <?php
            if(get_field('title')){
              the_field('title');
            }
          ?>
          </h3>
          <h4>
          <?php
            if(get_field('text')){
              the_field('text');
            }
          ?>
          </h4>
        </div>
        <div class="col-6">
          <img src="<?php echo $themeRoot; ?>images/logo-mhcc-alt.png" />
        </div>
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

<section>
<div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <article>
          <div class="section-title">
            <h2><?php the_field('section_header'); ?></h2>
            <h3><?php the_field('section_header'); ?></h3>
          </div>
          <?php
          if (have_posts()):
            while (have_posts()) : the_post();
              the_content();
            endwhile;
          endif;
          ?>
          <?php if(get_field('grid_breaker_content')){ ?>
            <div class="grid_breaker">
              <?php the_field('grid_breaker_content'); ?>
            </div>
          <?php } ?>
        </article>
      </div>
    </div>
  </div>
</div>
</section>

<?php include('sections/posts-recent.php'); ?>

<?php include('sections/cta-block.php'); ?>

</main>

<?php include('sections/testimonials.php'); ?>

<div class="bg-offwhite-grad"></div>
<?php include('sections/email-signup.php'); ?>

<?php get_footer(); ?>

<script>
$( "#hoverswitch" ).hover(
function() {
$(this).html("Because she's great");
}, function() {
$(this).html("More about Nicole.");
}
);
</script>
