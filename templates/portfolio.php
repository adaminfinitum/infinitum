<?php
/*
Template Name: Portfolio Page
*/
?>

<?php get_header(); ?>
<div class="row clearfix">
	<section id="main" role="main" class="eight columns">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/partials/content', 'page' ); ?>

		<?php endwhile; ?>

	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
