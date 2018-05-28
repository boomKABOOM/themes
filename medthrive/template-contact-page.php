<?php /* Template Name: Contact Template */ get_header(); ?>
<?php if (have_posts()):
while (have_posts()) : the_post(); ?>

<section>
<div class="wrapper pt-5 pb-5" style="background: url(<?php
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
    <h3>Contact Us</h3>
    <hr/>
    <div class="form">
      <div id="form-content">
        <div class="links-container form text-center" id="form">
    			<?php echo do_shortcode('[ninja_form id=3]'); ?>
    		</div>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $('#quicklinks a').hover(function(){
    $('#quicklinks a').each(function(){
      $(this).removeClass('active');
    });
  });
  if($(document).width() < 576){
    $('#form-content').appendTo('#page-content');
  } else {
    $('#form-content').prependTo('#page-content');
  }
});
</script>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
