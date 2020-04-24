<?php
/**
 * Displays the topics on the services page
 */

?>

<!-- Card Column Markup -->
<?php if( get_sub_field('program_tile_type') == 'card-columns' ): ?>
    <!-- // Program Repeater -->
    <?php if( have_rows('program_repeater') ): $count=0; ?>
    <div class="row" style="justify-content: center;">
        <?php while( have_rows('program_repeater') ): the_row(); $count++ ?>
        <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="<?php echo round($count * 1.5) ?>00" class="col-9 col-md-4 mx-0 px-0 card rounded-0 border-right border-left bg-black text-white mx-0" style="border-color: #333 !important;">
            <!-- // Program Title -->
            <h3 class="h5 pt-3 pb-1 px-4"><?php echo get_sub_field('card_title'); ?></h3>

            <!-- // Program Image -->
            <?php if( !empty(get_sub_field('card_image'))): ?>
            
            <img class="card-img-top border-top border-bottom" src="<?php echo get_sub_field('card_image')['url']; ?>" alt="<?php echo get_sub_field('card_image')['alt']; ?>" />
            <?php endif; ?>
            
            <!-- // Program Feature Repeater -->
            <?php if(have_rows('program_features')): ?>
                <ul class="card-body pr-0">
                    <?php while(have_rows('program_features')): the_row(); ?>
                    <li class="list-overlay overlay-fade-right my-1 card-text">
                        <?php echo get_sub_field('program_feature'); ?>
                    </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <!-- // CTA Link -->
            <?php if(get_sub_field('is_lightbox') == 1): ?>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-<?php echo $count; ?>"><span>See details</span></button>
            <?php elseif(!empty(get_sub_field('cta_link'))): ?>
            <a href="<?php echo get_sub_field('cta_link')['url']; ?>" alt="Link to the <?php echo get_sub_field('cta_link')['title']; ?> Page"><?php get_sub_field('cta_link')['title']; ?></a>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
<?php endif; ?>

<!-- Square Markup -->
<?php if( get_sub_field('program_tile_type') == 'squares' ): ?>

    <div class="row justify-content-around">

    <?php while( have_rows('program_repeater') ): the_row(); $count++ ?>

        <?php if(get_sub_field('is_lightbox') == 1): ?>
        <a type="button" data-toggle="modal" data-target="#modal-<?php echo $count; ?>">
        <?php endif; ?>
            <figure data-aos="fade-up" data-aos-duration="700" data-aos-delay="<?php echo round($count * 1.5) ?>00" class="team-square position-relative mx-0 px-0 rounded-0 border-right border-left bg-black text-black mx-0 text-white">

                <?php if( !empty(get_sub_field('card_image'))): ?>
                <img class="card-img-top border-top border-bottom"  src="<?php echo get_sub_field('card_image')['url']; ?>" alt="<?php echo get_sub_field('card_image')['alt']; ?>" />
                <?php endif; ?>
                
                <figcaption class="position-absolute w-100 text-center" style="bottom: 0;">
                    <h3 class="h5 pt-3 pb-1 px-4"><?php echo get_sub_field('card_title'); ?></h3>
                </figcaption>
            </figure>

        <?php if(get_sub_field('is_lightbox') == 1): ?>
        </a>
        <?php endif; ?>
            
    <?php endwhile; $count=0; ?>

    </div>

<?php endif; ?>