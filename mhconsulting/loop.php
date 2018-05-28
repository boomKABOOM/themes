<?php
while (have_posts()) : the_post();
  if(is_home()){
    include('sections/post-grid-item.php');
  } else if(is_category()){
    echo '<div class="col-12">';
    include('sections/post-list-item.php');
    echo '</div>';
    wp_reset_postdata();
    echo '<hr/>';
  } else{
    echo '<div class="col-12">';
    include('sections/post-list-item.php');
    echo '</div>';
  }
  wp_reset_postdata();
endwhile;
?>
