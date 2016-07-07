<?php
/**
 * Template Name: Search Page
**/

?>
<?php get_header(); ?>

<div class="container">

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix search-page" role="main">
						<h3 class="archive-title">Enter Your Search Term In The Field Below</h3>

						<section class="search">

									<p><?php get_search_form(); ?></p>

						</section> <!-- end search section -->

						</div> <!-- end #main -->

							<?php get_sidebar(); ?>

					</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

			</div> <!-- end .container -->

<?php get_footer(); ?>
