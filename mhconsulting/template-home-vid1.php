<?php /* Template Name: Home Vid1 Template */ get_header(); ?>

<style>
#home_bg_vid {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    overflow: hidden;
    -webkit-transition: ease all 0.5s;
    -moz-transition: ease all 0.5s;
    -o-transition: ease all 0.5s;
    transition: ease all 0.5s;
     -webkit-filter: opacity(.8);
     filter: opacity(.8);
}
</style>

<div class="wrapper w-intro bg-white">
  <video id="home_bg_vid" class="full-only" muted="" autoplay="" loop="">
    <source id="mp4" type="video/mp4" src="<?php echo $themeRoot; ?>images/vid-1.mp4">
  </video>
  <div class="container">
    <div class="row">
      <div class="col-12 textcenter p-5">
        <img src="<?php echo $themeRoot; ?>images/logo-full-w.png" /><br/>
        <a class="boxlink" href="<?php the_field('intro_link'); ?>">Meet Marisa</a>
      </div>
    </div>
  </div>
</div>

<?php include('sections/header.php'); ?>

<div id="main" style="background:linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)), url('<?php echo $themeRoot; ?>images/img-structure-repeat.jpg') bottom right no-repeat; background-size:cover;">
<?php if(get_field('add_intro_block')){ ?>

<div class="wrapper w-header pb-5 mb-5">
  <div class="container">
    <div class="section-title">
      <div class="top-title">
        <div class="line"></div>
        <h2>I'm glad you're here!</h2>
        <div class="line"></div>
      </div>
      <h3>Welcome</h3>
    </div>

    <div class="intro-block quote bg-img-half" style="background:rgba(255,255,255,1) url('<?php get_img_field_url('intro_image'); ?>') bottom left no-repeat; background-size:50%;">
      <img class="mobile-only" src="<?php get_img_field_url('intro_image'); ?>"/>
      <div class="modules-row right">
        <div class="col-12 col-md-6 offset-0 offset-md-6 p-5" style="padding-right:0 !important">
          <?php the_field('intro_text'); ?>
        </div>
      </div>
    </div>

    <div class="textcenter" style="margin:-5em 0 2em 0;">
      <a class="boxlink" href="<?php the_field('intro_link'); ?>">Learn More</a>
    </div>

  </div>
</div>

<?php } ?>


<div class="wrapper bg-lttan pb-5 pt-5">
  <div class="container">
    <div class="section-title">
      <div class="top-title">
        <div class="line"></div>
        <h2>The MH Consulting Process</h2>
        <div class="line"></div>
      </div>
      <h3>Process</h3>
    </div>
    <p align="center">An in depth search assignment requires a significant amount of research, effort, and the ability to connect with passive candidates who aren’t necessarily looking. It also requires a search professional who is skilled at asking the right questions, hearing what goes unsaid, connecting the dots, and assessing culture fit.</p>

    <div class="row pt-5 pb-5">
      <div class="col-12 col-md-4 process-item">
        <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-process-define.png) no-repeat; background-size:cover;">
          <div class="number">01</div>
        </div>
        <div class="label">
          <div>Define</div>
        </div>
        <div class="icon">
          <img src="<?php echo $themeRoot; ?>images/icon-conversation.png" />
        </div>
      </div>
      <div class="col-12 col-md-4 process-item">
        <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-process-research.png) no-repeat; background-size:cover;">
          <div class="number">02</div>
        </div>
        <div class="label">
          <div>Research</div>
        </div>
        <div class="icon">
          <img src="<?php echo $themeRoot; ?>images/icon-search.png" />
        </div>
      </div>
      <div class="col-12 col-md-4 process-item">
        <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-process-recruit.png) no-repeat; background-size:cover;">
          <div class="number">03</div>
        </div>
        <div class="label">
          <div>Recruit</div>
        </div>
        <div class="icon">
          <img src="<?php echo $themeRoot; ?>images/icon-resume.png" />
        </div>
      </div>
    </div>

    <div class="textcenter pb-5 mb-3">
      <a class="boxlink" href="/services">View My Process</a>
    </div>

  </div>
</div>

<?php include('sections/cta-block.php'); ?>

</div>


<?php get_footer(); ?>

<script>
$(window).load(function(){

  if($(window).width() > 768){

    $('header').css('margin-top',$('.w-intro').height() + 'px');


    $(document).scroll(function(){
      if($(window).scrollTop() > $('.w-intro').height()){
        $('header').addClass('sticky');
        $('header').css('margin-top', 0);
        $('.w-header').css('margin-top',($('.w-intro').height() + $('header').height()) + 'px');
      } else {
        $('header').removeClass('sticky');
        $('header').css('margin-top',$('.w-intro').height() + 'px');
        $('.w-header').css('margin-top',0);
      }
    });

  }

});

</script>
