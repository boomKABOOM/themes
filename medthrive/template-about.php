<?php /* Template Name: About Page Template */ get_header(); ?>
<style>
.nav{display:none;}
</style>
<main>

<div class="wrapper bg-img dark" style="background:url(<?php the_field('main_img') ?>);">
  <div class="container">
    <svg class="bg-svg slowestfade" style="opacity:.75;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
      <defs>
        <linearGradient id="grad-o-y" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" style="stop-color:rgb(223,113,83);stop-opacity:1" />
          <stop offset="100%" style="stop-color:rgb(223,236,83);stop-opacity:1" />
        </linearGradient>
      </defs>
      <svg x="-35" y="-30" class="pattern-overlay">
        <path fill="url(#grad-o-y)" d="M50,0 A200,200 1 0 1 100,86.6 A200,200 1 0 1 0,86.6 A200,200 1 0 1 50,0 Z" stroke-linejoin="round" stroke-width="30" stroke="url(#grad-o-y)" style="transform-origin: 50% 50%; transform:scale(.65) rotate(190deg);"/>
      </svg>
      <image xlink:href="<?php echo get_template_directory_uri(); ?>/images/pattern-icon-overlay.png" x="-15" y="-20" height="80" width="80"/>
    </svg>
    <div class="row slowerfade">
      <div class="col-12 col-md-6">
        <?php the_field('title_text') ?>
        <h1>Wellnes is an experience worth sharing</h1>
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-mt-w.png" />
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="content-container squared-edges" style="margin-top:-6rem;">
    <div class="row">
      <div class="col-12">
        <?php the_field('block_1_main') ?>
        <h3>Hello. We’re MedThrive, a Design and Marketing consultancy for health, wellness, and medical practices.</h3>
        <p>MedThrive is a new idea. A focused idea designed for small to midsize health and medical practices. We are a collective of experienced marketers, designers, innovators, and social media catalysts with one unique goal: to level the medical playing field by creating memorable, engaging, and contagious “brand experiences” for your practice. We can help As Within Behavioral Services thrive through sharing experiences that attract, unite and motivate potential clients to act. Our specialty? Creating stories and connections that teach and reach at an emotional level.</p>
      </div>
      <div class="col-12 col-md-6">
        <div class="underlay-bg-grad">
          <?php the_field('block_1_img') ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/img-all-hands.png" />
        </div>
      </div>
      <div class="col-12 col-md-6">
        <?php the_field('block_1_img_text') ?>
        <h4>A new experience for you and your patients.</h4>
        <p>We believe modern practitioners are much more than an office or a title. We believe you have the power to change lives, to be a navigator in the lives of those whom you serve. We believe you are more than a HealthGrades score or a Google Search result. So we work with you to tailor your brand and online manner to go beyond the office and to touch lives.</p>
      </div>
    </div>
  </div>

  <svg class="bg-svg pos-or-01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
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
  </svg>
</div>

<div class="container">
  <div class="row center-mobile">
    <div class="col-12">
      <?php the_field('services_title') ?>
      <h3>Our Services</h3>
      <h3>Blah Blah Blah Blah Blah Blah</h3>
    </div>
  </div>
  <div class="row center-mobile">
    <div class="col-12 col-md-4 align-center order-md-1">
      <?php the_field('service_icon_1') ?>
      <?php the_field('service_text_1') ?>
      <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-heart.png" />
      <h4>Brand Transformation</h4>
      <p>Good branding is good practice. Stand out with an authentic presence that speaks directly to your patients' needs. </p>
    </div>
    <div class="col-12 col-md-4 align-center order-md-3">
      <?php the_field('service_icon_2') ?>
      <?php the_field('service_text_2') ?>
      <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-phone.png" />
      <h4>Experiential Marketing</h4>
      <p>Your practice is more than an office. Create an experience worth remembering with creative positioning.</p>
    </div>
    <div class="col-12 col-md-4 align-center order-md-5">
      <?php the_field('service_icon_3') ?>
      <?php the_field('service_text_3') ?>
      <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-chart.png" />
      <h4>Website Development</h4>
      <p>Your website is your castle in the cloud. Level the playing field by dazzling online.</p>
    </div>

    <div class="col-12 col-md-4 align-center order-md-2">
      <hr class="full-only"/>
      <?php the_field('service_link_1') ?>
      <?php the_field('service_link_text_1') ?>
      <a href="/services/brand-transformation" class="bigger-link">Boost Your Brand &raquo;</a>
      <hr class="mobile-only"/>
    </div>
    <div class="col-12 col-md-4 align-center order-md-4">
      <hr class="full-only"/>
      <?php the_field('service_link_2') ?>
      <?php the_field('service_link_text_2') ?>
      <a href="/services/experiential-marketing" class="bigger-link">Master Your Market &raquo;</a>
      <hr class="mobile-only"/>
    </div>
    <div class="col-12 col-md-4 align-center order-md-6">
      <hr class="full-only"/>
      <?php the_field('service_link_3') ?>
      <?php the_field('service_link_text_3') ?>
      <a href="/services/website-development" class="bigger-link">Refresh Your Website &raquo;</a>
      <hr class="mobile-only"/>
    </div>
  </div>
