<?php
/**
 * Template Name: AMA Business Member Listing Page
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */


get_header(); ?>

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div id="post" class="featured-image" style="background-image: url('<?php echo $thumb['0'];?>')">

    <div id="featured-title">   
            <h1 class="fix-h1 dark_h1" itemprop="headline"> <?php the_field('2021_heading');?></h1>
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

        <div class="intro-paragraph">
             <div class="intro-paragraph_txt"><?php the_field('intro_paragraph');?></div>
        </div>

        <!-- Category 1 Members -->

        <div class="member_category">
             <h2 class="new_h2 underline_h2"><?php the_field('member_category-1');?></h2>
        </div>

        <?php if( have_rows('member_repeater')):?>
            
            <div class="member-info">
                        
                        <?php while( have_rows('member_repeater')): the_row();

                        $image = get_sub_field('member_photo');
                        $picture = $image['sizes']['medium'];

                        ?>
                            <div class="member_container">
                                <div class="repeater-item">


                                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                
                                <?php the_sub_field('member_info');?>

                                </div>

                            </div>
                            
                        <?php endwhile;?>

            </div>

                <?php endif;?>

        <!-- End Category 1 Members -->

         <!-- Category 2 Members -->

         <div class="member_category">
             <h2 class="new_h2 underline_h2"><?php the_field('member_category-2');?></h2>
        </div>

        <?php if( have_rows('member_repeater-2')):?>
            
            <div class="member-info">
                        
                        <?php while( have_rows('member_repeater-2')): the_row();

                        $image = get_sub_field('member_photo');
                        $picture = $image['sizes']['medium'];

                        ?>
                            <div class="member_container">
                                <div class="repeater-item">


                                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                
                                <?php the_sub_field('member_info');?>

                                </div>

                            </div>
                            
                        <?php endwhile;?>

            </div>

                <?php endif;?>

        <!-- End Category 2 Members -->

                 <!-- Category 3 Members -->

                 <div class="member_category">
             <h2 class="new_h2 underline_h2"><?php the_field('member_category-3');?></h2>
        </div>

        <?php if( have_rows('member_repeater-3')):?>
            
            <div class="member-info">
                        
                        <?php while( have_rows('member_repeater-3')): the_row();

                        $image = get_sub_field('member_photo');
                        $picture = $image['sizes']['medium'];

                        ?>
                            <div class="member_container">
                                <div class="repeater-item">


                                <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                
                                <?php the_sub_field('member_info');?>

                                </div>

                            </div>
                            
                        <?php endwhile;?>

            </div>

                <?php endif;?>

        <!-- End Category 3 Members -->

        <div class="member-benefits_box">
            
            <div class="member-benefits_b">
        <?php 
        $image = get_field('benefits_box-img');
        if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
        </div>
        
            <div class="member-benefits_a">
        <h2 class="new_h2 underline_h2"><?php the_field('benefits_box-headline');?></h2>
        <?php the_field('benefits_box-copy');?>
        </div>

                </div>

        <div class="cta_box">
        <h3 class="cond_h3 light_txt"><?php the_field('cta_box-headline');?></h3>
        <?php the_field('cta_box-link');?>
        </div>
       
	</div><!-- #primary -->
    
	<?php colormag_sidebar_select(); ?>

	<?php do_action( 'colormag_after_body_content' ); ?>

<?php get_footer(); ?>