<section>
<div class="wrapper bg-offwhite posts-wrapper">
  <div class="container">
    <div class="text-center">
      <div class="section-title">
        <h2>Recent posts, news, and articles</h2>
        <h3>Move Beyond Pain</h3>
      </div>
    </div>
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
    <div class="grid_breaker">

      <?php $args = array(
      	'posts_per_page'   => 1,
      	'category'         => 'job-listing',
      	'orderby'          => 'date',
      	'order'            => 'DESC',
      	'post_status'      => 'publish',
      	'suppress_filters' => true
      );
      $posts_array = get_posts( $args );
      foreach ( $posts_array as $post ) : setup_postdata( $post );
        include('post-grid-item.php');
      wp_reset_postdata();
      endforeach; ?>
    </div>
  </div>
</div>
</section>
