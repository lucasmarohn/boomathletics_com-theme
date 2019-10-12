<?php get_header(); ?>
<?php include('page-templates/block-templates/page_title.php'); ?>

	<main role="main">
		<!-- section -->
		<section class="content group wrapper">


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>


				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<p><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></p>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
