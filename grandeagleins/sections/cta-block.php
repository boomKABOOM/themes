<div class="wrapper p-0 p-md-5 full-only">
  <div class="container">

    <div class="row cta-rounded">
      <div class="col-6 col-md-8 bg-green dark cta-title p-1 p-md-5">
        Save money &amp; energy with an
        <strong>Insulation Energy Appraisal</strong>
      </div>
      <div class="col-6 col-md-4 bg-gray-rounded text-center p-1 p-md-5">
        <a href="/contact" class="button">Schedule a<br/>
          Consultation</a>
      </div>
    </div>

  </div>
</div>

<!--
<?php if(get_field('cta_image')) { ?>

<div class="wrapper cta-block" style="background:url(<?php the_field('cta_image'); ?>);">
  <div class="container">

    <div class="row pt-5 pb-5">
      <div class="col-12 col-md-8 pb-5 pt-5">
        <h5><strong>
        <?php
        if(get_field('cta_title')){
          the_field('cta_title');
        } else {
          echo 'Exceptional Service. Grand Results.';
        } ?>
      </strong></h5>
        <p>
          <?php
          if(get_field('cta_text')){
            the_field('cta_text');
          } else {
            echo "Grand Eagle Insulation is proudly located in Grand Rapids and is West Michigan's HVAC Insulation expert.";
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
              } else {
                echo '/contact';
              } ?>
            " class="boxlink"><?php the_sub_field('text'); ?></a>
          <?php
          endwhile;
        else:
        ?>
          <a class="boxlink" href="/services">Get an Estimate</a>
        <?php
        endif;
        ?>
      </div>
      <div class="col-4 full-only">
      </div>
    </div>

  </div>
</div>

<?php } else { ?>


<?php } ?>
-->
