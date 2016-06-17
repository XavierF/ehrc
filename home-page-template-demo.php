<?php 
/**
 * Demo Home Page Template
 *
   Template Name:  Demo Home Page Template
 *
 */
?>
<?php get_header(); ?>

<section id="hero" role="hero-unit">
	<div class="container-fluid">
		<h1 class="tag"><?php $site_description = get_bloginfo( 'description', 'display' ); echo "$site_description";?></h1>
	</div>
</section> <!-- end hero-unit -->


	

<section id="main-content">
	<div class="container">
			<div class="row">
						<div class="col-sm-12" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h3 class="page-title" itemprop="headline"><?php the_title(); ?></h3>

								</header> <!-- end article header -->

								<div class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</div> <!-- end article section -->

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
						</div> <!-- end .col-sm-12 -->
					</div><!-- end .row -->

	</div><!-- end .container -->

</section><!-- end main -->

<section>	
	





<?php get_footer(); ?>