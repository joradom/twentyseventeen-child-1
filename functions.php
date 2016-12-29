<?php
  function twentyseventeen_child_widgets_init() {
  	register_sidebar( array(
  		'name'          => __( 'Left Sidebar', 'twentyseventeen-child' ),
  		'id'            => 'sidebar-left',
  		'description'   => __( 'Add widgets here to appear in your left sidebar.', 'twentyseventeen' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h2 class="widget-title">',
  		'after_title'   => '</h2>',
  	) );
  }
  add_action( 'widgets_init', 'twentyseventeen_child_widgets_init' );
?>