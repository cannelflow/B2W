<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_To_Wordpress
 */

get_header(); ?>

<section class="feature-image feature-image-default" data-type="background" data-speed="2">
        <h1>Bummer! That Page Cann't Be Found.</h1>
</section>

<div class="container">
	<div id="primary" class="row">
		<main id="content" class="col-sm-8">
			<div class="error-404 not-found">
				<div class="page-content">
					<h2>Don't Fret Lets Get Back You On Track</h2>
					<h3>Resources</h3>
					<p>perhaps you are looking for specific resources</p>
					
					<?php 
                         query_posts(array( 
                           'post_type' => 'resource',
                           'showposts' => 10,
                        ) );  
                    ?>
					
					<div class="resource-row clearfix">
						
						<?php while(have_posts() ) : the_post(); ?>
						
						<?php
                          
                          $resource_section_image             = get_field('resource_section_image');
                          $resource_section_url               = get_field('resource_section_url');
                          $resource_section_button_text       = get_field('resource_section_button_text');
                          
                          ?>
						
						<div class="resource">

							<img src="<?php echo $resource_section_image[url]; ?>" alt="<?php echo $resource_section_image[alt]; ?>">
							
							
							<h3><a href="<?php echo $resource_section_url; ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
							<a href="<?php echo $resource_section_url; ?>" class="btn btn-success"><?php echo $resource_section_button_text; ?></a>
						</div><!-- resource -->
						
						<?php endwhile; ?>
						
					</div><!-- resource-row -->
					<!-- categories -->
					<h3>Categories</h3>
					<p>Or May Be Popular Category</p>
					<div class="widget widget_categories">
							<h4 class="widget-title">Most Used Categories</h4>
							<ul>
								<?php
									wp_list_categories( array (
										
										'orderby'	=> 'count',
										'order'		=> 'DESC',
										'show_count'=> 1,
										'title_li'	=> '',
										'number'	=> 10
										
									) );
								?>
							</ul>
						</div><!-- .widget -->
					<!-- categories -->
					<!-- ARCHIVES-->
						<h3>Archives</h3>
						<p>You can always sort through our archives...</p>
						<?php the_widget( 'WP_Widget_Archives', 'title=Our Archives', 'before_title=<h4 class="widgettitle">&after_title=</h4>' ); ?>
						
						<p>...or, just head back to the <a href="<?php echo esc_url( home_url( '/' ) ); ?>">home page</a>.</p>
					<!-- ARCHIVES-->	
				</div>
			</div>
		</main>
		<!-- sidebar -->
		<aside class="col-sm-4">
			<?php get_sidebar() ; ?>
		</aside>
	</div>
</div>

<?php
get_footer();