</div>

<div class="full-spacer full-only"></div>

<div class="container">
  <div class="svg-container">
    <svg class="bg-svg pos-or-02" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 100">
      <defs>
        <linearGradient id="grad-o-y" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" style="stop-color:rgb(223,113,83);stop-opacity:1" />
          <stop offset="100%" style="stop-color:rgb(223,236,83);stop-opacity:1" />
        </linearGradient>
      </defs>
      <svg x="-60" y="-40" class="pattern-overlay">
        <path fill="url(#grad-o-y)" d="M50,0 A200,200 1 0 1 100,86.6 A200,200 1 0 1 0,86.6 A200,200 1 0 1 50,0 Z" stroke-linejoin="round" stroke-width="30" stroke="url(#grad-o-y)" style="transform-origin: 50% 50%; transform:scale(.75) rotate(190deg);"/>
      </svg>
      <image xlink:href="<?php echo get_template_directory_uri(); ?>/images/pattern-icon-overlay.png" x="10" y="-20" height="80" width="80"/>
    </svg>
    <div class="row mt-5 mb-5">
      <div class="col-12 col-md-6 pt-5 pb-5 dark-md pr-5">
        <div class="pr-5">
          <?php the_field('shape_text') ?>
          <h3>Address your online manner with a website refresh.</h3>
          <p>With any treatment, a course of action is defined before symptoms can be mediated.</p>
          <?php the_field('shape_text_learn_more') ?>
          <a href="/services" class="btn btn-outline-primary">Learn More</a>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="content-container">
          <?php the_field('video_container') ?>
          VIDEEEEO
        </div>
      </div>
    </div>
    <div class="row content-container">
      <div class="col-12 col-md-4 stars">
        <?php the_field('testimonial_title') ?>
        <h3>Increased web traffic and digital footprint</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
      </div>
      <div class="col-12 col-md-8">
        <div class="testimonial">
          <?php the_field('testimonial_text') ?>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <h4>Robinet PT</h4>
        </div>
      </div>
    </div>
  </div>
</div>

  <div id="scroll_text" class="scroller">
    <div class="text">
      <?php the_field('scroll_text') ?>
      <span>Ready. Set. Grow! Thrive with us.</span> <span>Ready. Set. Grow! Thrive with us.</span>
    </div>
  </div>
  <script>
  $(document).ready(function(){
    $('#scroll_text .text').css('left', '2rem');
      setInterval(function(){
      $('#scroll_text .text').animate({
        left: - $('#scroll_text .text span').width()
      }, 40000, "linear", function() {
        $('#scroll_text .text').css('left', '2rem');
    });
    }, 2000);
  });
  console.log($('#scroll_text .text span').width());
  </script>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 offset-0 offset-md-1 pl-5 pr-5 align-center">
        <?php the_field('quick_cta') ?>
        <?php the_field('quick_cta_link') ?>
        <?php the_field('quick_cta_link_text') ?>
        <h3>Learn how our experts can help transform your practice for growth.</h3>
        <a href="/contact" class="btn btn-outline-primary">Schedule a Call</a>

      </div>
    </div>
  </div>

