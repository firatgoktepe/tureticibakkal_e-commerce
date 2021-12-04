<?php 

/*
	
	Template Name: Shop Page 
	
*/


get_header(); ?>



<section id="blog">
<?php if ( have_posts() ) :
      while ( have_posts() ) :
           the_post();
           the_content();

?>


<?php endwhile; endif;  ?>

</section>
woocommerce-shop.php
<?php get_footer(); ?>
