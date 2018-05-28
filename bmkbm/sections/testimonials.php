<link rel="stylesheet" type="text/css" href="<?php echo $themeRoot; ?>/include/vendors/slick/slick.css"/>
<script src="<?php echo $themeRoot; ?>/include/vendors/slick/slick.js" type="text/javascript" charset="utf-8"></script>

<div class="wrapper pt-0">
  <div class="container pt-5 pb-5 pr-0 pl-0">
    <div class="row">
      <div class="col-12 col-sm-4 text-center text-sm-left">
        <h2>Testimonials</h2>
        <h3>Increased Web Traffic and Digital Footprint</h3>
        <div id="test-dotnav" class="stars">
          &#x2605; &#x2605; &#x2605; &#x2605; &#x2605;
        </div>
      </div>
      <div class="col-12 col-sm-8 pl-0" style="flex">
        <div class="testimonials-container" id="testimonials">
          <div class="testimonial">
            <div class="text">
              We’ve worked with Jeff at MedThrive on rebranding, social media marketing, a reboot of our website, in-practice events and our digital footprint. We’ve seen triple digit increases in web traffic, our social media followers have more than doubled, and our online search numbers are robust. We are meeting more potential clients and  have improved our conversions.
            </div>
            <div class="author">
              – Jason Robinet, RobinetPT
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $('#testimonials').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    //dots: true,
    //appendDots: '#test-dotnav'
  });
});
</script>
