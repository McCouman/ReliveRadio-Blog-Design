<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>		
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
		
			<div id="inner-header" class="clearfix">
				
				<div class="navbar navbar-static-top" >
					<div class="navbar-inner">
						<div class="container-fluid nav-container" style="max-width: 100% !important;">
							<nav role="navigation">
								<a style="font-size: 0.99625em; text-shadow: 0 1px 1px #333; margin-right: -8px;" class="brand" id="logo" title="<?php echo get_bloginfo('description'); ?>" 
								href="http://reliveradio.de">ReliveRadio</a>
								
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
								</a>
								
								<div class="nav-collapse">
									<?php #bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>

<ul class="nav">
  
  
<li class="divider-vertical"></li> 
  
  <li class="dropdown">
    <a style="font-size: 0.8125em; text-shadow: 0 1px 1px #eee;" href="#" class="dropdown-toggle" data-toggle="dropdown">
      Streams <b style="color:#eee;" class="caret"></b>
    </a>
    <ul class="dropdown-menu">
       <li><a style="margin-left: -4px; font-size: 0.8125em; text-shadow: 0 1px 1px #eee;" href="http://reliveradio.de/stream/mix">Mix</a></li>
        <li><a style="margin-left: -4px; font-size: 0.8125em; text-shadow: 0 1px 1px #eee;" href="http://reliveradio.de/stream/technik">Technik</a></li>
        <li><a style="margin-left: -4px; font-size: 0.8125em; text-shadow: 0 1px 1px #eee;" href="http://reliveradio.de/stream/kultur">Kultur</a></li>
    </ul>
  </li>
  
<li class="divider-vertical"></li>
    
    <li><a style="font-size: 0.8125em; text-shadow: 0 1px 1px #eee;" href="http://reliveradio.de/verzeichnis">Podcast Verzeichnis</a></li>

<li class="divider-vertical"></li>	
	
	<li><a style="font-size: 0.8125em; text-shadow: 0 1px 1px #eee;" href="http://reliveradio.de/info/ueber">Über Uns</a></li>

<li class="divider-vertical"></li>
	
	<li><a style="font-size: 0.8125em; text-shadow: 0 1px 1px #eee;" href="http://reliveradio.de/info/helfen">Uns Unterstützen</a></li>

<li class="divider-vertical"></li>
    
    <li><a style="font-size: 0.8125em; text-shadow: 0 1px 1px #eee;" href="#">Blog</a></li>

<li class="divider-vertical"></li>
   
   <li><a style="font-size: 0.8125em; text-shadow: 0 1px 1px #eee;"  href="http://reliveradio.de/info/chat">Chat</a></li>
		
</ul>
  

<ul class="nav pull-right">
<li class="divider-vertical"></li>
        <li><a style="font-size: 0.8125em; text-shadow: 0 1px 1px #eee;" href="http://reliveradio.de/podcasts">Intern</a></li>
       <li class="divider-vertical"></li>
        <li><a style="font-size: 0.8125em; text-shadow: 0 1px 1px #eee;" href="http://blog.reliveradio.de/impressum/">Impressum</a></li>
</ul>		

							<?php if(of_get_option('search_bar', '1')) {?>
							<form class="navbar-search pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
								<input name="s" id="s" type="text" class="search-query" autocomplete="off" placeholder="<?php _e('Search','bonestheme'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
							</form>
							<?php } ?>
							
						</div> <!-- end .nav-container -->
					</div> <!-- end .navbar-inner -->
				</div> <!-- end .navbar -->
			
			</div> <!-- end #inner-header -->
		
		</header> <!-- end header -->
		
		<div class="container-fluid">
