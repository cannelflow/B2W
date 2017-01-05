<?php
/**
 * Template Name: Home Page
 */
 
//  custom fileds

$prelaunch_price          = get_post_meta( 11,'prelaunch_price',true);
$launch_price             = get_post_meta( 11,'launch_price',true);
$final_price              = get_post_meta( 11,'final_price',true);
$course_url               = get_post_meta( 11,'course_url',true);
$button_text              = get_post_meta( 11,'button_text',true);
$optin_text               = get_post_meta( 11,'optin_text',true);
$optin_button_text        = get_post_meta( 11,'optin_button_text',true);

// advanced custome field

$income_feature_image                              = get_field('income_feature_image');
$income_feature_title                              = get_field('income_feature_title');
$income_feature_description                        = get_field('income_feature_description');
$reason_1_title                                    = get_field('reason_1_title');
$reason_1_description                              = get_field('reason_1_description');
$reason_2_title                                    = get_field('reason_2_title');
$reason_2_description                              = get_field('reason_2_description');

$who_should_take_this_course_image                 = get_field('who_should_take_this_course_image');
$who_should_take_this_course_title                 = get_field('who_should_take_this_course_title');
$who_should_take_this_course_description           = get_field('who_should_take_this_course_description');

$course_features_section_image                     = get_field('course_features_section_image');
$course_features_section_title                     = get_field('course_features_section_title');
$course_features_section_body                      = get_field('course_features_section_body');

$project_feature_section_title                     = get_field('project_feature_section_title');
$project_feature_section_body                      = get_field('project_feature_section_body');

$watch_the_course_section_title                    = get_field('watch_the_course_section_title');
$watch_the_course_section_url                      = get_field('watch_the_course_section_url');

$instructor_section_title                          = get_field('instructor_section_title');
$instructor_section_name                           = get_field('instructor_section_name');
$instructor_section_bio                            = get_field('instructor_section_bio');
$instructor_section_full_bio                       = get_field('instructor_section_full_bio');
$twitter_username                                  = get_field('twitter_username');
$facebook_username                                 = get_field('facebook_username');
$google_plus                                       = get_field('google_plus');
$student                                           = get_field('student');
$review                                            = get_field('review');
$course                                            = get_field('course');


get_header(); ?>

 <!-- Hero Section -->

  <section id="hero" data-type="background" data-speed="5">
    <article>
      <div class="container clearfix">
        <div class="row">

          <div class="col-sm-5">
            <img src="<?php bloginfo('stylesheet_directory') ; ?>/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
          </div>
          <!-- col -->

          <div class="col-sm-7 hero-text">
            <h1><?php bloginfo('name') ; ?></h1>
            <p class="lead"><?php bloginfo('description') ; ?></p>

            <div id="price-timeline">
              <div class="price active">
                <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                <span><?php echo $prelaunch_price ;?></span>
              </div>
              <!-- end price -->
              <div class="price">
                <h4>Launch Price <small>Coming soon!</small></h4>
                <span><?php echo $launch_price ;?></span>
              </div>
              <!-- end price -->
              <div class="price">
                <h4>Final Price <small>Coming soon!</small></h4>
                <span><?php echo $final_price  ;?></span>
              </div>
              <!-- end price -->
            </div>
            <!-- price-timeline -->

            <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url ; ?>" role="button"><?php echo $button_text ; ?></a></p>
          </div>
          <!-- col -->

        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </article>
  </section>

  <!-- Opt In Section -->

  <section id="optin">
    <div class="container">

      <div class="row">

        <div class="col-sm-8">
          <p class="lead"><?php echo $optin_text ; ?></p>
        </div>
        <!-- end col -->

        <div class="col-sm-4">
          <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
						<?php echo $optin_button_text ; ?>
					</button>
        </div>
        <!-- end col -->

      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>

  <!-- Boost Your Income Section -->

  <section id="boost-income">
    <div class="container">

      <div class="section-header">
        
        <!--if user uploaded an image -->
        
        <?php if(!empty($income_feature_image )) : ?>
        
         <img src="<?php echo $income_feature_image['url'] ; ?>" alt="<?php echo $income_feature_image['alt'] ; ?>">
        
        <?php endif ; ?>
        
        <h2><?php echo $income_feature_title ; ?></h2>
      </div>
      <!-- section-header -->

      <p class="lead"><?php echo $income_feature_description ; ?></p>
      <div class="row">
        <div class="col-sm-6">
          <h3><?php echo $reason_1_title ; ?></h3>
          <p><?php echo $reason_1_description ; ?></p>
        </div>
        <!-- end col -->

        <div class="col-sm-6">
          <h3><?php echo $reason_2_title ; ?></h3>
          <p><?php echo $reason_2_description ; ?></p>
        </div>
        <!-- end col -->
      </div>
      <!-- row -->

    </div>
    <!-- container -->
  </section>

  <!-- Who Benifits Section -->

  <section id="who-benefits">
    <div class="container">

      <div class="section-header">
        
        <!--if user uploaded an image -->
        
        <?php if(!empty($who_should_take_this_course_image)) : ?>
        
         <img src="<?php echo $who_should_take_this_course_image['url'] ; ?>" alt="<?php echo $who_should_take_this_course_image['alt'] ; ?>">
        
        <?php endif ; ?>
        
        <h2><?php echo $who_should_take_this_course_title ; ?></h2>
      </div>
      <!-- section-header -->

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

          <?php echo $who_should_take_this_course_description ; ?>

        </div>
        <!-- end col -->
      </div>
      <!-- row -->

    </div>
    <!-- container -->
  </section>

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

  <!-- Video Feature Section -->

  <section id="featurette">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h2><?php echo  $watch_the_course_section_title ; ?></h2>
          <iframe width="100%" height="415" src="<?php echo $watch_the_course_section_url ; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- end col -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>
  <!-- featurette -->

  <!-- Instructor Feature Section -->

  <section id="instructor">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-6">
          <div class="row">
            <div class="col-lg-8">
              <h2><?php echo $instructor_section_title ;?> <small><?php echo $instructor_section_name ;?></small></h2>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
              <a href="<?php echo $twitter_username  ;?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
              <a href="<?php echo $facebook_username  ;?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="<?php echo $google_plus  ;?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
            </div>
            <!-- end col -->

          </div>
          <!-- row -->

          <p class="lead"><?php echo $instructor_section_bio ;?><p>

              <?php echo $instructor_section_full_bio  ;?>

              <hr>

              <h3>The Numbers <small>They Don't Lie</small></h3>
              <div class="row">
                <div class="col-xs-4">
                  <div class="num">
                    <div class="num-content">
                      <?php echo $student  ;?>+ <span>students</span>
                    </div>
                    <!-- num-content -->
                  </div>
                  <!-- num -->
                </div>
                <!-- end col -->

                <div class="col-xs-4">
                  <div class="num">
                    <div class="num-content">
                      <?php echo $review  ;?> <span>reviews</span>
                    </div>
                    <!-- num-content -->
                  </div>
                  <!-- num -->
                </div>
                <!-- end col -->

                <div class="col-xs-4">
                  <div class="num">
                    <div class="num-content">
                      <?php echo $course  ;?> <span>courses</span>
                    </div>
                    <!-- num-content -->
                  </div>
                  <!-- num -->
                </div>
                <!-- end col -->
              </div>
              <!-- row -->

        </div>
        <!-- end col -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>
  <!-- instructor -->

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


<?php

get_footer();

?>
