<?php

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

?>

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
  
  <!-- Instructor Feature Section -->
<?php wp_reset_query(); ?>    