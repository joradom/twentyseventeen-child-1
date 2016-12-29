<?php

if ( ! is_active_sidebar( 'sidebar-left' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( "sidebar-left" ); ?>
</aside><!-- #secondary -->
