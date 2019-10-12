<?php /* Template Name: Reviews Template */ ?>
<?php get_header(); ?>
<?php include('block-templates/page_title.php'); ?>

<main class="wrapper" id="reviews">
<section class="reviews">
<?php 

// the query
$args = array(
    'post_type' => 'boom_testimonial'
);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="testimonial content">

        <blockquote>
        <?php the_content(); ?>
        <span class="author">
            - <?php the_title(); ?>
        </span>
        </blockquote>

    </div>


	<!-- pagination here -->
<?php endwhile; wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</section>
</main>

<?php get_footer(); ?>