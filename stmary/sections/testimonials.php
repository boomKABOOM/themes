<link rel="stylesheet" type="text/css" href="<?php echo $themeRoot; ?>include/vendors/slick/slick.css"/>

<div class="wrapper pt-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-4 text-center text-sm-left">
        <h2>Proclaim and Teach</h2>
        <h3>Our Mission Statement</h3>
        <div id="test-dotnav"></div>
      </div>
      <div class="col-12 col-sm-8" style="flex">
        <div class="testimonials-container" id="testimonials">
          <div class="testimonial">
            <div class="text">
              This is our call and our blessing:<br/>
              to proclaim and teach the good news;<br/>
              to worship in joy and gratitude;<br/>
              to welcome the stranger and the outcast;<br/>
              to serve the needs of the people, body and spirit;<br/>
              to labor for social justice, so that all may have what they need.
            </div>
            <div class="author">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo $themeRoot; ?>include/vendors/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script>
$(document).ready(function(){
  $('#testimonials').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    appendDots: '#test-dotnav'
  });
});

</script>
