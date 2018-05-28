<div class="wrapper cta-block" style="background:url(<?php if(get_field('cta_bg_image')){
  the_field('cta_bg_image');
} else {
  echo $themeRoot.'images/bg-desk2.jpg';
}?>)">
  <div class="container">

    <div class="row pt-5 pb-5">
      <div class="col-12 col-md-8 pb-5 pt-5">
        <h3>
        <?php
        if(get_field('cta_title')){
          the_field('cta_title');
        } else {
          echo 'Ready. Set. GROW!';
        } ?>
        </h3>
        <p>
          <?php
          if(get_field('cta_text')){
            the_field('cta_text');
          } else {
            echo "Delivering the best talent for your business from within the market. Wherever that may be. Whatever the obstacle. Let’s discuss your situation to see how we can best match your specific needs.";
          } ?>
        </p>
        <?php
        if( have_rows('cta_buttons') ):
          while ( have_rows('cta_buttons') ) : the_row();
          ?>
            <a href="
            <?php
              if(get_sub_field('link')){
                the_sub_field('link');
              } else { ?>
                " onclick="Calendly.showPopupWidget('https://calendly.com/marisahohaia');return false;"
            <?php } ?>
            " class="boxlink"><?php the_sub_field('text'); ?></a>
          <?php
          endwhile;
        else:
        ?>
          <a class="boxlink" href="" onclick="Calendly.showPopupWidget('https://calendly.com/marisahohaia');return false;">Schedule a Consult</a>
        <?php
        endif;
        ?>
      </div>
    </div>

  </div>
</div>

<!-- Calendly link widget begin -->
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
<!-- Calendly link widget end -->
