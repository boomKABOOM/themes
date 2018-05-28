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

    <div class="process-container">
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4">
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
        <div class="col-12 col-md-8 text">
          <h6>Needs Analysis</h6>
          <p>Phone or in person consultation to understand your business and determine your talent needs.</p>
        </div>
      </div>
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4 ">
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
        <div class="col-12 col-md-8 text">
          <h6>Research</h6>
          <p>Devise search parameters based on your needs and conduct extensive research to identify all potential candidates.</p>
        </div>
      </div>
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4">
          <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-process-recruit.png) no-repeat; background-size:cover;">
            <div class="number">03</div>
          </div>
          <div class="label">
            <div>Recruit</div>
          </div>
          <div class="icon">
            <img src="<?php echo $themeRoot; ?>images/icon-recruit.png" />
          </div>
        </div>
        <div class="col-12 col-md-8 text">
          <h6>Recruit</h6>
          <p>Reach out to all potential candidates via multiple channels to  assess motivations, skills, experience, and culture fit.</p>
        </div>
      </div>
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4">
          <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-process-present.png) no-repeat; background-size:cover;">
            <div class="number">04</div>
          </div>
          <div class="label">
            <div>Present</div>
          </div>
          <div class="icon">
            <img src="<?php echo $themeRoot; ?>images/icon-resume.png" />
          </div>
        </div>
        <div class="col-12 col-md-8 text">
           <h6>Present</h6>
           <p>Submit fully vetted, best fit candidates for your consideration.</p>
        </div>
      </div>
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4 ">
          <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-process-support.png) no-repeat; background-size:cover;">
            <div class="number">05</div>
          </div>
          <div class="label">
            <div>Support</div>
          </div>
          <div class="icon">
            <img src="<?php echo $themeRoot; ?>images/icon-handshake.png" />
          </div>
        </div>
        <div class="col-12 col-md-8 text">
          <h6>Support</h6>
          <p>Manage the interview process through offer presentation and on-going post placement support.</p>
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
