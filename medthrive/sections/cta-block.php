<div class="wrapper">
<?php if(get_field('cta_content')){ ?>
  <div class="container">

    <div class="row cta-rounded">
      <div class="col-6 col-md-8 bg-green dark cta-title p-1 p-md-5">
        <?php the_field('cta_content'); ?>
      </div>
      <div class="col-6 col-md-4 bg-gray-rounded text-center p-1 p-md-5">
        <a href="<?php the_field('cta_link'); ?>" class="button"><?php the_field('cta_link_text'); ?></a>
      </div>
    </div>

  </div>

<?php } else { ?>

  <div class="container content-container bg-marisa">
    <div class="row center-mobile">
      <div class="col-12 col-sm-8">
        <h3>Ready to talk marketing?<br/>
          Schedule a consult.</h3>
        <p>Learn how our experts can help transform your business for growth.</p>
        <a href="/contact" class="btn btn-outline-primary">Learn More</a>
      </div>
    </div>
  </div>

<?php } ?>
<br/><br/>
</div>
