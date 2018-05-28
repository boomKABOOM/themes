<div class="wrapper">
  <div class="container p-0">
    <h1>Our Services</h1>
    <hr/>
    <div class="process-container mt-5">
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4">
          <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-process-define.png) no-repeat; background-size:cover;">
            <div class="number">01</div>
          </div>
          <div class="label">
            <div>Define</div>
          </div>
          <div class="icon">
            <img src="<?php echo $themeRoot; ?>images/icon-heart.png" />
          </div>
        </div>
        <div class="col-12 col-md-8 text">
          <h4>Brand Transformation</h4>
          <p>Together we define a unique course of action based on: who you are, what your patients seek, and how to deliver your message.</p>
          <hr/>
          <a href="/services/brand-transformation" class="bigger-link">Boost Your Brand &raquo;</a>
        </div>
      </div>
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4 ">
          <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-process-research.png) no-repeat; background-size:cover;">
            <div class="number">02</div>
          </div>
          <div class="label">
            <div>Enrich</div>
          </div>
          <div class="icon">
            <img src="<?php echo $themeRoot; ?>images/icon-phone.png" />
          </div>
        </div>
        <div class="col-12 col-md-8 text">
          <h4>Experiential Marketing</h4>
          <p>Patients evaluate their experience from how you present your brand to how you treat them in-office. We build a creative strategy to elevate that experience.</p>
          <hr/>
          <a href="/services/experiential-marketing" class="bigger-link">Share Your Story &raquo;</a>
        </div>
      </div>
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4">
          <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-process-present.png) no-repeat; background-size:cover;">
            <div class="number">03</div>
          </div>
          <div class="label">
            <div>Engage</div>
          </div>
          <div class="icon">
            <img src="<?php echo $themeRoot; ?>images/icon-marketing.png" />
          </div>
        </div>
        <div class="col-12 col-md-8 text">
           <h4>Digital Footprint</h4>
           <p>One part creative and two parts targeting is blended into the perfect advertising recipe that fits your marketing mix.</p>
           <hr/>
           <a href="/services/digital-footprint" class="bigger-link">Shine a Guiding Light &raquo;</a>
        </div>
      </div>
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4">
          <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-process-recruit.png) no-repeat; background-size:cover;">
            <div class="number">04</div>
          </div>
          <div class="label">
            <div>Present</div>
          </div>
          <div class="icon">
            <img src="<?php echo $themeRoot; ?>images/icon-chart.png" />
          </div>
        </div>
        <div class="col-12 col-md-8 text">
          <h4>Website Development</h4>
          <p> Present your patients with a customized, modern website that precisely fits the needs of your medical brand.</p>
          <hr/>
          <a href="/services/website-development" class="bigger-link">Impress Patients Online &raquo;</a>
        </div>
      </div>
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4 ">
          <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-process-support.png) no-repeat; background-size:cover;">
            <div class="number">05</div>
          </div>
          <div class="label">
            <div>Connect</div>
          </div>
          <div class="icon">
            <img src="<?php echo $themeRoot; ?>images/icon-handshake.png" />
          </div>
        </div>
        <div class="col-12 col-md-8 text">
          <h4>Social Media</h4>
          <p>Community Management targets the needs of your patients while simultaneously motivating them to take action.</p>
          <hr/>
          <a href="/services/social-media" class="bigger-link">Spread the Word &raquo;</a>
        </div>
      </div>

    </div>

  </div>
</div>

<script>
$(document).scroll(function(){
  var scrollPos = $(window).scrollTop();

  $('.process-item').each(function(){
    if($(this).offset().top - scrollPos < 500){
      $('.process-item').removeClass('active');
      $(this).addClass('active');
    }
  });

});
</script>
