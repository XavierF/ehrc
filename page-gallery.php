<?php
/*
Template Name: Gallery Page
*/
?>

<?php get_header(); ?>

<div class="container">

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="full-width" class="clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>
									<p class="byline vcard"><?php
										printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) ), bones_get_the_author_posts_link() );
									?></p>


								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<p class="clearfix"><?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ' ', '' ); ?></p>

								</footer> <!-- end article footer -->


							

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
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

				<?php endif; // end of the loop. ?>

						</div> <!-- #full-width -->
					<?php if( have_rows('gallery') ): ?>
					<div class="gallery clearfix" role="image-gallery">
					<?php 
					// loop through rows (parent repeater)
					while( have_rows('gallery') ): the_row(); 
							//vars
								$header = get_sub_field('header'); 
								$text =get_sub_field('text');
								?>
						<div class="thumb-container">
							
							<?php 
							// check for rows (sub repeater)
							if( have_rows('thumbs') ): ?>
								
								<div class="row">
									<div class="col-lg-12">
										<h3><?php echo $header; ?></h3>
										<p><?php echo $text; ?></p>
									</div>

								<?php 
								// loop through rows (sub repeater)
								while( have_rows('thumbs') ): the_row(); 
								// vars
											$image = get_sub_field('image');
											$caption = get_sub_field('caption');
											$class = get_sub_field ('size');

									// display each thumb
									?>
									<div class="thumb <?php echo $class; ?>"> 
										<img src="<?php echo $image; ?>"  alt="<?php echo $caption; ?>"  class="img-responsive">
										<p><?php echo $caption; ?></p>
									</div><!-- .thumb -->
								<?php endwhile; ?>
								</div><!-- .row -->
							<?php endif; //if( get_sub_field('thumbs') ): ?>
						</div><!-- .thumb-container -->

					<?php endwhile; // while( has_sub_field('gallery') ): ?>
					</div><!-- .gallery -->
				<?php endif; // if( get_field('gallery') ): ?>

			

		</div><!-- #content -->
	</div><!-- #primary -->
				

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

			</div> <!-- end .container -->

<?php get_footer(); ?>
