<?php

$who_should_take_this_course_image                 = get_field('who_should_take_this_course_image');
$who_should_take_this_course_title                 = get_field('who_should_take_this_course_title');
$who_should_take_this_course_description           = get_field('who_should_take_this_course_description');

?>
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
<!-- Who Benifits Section -->  
<?php wp_reset_query(); ?> 