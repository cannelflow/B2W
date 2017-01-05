<?php
/**
 * Template Name: Resources Page
 */
 
get_header(); 

$thumbnail_url                      = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

?>
 
 <?php if(has_post_thumbnail()) { //check for featured image ?>
 
 <!-- FEATURE IMAGE
	================================================== -->
    <section class="feature-image" style="background:url('<?php echo $thumbnail_url?>') no-repeat ; background-size:cover" data-type="background" data-speed="2">
        <h1><?php the_title() ; ?></h1>
    </section>
 
 <?php } else { //fallback image ?>
 
  <section class="feature-image feature-image-default" data-type="background" data-speed="2">
        <h1><?php the_title() ; ?></h1>
    </section>
 
 <?php } ?>
 

    <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
        <div class="row" id="primary">

            <div id="content" class="col-sm-12">

                <section class="main-content">
                    
                    <?php while ( have_posts() ) : the_post(); ?>
                      <?php the_content(); ?>
                    <?php endwhile; ?>
                    
                    <?php 
                         query_posts(array( 
                           'post_type' => 'resource',
                           'showposts' => 10,
                        ) );  
                    ?>
                    
                    <hr>
                      
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
							<?php the_content(); ?>
							<a href="<?php echo $resource_section_url; ?>" class="btn btn-success"><?php echo $resource_section_button_text; ?></a>
						</div><!-- resource -->
						
						<?php endwhile; ?>
						
					</div><!-- resource-row -->
                       
                </section>

            </div>
            <!-- content -->

        </div>
        <!-- primary -->
    </div>
    <!-- container -->

<?php get_footer(); ?>