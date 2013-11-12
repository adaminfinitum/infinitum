<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package infinitum
 * @since infinitum 0.9
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h1><?php the_title(); ?></h1>

	<div class="entry">

		<?php the_excerpt(); ?>

		<?php wp_link_pages( array( 'before' => 'Pages: ', 'next_or_number' => 'number' ) ); ?>

	</div>

</article>
