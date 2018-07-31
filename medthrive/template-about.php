<?php /* Template Name: About Page Template */ get_header(); ?>

<main>

<div class="wrapper header-img-grad dark" style="background:url(<?php the_field('header_img'); ?>);">

  <div style="height:15rem;"></div>
</div>

<div class="container">
  <div class="content-container squared-edges" style="margin-top:-6rem;">
    <div class="row">
      <div class="col-12">
        <?php the_field('block_1_main') ?>
      </div>
      
    </div>

    <?php if( have_rows('chart') ){ ?>
      <div class="chart">
      <?php while ( have_rows('chart') ) : the_row(); ?>

        <div class="row chart--row">

          <?php if(get_sub_field('col_1')){ ?>
            <div class="col chart--cell checkmark">
          <?php } else { ?>
            <div class="col chart--cell">
          <?php } ?>
              <?php the_sub_field('col_1'); ?>
            </div>

            <?php if(get_sub_field('col_2')){ ?>
              <div class="col chart--cell checkmark">
            <?php } else { ?>
              <div class="col chart--cell">
            <?php } ?>
              <?php the_sub_field('col_2'); ?>
            </div>

            <?php if(get_sub_field('col_3')){ ?>
              <div class="col chart--cell checkmark">
            <?php } else { ?>
              <div class="col chart--cell">
            <?php } ?>
              <?php the_sub_field('col_3'); ?>
            </div>

          </div>

      <?php endwhile; ?>
      </div>
    <?php } ?>

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
  <div class="row">
    <div class="col-12 mb-5 text-center">
      <?php the_field('team_intro'); ?>
    </div>
  </div>

  <?php if( have_rows('team_members') ){ ?>
    <div class="team-members row">
    <?php while ( have_rows('team_members') ) : the_row(); ?>

      <div class="member col-10 offset-1 offset-sm-0 col-sm-6 col-md-4">
        <div class="content">
          <div class="image">
            <img src="<?php the_sub_field('image'); ?>" alt="">
          </div>
          <div class="bio">
            <p><?php the_sub_field('bio'); ?></p>
            <div class="social-links"></div>
          </div>
        </div>
        <div class="info text-center">
          <h4><?php the_sub_field('name'); ?></h4>
          <h5><?php the_sub_field('position'); ?></h5>
        </div>
      </div>

    <?php endwhile; ?>
    </div>
  <?php } ?>

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
          <a href="<?php the_field('shape_btn_link') ?>" class="btn btn-outline-primary"><?php the_field('shape_btn_text') ?></a>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="content-container">
          <?php the_field('video_container') ?>
        </div>
      </div>
    </div>
    <div class="row content-container">
      <div class="col-12 col-md-4 stars">
        <h3><?php the_field('testimonial_title') ?></h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-star.png"/>
      </div>
      <div class="col-12 col-md-8">
        <div class="testimonial">
          <p><?php the_field('testimonial_text') ?></p>
          <h4><?php the_field('testimonial_author') ?></h4>
        </div>
      </div>
    </div>
  </div>
</div>

  <div id="scroll_text" class="scroller">
    <div class="text">
      <span><?php the_field('scroll_text') ?></span> <span><?php the_field('scroll_text') ?></span>
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

</main>

<?php get_footer(); ?>
