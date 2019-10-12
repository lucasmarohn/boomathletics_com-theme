<?php $r_args = array(
    'post_type' => 'boom_testimonial',
    'orderby' => 'rand',
    'posts_per_page' => 1
);    
$random_query = new WP_Query($r_args); ?>

<?php if ( $random_query->have_posts() ) : ?>

<?php while ( $random_query->have_posts() ) : $random_query->the_post(); ?>
    <blockquote>
        <?php the_content(); ?>
        <span class="author">
            - <?php the_title(); ?>
            <a href="<?php echo home_url(); ?>/reviews" class="review-cta">Read Reviews</a>
        </span>
    </blockquote>
<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>