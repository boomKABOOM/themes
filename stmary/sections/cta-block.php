<div class="wrapper bg-offwhite">
  <div class="container">
    <div class="row p-2 cta-content">
      <div class="col-12 p-3">
        <div class="row pt-3">
          <div class="col-12 col-sm-6">
            <h2>
              <?php
              if(get_field('cta_intro')){
                the_field('cta_intro');
              } else {
                echo 'Download';
              } ?>
            </h2>
            <h3 class="cta-title">
              <?php
              if(get_field('cta_title')){
                the_field('cta_title');
              } else {
                echo 'Get the MyParish App Today!';
              } ?>
            </h3>
            <h4>
              <?php
              if(get_field('cta_text')){
                the_field('cta_text');
              } else {
                echo "myParish is a premium Catholic parish app that helps improve parish communication and outreach while offering the features that parishioners enjoy in a good app.";
              } ?>
            </h4>
            <small>
            <?php
            if( have_rows('cta_buttons') ):
              while ( have_rows('cta_buttons') ) : the_row();
              ?>
              <a href="<?php the_sub_field('link'); ?>" class="btn btn-outline-primary btn-orange"><?php the_sub_field('text'); ?></a>

              <?php
              endwhile;
            else:
              echo '<a href="https://itunes.apple.com/us/app/myparish/id892066479?mt=8&ign-mpt=uo%3D4" target="_blank" class="btn btn-outline-primary btn-orange">Download for Apple</a><a href="https://play.google.com/store/apps/details?id=com.michiganlabs.myparish" target="_blank" class="btn btn-outline-primary btn-orange">Download for Android</a>';
            endif;
            ?>
          </small>
          </div>
          <div class="col-12 col-sm-6">
            <img src="<?php if(get_field('cta_bg_image')){
              the_field('cta_bg_image');
            } else {
              echo $themeRoot.'images/img-parishapp.jpg';
            }?>" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
