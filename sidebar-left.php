<?php

if ( ! is_active_sidebar( 'sidebar-left' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area left-sidebar" role="complementary">
	<?php dynamic_sidebar( "sidebar-left" ); ?>
</aside><!-- #secondary -->
