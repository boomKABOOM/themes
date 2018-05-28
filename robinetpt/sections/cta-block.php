<div class="wrapper dark parallax-bg" style="background:linear-gradient(to right, rgba(0, 0, 0, 0.95), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.2) ), url(<?php if(get_field('cta_bg_image')){
  the_field('cta_bg_image');
} else {
  echo $themeRoot.'images/img-default-cta.jpg';
}?>) no-repeat; background-size:cover; background-position:0 0;">
  <div class="container">
    <div class="row p-2 cta-content">
      <div class="col-12 p-3" style="background:url(<?php echo $themeRoot; ?>images/logo-rpt-mark-40.png) left no-repeat; background-size:contain;">
        <div class="row">
          <div class="col-12 pt-3">
            <h2>
              <?php
              if(get_field('cta_intro')){
                the_field('cta_intro');
              } else {
                echo 'You have the choice.';
              } ?>
            </h2>
            <h3 class="cta-title">
              <?php
              if(get_field('cta_title')){
                the_field('cta_title');
              } else {
                echo 'Choose to be your best.';
              } ?>
            </h3>
          </div>
          <div class="col-12 col-sm-6">
            <h4>
              <?php
              if(get_field('cta_text')){
                the_field('cta_text');
              } else {
                echo "You can choose the Physical Therapist that best understands you and your goals. It's the law. If we're a good fit, ask your doctor to refer you to Robinet PT.";
              } ?>
            </h4>
          </div>
        </div>

        <?php
        if( have_rows('cta_buttons') ):
          while ( have_rows('cta_buttons') ) : the_row();
          ?>
          <a href="<?php the_sub_field('link'); ?>" class="btn btn-outline-primary btn-orange"><?php the_sub_field('text'); ?></a>

          <?php
          endwhile;
        else:
          echo '<a href="/contact/" class="btn btn-outline-primary btn-orange">Contact Us</a>
          <a href="/contact" class="btn btn-outline-primary btn-orange">Make an Appointment</a>';
        endif;
        ?>
      </div>
    </div>
  </div>
</div>
