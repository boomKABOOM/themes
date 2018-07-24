<?php include('sections/login-modal.php'); ?>

<footer>

  <div class="wrapper w-footer pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-12 pt-3">
          <a href="/" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-mt.png" />
          </a>
          <h5 class="bigger-text pt-3">Medical Branding & Marketing Experts.</h5>
        </div>
        <div class="col-12 col-md p-3">
          <hr/>
          <p>MedThrive is a design and marketing consultancy located in Austin, TX that accelerates business growth and delivers transformative value for small-medium sized health and medical practices. Partnering with medical practices and clinics, pediatricians, dentists and orthodontists, optometrists, holistic and alternative medicine providers, occupational and physical therapists, speech pathology and linguistic services, counseling and behavioral services, and massage therapy and wellness centers that focus on overall wellbeing.</p>

        </div>

        <div class="col-6 col-md-2 p-3">

        </div>
      </div>

      <div class="row mt-5">
        <div class="col-12 col-sm-6 text-center text-sm-left">
          &copy; <?php echo date("Y"); ?> <?php echo get_bloginfo('title'); ?>
        </div>
        <div class="col-12 col-sm-6 text-center text-sm-right">
        </div>
      </div>
    </div>
  </div>

</footer>

<script src="<?php echo get_template_directory_uri(); ?>/include/js/script.js"></script>

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
