<?php /* Template Name: Getting Started Template */ ?>
<?php get_header(); ?>
<?php include('block-templates/page_title.php'); ?>
<main class="wrapper">


 
  <div class="group content">
  
  <section class="col col-sml left">
      <div class="group introForm">
        <h3>Get Started</h3>
      <div class="cognito">
      <script src="https://services.cognitoforms.com/s/b5-uwuMqpUKsjg2buCjD1g"></script>
      <script>Cognito.load("forms", { id: "2" });</script>
      </div>
      </div>
    </section>

    <?php if ( have_rows( 'getting_started_step' ) ) : ?>
      <div class="col col-lrg right">
        <?php while ( have_rows( 'getting_started_step' ) ) : the_row(); ?>
        <section class="a-card -full -getting-started">
          <h2 class="a-card__title  --primary"><?php the_sub_field( 'title' ); ?></h2>
          <p class="a-card__subtitle --dark"><?php the_sub_field( 'subtitle' ); ?></p>
          <div class="a-card__desc"><?php the_sub_field( 'description' ); ?></div>
        </section>
        <?php endwhile; ?>
      </div><!-- col -->
    <?php endif; ?>

    

  </div><!-- wrapper -->
</main>

<?php get_footer(); ?>