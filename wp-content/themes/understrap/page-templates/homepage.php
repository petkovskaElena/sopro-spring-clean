<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- custom page query -->

<?php
        
$hero_image = get_field('hero_video');
$hero_title = get_field('hero_title');
// $hero_subtitle = get_field('hero_subtitle');
$hero_cta = get_field('hero_button');
$herobtnurl = $hero_cta['url'];
$target = $hero_cta['target'];
$cta_title = $hero_cta['title'];

// vars
$url = $hero_image['url'];
$title = $hero_image['title'];
$alt = $hero_image['alt'];
$caption = $hero_image['caption'];


// full
$size = 'full';
$full_width = $images['width'];
$full_height = $images['height'];


if( $hero_image ): ?>

    <header class="header" id="home" style="background-image:url(<?php echo $url; ?>)">
    
        <div class="container-fluid header-container">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12 intro text-center margin-special">
                        <?php if( $hero_title ): ?>
                            <h1 class="hero mb-4 dobule-margin"><?php echo $hero_title; ?></h1>
                        <?php endif; ?>  
                     
                        <?php if( $hero_cta ): ?>
                            <a href="<?php echo $herobtnurl; ?>" target="<?php echo $hero_target; ?>" class="btn button hero-cta"><?php echo $cta_title; ?></a>
                        <?php endif; ?>                              
                        </div>                            
                    </div>                           
                </div>
            </div>
        </div>
    </header> 

<?php endif; ?>



<?php if( have_rows('about_section') ): ?>  
    <?php while( have_rows('about_section') ): the_row(); ?> <!-- repeater -->

        <section id="about" class="about-us section-padding" style="background-color:<?php echo get_sub_field('background_color'); ?>">
            <div class="container">
                <div class="row justify-content-center text-center">

                    <?php if( have_rows('about_section_repeater') ): ?> <!-- sub repeater -->
                        <?php while( have_rows('about_section_repeater') ): the_row(); ?>
                                <div class="col-lg-4">
                                    <?php if( get_sub_field('icon') ) : ?>
                                            <img class="img-fluid" src="<?php echo the_sub_field('icon'); ?>" />
                                    <?php endif; ?>

                                    <?php if( get_sub_field('icon_title') ) : ?>
                                            <h3><?php echo the_sub_field('icon_title'); ?></h3>
                                    <?php endif; ?>

                                    <?php if( get_sub_field('icon_description') ) : ?>
                                            <p><?php echo the_sub_field('icon_description'); ?></p>
                                    <?php endif; ?>
                                </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

    <?php endwhile; ?>        
<?php endif; ?>


