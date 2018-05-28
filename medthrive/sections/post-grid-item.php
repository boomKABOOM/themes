<?php
$item_link = get_permalink();
$link_target = '_self';
?>

<article id="post-<?php the_ID(); ?>" class="post-grid-item <?php if($list_view){echo 'list-view'; } ?>">
  <a class="image" href="<?php echo $item_link; ?>" target="<?php echo $link_target; ?>" style="background:url(<?php if ( has_post_thumbnail() ) {
    	the_post_thumbnail_url('medium_large');
    } else{
      echo(get_template_directory_uri() . '/images/img-main1.jpg');
    }
    ?>) no-repeat center center;">&nbsp;</a>
  <div class="content">
    <div class="category">
      <?php the_category(' | '); ?>
      <span>&nbsp;|&nbsp;<?php echo get_the_date('M d, Y'); ?></span>
    </div>
    <a class="title" href="<?php echo $item_link; ?>">
      <h3><?php
        $title_text = get_the_title();
        echo wp_trim_words( $title_text , '9' );
       ?></h3>
    </a>

    <a href="<?php echo $item_link; ?>" class="text">
      <?php
        $post_content = get_the_content();
        echo wp_trim_words( $post_content , '40' );
       ?>
    </a>

  </div>
</article>
