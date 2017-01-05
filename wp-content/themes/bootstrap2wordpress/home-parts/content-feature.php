<?php

$course_features_section_image                     = get_field('course_features_section_image');
$course_features_section_title                     = get_field('course_features_section_title');
$course_features_section_body                      = get_field('course_features_section_body');

?>
<!-- Course Feature Section -->

  <section id="course-features">
    <div class="container">

      <div class="section-header">
        
        <!--if user uploaded an image -->
        
        <?php if(!empty($course_features_section_image)) : ?>
        
         <img src="<?php echo $course_features_section_image['url'] ; ?>" alt="<?php echo $course_features_section_image['alt'] ; ?>">
        
        <?php endif ; ?>
        
        <h2><?php echo $course_features_section_title ; ?></h2>
        
        <!--if user added body text -->
        
        <?php if(!empty($course_features_section_body)) : ?>
        
         <p class="lead"><?php echo $course_features_section_body ; ?></p>
        
        <?php endif ; ?>
        
      </div>
      <!-- section-header -->

      <div class="row">
      
        <?php 
            query_posts(array( 
                 'post_type' => 'course_feature',
                 'showposts' => 10,
              ) );  
        ?>
        
        <?php while (have_posts()) : the_post(); ?>
           <div class="col-sm-2">
                 <i class="<?php the_field('course_feature_icon') ; ?>"></i>
                 <h4><?php the_title() ; ?></h4>
            </div>
        <?php endwhile;?>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>
  <!-- course-features -->
 <?php wp_reset_query(); ?>