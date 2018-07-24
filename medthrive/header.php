<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/touch.png" rel="apple-touch-icon-precomposed">

    <script src="<?php echo get_template_directory_uri(); ?>/include/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/include/vendors/jquery.cookie.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/include/vendors/jquery.smoothState.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/include/vendors/slick/slick.css"/>
    <script src="<?php echo get_template_directory_uri(); ?>/include/vendors/slick/slick.js" type="text/javascript" charset="utf-8"></script>

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/include/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />

    <script>
    // conditionizr.com
    // configure environment tests
    conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
    });
    </script>

</head>
<body <?php body_class(); ?>>

<?php if (is_user_logged_in() && current_user_can('edit_pages')){ ?>
<div class="edit-links">
  <a href="/wp-admin/post-new.php"><span></span>add article</a><br/>
  <a href="/wp-admin/post-new.php?post_type=page"><span></span>add page</a><br/>
  <a href="/wp-admin/user-new.php"><span></span>add user</a><br/>
  <?php edit_post_link('<span></span>edit this'); ?><br/>
  <a href="/wp-admin"><span></span>dashboard</a>
</div>
<?php } ?>

<header>
<section class="nav dark">
  <div id="toggle-nav">&#9776;</div>
  <div class="container">
    <div class="row" style="align-items:center;">
      <div class="col-12 col-md-3">
        <a href="/" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo-mt.png" />
        </a>
      </div>
      <div class="col-12 col-md-9 align-right">
        <nav>
          <div id="close-nav">X</div>
          <?php main_nav(); ?>
          <a href="/contact-us" class="btn btn-outline-primary btn--get-started">Get Started</a>
        </nav>
      </div>
    </div>

  </div>
</section>
</header>
