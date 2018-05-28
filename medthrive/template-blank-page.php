<?php /* Template Name: Blank Template */ get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/include/css/styles.css" />
<style>
header, footer, #drift-widget-container, .edit-links{
  display: none !important;
  opacity: 0 !important;
  pointer-events: none !important;
}
</style>

<?php
if (have_posts()):
while (have_posts()) : the_post();
?>
<div class="wrapper p-1">
  <div class="container">
    <?php the_content(); ?>
  </div>
</div>
<?php
endwhile; endif;
get_footer();
?>
