<?php
/**
 * Template Name: Service Page
 */
get_header();
?>

<!-- Program Modals -->
<?php if(have_rows('programteam_section_3')): while( have_rows('programteam_section_3') ): the_row();
    get_template_part( 'template-parts/content', 'service-program-modals' );
endwhile; endif; ?>
<!-- // Program Modals -->

<?php if(have_rows('hero_section_1')): while( have_rows('hero_section_1') ): the_row();?>
<!-- //  Hero Section 1 -->
<header data-aos="fade" data-aos-duration="700" class="front-hero hero bg-black hero-overlay" style="color: <?php echo get_sub_field('text_color'); ?>;background-image: url(<?php the_post_thumbnail_url(); ?>);">
    <?php 
        $theme = get_sub_field('lightdark_theme'); 
        if($theme == 'light'){
            $gradient = 'linear-gradient(45deg, rgba(255,255,255,0.75) 0%,rgba(255, 255, 255) 20%,rgba(219, 223, 93, 0.33) 100%)';
        }else{
            $gradient = 'linear-gradient(45deg, rgba(28,08,08,0.95) 0%,rgba(68,38,38,0) 100%)';
        }
    ?>
    <div class="hero-overlay" style="background: <?php echo $gradient; ?>; transform: <?php echo get_sub_field('alignment') == 'left' ? 'none' : 'rotate(180deg)'; ?>;"></div>
    <div class="container">
        <div class="row  flex-<?php echo get_sub_field('alignment') == 'left' ? 'row' : 'row-reverse'; ?>">
            <div class="col-12 col-md-6 my-5 py-5">
                <!-- Header Icon -->
                <h1 data-aos="fade-up" data-aos-duration="700" data-aos-delay="400" class="text-uppercase display-4 spaced font-weight-lighter" style="color: inherit;">
                <?php if(!empty(get_sub_field('header_icon'))): ?>
                
                <img width=105 style="margin-right: -0.15em;" src="<?php echo get_sub_field('header_icon')['url']; ?>" alt="<?php echo get_sub_field('header_icon')['alt']; ?>" />
                <?php 
                    $title =  substr(get_sub_field('title'), 1);
                else:
                    $title =  get_sub_field('title');
                endif; ?>

                <!-- // Title -->
                <?php echo $title; ?>
                </h1>

                <!-- // Description -->
                <div data-aos="fade-up" data-aos-duration="1200" data-aos-delay="700" class="indent-line ml-5 pt-4" style="border-color: <?php echo get_sub_field('indent_line_color'); ?>" >
                    <?php echo get_sub_field('description'); ?>
        
                    <!-- // CTA -->
                    <?php if(!empty(get_sub_field('cta'))): ?>
                    <a class="btn btn-primary" href="<?php echo get_sub_field('cta')['url']; ?>" alt="Link to <?php echo get_sub_field('cta')['title']; ?> Page" ><?php echo get_sub_field('cta')['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>
<?php endwhile; endif; ?>
<?php if(have_rows('intro_feature_section_2')): while( have_rows('intro_feature_section_2') ): the_row();?>
<!-- // Intro Feature Section 2 -->
<section class="container-fluid" style="color: <?php echo get_sub_field('section_color_theme'); ?>">

    <div class="container">

        <h2 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400" class="w-100 spaced-tf-out h1 text-center text-uppercase font-weight-light"><?php echo get_sub_field('title'); ?></h2>

        <?php get_template_part( 'template-parts/content', 'service-topics-list' ); ?>
            
    </div>
</section>
<?php endwhile; endif; ?>


<?php if(have_rows('programteam_section_3')): while( have_rows('programteam_section_3') ): the_row();?>
<!-- // Program/Team Section 3 -->
<section class="container-fluid mb-5 pb-5">

    <!-- // Title -->
    <h2 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400" class="h1 text-uppercase text-center w-100 spaced-tf-out font-weight-light my-5"><?php echo get_sub_field('title'); ?></h2>


    <?php get_template_part( 'template-parts/content', 'service-programs' ); ?>


</section>
<?php endwhile; endif; ?>

<?php if(have_rows('optional_section')): while( have_rows('optional_section') ): the_row();?>
<section class="container-fluid">

    <h2 data-aos="fade-up" data-aos-duration="900" class="text-uppercase spaced-tf-out h1 text-center font-weight-light"><?php echo get_sub_field('title'); ?></h2>

    <div data-aos="fade-up" data-aos-duration="900" data-aos-delay="200" class="text-center"><?php echo get_sub_field('description'); ?></div>

    <h3 data-aos="fade-up" data-aos-duration="900" data-aos-delay="500" class="text-center"><?php echo get_sub_field('list_title'); ?></h3>
    <div class="row justify-content-center">
        <?php if(have_rows('list_repeater')): $count=0; ?>
            <?php while(have_rows('list_repeater')): the_row(); ?>
            <?php echo $count % 4 == 0 ? '<ul data-aos="fade-up" data-aos-duration="1200" data-aos-delay="'. round($count * 1 + 6) .'00" class="mini-disc-chain-list ml-5">' : ''; ?>
                <li class="mini-chain-item big-shot ml-5 row align-content-center">
                    <span class="h6 my-5"><?php echo get_sub_field('list_item_text'); ?></span>
                </li>
            <?php echo $count % 4 == 3 ? '</ul>' : ''; ?>
            <?php $count++; endwhile; ?>
        <?php endif; $count=0; ?>
    </div>
</section>
<?php endwhile; endif; ?>

<!-- // Content() -->
    <?php the_content(); ?>

<?php if(have_rows('final_cta_section_4')): while( have_rows('final_cta_section_4') ): the_row();?>
<section class="container-fluid mt-5 py-5">
<!-- // Final CTA Section 4 -->
    <div class="container">
        <!-- // Alignment -->
        <div class="row flex-<?php echo get_sub_field('alignment') == 'left' ? 'row' : 'row-reverse'; ?>">


            <!-- // Image -->
            <?php if( !empty(get_sub_field('image')) ): ?>
                <div data-aos="fade-right" data-aos-duration="700" class="col-12 col-md-6 d-flex position-relative">
                    <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" />
                    <?php if(get_sub_field('price_tag')): ?><div class="cta-price-tag text-center"><span class="m-auto text-uppercase"><?php echo get_sub_field('price_tag'); ?></span></div><?php endif; ?>
                </div>
            <?php endif; ?>

            <div data-aos="fade-left" data-aos-duration="700" data-delay="300" class="col-12 col-md-6 mt-5 py-2">
                <!-- // Title -->
                <h2 class="h1 text-uppercase spaced-tf-out font-weight-light"><?php echo get_sub_field('title'); ?></h2>

                <!-- // Description -->
                <div><?php echo get_sub_field('description'); ?></div>

                <!-- // CTA Repeater -->
                <?php if( have_rows('cta_repeater') ): ?>

                    <?php while( have_rows('cta_repeater') ): the_row();

                        // CTA Link
                        if(!empty(get_sub_field('cta_link'))): 
                        $target = get_sub_field('cta_link')['target'] ? get_sub_field('cta_link')['target'] : '_self';
                        $dowloadable = get_sub_field('cta_downloadable') == 1 ? 'download' : '';
                        $dlIcon  = get_sub_field('cta_downloadable') == 1 ? '<i class="fas fa-download"></i>' : '';
                        $btnClass= get_sub_field('is_primary') == 1 ? 'btn-primary' : 'btn-secondary black';
                        
                        echo sprintf('<a target="' . $target . '" class="btn ' . $btnClass . '" href="' . get_sub_field('cta_link')['url'] . '" %s><span>' . get_sub_field('cta_link')['title'] . '</span></a>', $dowloadable);

                        ?>
                        <?php endif; ?>
                    <!-- // Is primary button? -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>

    </div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>