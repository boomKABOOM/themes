<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- MAKE SURE TO also redefine $themeRoot in the functions.php file -->
  <?php $themeRoot = "/wp-content/themes/stmary/"; ?>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo $themeRoot; ?>favicon.ico" rel="shortcut icon">
    <link href="<?php echo $themeRoot; ?>touch.png" rel="apple-touch-icon-precomposed">



    <?php wp_head(); ?>

	<script src="<?php echo $themeRoot; ?>include/js/jquery.min.js"></script>
	<script src="<?php echo $themeRoot; ?>include/vendors/jquery.cookie.min.js"></script>
    <script src="<?php echo $themeRoot; ?>include/vendors/jquery.smoothState.js"></script>

    <link rel="stylesheet" href="<?php echo $themeRoot; ?>include/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $themeRoot; ?>include/css/styles.css" />

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

<header style="background:linear-gradient( rgba(189, 188, 182, .5), rgba(189, 188, 182, .5) ), url(<?php echo $themeRoot ?>images/bg-header-main.jpg) bottom no-repeat; background-size:cover;">
<div class="info-block dark">
  <div class="container">
    <a href="/" class="logo" style="position:relative; top:2em;">
      <span class="logo--color">
        <img src="<?php echo $themeRoot; ?>images/logo-sm.png" />
      </span>
      <span class="logo--white">
        <img src="<?php echo $themeRoot; ?>images/logo-sm-w.png" />
      </span>
    </a>
    <div class="row">
      <div class="col text-right">
        <a href="tel:(616) 866-2727" class="tab-btn bg-red" data-become-sticky="false">
          In Case of Severe Weather
        </a>
        <a href="/our-clinic/new-patient" class="tab-btn bg-gray full-only" data-become-sticky="true">
          English | Español
        </a>
      </div>
    </div>
  </div>
</div>
</header>
<section class="nav">
  <div class="container">
    <div id="toggle-nav">&#9776;</div>
    <nav>
      <div id="close-nav">X</div>
      <?php main_nav(); ?>
    </nav>
  </div>
</section>
