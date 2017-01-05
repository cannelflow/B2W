<?php

$watch_the_course_section_title                    = get_field('watch_the_course_section_title');
$watch_the_course_section_url                      = get_field('watch_the_course_section_url');

?>

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
  
  <!-- Video Feature Section -->
<?php wp_reset_query(); ?>    