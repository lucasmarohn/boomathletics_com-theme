<?php /* Template Name: Memberships Template */ ?>
<?php get_header(); ?>
<main>
<?php include('block-templates/page_title.php'); ?>

<section class="highlight content">
    <div class="wrapper t--center">
      <p>All programs are offered at our Haverhill, Massachussettes location, and are taught by our friendly, experienced, Certified
        Personal Trainers</p>
        <p>Gain access to any of our programs by signing up for a Boom! Athletics Membership</p>
    </div>
  </section>

<main class="wrapper group" id="resources">

  <div class="wrapper content group" id="membership-options">
    <section class="group content equalize-h">
      <div class="a-fancyCard__grid">
      <div class="a-fancyCard e-h">
        <h2 class="a-fancyCard__title --primary">Boom! Basic</h2>
        <div class="a-fancyCard__image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/photos/basic.png">
        </div>
        <div class="a-fancyCard__description center">
          Month-to-Month = NO CONTRACT
          <span class="color-p">*</span>
        </div>
        <div class="center">
          <div class="a-fancyCard__metric">
            <span class="metric__highlight">4 Sessions</span> Per Month
          </div>
        </div>
        <div class="note">
          Additional sessions included at discounted rate
        </div>
        <section class="btn-cta">
          <a class="btn btn-primary modal-btn" href="<?php echo get_home_url(); ?>/getting-started/index.php">Try for Free</a>
        </section>
      </div>
      </div>

      <div class="a-fancyCard__grid --preferred">
        <div class="a-fancyCard e-h">
          <h2 class="a-fancyCard__title --grey">Boom! Elite</h2>
          <div class="a-fancyCard__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/photos/elite.png">
          </div>
          <div class="a-fancyCard__description center">
            Month-to-Month = NO CONTRACT
            <span class="color-p">*</span>
          </div>
          <div class="center">
            <div class="a-fancyCard__metric">
              <span class="metric__highlight">8 Sessions</span> Per Month
            </div>
          </div>
          <div class="note">
            Additional sessions included at discounted rate
          </div>
          <section class="btn-cta">
            <a class="btn btn-primary modal-btn" href="<?php echo get_home_url(); ?>/getting-started/index.php">Try for Free</a>
          </section>
        </div>
      </div>
      <div class="a-fancyCard__grid">
        <div class="a-fancyCard e-h">
          <h2 class="a-fancyCard__title --secondary">Boom! Premier</h2>
          <div class="a-fancyCard__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/photos/premier.png">
          </div>
          <div class="a-fancyCard__description center">
            Month-to-Month = NO CONTRACT
            <span class="color-p">*</span>
          </div>
          <div class="center">
            <div class="a-fancyCard__metric ">
              <span class="metric__highlight color-s">Unlimited</span> Sessions
            </div>
          </div>
          <div class="note">
            Plus some awesome perks
          </div>
          <section class="btn-cta">
            <a class="btn btn-primary modal-btn" href="<?php echo get_home_url(); ?>/getting-started/index.php">Try for Free</a>
          </section>
        </div>
      </div><!-- training-card -->

      <section class="a-fancyCard__cta btn-cta">
        <div class="membership-note wrapper content">
          <p class="disclaimer">
            Requires direct monthly billing to a credit card of checking account.
            <br /> Pre-paid packages also available in increments of 10, 20, and 30 sessions.
          </p>
        </div>
      </section>

    </section>

    <section class="btn-cta">
      <a href="../getting-started/index.php" class="btn btn-large btn-secondary">Learn How to Join</a>
    </section>
<section class="program-cards group">
<h2>Programs</h2>
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