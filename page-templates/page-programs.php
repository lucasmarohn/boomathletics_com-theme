	
<?php /* Template Name: Programs Template */ ?>
<?php get_header(); ?>
<section class="o-hero --memberships" id="parallax">
  <div class="hero-bg parallax"></div>
  <div class="wrapper">
    <span class="o-hero__title">Our Programs</span>
  </div>
</section><!-- hero -->

<main class="wrapper group" id="resources">
<section class="program-cards content group">
<?php 

// the query
$args = array(
    'post_type' => 'boom_program'
);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="a-card --dark">
    <div class="a-card__image">
        <?php $program_image = get_field( 'program_image' ); ?>
            <?php if ( $program_image ) { ?>
                <img src="<?php echo $program_image['url']; ?>" alt="<?php echo $program_image['alt']; ?>" />
            <?php } ?>
        </div>
        <h2 class="a-card__title"><?php the_title(); ?></h2>
        <div class="a-card__desc"><?php the_content(); ?></div>

        <?php if(get_field('program_link')) : ?>
            <a href="<?php the_field( 'program_link' ); ?>" class="a-card__cta">Learn More</a>
        <?php endif; ?>
    </div>
	<?php endwhile; ?>

	<!-- pagination here -->
	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</section>
</main>

<?php get_footer(); ?>