<?php

$project_feature_section_title                     = get_field('project_feature_section_title');
$project_feature_section_body                      = get_field('project_feature_section_body');

?>

 <!-- Project Feature Section -->

  <section id="project-features">
    <div class="container">

      <h2><?php echo $project_feature_section_title ; ?></h2>
      <p class="lead"><?php echo $project_feature_section_body ;?></p>

      <div class="row">
        
        <?php 
            query_posts(array( 
                 'post_type' => 'project_feature',
                 'showposts' => 10,
              ) );  
        ?>
        
        <?php while (have_posts()) : the_post(); ?>
           <div class="col-sm-4">
                 <?php if(has_post_thumbnail()){
                    the_post_thumbnail( 'medium' ); 
                 }
                 ?>
                 <h3><?php the_title() ; ?></h3>
                 <p><?php the_content() ; ?></p>
            </div>
        <?php endwhile;?>

      </div>
      <!-- row -->

    </div>
    <!-- container -->
  </section>
  <!-- project-features -->
<?php wp_reset_query(); ?> 