<?php get_header(); ?>

<div class="container">
	<section class="item">

	<?php if ( have_posts() ) :
	      while ( have_posts() ) :
	           the_post();
	           the_content();

	?>

<?php endwhile; endif;  ?>
	</section>
</div>
single.php
<?php get_footer(); ?>