</div>

<div class="wrapper header-img-grad dark" style="background:url(<?php echo get_template_directory_uri(); ?>/images/img-bikelady.jpg);">
  <?php the_field('grad_img') ?>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 offset-0 offset-md-2 p-5 mt-5 mb-5 align-center">
        <?php the_field('img_overlay_text') ?>
        <h3>Introduction to our services.</h3>
        <hr/>
        <p>If you’re looking to expand your practice, MedThrive can help. We offer strategic branding, positioning, and marketing services to help you scale swiftly.</p>
      </div>
    </div>
  </div>
</div>

<div class="svg-container">
  <div class="container">
    <div class="overlap-previous content-container squared-edges">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="underlay-bg-grad">
            <?php the_field('block_2_img_1') ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-lady.jpg" />
          </div>
        </div>
        <div class="col-12 col-md-6">
          <?php the_field('block_2_text_1') ?>
          <h3>BioStat</h3>
          <h4>Fast, focused digital introductions for health and wellness practitioners.</h4>
          <hr/>
          <p>Business biographies that focus the reader on the unique properties, services and positioning of the business. Your potential audience gets them “stat” (right away) in an easy to read and receive format.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <?php the_field('block_2_text_2') ?>
          <h3>ServStat</h3>
          <h4>Fast, focused digital introductions for health and wellness practitioners.</h4>
          <hr/>
          <p>We believe modern practitioners are much more than an office or a title. We believe you have the power to change lives, to be a navigator in the lives of those whom you serve. We believe you are more than a HealthGrades score or a Google Search result. So we work with you to tailor your brand and online manner to go beyond the office and to touch lives.</p>
        </div>
        <div class="col-12 col-md-6">
          <div class="underlay-bg-grad no-grad">
            <?php the_field('block_2_img_2') ?>
            <img style="position:relative; z-index:1;" src="<?php echo get_template_directory_uri(); ?>/images/img-baby-feet.jpg" />
          </div>
        </div>
      </div>
      <div class="full-spacer full-only"></div>
      <div class="row content-container full-only">
        <div class="col-12 col-md-5 stars">
          <?php the_field('testimonial_2_title') ?>
          <h3>Increased web traffic and digital footprint</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
          <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
          <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
          <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
          <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
        </div>
        <div class="col-12 col-md-7">
          <div class="testimonial">
            <?php the_field('testimonial_2_text') ?>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <h4>Robinet PT</h4>
          </div>
        </div>
      </div>
      <img class="logo-overlay full-only" src="<?php echo get_template_directory_uri(); ?>/images/pattern-logo-overlay.png" />
      <svg class="bg-svg pos-or-03 full-only" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
        <defs>
          <linearGradient id="grad-o-y" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:rgb(223,113,83);stop-opacity:1" />
            <stop offset="100%" style="stop-color:rgb(223,236,83);stop-opacity:1" />
          </linearGradient>
        </defs>
        <svg x="60" y="10">
          <path fill="url(#grad-o-y)" d="M50,0 A200,200 1 0 1 100,86.6 A200,200 1 0 1 0,86.6 A200,200 1 0 1 50,0 Z" stroke-linejoin="round" stroke-width="30" stroke="url(#grad-o-y)" style="transform-origin: 50% 50%; transform:scale(.4) rotate(115deg);"/>
        </svg>
      </svg>
    </div>
  </div>
  <svg class="bg-svg pos-or-04" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
    <defs>
      <linearGradient id="grad-o-y" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" style="stop-color:rgb(223,113,83);stop-opacity:1" />
        <stop offset="100%" style="stop-color:rgb(223,236,83);stop-opacity:1" />
      </linearGradient>
    </defs>
    <svg x="50" y="-20">
      <path fill="url(#grad-o-y)" d="M50,0 A200,200 1 0 1 100,86.6 A200,200 1 0 1 0,86.6 A200,200 1 0 1 50,0 Z" stroke-linejoin="round" stroke-width="30" stroke="url(#grad-o-y)" style="transform-origin: 50% 50%; transform:scale(.55) rotate(-130deg); opacity:0.75;"/>
    </svg>
  </svg>
  <svg class="bg-svg pos-or-05" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
    <defs>
      <linearGradient id="grad-o-y" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" style="stop-color:rgb(223,113,83);stop-opacity:1" />
        <stop offset="100%" style="stop-color:rgb(223,236,83);stop-opacity:1" />
      </linearGradient>
    </defs>
    <svg x="-50" y="30">
      <path fill="url(#grad-o-y)" d="M50,0 A200,200 1 0 1 100,86.6 A200,200 1 0 1 0,86.6 A200,200 1 0 1 50,0 Z" stroke-linejoin="round" stroke-width="30" stroke="url(#grad-o-y)" style="transform-origin: 50% 50%; transform:scale(.55) rotate(-130deg); opacity:0.75;"/>
    </svg>
  </svg>

