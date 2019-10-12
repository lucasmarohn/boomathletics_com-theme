<section class="content">
<h2 class="wrapper <?php echo 'cards-' . count($post_objects); ?>"><?php the_sub_field( 'title' ); ?></h2>

<?php if(get_sub_field('show_programs') != "p-all") : ?>
<?php $post_objects = get_sub_field( 'featured_programs' ); ?>
<div class="program-cards group wrapper <?php echo 'cards-' . count($post_objects); ?>">

<?php if ( $post_objects ): ?>
    <?php foreach ( $post_objects as $post ):  ?>
        <?php setup_postdata( $post ); ?>
        <div class="a-card --dark">
        <?php if (is_user_logged_in() ) {
                echo edit_post_link(); 
            } ?>
        <div class="a-card__image">
            <?php $program_image = get_field( 'program_image' ); ?>
                <?php if ( $program_image ) { ?>
                    <img src="<?php echo wp_get_attachment_image_url( $program_image['ID'], 'b-program' ); ?>" alt="<?php echo $program_image['alt']; ?>" />
                <?php } ?>
            </div>
            <h3 class="a-card__title"><?php the_title(); ?></h3>
            <div class="a-card__desc"><?php the_content(); ?></div>



            <?php $program_link = get_field('program_link'); if($program_link) : ?>
                <a href="<?php echo $program_link['url']; ?>" class="a-card__cta"><?php echo $program_link['title']; ?></a>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
    </div>
<?php endif; ?>

<?php else : ?>

<div class="program-cards group wrapper">
    <?php 
    $args = array('post_type' => 'boom_program');
    $the_query = new WP_Query( $args ); 
    if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="a-card --dark">
        <div class="a-card__image">
            <?php $program_image = get_field( 'program_image' ); ?>
                <?php if ( $program_image ) { ?>
                    <img src="<?php echo wp_get_attachment_image_url( $program_image['ID'], 'b-program' ); ?>" alt="<?php echo $program_image['alt']; ?>" />
                <?php } ?>
            </div>
            <h3 class="a-card__title"><?php the_title(); ?></h3>
            <div class="a-card__desc"><?php the_content(); ?></div>

            <?php $program_link = get_field('program_link'); if($program_link) : ?>
                <a href="<?php $program_link['url']; ?>" class="a-card__cta"><?php echo $program_link['title']; ?></a>
            <?php endif; ?>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
<?php endif; ?>

</section>
