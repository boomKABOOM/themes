<?php /* Template Name: Home Page Alt Template */ get_header();

$groups = acf_get_local_field_groups();
$json = [];

foreach ($groups as $group) {
    // Fetch the fields for the given group key
    $fields = acf_get_local_fields($group['key']);

    // Remove unecessary key value pair with key "ID"
    unset($group['ID']);

    // Add the fields as an array to the group
    $group['fields'] = $fields;

    // Add this group to the main array
    $json[] = $group;
}

$json = json_encode($json, JSON_PRETTY_PRINT);
// Optional - echo the JSON data to the page
echo "<pre>";
echo $json;
echo "</pre>";

?>



<main>
<div class="wrapper slider">
  <div id="overlay" class="overlay"></div>
  <video id="home_bg_vid" class="full-only" muted="" autoplay="" loop="">
    <source id="mp4" type="video/mp4" src="<?php echo $themeRoot; ?>images/kid-doc-teddy-lg.mp4">
  </video>
  <div id="prompt" class="prompt--next">
    Grow Your Presence
    <div class="arrow">
      <img src="<?php echo $themeRoot; ?>images/arr-dn.png" />
    </div>
  </div>

  <div class="slide">
    <div class="container slowfade">
      <div class="slide--content">
        <div class="text-center slide-up inactive">
          <div class="dark">
            <div class="h1 big-title">
              <span>A New Experience in</span> <span>Medical Practice Marketing.</span>
            </div>
          </div>
          <!--
          <div class="selector-container full-only">
            <div class="label">
              I'd Like To
            </div>
            <div class="selector" id="exp_sel">
              <div class="options-container">
                <div class="option" data-op="0">
                  Transform My Brand.
                </div>
                <div class="option" data-op="1">
                  Refresh My Website.
                </div>
                <div class="option selected" data-op="2">
                  Convert New Patient Leads.
                </div>
                <div class="option" data-op="3">
                  Master Social Media.
                </div>
                <div class="option" data-op="4">
                  Get Noticed Online.
                </div>
              </div>
            </div>
          </div>
          -->
        </div>
      </div>
    </div>
  </div>
</div>

<script>
var blur_mode = false;

$(document).ready(function(){
  $('.options-container').css('bottom',80*2);

  $('#exp_sel').click(function(){
    if(blur_mode == false){
      $(this).addClass('active');
      $('#home_bg_vid').addClass('blur');
      $('#overlay').addClass('active');
      blur_mode = true;
    }
  });
  $('.option').click(function(){
    if(blur_mode == true){
      $('.option').removeClass('selected');
      $(this).addClass('selected');
      $('.options-container').css('bottom',80*$(this).attr('data-op'));
      $('#exp_sel').removeClass('active');
      $('#home_bg_vid').removeClass('blur');
      $('#overlay').removeClass('active');
      blur_mode = false;
    }
  });
});

$(document).scroll(function(){
  if(blur_mode == true){
    $('#exp_sel').removeClass('active');
    $('#home_bg_vid').removeClass('blur');
    $('#overlay').removeClass('active');
    blur_mode = false;
  }
});

$('#prompt').click(function(){
  $('html, body').animate({
			scrollTop: $('#content').offset().top
		}, 750);
});

</script>

<div id="content" class="wrapper">
  <div class="container content-container bg-computer">
    <div class="row center-mobile">
  	  <div class="col-12 col-md-8">
        <img class="logo pt-5 pb-5 mobile-only" src="<?php echo $themeRoot; ?>images/logo-mt-alt.png" />
  		  <h3><span>We diagnose, then treat.</span> <span>Just like you.</span></h3>
        <p>MedThrive is a new idea. An idea that levels the medical playing field by reaching beyond the imaginable to create memorable, engaging, and contagious brand experiences.</p>
        <a href="/services" class="btn btn-outline-primary">Learn More</a>
  	  </div>
    </div>
  </div>
</div>

<div class="wrapper">
  <div class="container content-container">
    <div class="row center-mobile">
  	  <div class="col-12">
        <h3>Our Services</h3>
        <hr/>
      </div>
  	  <div class="col-12 col-md-4">
        <img class="icon" src="<?php echo $themeRoot; ?>images/icon-heart.png" />
        <h4>Brand Transformation</h4>
        <p>Good branding is good practice. Stand out with an authentic presence that speaks directly to your patients' needs. </p>
        <hr class="full-only"/>
        <a href="/services/brand-transformation" class="bigger-link">Boost Your Brand &raquo;</a>
        <hr class="mobile-only"/>
      </div>
  	  <div class="col-12 col-md-4">
        <img class="icon" src="<?php echo $themeRoot; ?>images/icon-phone.png" />
        <h4>Experiential Marketing</h4>
        <p>Your practice is more than an office. Create an experience worth remembering with creative positioning.</p>
        <hr class="full-only"/>
        <a href="/services/experiential-marketing" class="bigger-link">Master Your Market &raquo;</a>
        <hr class="mobile-only"/>
      </div>
  	  <div class="col-12 col-md-4">
        <img class="icon" src="<?php echo $themeRoot; ?>images/icon-chart.png" />
        <h4>Website Development</h4>
        <p>Your website is your castle in the cloud. Level the playing field by dazzling online.</p>
        <hr class="full-only"/>
        <a href="/services/website-development" class="bigger-link">Refresh Your Website &raquo;</a>
        <hr class="mobile-only"/>
      </div>
    </div>
  </div>
</div>

</main>

<?php include('sections/after-content-sections.php'); ?>

<?php get_footer(); ?>
