<?php get_header(); ?>

<?php if( have_posts() ) : while(have_posts() ) : the_post() ?>

  <main class="wrapper group" id="single-page">
    <div class="col col-lrg left">
      <article class="single-post guide">
        <?php if(get_the_post_thumbnail_url()) : ?>
          <div class="image-feature" style="background-image:url('<?php the_post_thumbnail_url( 'large' ); ?>'); background-size: cover; background-position: center center;"></div>
        <?php endif; ?>
          <h1 class="title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </article>

      <div class="article-nav">
        <?php if( get_previous_post_link() ) { ?>
        <div class="article-nav__button">
          <?php previous_post_link('← %link'); ?>
        </div>
      <?php } ?>

        <?php if( get_next_post_link() ) { ?>
        <div class="article-nav__button">
          <?php next_post_link('%link →'); ?>
        </div>
        <?php } ?>
      </div>
    </div>
    <!-- col-large -->

    <div class="col col-sml right sidebar">
      <section class="single-author">
      <?php
        $user_id = get_the_author_meta('ID');
        $user_acf_prefix = 'user_';
        $user_id_prefixed = $user_acf_prefix . $user_id;
        ?>
        <?php $author_avatar = get_field( 'author_avatar', $user_id_prefixed ); ?>
        <?php if ( $author_avatar ) { ?>
          <img src="<?php echo $author_avatar['url']; ?>" alt="<?php echo $author_avatar['alt']; ?>" />
        <?php } ?>
        <div class="bio">
          <span class="author-name"><?php echo get_the_author_meta('display_name'); ?></span>
          <p class="author-description"><?php echo get_the_author_meta('description'); ?></p>
        </div>
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?> " class="author-btn btn btn-primary">More Posts by <?php echo get_the_author_meta('first_name'); ?></a>
      </section>
      <!-- search-sort -->
      <aside class="share-icons">
        <p>Enjoy this resource? Share it!</p>
        <div class="addthis_inline_share_toolbox"></div>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c15642ce83da747"></script>
        </aside>
    </div>
    <!-- col-sml -->
  </main>

  <?php endwhile; endif; ?>
  <?php get_footer(); ?>