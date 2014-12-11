<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 ?>
<?php get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Sidan hittades inte', 'twentyfourteen' ); ?></h1>
            </header>
           
            <div class="page-content">
                 <p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Ta mig tillbaka till Gabbys Pizzerias startsidan!</a>
                </p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/404.gif" alt="404.gif">
                <p>Oj något gick fel. Sök gärna efter det du letar efter</p>
                <?php get_search_form(); ?>
            </div><!-- .page-content -->

        </div><!-- #content -->
    </div><!-- #primary -->





