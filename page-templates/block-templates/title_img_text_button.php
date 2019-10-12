<section class="highlight group reverse">
  <div class="hero-bg"></div>
    <div class="wrapper">
        <h2 class="fade"><?php the_sub_field( 'title' ); ?></h2>
        <div class="col col-half left">
        <p class="fade t-center">
            <?php $image = get_sub_field( 'image' ); ?>
            <?php if ( $image ) { ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php } ?>
        </p>
      </div><!-- col half -->

      <div class="col col-half right">
        <aside class="description fade">
            <?php the_sub_field( 'text' ); ?>
        </aside>
        <?php $button = get_sub_field( 'button' ); ?>
        <?php if ( $button ) { ?>
            <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="btn btn-secondary fade"><?php echo $button['title']; ?></a>
        <?php } ?>
    </div><!-- col half -->

  </section>