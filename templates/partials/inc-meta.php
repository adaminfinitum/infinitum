<?php
/**
 * The template used for displaying post meta information
 *
 * @package infinitum
 * @since infinitum 0.9
 */
?>

<div class="meta">
	<div>Posted on: <?php the_time('F jS, Y') ?></div>
	<div>by <?php the_author() ?></div>
	<?php comments_popup_link( 'No Comments', '1 Comment', '% Comments', 'comments-link', '' ); ?>
</div>
