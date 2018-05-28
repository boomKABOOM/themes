<?php $themeRoot = "/wp-content/themes/simple-portfolio/"; ?>

<footer>

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

</script>

</body>
</html>
