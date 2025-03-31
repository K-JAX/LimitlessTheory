<?php
/**
 * Displays the program modals on servevices page
 */

?>

<?php if( have_rows('program_repeater') ): $count=0; ?>
            <?php while( have_rows('program_repeater') ): the_row(); $count++ ?>
                <?php if(get_sub_field('is_lightbox') == 1): ?>
                <div id="modal-<?php echo $count; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="<?php echo get_sub_field('card_title'); ?> Modal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg-black text-white">
                            <div class="modal-header light-overlay overlay-fade-right">
                                <h5 class="modal-title" id="exampleModalLongTitle"><?php echo get_sub_field('card_title'); ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body light-overlay overlay-fade-right">
                                <img class="pr-3" width='200px' style="float: left;" src="<?php echo get_sub_field('card_image')['url']; ?>" />
                                <div class="px-1"><?php echo get_sub_field('program_lightbox_description'); ?></div>
                                <?php if(have_rows('program_features')): ?>
                                <ul class="card-body pr-0" style="clear: both;">
                                    <?php while(have_rows('program_features')): the_row(); ?>
                                    <li class="list-overlay overlay-fade-right my-1 card-text">
                                        <?php echo get_sub_field('program_feature'); ?>
                                    </li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                            <div class="modal-footer light-overlay overlay-fade-right">
                            <?php if(!empty(get_sub_field('cta_link'))): ?>
                            <a class="btn btn-primary" href="<?php echo get_sub_field('cta_link')['url']; ?>" alt="Link to the <?php echo get_sub_field('cta_link')['title']; ?> Page"><?php echo get_sub_field('cta_link')['title']; ?></a>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>