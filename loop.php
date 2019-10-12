<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="post-container">

	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" data-class="post">
	
	<?php 
		if( has_post_thumbnail() ) {
			$thumb_url = get_the_post_thumbnail_url();
		} else {
			$thumb_url = get_template_directory_uri() . '/images/default-post-thumb.jpg';
		}
	?> 
		

		<a class="thumbnail" href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>" style="background-image:url('<?php echo $thumb_url; ?>')"></a>
		<div class="post-content">
			<a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>" class="title">
				<h3>
				<span class="type">

				</span><?php the_title(); ?></h3>
			</a>
			
			<p><?php html5wp_excerpt('post_excerpt_length'); // Build your custom callback length in functions.php ?></p>

			<?php edit_post_link('Edit this post','<p>','</p>') ?>

			<p class="author"><?php the_time('F j, Y'); ?> by <?php the_author_posts_link(); ?></p>
		</div>
		<a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>"  class="a-card__cta">Learn More</a>
	</article>
	</div>
<?php endwhile; ?>

<?php else: ?>

<div class="post-container">
	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->
	</div>

<?php endif; ?>
