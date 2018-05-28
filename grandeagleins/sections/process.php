<div class="wrapper bg-lttan pb-5 pt-5">
  <div class="container pb-5">
    <div class="section-title">
      <div class="top-title">
        <div class="line"></div>
        <h2>Grand Eagle</h2>
        <div class="line"></div>
      </div>
      <h3>Mechanical Insulation Benefits</h3>
    </div>

    <div class="process-container">
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4">
          <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-benefits-energy.jpg) no-repeat; background-size:cover;">
            <div class="number">01</div>
          </div>
          <div class="label">
            <div>Energy</div>
          </div>
          <div class="icon">
            <img src="<?php echo $themeRoot; ?>images/icon-energy.png" />
          </div>
        </div>
        <div class="col-12 col-md-8 text">
          <h6>Save Energy</h6>
          <p>Proper mechanical insulation means regulated temperatures. Saving your business energy… and saving your business money.</p>
        </div>
      </div>
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4 ">
          <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-benefits-comfort.jpg) no-repeat; background-size:cover;">
            <div class="number">02</div>
          </div>
          <div class="label">
            <div>Comfort</div>
          </div>
          <div class="icon">
            <img src="<?php echo $themeRoot; ?>images/icon-comfort.png" />
          </div>
        </div>
        <div class="col-12 col-md-8 text">
          <h6>Increase Comfort</h6>
          <p>Protect the safety and health of your greatest assets by optimizing water vapor flow through your systems. Fire safety is our priority. </p>
        </div>
      </div>
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4">
          <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-benefits-environment.jpg) no-repeat; background-size:cover;">
            <div class="number">03</div>
          </div>
          <div class="label">
            <div>Eco-friendly</div>
          </div>
          <div class="icon">
            <img src="<?php echo $themeRoot; ?>images/icon-eco.png" />
          </div>
        </div>
        <div class="col-12 col-md-8 text">
          <h6>Good for the Environment</h6>
          <p>We help reduce the number of greenhouse gas emissions in your atmosphere by choosing superior mechanical insulation products.</p>
        </div>
      </div>
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4">
          <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-benefits-noise.jpg) no-repeat; background-size:cover;">
            <div class="number">04</div>
          </div>
          <div class="label">
            <div>Noise</div>
          </div>
          <div class="icon">
            <img src="<?php echo $themeRoot; ?>images/icon-noise.png" />
          </div>
        </div>
        <div class="col-12 col-md-8 text">
           <h6>Noise Reduction</h6>
           <p>Dampen distracting sounds and increase workplace productivity with our high-quality, dependable services. </p>
        </div>
      </div>
      <div class="row p-0 p-md-3 process-item">
        <div class="col-12 col-md-4 ">
          <div class="image" style="background:url(<?php echo $themeRoot; ?>images/img-benefits-moisture.jpg) no-repeat; background-size:cover;">
            <div class="number">05</div>
          </div>
          <div class="label">
            <div>Moisture</div>
          </div>
          <div class="icon">
            <img src="<?php echo $themeRoot; ?>images/icon-moisture.png" />
          </div>
        </div>
        <div class="col-12 col-md-8 text">
          <h6>Moisture and Freeze Prevention</h6>
          <p>Avoid unwanted frozen pipes and parts. Mechanical insulation prevents water vapor build-up, keeping your heating and cooling systems efficient and cost-effective.</p>
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
