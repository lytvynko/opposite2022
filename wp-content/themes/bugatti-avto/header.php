<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<?php wp_head()?>

<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style_ie6.css" media="screen" />
<![endif]-->

</head>
<body>
<div class="container">
<!-- TOP MENU STARTS -->
<div id="top-menu-out">
  <div id="top-menu">
    <ul>
      <li class="page_item current_page_item first"><a href="<?php echo get_settings('home'); ?>">Главная</a></li>
      <?php wp_list_pages('title_li=&depth=1&sort_column=menu_order'); ?>
      
    </ul>
  </div>
</div>
<!-- TOP MENU ENDS -->
<!-- HEADER STARTS -->

<div id="header-out">
  <div id="header-bg">
    <div id="header">
      <div class="col-left" style="text-align:center"> 
         <a href="<?php bloginfo('url'); ?>"> <h2><?php bloginfo('name'); ?></h2> </a>
          <?php bloginfo('description'); ?>
      </div>
      <div class="col-right">
      
        
      </div>
    </div>
  </div>
</div>
<!-- HEADER ENDS -->
<!-- MAIN MENU STARTS -->
<div id="main-menu-out">
  <div id="main-menu">
    <ul id="nav">
      <li class="nav_home <?php if ( is_home()) { echo ' here'; } ?>"><a href="<?php bloginfo('home'); ?>">Главная</a></li>
      <?php wp_list_categories('depth=1&exclude=1&hide_empty=1&orderby=name&show_count=0&use_desc_for_title=0&number=6&title_li='); ?>
    </ul>
  </div>
</div>
<!-- MAIN MENU out ENDS -->