<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( is_sticky() && is_home() ) :
			echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;
	?>
	<header class="entry-header">
		<?php
			if ( 'post' === get_post_type() ) :
				echo '<div class="entry-meta">';
					if ( is_single() ) :
						twentyseventeen_posted_on();
					else :
						echo twentyseventeen_time_link();
						twentyseventeen_edit_link();
					endif;
				echo '</div><!-- .entry-meta -->';
			endif;

			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( is_single() ) : ?>
    <div class="container-fluid">
      <div class="about-author row">
        <div class="highlighting">
          Syntax Highlighting by <a href="https://highlightjs.org/">highlight.js</a>
        </div>
      <hr>
      <h4>About the Author</h4>
      <p>
        <div class="about-text col-xs-10">
          <p>
            Kimberly is a <a href="http://kimberly.codes/">freelance web developer</a>. While she always enjoys learning new technologies, her current favorite is AngularJS. 
          </p>
          <p>
            When not coding, Kimberly spends time with her three young boys and her husband, <a href="http://tattoodurango.com/portfolios/lawrence-pennington/">Lawrence Pennington</a>, in Durango, CO.
          </p>
        </div><!-- .about-text -->
      <br />
      <div class="about-photo col-xs-2">
        <img src="/wp-content/uploads/2017/01/profile.jpg" alt="lamp stack kimberly pennington kimberlythegeek"/>
      </div><!-- .about-photo -->
      </p>

      <ul class="post-footer">
        <li><a href="http://freecodecamp.com/kimberlythegeek"><i class="fa fa-free-code-camp" aria-hidden="true"></i></a></li>
        <li><a href="http://twitter.com/kimberlythegeek"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="http://github.com/kimberlythegeek"><i class="fa fa-github" aria-hidden="true"></i></a></li>
        <li><a href="http://codepen.io/kimberlythegeek/pens/public"><i class="fa fa-codepen" aria-hidden="true"></i></a></li>
        <li><a href="http://linkedin.com/in/kannepennington"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
        <li><a href="https://www.facebook.com/kimberlythegeek/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
      </ul><!-- .post-footer -->
      </div><!-- .about-author -->
    </div><!-- .container-fluid -->
		<?php twentyseventeen_entry_footer(); ?>
	<?php endif; ?>

</article><!-- #post-## -->
