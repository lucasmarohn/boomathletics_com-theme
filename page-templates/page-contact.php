<?php /* Template Name: Contact Page Template */ ?>
<?php get_header(); ?>
<?php include('block-templates/page_title.php'); ?>
<main class="content">

  <section class="group wrapper" id="contact">
    
    <div class="content col col-lrg left"> 
      <h1>Contact Us</h1>     
      <p>Have questions, comments, or just want to say hello?
      <br />Fill out the form below and we'll get back to you as soon as we can.</p>

    <div class="cognito">
    <script src="https://services.cognitoforms.com/s/b5-uwuMqpUKsjg2buCjD1g"></script>
    <script>Cognito.load("forms", { id: "1" });</script>
    </div>

    </div><!-- col-lrg -->

    <div class="content col col-sml right">
      <aside class="o-socialIcons">
        <a href="//facebook.com/boom-athletics" target="_blank" class="o-socialIcons__icon img --fb" id="fb" alt="Facebook">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/fb-icon.svg" width="20px" height="20px">
        </a>
        <a href="//instagram.com/boom.athletics" target="_blank" class="o-socialIcons__icon img --ig" id="ig" alt="Instagram">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/ig-icon.svg" width="20px" height="20px">
        </a>
        <a href="//youtube.com/boomathletics" target="_blank" class="o-socialIcons__icon img --yt" id="yt" alt="YouTube">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/yt-icon.svg" width="20px" height="20px">
        </a>
        <a href="//twitter.com/boomathletics" target="_blank" class="o-socialIcons__icon img --tw" id="tw" alt="Twitter">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/tw-icon.svg" width="20px" height="20px">
        </a>
      </aside>
      <div class="sep w-100"></div>
      <ul class="contact-info group">
        <li>
          <strong>Phone:</strong> 
          <a href="tel:+19785000319">(978) 500-0319</a></li>
        <li>
          <strong>Boom! Athletics</strong>
          241 Winter Street
          <br />Haverhill, Massachusetts
          <br/> 01830
          <br/>
          <br/>
          <i>Backside door on left of building
            <br/>5th Floor</i>
        </li>
        <li>
          <strong>Hours:</strong> 
          <ul class="hours">
            <li><span>Monday:</span> 9:00am – 9:00pm
            <li><span>Tuesday:</span> 9:00am – 9:00pm
            <li><span>Wednesday:</span> 9:00am – 9:00pm
            <li><span>Thursday:</span> 9:00am – 9:00pm
            <li><span>Friday:</span> 9:00am – 9:00pm
        </li>
      </ul>
    </div>
  </section><!-- content group wrapper -->
  
</main>


<?php get_footer(); ?>