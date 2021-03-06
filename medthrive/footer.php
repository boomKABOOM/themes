<?php include('sections/login-modal.php'); ?>
<?php $themeRoot = "/wp-content/themes/medthrive/"; ?>

<footer>

  <div class="wrapper w-footer pt-5 pb-5 dark" style="background:url(/wp-content/themes/bmkbm/images/img-workdesk.jpg) bottom center no-repeat; background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="col-12 pt-3">
          <a href="/" class="logo">
            <img src="<?php echo $themeRoot; ?>images/logo-bmkbm-w.png" />
          </a>
          <h5 class="bigger-text pt-3">Medical Branding & Marketing Experts.</h5>
        </div>
        <div class="col-12 col-md p-3">
          <hr/>
          <p>MedThrive is a design and marketing consultancy located in Austin, TX and serving clients around the US. Our team of strategists, innovators, designers, and catalysts accelerate business growth and deliver transformative value for small-medium sized medical practices. From medical Brand Identity to medical Marketing and Social Media Management, our experts rise above the medical marketing demands of modern media culture.</p>

        </div>

        <div class="col-6 col-md-2 p-3">
          <h5>Services</h5>
          <a href="/services/brand-transformation">Brand Transformation</a><br/>
          <a href="/services/experiential-marketing">Experiential Marketing</a><br/>
          <a href="/services/digital-footprint">Digital Footprint</a><br/>
          <a href="/services/website-development">Website Development</a><br/>
          <a href="/services/social-media">Social Media</a><br/>
        </div>
        <div class="col-6 col-md-2 p-3 ">
          <h5>Locations</h5>
           Grand Rapids, MI<br/>
           Austin, TX<br/>
        </div>
      </div>
    </div>
  </div>

  <div class="wrapper copyright-block bg-offwhite">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 text-center text-sm-left">
          &copy; <?php echo date("Y"); ?> <?php echo get_bloginfo('title'); ?>
        </div>
        <div class="col-12 col-sm-6 text-center text-sm-right">
        </div>
      </div>
    </div>
  </div>

</footer>

<script src="<?php echo $themeRoot; ?>include/js/script.js"></script>

<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118276137-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118276137-1');
</script>

<script type='text/javascript' src='https://medthrive.com/wp-includes/js/wp-embed.min.js?ver=4.9.1'></script>

</body>
</html>
