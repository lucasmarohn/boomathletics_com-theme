<section class="wrapper group content">
    <h2><?php the_sub_field( 'title' ); ?></h2>

<?php 
    $args = array('post_type' => 'boom_coaches','coach_rank' => 'head-coach');
    $the_query = new WP_Query( $args ); 
?>

<?php if ( $the_query->have_posts() ) : ?>
    <ul class="m-coaches group">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li class="a-card --coach --headcoach group">
                <?php $coach_photo = get_field('coach_photo'); ?>
                    <?php if ( $coach_photo ) { ?>
                        <div class="img-container" style="background-image: url('<?php echo wp_get_attachment_image_url( $coach_photo['ID'], 'b-medium' ); ?>')"><?php echo wp_get_attachment_image( $coach_photo['ID'], 'medium' ); ?></div>
                    <?php } ?>
                <div class="a-card__copy">
                    <h2 class="a-card__title"><?php the_title(); ?>
                    <span class="a-card__subtitle"><?php the_field('coach_title'); ?></span>
                    </h2>
                    <div class="a-card__desc"><?php the_content(); ?></div>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>

<?php 
$args2 = array(
    'post_type' => 'boom_coaches',
    'tax_query' => array(
        array(
            'taxonomy' => 'coach_rank',
            'operator' => 'NOT EXISTS'
        )
    )
);
$the_query = new WP_Query( $args2 ); 
?>

<?php if ( $the_query->have_posts() ) :  ?>
    <ul class="m-coaches group content equalize-h <?php echo 'cards-' . count($the_query->query); ?>">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li class="a-card --coach group">
                <?php $coach_photo = get_field('coach_photo'); ?>
                    <?php if ( $coach_photo ) { ?>
                        <div class="img-container" style="background-image: url('<?php echo wp_get_attachment_image_url( $coach_photo['ID'], 'b-medium' ); ?>')"><?php echo wp_get_attachment_image( $coach_photo['ID'], 'medium' ); ?></div>
                    <?php } ?>
                <div class="a-card__copy">
                    <h2 class="a-card__title"><?php the_title(); ?>
                    <span class="a-card__subtitle"><?php the_field('coach_title'); ?></span>
                    </h2>
                    <div class="a-card__desc"><?php the_content(); ?></div>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
<!-- pagination here -->
<?php wp_reset_postdata(); ?>
<?php endif; ?>

</section>