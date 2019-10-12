<?php
    $page_title = $post_slug=$post->post_name;
    if ( get_field( 'hero_img', get_the_ID() ) ) {
        $hero_image = get_field('hero_img', get_the_ID() );
        if($hero_image) {
            $hero_image_url = wp_get_attachment_image_url( $hero_image, 'b-large' );
        }
    } ?>

    <section class="o-hero --<?php echo $page_title; ?> s" id="parallax">
        <div class="hero-bg parallax" style="background-image: url('<?php echo $hero_image_url; ?>');background-position:center;"></div>
        <div class="wrapper">
            <span class="o-hero__title --<?php echo $page_title; ?>">
            <?php the_field( 'title_text', get_the_ID() ); ?>
            </span>
            <?php $button = get_field('hero_button', get_the_ID()); ?>
            <?php if ( $button ) { ?>
				<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="o-hero__ctaBtn --home btn btn-secondary"><?php echo $button['title']; ?></a>
			<?php } ?>
        </div>
    </section>
  <!-- hero -->