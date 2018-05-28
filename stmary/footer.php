<?php $themeRoot = "/wp-content/themes/stmary/"; ?>

<footer>
  <div class="wrapper footer-block bg-drk-grad">
    <div class="container">
      <div class="row">
        <div class="col-6 col-sm-3 p-3">
          <img src="<?php echo $themeRoot; ?>images/logo-sm-w.png" />
          <small><h5>Roman Catholic Church</h5></small>
          <div class="social-links mt-5">
            <a href="https://www.facebook.com/StMaryGR" target="_blank"><i class="icons8-facebook"></i></a>
            <a href="https://www.flickr.com/photos/stmarygr/" target="_blank"><i class="icons8-instagram-filled"></i></a>
            <a href="https://twitter.com/stmarygr_mi" target="_blank"><i class="icons8-twitter-filled"></i></a>
          </div>
        </div>
        <div class="col-6 col-sm-6 p-3 color-ltgray">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2919.3033163795935!2d-85.68151168452421!3d42.97188387915059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8819add1549c2949%3A0x6444fc597ad6e81b!2s423+First+St+NW%2C+Grand+Rapids%2C+MI+49504!5e0!3m2!1sen!2sus!4v1524110287682" width="800" height="350" frameborder="0" style="border:0; width:100%;" allowfullscreen></iframe>
        </div>
        <div class="col-6 col-sm-3 pt-3  color-ltgray">
          <h5>Location</h5>
          <a href="https://goo.gl/maps/ihMMceAHvQN2" target="_blank">423 First Street NW<br/>
             Grand Rapids, MI  49504-5277</a>
          <a href="tel:616.459.7390">616.459.7390</a>
          <br/>
          <h5>Parish Office Hours</h5>
          Mon - Fri 8:30 am - 12:00 pm<br/>
          Closed Tues<br/>
          Also available by appointment</br/>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper copyright-block bg-offwhite">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 text-center text-sm-left">
          &copy; 2018 St. Mary's Catholic Church
        </div>
        <div class="col-12 col-sm-6 text-center text-sm-right">
          <?php footer_copyright_nav(); ?>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="<?php echo $themeRoot; ?>include/js/script.js"></script>

<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112991476-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112991476-1');
</script>


</body>
</html>
