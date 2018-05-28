<?php
$show_services = get_field('show_services');
$show_articles = get_field('show_articles');
$show_testimonials = get_field('show_testimonials');
$show_cta = get_field('show_cta');

if($show_services){
  include('process.php');
}

if($show_articles){
  include('posts-recent.php');
}

if($show_testimonials){
  include('testimonials.php');
}

if($show_cta){
  include('cta-block.php');
}

?>
