<?php $themeRoot = "/wp-content/themes/mhconsulting/"; ?>

<link rel="stylesheet" type="text/css" href="<?php echo $themeRoot; ?>include/vendors/slick/slick.css"/>

<div class="container">
  <div class="section-title">
    <div class="top-title">
      <div class="line"></div>
      <h2>Praise!</h2>
      <div class="line"></div>
    </div>
    <h3>Testimonials</h3>
  </div>
</div>

<section>
<div class="wrapper">
  <div class="container pt-0 pt-md-5 mt-0">
    <div class="testimonials-container" id="testimonials">

      <?php
        if( have_rows('testimonial') ):
          while ( have_rows('testimonial') ) : the_row();
      ?>
      <div class="testimonial">
        <div class="text">
          <?php the_sub_field('quote'); ?>
        </div>
        <div class="author">
          - <?php the_sub_field('author'); ?>
        </div>
      </div>
      <?php
          endwhile;
        endif;
      ?>
    </div>

    <div id="test-dotnav"></div>

  </div>
</div>
</section>

<script src="<?php echo $themeRoot; ?>include/vendors/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script>
$(document).ready(function(){
  $('#testimonials').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    appendDots: '#test-dotnav'
  });
});

</script>
