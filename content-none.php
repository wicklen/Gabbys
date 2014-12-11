<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<header class="page-header">
	<h1 class="page-title"><?php _e( 'Hittade inte det du sökte', 'twentyfourteen' ); ?></h1>
</header>

<div class="page-content">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentyfourteen' ), admin_url( 'post-new.php' ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

	<!-- Displaying the search Query -->
	<?php echo '<p>Din söknig efter:' . " " . get_search_query() ." ".'gav inget resultat</p>'?>
	<h2>Titta på någon av våra andra sidor:</h2>

	<!-- Displaying site pages based on ID -->
	<ul class="list-nav">
 	<?php 
  	$pages = get_pages(); 
  	foreach ( $pages as $page ) {
  		$option = '<li><a href="' . get_page_link( $page->ID ) . '">';
		$option .= $page->post_title;
		$option .= '</a></li>';
		echo $option;
  }
?>
</ul>
	<?php get_search_form(); ?>



	<?php else : ?>

	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyfourteen' ); ?></p>
	<?php get_search_form(); ?>

	<?php endif; ?>
</div><!-- .page-content -->
