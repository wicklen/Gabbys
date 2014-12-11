<?php
/**
 *Taxonomy index template
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
				 

				 <!-- Functions for fetching and displaying the the taxonomy that was selected in the previous page   -->
					<?php
					// Fill $current_term with the requested object
					$current_term = get_queried_object();
					// Find out which taxonomy is applyed to that object 
					$taxonomy = get_taxonomy($current_term ->taxonomy);
					// Display taxonomy label and term name. 
					echo "<span class='taxonmy-parent'>".$taxonomy->label ."</span>". ': ' . $current_term->name;
					?>
				</h1>
			</header><!-- .page-header -->
	
			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						
						get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next page navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php

get_footer();