</div>

  <div class="container">
    <div class="row">
      <div class="col-12 mb-5 text-center">
        <h3>Our Core Team<br/>
          And by Team, we mean The Lewises</h3>
      </div>
    </div>
    <div class="team-members row">
      <div class="member col-10 offset-1 offset-sm-0 col-sm-6 col-md-4">
          <div class="content">
            <div class="image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-jeff.jpg" alt="">
            </div>
            <div class="bio">
              <p>bio coming soon...</p>
              <div class="social-links"></div>
            </div>
          </div>
          <div class="info text-center">
            <h4>Jeff Lewis</h4>
            <h5>Marketing Director</h5>
          </div>
        </div>
        <div class="member col-10 offset-1 offset-sm-0 col-sm-6 col-md-4">
          <div class="content">
            <div class="image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-nicole.jpg" alt="">
            </div>
            <div class="bio">
              <p>bio coming soon...</p>
              <div class="social-links"></div>
            </div>
          </div>
          <div class="info text-center">
            <h4>Nicole Lewis</h4>
            <h5>Founder &amp; Lead Creative</h5>
          </div>
        </div>
        <div class="member col-10 offset-1 offset-sm-0 col-sm-6 col-md-4">
          <div class="content">
            <div class="image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-chris.jpg" alt="">
            </div>
            <div class="bio">
              <p>bio coming soon...</p>
              <div class="social-links"></div>
            </div>
          </div>
          <div class="info text-center">
            <h4>Chris Lewis</h4>
            <h5>Chief Technical Officer</h5>
          </div>
        </div>
    </div>
  </div>

<div class="wrapper">
  <div class="container">
    <div class="row content-container underlay-bg-grad">
      <div class="col-8 col-lg-6 pr-0 pl-0">
        <div class="underlay-bg-grad">
          <?php the_field('block_2_text_1') ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/img-handshake.jpg" />
        </div>
      </div>
      <div class="col-12 col-lg-6 col-md-8 col-sm-12">
        <h3>Are we right for you?</h3>
        <ul class="green-bullets">
          <li>You offer something unique, not unbending.</li>
          <li>You are more than a HealthGrades score or a Google Search result.</li>
          <li>You provide an experience, not only treatment.</li>
          <li>You serve with compassion as well as competency.</li>
          <li>You want a message that resonates.</li>
        </ul>
      </div>
    </div>

    <div class="full-spacer"></div>

    <div class="row">
      <div class="col-12 col-md-8 offset-0 offset-md-2 align-center">
        <h3>We'd love to talk</h3>
        <p>We’d like the opportunity to show you what we can be and what As Within Behavioral Health Services can become through focused and experiential marketing.</p>

        <p>Jeff Lewis, our brand development and outreach director, is located in Rockford Michigan. He is ready to talk with you, at your convenience. You can reach him by scheduling a 30–minute appointment or sending an email below.</p>

        <p>Together, we can create a path to find and convert the people you will serve to change their world.</p>

        <a href="/contact" class="btn btn-outline-primary">Schedule a Call</a>
        <a href="/contact" class="btn btn-outline-primary">Request More Info</a>

      </div>
    </div>

  </div>
</div>

</main>

<?php get_footer(); ?>
