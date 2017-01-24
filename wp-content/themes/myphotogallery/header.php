<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!--<meta name="author" content="">-->
    <!--<link rel="icon" href="../../favicon.ico">-->
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <?php wp_head() ; ?>
</head>
<body class="<?php body_class() ; ?>">
<header class="container-fluid">
    <div class="container">
      <div class="row">
    <div class="blog-header">
      <div class="row">
        <div class="col-md-9">
          <h1 class="blog-heading"><?php bloginfo('name');?></h1>
        </div>
        <div class="col-md-3">
          <div class="input-group pull-right">
              <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
		    	<input name="s" class="w3-input" type="text" placeholder="Search...">
		    </form>
          </div> 
        </div> <!-- col-md-6 -->
      </div> <!-- row -->
    </div> <!-- blog-header -->
  </div> <!-- row -->
    </div> <!-- container -->
</header> <!-- header -->

<section class="container">
    <div class="row">
        <div class="col-md-3">
           <?php if(is_active_sidebar('sidebar')) : ?>
          	<?php dynamic_sidebar('sidebar'); ?>
           <?php endif; ?>
        </div> <!-- .col-md-3 -->
