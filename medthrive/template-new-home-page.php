<?php /* Template Name: New Home Page Template */ get_header(); ?>
<main>
<div class="wrapper slider">
  <div id="overlay" class="overlay"></div>
  <video id="home_bg_vid" class="full-only darken" muted="" autoplay="" loop="">
    <source id="mp4" type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/images/kid-doc-teddy-lg.mp4">
  </video>
  <div id="prompt" class="prompt--next full-only">
    Grow Your Presence
    <div class="arrow">
      <img src="<?php echo get_template_directory_uri(); ?>/images/arr-dn.png" />
    </div>
  </div>

  <div class="slide">
    <div class="container slowfade">
      <div class="slide--content">
        <div class="text-center slide-up inactive">
          <div class="dark">
            <div class="hero-text">
              <?php the_field('video_overlay_title') ?>
              <hr/>
              <?php the_field('video_overlay_content') ?>
              <a href="<?php the_field('section_1_link') ?>" class="btn btn-outline-primary mobile-only"><?php the_field('section_1_button_text') ?></a>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script>

$('#prompt').click(function(){
  $('html, body').animate({
			scrollTop: $('#content').offset().top
		}, 750);
});

</script>

<div id="content" class="wrapper">
  <div class="container">
    <svg class="bg-svg pos-hom-01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
      <defs>
        <linearGradient id="grad-o-y" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" style="stop-color:rgb(223,113,83);stop-opacity:1" />
          <stop offset="100%" style="stop-color:rgb(223,236,83);stop-opacity:1" />
        </linearGradient>
      </defs>
      <svg x="39" y="-20" class="full-only">
        <path fill="url(#grad-o-y)" d="M50,0 A200,200 1 0 1 100,86.6 A200,200 1 0 1 0,86.6 A200,200 1 0 1 50,0 Z" stroke-linejoin="round" stroke-width="30" stroke="url(#grad-o-y)" style="transform-origin: 50% 50%; transform:scale(.65) rotate(-130deg); opacity:0.75;"/>
      </svg>
      <svg x="39" y="-20" class="full-only">
        <path fill="url(#grad-o-y)" d="M50,0 A200,200 1 0 1 100,86.6 A200,200 1 0 1 0,86.6 A200,200 1 0 1 50,0 Z" stroke-linejoin="round" stroke-width="30" stroke="url(#grad-o-y)" style="transform-origin: 50% 50%; transform:scale(.5) rotate(45deg); "/>
      </svg>
    </svg>
    <div class="row direction-lg-reverse pt-0 pt-md-5 pb-0 pb-md-5 center-mobile">
  	  <div class="col-12 col-lg-6">
        <?php the_field('section_1') ?>
  		  <a href="<?php the_field('section_1_link') ?>" class="btn btn-outline-primary full-only"><?php the_field('section_1_button_text') ?></a>
  	  </div>
      <div class="col-12 col-lg-6 hug-right full-only">
        <img src="<?php the_field('section_1_img') ?>" />
      </div>
    </div>

    <div class="content-container service">
      <div class="row center-mobile">
    	  <div class="col-12 full-only">
          <div class="content-container align-center">
            <?php the_field('section_2_intro') ?>
          </div>
        </div>
      </div>

        <div class="row">
          <div class="col-12 col-md-4 align-center service--content">
            <img class="icon" src="<?php the_field('section_2_icon_1') ?>" />
            <?php the_field('section_2_text_1') ?>
            <div class="mobile-only">
              <?php the_field('section_2_link_1') ?>
              <hr style="margin:3rem auto;"/>
            </div>
          </div>
      	  <div class="col-12 col-md-4 align-center">
            <img class="icon" src="<?php the_field('section_2_icon_2') ?>" />
            <?php the_field('section_2_text_2') ?>
            <div class="mobile-only">
              <?php the_field('section_2_link_2') ?>
              <hr style="margin:3rem auto;"/>
            </div>
          </div>
      	  <div class="col-12 col-md-4 align-center">
            <img class="icon" src="<?php the_field('section_2_icon_3') ?>" />
            <?php the_field('section_2_text_3') ?>
            <div class="mobile-only pb-5">
              <?php the_field('section_2_link_3') ?>
            </div>
          </div>
        </div>

        <div class="row m-0 p-0 full-only">
          <div class="col-12 col-md-4 align-center">
            <hr/>
          </div>
          <div class="col-12 col-md-4 align-center">
            <hr/>
          </div>
          <div class="col-12 col-md-4 align-center">
            <hr/>
          </div>
        </div>

        <div class="row m-0 p-0 full-only">
          <div class="col-12 col-md-4 align-center">
            <?php the_field('section_2_link_1') ?>
          </div>
      	  <div class="col-12 col-md-4 align-center">
            <?php the_field('section_2_link_2') ?>
          </div>
      	  <div class="col-12 col-md-4 align-center">
            <?php the_field('section_2_link_3') ?>
          </div>
        </div>

    </div>

    <div class="svg-container">
      <svg class="bg-svg pos-hom-02" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 100">
        <defs>
          <linearGradient id="grad-o-y" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:rgb(223,113,83);stop-opacity:1" />
            <stop offset="100%" style="stop-color:rgb(223,236,83);stop-opacity:1" />
          </linearGradient>
        </defs>
        <svg x="-52" y="-30" class="pattern-overlay">
          <path fill="url(#grad-o-y)" d="M50,0 A200,200 1 0 1 100,86.6 A200,200 1 0 1 0,86.6 A200,200 1 0 1 50,0 Z" stroke-linejoin="round" stroke-width="30" stroke="url(#grad-o-y)" style="transform-origin: 50% 50%; transform:scale(.7) rotate(200deg);"/>
        </svg>
        <image xlink:href="<?php echo get_template_directory_uri(); ?>/images/pattern-icon-overlay.png" x="0" y="-20" height="80" width="80"/>
      </svg>
      <div class="row mt-5 mb-5">
        <div class="col-12 col-md-6 pt-5 pb-5 dark full-only">
          <?php the_field('section_3') ?>
          <a href="<?php the_field('section_3_link') ?>" class="btn btn-outline-primary"><?php the_field('section_3_button_text') ?></a>
        </div>
        <div class="col-12 col-md-6">
          <img class="extra-wide" src="<?php the_field('section_3_img') ?>" />
        </div>
      </div>

      <?php include('sections/cta-block.php'); ?>

    </div>

  </div>
</div>

</main>

<?php include('sections/after-content-sections.php'); ?>

<?php get_footer(); ?>
