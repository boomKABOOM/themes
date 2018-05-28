<div class="wrapper">
  <div class="container p-0">
    <h3>Articles &amp; Insights</h3>
    <hr/>
    <div class="row">
      <?php $args = array(
      	'posts_per_page'   => 3,
      	'category'         => '',
      	'orderby'          => 'date',
      	'order'            => 'DESC',
      	'post_status'      => 'publish',
      	'suppress_filters' => true
      );
      $posts_array = get_posts( $args );
      foreach ( $posts_array as $post ) : setup_postdata( $post );
      echo '<div class="col-12 col-md-4">';
        include('post-grid-item.php');
      echo '</div>';
      wp_reset_postdata();
      endforeach; ?>

    </div>
  </div>
</div>
