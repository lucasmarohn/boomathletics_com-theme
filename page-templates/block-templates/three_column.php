
<section class="wrapper content">
    <section class="o-intro content">
      <div class="o-intro__process">
        <div class="process__step fade">
          <span class="step__icon">
            <p>01.</p>
            <span class="step__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/home_icons-01.svg" width="100" />
            </span>
          </span>

          <h3 class="process__heading">Perfect the Basics</h3>
          <p><?php the_sub_field( 'feature_1' ); ?></p>
        </div>
        <!-- step -->

        <div class="process__step fade">
          <span class="step__icon">
            <p>02.</p>
            <span class="step__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/home_icons-02.svg" width="100" />
            </span>
          </span>

          <h3 class="process__heading">Achieve Your Goals</h3>
          <p><?php the_sub_field( 'feature_2' ); ?></p>
        </div>
        <!-- step -->

        <div class="process__step fade">
          <span class="step__icon">
            <p>03.</p>
            <span class="step__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/home_icons-03.svg" width="100" />
            </span>
          </span>

          <h3 class="process__heading">Apply Your Strength</h3>
          <p><?php the_sub_field( 'feature_3' ); ?></p>
        </div><!-- step -->
      </div><!-- steps -->

    <?php $button = get_sub_field( 'button' ); ?>
    <?php if ( $button ) { ?>
    <section class="btn-cta">
        <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="btn btn-secondary fade"><?php echo $button['title']; ?></a>
    </section>
    <?php } ?>

    </section><!-- intro -->
</section>