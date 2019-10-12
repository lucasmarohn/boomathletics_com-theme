<?php /* Template Name: Custom Page */ ?>
<?php get_header(); ?>
<?php include('block-templates/page_title.php'); ?>
<main>



<?php if ( have_rows( 'blocks' ) ): ?>
    <?php while ( have_rows( 'blocks' ) ) : the_row(); ?>
        <?php if ( get_row_layout() == 'page_title' ) : ?>
		<?php include('block-templates/page_title.php'); ?>
		<?php elseif ( get_row_layout() == 'text_box' ) : ?>
			<?php include('block-templates/text_box.php'); ?>
		<?php elseif ( get_row_layout() == 'highlight' ) : ?>
			<?php include('block-templates/highlight.php'); ?>
		<?php elseif ( get_row_layout() == 'three_column' ) : ?>
            	<?php include('block-templates/three_column.php'); ?>
		<?php elseif ( get_row_layout() == 'title_img_text_button' ) : ?>
			<?php include('block-templates/title_img_text_button.php'); ?>
		<?php elseif ( get_row_layout() == 'button_centered' ) : ?>
            	<?php include('block-templates/button_centered.php'); ?>
		<?php elseif ( get_row_layout() == 'programs_index' ) : ?>
			<?php include('block-templates/programs_index.php'); ?>
		<?php elseif ( get_row_layout() == 'coaches_index' ) : ?>
            	<?php include('block-templates/coaches_index.php'); ?>
		<?php elseif ( get_row_layout() == 'head_coach' ) : ?>
				<?php include('block-templates/head_coach.php'); ?>
		<?php elseif ( get_row_layout() == 'testimonial' ) : ?>
		<?php include('block-templates/testimonial.php'); ?>
        <?php elseif ( get_row_layout() == 'membership_options' ) : ?>
            <?php include('block-templates/membership_options.php'); ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>

</main>

<?php get_footer(); ?>