<?php 
/**
 * Home Page Template
 *
   Template Name:  Home Page Template
 *
 */
?>
<?php get_header(); ?>
<section id="hero" role="hero-unit" class="container-fluid clearfix">
	<div class="hero-background"></div>
	
				<div class="container" role="main">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="article-header">
							<h3 class="page-title" itemprop="headline" id="try-us" style="padding-top: 75px; margin-top: -75px;"><?php the_title(); ?></h3>
						</header> <!-- end article header -->

						<div class="entry-content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
						</div> <!-- end entry-content -->
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
			</div> <!-- end .container -->
		

</section> <!-- end hero-unit -->


<section class="services clearfix">
	<div class="section-header clearfix">
		<h2>SERVICES</h2>
	</div>

	<div class="container clearfix">
		<div class="row">
			<div class="card col-lg-4">
				<h4><a href="<?php the_field('service_1_page'); ?>"><?php the_field('service_1_title'); ?></a></h4>
				<p class="service-excerpt"><?php the_field('service_1_excerpt'); ?></p>	
				<a href="<?php the_field('service_1_page'); ?>" class="btn btn-primary">LEARN MORE</a>
			</div>

			<div class="card col-lg-4">
				<h4><a href="<?php the_field('service_2_page'); ?>"><?php the_field('service_2_title'); ?></a></h4>
				<p class="service-excerpt"><?php the_field('service_2_excerpt'); ?></p>	
				<a href="<?php the_field('service_1_page'); ?>" class="btn btn-primary">LEARN MORE</a>
			</div>
				
			
			<div class="card col-lg-4">
				<h4><a href="<?php the_field('service_3_page'); ?>"><?php the_field('service_3_title'); ?></a></h4>
				<p class="service-excerpt"><?php the_field('service_3_excerpt'); ?></p>	
				<a href="<?php the_field('service_1_page'); ?>" class="btn btn-primary">LEARN MORE</a>
			</div>
				
		</row>
		
	</div><!-- .container-->
</section><!-- end .home-content -->
<section id="news" class="container"></section>


<?php get_footer(); ?>