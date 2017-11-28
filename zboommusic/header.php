<!DOCTYPE html>
<html lang="en" <?php language_attributes();?> > 
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset');?>">
	
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsiveslides.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" media="all"/>	
	<link href='<?php echo get_template_directory_uri();?>//images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
	<?php wp_head();?>
</head>
<body <?php body_class();?>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="<?php home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"/></a></div>
		<?php get_search_form();?>
		<div id="search">
			<div class="button-search"></div>
			<form method="GET" action="<?php esc_url(bloginfo('home'));?>"> 
			
				<input name="s"type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
			</form>
			
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			
                    <?php if(function_exists('wp_nav_menu')){
                        wp_nav_menu(array(
                            'theme_location'=>'main-menu'
                        ));
                    }
                    ?>
		</div>
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.html">Home</option>
				<option value="blog.html">Blog</option>
				<option value="gallery.html">Gallery</option>
				<option value="single.html">About</option>
				<option value="contact.html">Contact</option>
			</select>
		</div>		
	</div>
</nav>