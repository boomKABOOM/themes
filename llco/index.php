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
    <article>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </article>
  </div>
</div>
</section>

<section>
<div class="wrapper content-wrapper">
  <div class="container p-4">
    <div class="category-links">
      <?php echo get_the_category_list(); ?>
    </div>

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
