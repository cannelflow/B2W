<?php
/**
 * Template Name: Home Page
 */
 
// advanced custome field

get_header(); 

?>

 
 <?php get_template_part( 'home-parts/content', 'hero' ); ?>
 <?php get_template_part( 'home-parts/content', 'optin' ); ?>
 <?php get_template_part( 'home-parts/content', 'income' ); ?>
 <?php get_template_part( 'home-parts/content', 'benefit' ); ?>
 <?php get_template_part( 'home-parts/content', 'feature' ); ?>
 <?php get_template_part( 'home-parts/content', 'project' ); ?>
 <?php get_template_part( 'home-parts/content', 'video' ); ?>
 <?php get_template_part( 'home-parts/content', 'instructor' ); ?>
 <?php get_template_part( 'home-parts/content', 'testimonial' ); ?>
  
<?php get_footer(); ?>
