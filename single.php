<?php get_header(); ?>

<div class="container">

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php if (function_exists("builder_breadcrumb_lists")) { ?>
							<?php builder_breadcrumb_lists(); ?>
						<?php } ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h3 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h3>			

								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ' ', '</p>' ); ?>
									<ul class="post-nav list-unstyled">
										<li class="left"><?php previous_post_link(); ?></li>
										<li class="right"><?php next_post_link(); ?></li>
									</ul>

									<?php bones_related_posts(); ?>
								</footer> <!-- end article footer -->

							</article> <!-- end article -->
							<?php comments_template(); ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'please hit the back button of your browser', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( '', 'bonestheme' ); ?></p>
									</footer>
									

			
							</article>

						<?php endif; ?>

					</div> <!-- end #main -->
					<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->
	
			</div> <!-- end #content -->

		</div> <!-- end .container -->

<?php get_footer(); ?>