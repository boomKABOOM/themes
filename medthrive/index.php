<?php get_header(); ?>

<div class="wrapper default-page pt-5 pb-5" style="background: url(<?php echo get_template_directory_uri(); ?>/images/img-main1a.jpg) left no-repeat; background-size:cover;">
  <div class="container slowfade" style="padding:6em 0 4em 0;">

  </div>
</div>

<div class="wrapper">
  <div class="container content-container" style="margin-top:-6em;">
    <div class="section-title">
      <div class="top-title">
        <div class="line"></div>
        <h2>Articles &amp; Insights</h2>
        <div class="line"></div>
      </div>
      <h3>Resources</h3>
    </div>
    <hr/>

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
