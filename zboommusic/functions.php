<?php
function zboom_default_functions(){
	
	add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
	load_theme_textdomain('zboom', get_template_directory_uri().'/languages');
	
	 if(function_exists('register_nav_menu')){
			register_nav_menu('main-menu', __('Main Menu', 'zboom'));
	 }
	 
	 function read_more(){
		 $post_content=  explode(" ",get_the_content());
		 $less_content=  array_slice($post_content, 0, $limit);
         echo implode(" ", $less_content);
	 }
	
	 register_post_type('zboom-slider',array(
        'labels'=>array(
            'name'=>'Sliders',
            'add_new_item'=>'Add new slider'
        ),
        'public'=>true,
        'supports'=>array('title','thumbnail')
    ));
	
	  register_post_type('zboom-service',array(
        'labels'=>array(
            'name'=>'Blocks',
            'add_new_item'=>__('Add New Block','zboom')
        ),
        'public'=>TRUE,
        'supports=>'=>array('title','editor')
    ));
	
	 register_post_type('zboom-slider',array(
        'labels'=>array(
            'name'=>'Gallary',
            'add_new_item'=>'Add new gallary'
        ),
        'public'=>true,
        'supports'=>array('title','thumbnail','editor')
    )); 
}
add_action('after_setup_theme', 'zboom_default_functions');


function zboom_right_sidebar(){
    register_sidebar(array(
        'name'=>__('Right Sidebar','zboom'),
        'description'=>__('Add your right sidebar widgets here','zboom'),
        'id'=>'right_sidebar',
        'before_widget'=>'<div class="box">',
        'after_widget'=>'</div></div>',
        'before_title'=>'<div class="heading"><h2>',
        'after_title'=>'</h2></div><div class="content">'
    ));
	
	register_sidebar(array(
        'name'=>__('Contact Sidebar','zboom'),
        'description'=>__('Add your Contact sidebar widgets here','zboom'),
        'id'=>'contact-sidebar',
        'before_widget'=>'<div class="box">',
        'after_widget'=>'</div></div>',
        'before_title'=>'<div class="heading"><h2>',
        'after_title'=>'</h2></div><div class="content">'
    ));
	    register_sidebar(array(
        'name'=>__('Footer Widgets','zboom'),
        'description'=>__('Add your right footer widgets here','zboom'),
        'id'=>'footer-widget',
        'before_widget'=>'<div class="col-1-4"><div class="wrap-col"><div class="box">',
        'after_widget'=>'</div></div></div></div>',
        'before_title'=>'<div class="heading"><h2>',
        'after_title'=>'</h2></div><div class="content">'
    )); 
}
add_action('widgets_init', 'zboom_right_sidebar');