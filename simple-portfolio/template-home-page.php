<?php /* Template Name: Home Page Template */ get_header(); ?>

<div class="wrapper w-intro">
  <div class="container">
    <div class="row">
      <div class="col-6 textcenter pt-5">
        <img src="<?php echo $themeRoot; ?>images/img-marisa.png" />
      </div>
      <div class="col-6 textcenter p-5">
        <img src="<?php echo $themeRoot; ?>images/logo-full.png" />
        <a class="boxlink" href="<?php the_field('intro_link'); ?>">Meet Marisa.</a>
      </div>
    </div>
  </div>
</div>

<?php include('sections/header.php'); ?>

<div id="main" style="background:linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)), url('<?php echo $themeRoot; ?>images/img-structure-repeat.jpg') bottom right no-repeat; background-size:cover;">
<?php if(get_field('add_intro_block')){ ?>

<div class="wrapper w-header">
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
        <div class="col-12 col-md-6 offset-0 offset-md-6 p-5">
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


<main>



</main>
</div>


<?php get_footer(); ?>

<script>
$(document).ready(function(){

  if($(window).width() > 768){

    $('header').css('margin-top',$('.w-intro').height() + 'px');
    $('.w-header').css('min-height',($(window).height() + 300));


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
