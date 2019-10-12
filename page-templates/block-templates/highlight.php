
<?php $highlight_testimonial = get_sub_field( 'testimonial' ); ?>
<section class="highlight <?php if($highlight_testimonial) echo 'testimonial'; ?>">
    <div class="wrapper <?php the_sub_field( 'content_width' ); ?>">
        <?php if( get_sub_field('highlight_content') == 'Text' ) : ?>
            <?php the_sub_field( 'text' ); ?>
        <?php else : ?>
        

			<?php if ( $highlight_testimonial ): ?>
				<?php $post = $highlight_testimonial; ?>
				<?php setup_postdata( $post ); ?> 
                <blockquote>
                    <?php the_content(); ?>
                    <span class="author">
                        - <?php the_title(); ?>
                        <a href="<?php echo home_url(); ?>/reviews" class="review-cta">Read Reviews</a>
                    </span>
                </blockquote>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

        <?php endif; $highlight_testimonial = null; ?>


    </div>
</section>