<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="verify-v1" content="ecGAa6GIpWO56fpE2oAz1QjRvxe+yMdDWWkgJo5S97o=" />
<?php 

if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'images.google.com'))

echo '<script language="JavaScript" type="text/javascript">

if (top.location != self.location) top.location = self.location;

</script>';

?>
<title>
<?php 

global $post; 

if ( is_single() || is_page() || is_archive() ) 

   wp_title(''); 

else if(is_404()) 

   echo '404 Error! Page Not Found';

else if(is_search())  

   echo 'Search for: '.wp_specialchars($s, 1);

else 

   bloginfo('name'); 



if ($post->post_parent) 

   echo ' - '.get_the_title($post->post_parent); 

?>
</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<style type="text/css">
#portrait-bg { background:url(<?php bloginfo('template_directory');
?>/images/bg-portrait<?php echo rand(0, 1);
//echo (rand()%10);
?>.jpg);
}
</style>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="/favicon.ico" />
<?php wp_head(); ?>
</head>
<body>
<div id="wrap">
<?php /*<div id="menu">
<ul>
<li><a href="<?php echo get_settings('home'); ?>/" >Home</a></li>
<?php wp_list_pages('sort_column=menu_order&hierarchical=0&title_li='); ?>
<li><a href="/category/newsletters/">Newsletters</a></li>
</ul>
</div> */ ?>
<div id="header"><span class="btitle"><a href="<?php echo get_settings('home'); ?>/">
  <?php bloginfo('name'); ?>
  </a></span>
  <p class="description">
    <?php if (current_user_can('level_10')) _e('<a href="'.get_settings('home').'/wp-admin/">'); else  _e('<a href="'.get_settings('home').'/">'); ?>
    <?php bloginfo('description'); ?>
    <?php _e('</a>'); ?>
  </p>
</div>
<?php /* <div id="rss-big"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Subscribe to this site with RSS'); ?>" rel="nofollow"></a></div> */ ?>
<div id="portrait-bg"></div>
<div id="catmenu">
  <ul>
    <?php //wp_list_categories('orderby=count&show_count=0& hierarchical=0&number=5&title_li=&depth=1'); ?>
    <li><a href="<?php echo get_settings('home'); ?>/" >Home</a></li>
    <li><a href="/about/">About</a></li>
    <li><a href="/service-times/">Service Times</a></li>
    <li><a href="/upcoming-events/">Upcoming Events</a></li>
	<li><a href="/category/newsletters/">Newsletters</a></li>
  </ul>
</div>
