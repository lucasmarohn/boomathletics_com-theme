<div class="testimonial content">
<div class="wrapper">
<?php $t_type = get_sub_field( 'testimonial_type' ); 
if ( $t_type == 't-random' ) : ?>
    <?php include( 'random_testimonial.php');?>

<?php elseif($t_type == "t-featured" ) : ?>
    <?php $post_object = get_sub_field( 'featured_testimonial' ); ?>
        <?php if ( $post_object ): ?>
            <?php $post = $post_object; ?>
            <?php setup_postdata( $post ); ?> 
            <blockquote>
                <?php the_content(); ?>
                <span class="author">
                    - <?php the_title(); ?>
                    <a href="<?php echo home_url(); ?>/reviews" class="review-cta">Read Reviews</a>
                </span>
            </blockquote>
            <?php wp_reset_postdata(); ?>
        <?php endif;?>

<?php else : ?>

    <?php 

        // the query
        $args = array(
            'post_type' => 'boom_testimonial'
        );

        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="testmonial content">
                <blockquote>
                <?php the_content(); ?>
                <span class="author">
                    - <?php the_title(); ?>
                </span>
                </blockquote>
                </div>

            <!-- pagination here -->
        <?php endwhile; wp_reset_postdata(); ?>

<?php endif; ?>
    <?php endif; ?>
</div>
</div>