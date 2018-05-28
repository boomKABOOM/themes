<?php get_header(); ?>

<?php include('sections/header.php'); ?>

<div class="wrapper content-wrapper">
  <div class="container">
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>
  </div>
</div>

<?php get_footer(); ?>
