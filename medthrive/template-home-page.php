<?php /* Template Name: Home Page Template */ get_header(); ?>
<main>
<div class="wrapper slider">
  <div id="overlay" class="overlay"></div>
  <video id="home_bg_vid" class="full-only darken" muted="" autoplay="" loop="">
    <source id="mp4" type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/images/kid-doc-teddy-lg.mp4">
  </video>
  <div id="prompt" class="prompt--next">
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
              <h1>Patient Centric Marketing</h1>
              <h2>For the modern health practitioner</h2>
              <hr/>
              <h4>A brand message that resonates and the website of your dreams? We've got you covered.</h4>
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
    <svg class="bg-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
      <defs>
        <linearGradient id="grad-o-y" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" style="stop-color:rgb(223,113,83);stop-opacity:1" />
          <stop offset="100%" style="stop-color:rgb(223,236,83);stop-opacity:1" />
        </linearGradient>
      </defs>
      <svg x="50" y="-20">
        <path fill="url(#grad-o-y)" d="M50,0 A200,200 1 0 1 100,86.6 A200,200 1 0 1 0,86.6 A200,200 1 0 1 50,0 Z" stroke-linejoin="round" stroke-width="30" stroke="url(#grad-o-y)" style="transform-origin: 50% 50%; transform:scale(.65) rotate(-130deg); opacity:0.75;"/>
      </svg>
      <svg x="50" y="-20">
        <path fill="url(#grad-o-y)" d="M50,0 A200,200 1 0 1 100,86.6 A200,200 1 0 1 0,86.6 A200,200 1 0 1 50,0 Z" stroke-linejoin="round" stroke-width="30" stroke="url(#grad-o-y)" style="transform-origin: 50% 50%; transform:scale(.5) rotate(45deg); "/>
      </svg>
    <svg>
    <div class="row pt-0 pt-md-5 pb-0 pb-md-5 center-mobile">
  	  <div class="col-12 col-md-7">
        <img class="logo pt-5 pb-5 mobile-only" src="<?php echo get_template_directory_uri(); ?>/images/logo-mt-alt.png" />
  		  <h3><span>We diagnose, then treat.</span> <span>Just like you.</span></h3>
        <p>MedThrive is a new idea. An idea that levels the medical playing field by reaching beyond the imaginable to create memorable, engaging, and contagious brand experiences.</p>
        <a href="/services" class="btn btn-outline-primary">Learn More</a>
  	  </div>
      <div class="col-12 col-md-5">
        <img src="<?php echo get_template_directory_uri(); ?>/images/intro-image.png" />
      </div>
    </div>

    <div class="content-container">
      <div class="row center-mobile">
    	  <div class="col-12">
          <div class="content-container align-center">
            <h3>Well, that escalated quickly.</h3>
            <hr/>
            <p>If you’re looking to expand your practice, MedThrive can help. We offer strategic branding, positioning, and marketing services to help you scale swiftly.</p>
          </div>

        </div>
    	  <div class="col-12 col-md-4 align-center">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-heart.png" />
          <h4>Brand Transformation</h4>
          <p>Good branding is good practice. Stand out with an authentic presence that speaks directly to your patients' needs. </p>
          <hr class="full-only"/>
          <a href="/services/brand-transformation" class="bigger-link">Boost Your Brand &raquo;</a>
          <hr class="mobile-only"/>
        </div>
    	  <div class="col-12 col-md-4 align-center">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-phone.png" />
          <h4>Experiential Marketing</h4>
          <p>Your practice is more than an office. Create an experience worth remembering with creative positioning.</p>
          <hr class="full-only"/>
          <a href="/services/experiential-marketing" class="bigger-link">Master Your Market &raquo;</a>
          <hr class="mobile-only"/>
        </div>
    	  <div class="col-12 col-md-4 align-center">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-chart.png" />
          <h4>Website Development</h4>
          <p>Your website is your castle in the cloud. Level the playing field by dazzling online.</p>
          <hr class="full-only"/>
          <a href="/services/website-development" class="bigger-link">Refresh Your Website &raquo;</a>
          <hr class="mobile-only"/>
        </div>
      </div>
    </div>

    <div class="svg-container">
      <svg class="bg-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
        <defs>
          <linearGradient id="grad-o-y" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:rgb(223,113,83);stop-opacity:1" />
            <stop offset="100%" style="stop-color:rgb(223,236,83);stop-opacity:1" />
          </linearGradient>
        </defs>
        <svg x="-45" y="-30" class="pattern-overlay">
          <path fill="url(#grad-o-y)" d="M50,0 A200,200 1 0 1 100,86.6 A200,200 1 0 1 0,86.6 A200,200 1 0 1 50,0 Z" stroke-linejoin="round" stroke-width="30" stroke="url(#grad-o-y)" style="transform-origin: 50% 50%; transform:scale(.7) rotate(210deg);"/>
        </svg>
        <image xlink:href="<?php echo get_template_directory_uri(); ?>/images/pattern-icon-overlay.png" x="-15" y="-20" height="80" width="80"/>
      <svg>
      <div class="row mt-5 mb-5">
        <div class="col-12 col-md-6 pt-5 pb-5 dark">
          <h3>Address your online manner with a website refresh.</h3>
          <p>With any treatment, a course of action is defined before symptoms can be mediated.</p>
          <a href="/services" class="btn btn-outline-primary">Learn More</a>
        </div>
        <div class="col-12 col-md-6">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sample-stuff.png" />
        </div>
      </div>

      <?php include('sections/cta-block.php'); ?>

    </div>

  </div>
</div>

</main>

<?php include('sections/after-content-sections.php'); ?>

<?php get_footer(); ?>
