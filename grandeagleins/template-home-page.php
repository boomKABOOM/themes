<?php /* Template Name: Home Page Template */ get_header(); ?>

<div class="wrapper w-intro">
  <div class="container">
    <div class="row">
      <div class="col-6 textcenter" style="align-self:center;">
        <img src="<?php echo $themeRoot; ?>images/logo-gei.png" class="p-5" />
      </div>
      <div class="col-6 p-5">
        <div class="form contact-form p-5 bg-white shadow--sm">
          <h6 class="color-green">Stay Dry. Stay Safe.</h6>
          <h5>Contact us for an estimate today.</h5>
          <?php echo do_shortcode('[ninja_form id=2]'); ?>
        </div>
        <div class="text-center" style="margin:-2.5em 0 2em 0;">
        <a id="trigger-submit" class="darken boxlink">Get an Estimate</a>
      </div>
      </div>
    </div>
  </div>
</div>

<script>
$('#trigger-submit').click(function(){
$('.form input[type=button]').trigger('click');
});
</script>


<?php include('sections/header.php'); ?>

<div id="main">
<?php if(get_field('add_intro_block')){ ?>

<div class="wrapper w-header pb-5">
  <div class="container">
    <div class="section-title">
      <div class="top-title">
        <div class="line"></div>
        <h2>Established in 1994</h2>
        <div class="line"></div>
      </div>
      <h3>Insulation Experts</h3>
    </div>

    <div class="intro-block bg-img-half pr-1 pr-md-5" style="background:url('<?php get_img_field_url('intro_image'); ?>') bottom left no-repeat; background-size:50%; display: flex; align-items: center; justify-content: center;">
      <div class="modules-row right" style="width:100%;">
        <div class="col-12 col-md-8 offset-0 offset-md-4 pt-5 pl-5 pr-5 shadow--sm" style="background:linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url('<?php echo $themeRoot; ?>images/bg-landscape.jpg') top left no-repeat; background-size:cover;">
          <?php the_field('intro_text'); ?>
          <div class="textcenter">
            <a class="boxlink" style="margin:2em 0 -3em 0;" href="<?php the_field('intro_link'); ?>">Learn More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row pb-2 pt-5 mb-5">
      <div class="col-12 col-md-4">
        <h5 class="smaller-text">Partners &amp; Certifications</h5>
        <h6 class="color-green">Grand Eagle Insulation is committed to excellence.</h6>
      </div>
      <div class="col-12 col-md-8" style="align-self:flex-end;">
        <p class="bigger-text">As design-build specialists, we select and combine products to best match the design requirements and budget.</p>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <img src="<?php echo $themeRoot; ?>images/logo-ph1.png" />
      </div>
      <div class="col">
        <img src="<?php echo $themeRoot; ?>images/logo-ph2.png" />
      </div>
      <div class="col">
        <img src="<?php echo $themeRoot; ?>images/logo-ph3.png" />
      </div>
      <div class="col">
        <img src="<?php echo $themeRoot; ?>images/logo-ph4.png" />
      </div>
      <div class="col">
        <img src="<?php echo $themeRoot; ?>images/logo-ph5.png" />
      </div>
      <div class="col">
        <img src="<?php echo $themeRoot; ?>images/logo-ph6.png" />
      </div>
    </div>

  </div>

</div>

<?php } ?>

<div class="wrapper bg-lttan pb-5 pt-5">
  <div class="container">
    <div class="section-title">
      <div class="top-title">
        <div class="line"></div>
        <h2>Mechanical Insulation</h2>
        <div class="line"></div>
      </div>
      <h3>Benefits</h3>
    </div>

    <div class="row pb-5">
      <div class="col-12 col-md-4 process-item">
        <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-benefits-energy.jpg) no-repeat; background-size:cover;">
          <div class="number">01</div>
        </div>
        <div class="label">
          <div>Energy</div>
        </div>
        <div class="icon">
          <img src="<?php echo $themeRoot; ?>images/icon-energy-g.png" />
        </div>
      </div>
      <div class="col-12 col-md-4 process-item">
        <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-benefits-comfort.jpg) no-repeat; background-size:cover;">
          <div class="number">02</div>
        </div>
        <div class="label">
          <div>Comfort</div>
        </div>
        <div class="icon">
          <img src="<?php echo $themeRoot; ?>images/icon-comfort-g.png" />
        </div>
      </div>
      <div class="col-12 col-md-4 process-item">
        <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-benefits-environment.jpg) no-repeat; background-size:cover;">
          <div class="number">03</div>
        </div>
        <div class="label">
          <div>Eco-friendly</div>
        </div>
        <div class="icon">
          <img src="<?php echo $themeRoot; ?>images/icon-eco-g.png" />
        </div>
      </div>
    </div>

    <div class="row pb-2">
      <div class="col-12 col-md-4">
        <h5 class="smaller-text">Energy &amp; Cost Savings</h5>
        <h6 class="color-green">Improved insulation means improved systems.</h6>
      </div>
      <div class="col-12 col-md-8" style="align-self:flex-end;">
        <p class="bigger-text">Quality mechanical insulation is the most effective way a facility can save money, lower greenhouse gas emissions, and protect its personnel.</p>
      </div>
    </div>

    <div class="textcenter pb-5 mt-5 mb-3">
      <a class="boxlink" href="/services">View Our Benefits</a>
    </div>

  </div>
</div>

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