<?php if( have_rows('60_seconds_explainer_video_section') ): ?>
    <?php while( have_rows('60_seconds_explainer_video_section') ): the_row(); ?> <!-- repeater -->

            <section class="explainer-video-section section-padding" style="background-color:<?php echo get_sub_field('background_color'); ?>">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-12">
                            <?php if ( get_sub_field('title') ) : ?>
                                <h2><?php echo the_sub_field('title'); ?></h2>
                            <?php endif; ?>

                            <?php if ( get_sub_field('video') ) : ?>
                                <?php echo the_sub_field('video'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

    <?php endwhile; ?>    
<?php endif; ?>


<?php if( have_rows('the_art_of_prospecting_section') ): ?>
    <?php while( have_rows('the_art_of_prospecting_section') ): the_row(); ?> <!-- repeater -->

        <section class="explainer-video-section section-padding" style="background-color:<?php echo get_sub_field('background_color'); ?>">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12">
                        <?php if ( get_sub_field('title') ) : ?>
                            <h2><?php echo the_sub_field('title'); ?></h2>
                        <?php endif; ?>

                        <?php if ( get_sub_field('text_intro') ) : ?>
                            <p><?php echo the_sub_field('text_intro'); ?></p>
                        <?php endif; ?>

                        <?php if ( get_sub_field('html_editor') ) : ?>
                            <div class="html-wrapper"><?php echo the_sub_field('html_editor'); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>        
<?php endif; ?>


<?php if( have_rows('why_us_section') ): ?>
    <?php while( have_rows('why_us_section') ): the_row(); ?> <!-- repeater -->

            <section class="explainer-video-section section-padding" style="background-color:<?php echo the_sub_field('background_color'); ?>">
                <div class="container">
                    <div class="row justify-content-center">
                        <?php 
                            $whyusbtn = get_sub_field('button');
                            $whyusbtntitle = $whyusbtn['title'];
                            $whyusbtnurl = $whyusbtn['url'];
                            $whyusbtntarget = $whyusbtn['target'];
                        ?>
                        <div class="col-lg-6">
                            <?php if( get_sub_field('video') ) : ?>
                                <?php the_sub_field('video'); ?>
                            <?php endif ;?>
                        </div>

                        <div class="col-lg-6">
                            <?php if ( get_sub_field('title') ) : ?>
                                <h2><?php echo the_sub_field('title'); ?></h2>
                            <?php endif; ?>

                            <?php if ( get_sub_field('description') ) : ?>
                                <?php echo the_sub_field('description'); ?>
                            <?php endif; ?>

                            <?php if ( $whyusbtn ) : ?>
                                    <a href="<?php echo $whyusbtnurl; ?>" target="<?php echo $whyusbtntarget; ?>"><?php echo $whyusbtntitle; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

    <?php endwhile; ?>       
<?php endif; ?>


<?php if( have_rows('why_us_second') ): ?>
    <?php while( have_rows('why_us_second') ): the_row(); ?> <!-- repeater -->

            <section class="explainer-video-section section-padding" style="background-color:<?php echo the_sub_field('background_color'); ?>">
                <div class="container">
                    <div class="row justify-content-center">
                        <?php 
                            $whyusbtn = get_sub_field('button');
                            $whyusbtntitle = $whyusbtn['title'];
                            $whyusbtnurl = $whyusbtn['url'];
                            $whyusbtntarget = $whyusbtn['target'];
                        ?>
                        
                        <div class="col-lg-6">
                            <?php if ( get_sub_field('title') ) : ?>
                                <h2><?php echo the_sub_field('title'); ?></h2>
                            <?php endif; ?>

                            <?php if ( get_sub_field('description') ) : ?>
                                <?php echo the_sub_field('description'); ?>
                            <?php endif; ?>

                            <?php if ( $whyusbtn ) : ?>
                                    <a href="<?php echo $whyusbtnurl; ?>" target="<?php echo $whyusbtntarget; ?>"><?php echo $whyusbtntitle; ?></a>
                            <?php endif; ?>
                        </div>

                        <div class="col-lg-6">
                            <?php if( get_sub_field('image') ) : ?>
                                <img class="img-fluid" src="<?php the_sub_field('image'); ?>" /> 
                            <?php endif ;?>
                        </div>
                    </div>
                </div>
            </section>
            
    <?php endwhile; ?>       
<?php endif; ?>


<?php if( have_rows('videos_section') ): ?>
    <?php while( have_rows('videos_section') ): the_row(); ?> <!-- repeater -->

            <section class="explainer-video-section section-padding" style="background-color:<?php echo the_sub_field('background_color'); ?>">
                <div class="container">
                    <h2><?php if( get_sub_field( 'videos_section_title' ) ) : echo the_sub_field('videos_section_title'); endif; ?></h2>
                    <div class="row justify-content-center">
                        
                        <div class="col-lg-3">
                            <?php if ( get_sub_field('video') ) : ?>
                                <?php echo the_sub_field('video'); ?>
                            <?php endif; ?>

                            <?php if ( get_sub_field('video_title') ) : ?>
                                <h2><?php echo the_sub_field('video_title'); ?></h2>
                            <?php endif; ?>

                            <?php if ( get_sub_field('video_description') ) : ?>
                                <p><?php echo the_sub_field('video_description'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            
    <?php endwhile; ?>       
<?php endif; ?>


<?php if( have_rows('save_money_section') ): ?>
    <?php while( have_rows('save_money_section') ): the_row(); ?> <!-- repeater -->

            <section class="explainer-video-section section-padding" style="background-color:<?php echo the_sub_field('background_color'); ?>">
                <div class="container">
                    <div class="row justify-content-center">
                        
                        <div class="col-lg-6">
                            <div class="save-money-wrapper">
                                <?php if ( get_sub_field('image') ) : ?>
                                    <img src="<?php echo the_sub_field('image'); ?>" />
                                <?php endif; ?>

                                <div class="save-money-desc-wrapper">
                                    <?php if ( get_sub_field('title') ) : ?>
                                        <h2><?php echo the_sub_field('title'); ?></h2>
                                    <?php endif; ?>

                                    <?php if ( get_sub_field('text_intro') ) : ?>
                                        <p><?php echo the_sub_field('text_intro'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
    <?php endwhile; ?>       
<?php endif; ?>






    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'loop-templates/content', 'page' ); ?>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :

            comments_template();

        endif;
        ?>

    <?php endwhile; // end of the loop. ?>

			
<?php get_footer(); ?>
