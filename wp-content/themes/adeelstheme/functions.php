<?php 
/*
 *First of all do following procedure, it will impact two things, first it will bring menu option under appearance.
 *Second , it will create two locations for menu, so you will be able to create 2 menus and assign them to your created 
 *locations.


*/
register_nav_menus(
	array(
			'primary'=> __('Main Menu','adeelstheme'),
			'footer' => __('Footer Menu','adeelstheme')
		)
	);

function learning_widgets_init()
{
	register_sidebar(
		array(
				'name'          => __('Main Sidebar','adeelstheme'),
				'id'            => 'main-sidebar',
				'description'   => __('','adeelstheme'),
				'before_widget' => '<div class="widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget_title">',
				'after_title'   => '</h3>'
			)

		);
	register_sidebar(
		array(
				'name'          => __('Second Sidebar','adeelstheme'),
				'id'            => 'second-sidebar',
				'description'   => __('','adeelstheme'),
				'before_widget' => '<div class="widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget_title">',
				'after_title'   => '</h3>'
			)

		);
}

add_action('widgets_init','learning_widgets_init');