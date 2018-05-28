<?php get_header(); ?>

<?php include('sections/header.php'); ?>

<div id="main">
  <div class="header-image" style="background:url(<?php echo $themeRoot; ?>images/img-geo.jpg) center no-repeat; background-size:cover;"></div>

<section>
<div class="wrapper">
  <div class="container">
    <div class="section-title">
      <div class="top-title">
        <div class="line"></div>
        <h2>Articles &amp; Insights</h2>
        <div class="line"></div>
      </div>
      <h3>Resources</h3>
    </div>

    <!--
    <div class="category-links">
      <?php echo get_the_category_list(); ?>
    </div>
    -->

    <div class="row">
      <div class="col-12">
        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
      </div>
    </div>
  </div>
</div>
</section>

<br/>

</div>

<?php get_footer(); ?>
