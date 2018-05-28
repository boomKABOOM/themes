<?php /* Template Name: Contact Template */ get_header(); ?>

<?php include('sections/header.php'); ?>


<div id="main" style="background:linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url('<?php echo $themeRoot; ?>images/bg-landscape.jpg') top left no-repeat; background-size:cover;">


<main>

<section>
<div class="wrapper">
  <div class="container" style="background:none; margin-top:2em;">
    <div class="section-title" style="padding:0;">
      <div class="top-title">
        <div class="line"></div>
        <h2>Send a note</h2>
        <div class="line"></div>
      </div>
      <h3>Contact</h3>
    </div>
    <?php the_field('intro_text'); ?>
  </div>
  <div class="container" style="background:none;">
    <div class="intro-block p-5" style="margin-top:0; height:auto;">
      <div class="row">
        <div class="col-12 col-md-6 form contact-form pr-0 pr-md-5">
          <img src="<?php echo $themeRoot; ?>images/logo-gei.png" class="pr-5 pl-5 pb-5" />
          <?php echo do_shortcode('[ninja_form id=1]'); ?>
        </div>
        <div class="col-12 col-md-6 contact-content pt-5 pl-0 pl-md-5" style="align-self:center;">
          <article>
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
  <div class="text-center" style="margin:-6em 0 2em 0;">
    <a id="trigger-submit" class="boxlink" id="hoverswitch">Mail</a>
  </div>
</div>
</section>

</main>
</div>

<?php get_footer(); ?>

<script>
$('#trigger-submit').click(function(){
  $('.form input[type=button]').trigger('click');
});
</script>
