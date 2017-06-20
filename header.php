<!DOCTYPE html>
<?php global $smof_data; ?>
<html <?php language_attributes(); ?> <?php if($smof_data['rnr_enable_rtl_layout'] == true) { echo 'dir="rtl"'; } ?>>
<head>
<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="IE=edge" />
<?php if (defined('WPSEO_VERSION')) { ?>
          <title><?php wp_title(); ?></title>	
<?php }else {  ?>
<title><?php wp_title(''); ?></title>
<?php    } ?>
<?php wp_head(); ?>
</title>
<?php if($smof_data['rnr_favicon_url'] != "") { ?><link rel="shortcut icon" href="<?php echo $smof_data['rnr_favicon_url']; ?>"><?php } ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php get_template_part( 'includes/googlefonts'); ?>
</head>
<body <?php body_class('onepage'); ?> data-spy="scroll" data-target=".navigation" data-offset="82" data-preoload="<?php echo $smof_data['rnr_disable_preloader'];?>">
<div id="load"></div>
     <!-- START PAGE WRAP -->    
    <div class="page-wrap <?php if($smof_data['rnr_enable_dark_skin'] == true) { echo 'dark-skin'; } ?>">
  <!-- HEADER SECTION -->	
