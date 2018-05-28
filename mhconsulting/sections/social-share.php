<?php
$share_url = get_permalink();
$share_title = get_the_title();
$share_text = get_the_content();
?>

<div class="social-links">
  <strong>Share</strong>
  <a href="https://www.facebook.com/sharer.php?u=<?php echo $share_url; ?>" target="_blank"><i class="icons8-facebook"></i></a>
  <a href="https://twitter.com/share?text=<?php echo $share_title; ?>&url=<?php echo $share_url; ?>" target="_blank"><i class="icons8-twitter-filled"></i></a>
  <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $share_url; ?>&title=<?php echo $share_title; ?>
  &summary=<?php echo wp_trim_words( $share_text , '40' ); ?>&source=<?php echo get_bloginfo('title'); ?>" target="_blank"><i class="icons8-linkedin"></i></a>
</div>
