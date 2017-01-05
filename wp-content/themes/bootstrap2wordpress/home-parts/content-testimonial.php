<!-- Testimonial Feature Section -->

  <section id="kudos">
    <div class="container">
      <div class="row">

        <div class="col-sm-8 col-sm-offset-2">
          <h2>What People Are Saying About Brad</h2>
          
          <?php 
            query_posts(array( 
                 'post_type' => 'testimonial',
                 'showposts' => 10,
              ) );  
        ?>
        
        <?php while (have_posts()) : the_post(); ?>

            <!-- TESTIMONIAL -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <?php if(has_post_thumbnail()){
                    the_post_thumbnail( 'medium' ); 
                 }
                 ?>
            </div>
            <!-- end col -->
            <div class="col-sm-8">
              <blockquote>
                <?php the_content() ; ?>
                <cite>&mdash; <?php the_title() ; ?></cite>
              </blockquote>
            </div>
            <!-- end col -->
          </div>
          <!-- row -->
            
        <?php endwhile;?>

        </div>
        <!-- end col -->

      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>
  <!-- kudos -->
  <?php wp_reset_query(); ?> 