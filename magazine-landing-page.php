<?php
/**
 * Template Name: Magazine Landing Page
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */

 //$image = get_field('2021_cover-img');
 //$coverimage = $image['sizes']['large'];

get_header(); ?>

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div id="post" class="featured-image" style="background-image: url('<?php echo $thumb['0'];?>')">

    
    <div id="featured-title">   
    
    <span class="fix-h1"><h1 class="fl-post-title dark_h1" itemprop="headline"> <?php the_field('2021_heading');?></h1></span>

    <h2 class="new_h2"><?php the_field('2021_subheading');?></h2>
 
    

	  
    
</div>
</div>

	<?php do_action( 'colormag_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					do_action( 'colormag_before_comments_template' );
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
	      		do_action ( 'colormag_after_comments_template' );
				?>

			<?php endwhile; ?>

		</div><!-- #content -->

        <div class="monthly-feature">
    
            <?php 

            $image = get_field('2021_cover-img');

            if( !empty($image) ): ?>

	        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>


            <div class="monthly-cover_txt"><?php the_field('2021_cover-txt');?></div>

          </div>
	</div><!-- #primary -->
    
	<?php colormag_sidebar_select(); ?>

	<?php do_action( 'colormag_after_body_content' ); ?>

<?php get_footer(); ?>