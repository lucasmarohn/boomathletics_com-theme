<?php $button = get_sub_field( 'button' ); ?>
<?php if ( $button ) { ?>
    <section class="btn-cta">
        <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="btn btn-<?php the_sub_field( 'button_color' ); ?> fade"><?php echo $button['title']; ?></a>
    </section>
<?php } ?>