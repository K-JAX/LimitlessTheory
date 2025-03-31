<?php
/**
 * Displays the topics on the services page
 */

?>

<!-- // Image ( if mini disc chain list ) -->
<?php if ($listType == 'mini-disc-chain-list'): ?>
    <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" /> 
    <?php echo get_sub_field('mini_list_description'); ?>
<?php endif; ?>

<?php 

    get_specialy_list();
    function get_specialy_list(){
        $listType = get_sub_field('list_type');

        $output .= __('<div class="row px-0 mr-0 ml-5 my-5 py-3" style="justify-content: space-between;">');

        $output .= get_list_tag($listType);
        
        $output .= __('</div>');

        echo $output;
    }



    function get_list_tag($listType){
        $listTag = array(
            'open' => '',
            'close' => '',
            'liClass' => ''
        );
        switch($listType){
            case 'custom-icon-list':
                $output .= get_custom_icon_list();
            break;
            case 'number-list':
                $output .= get_number_list();
            break;
            case 'mini-disc-chain-list':
                $output .= get_mini_disc_list();
                $listTag = array(
                    'open' => '<ul data-aos="fade-up" data-aos-duration="700" data-aos-delay="'. round($count * .8) .'00" class="chain-list col-12 col-md-4 list-unstyled mx-0 px-0">',
                    'close' => '</ul>',
                    'liClass' => 'chain-list-item row'
                );
            break;
        };
        return $output;
    }





    function get_custom_icon_list(){

        if( have_rows('list_item_repeater') ): $count=0;
            while( have_rows('list_item_repeater') ): the_row();

                $open = $count % 3 == 0 ? '<ul data-aos="fade-up" data-aos-duration="700" data-aos-delay="'. round($count * .8) .'00" class="chain-list col-12 col-md-4 list-unstyled mx-0 px-0">' : '';
                $close = $count % 3 == 2 ? '</ul>' : '';
                $icon = (!empty(get_sub_field('icon'))) ? '<div class="icon-container text-center"><img style="object-fit: contain;" src="' . get_sub_field('icon')['url'] . '" alt="' . get_sub_field('icon')['alt'] . '" /></div>' : '';
                $text = '<span class="h6 col-8">' . get_sub_field('text') . '</span>';
        
                $output .= sprintf(__('
                    %s
                        <li class="chain-list-item row">
                            ' . $icon  .  $text .'
                        </li>
                    %s

                '), $open, $close);
                $count++;
            endwhile;
        endif;
        return $output;
    }

    function get_number_list(){

        $open = '<ol class="row specialty-number-list">';
        $close = '</ol>';
        
        
        if( have_rows('list_item_repeater') ): $count=0;
        
            $output .= __($open);
        
            while( have_rows('list_item_repeater') ): the_row();
                $text = '<span class="h6 col-8">' . get_sub_field('text') . '</span>';
                $output .= __('
                    <li data-aos="fade-up" data-aos-duration="700" data-aos-delay="'. round($count * .8) .'00" class="col-12 col-md-4 list-number-huge my-5">
                        ' .  $text . '
                    </li>
                ');
                $count++;
            endwhile;

            $output .= __($close);
            
        endif;
        return $output;
    }


    function get_mini_disc_list(){

        $output .= __('<div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" class="row col-12 col-md-5 p-3 caption-overlay align-content-start align-self-end bg-white" style="margin-left: 140px; margin-right:-140px; z-index: 2;">');
            
            $output .= __(get_sub_field('mini_list_description'));
        
            if( have_rows('list_item_repeater') ): $count=0;
                while( have_rows('list_item_repeater') ): the_row();

                    $open = $count % 4 == 0 ? '<ul data-aos="fade-up" data-aos-duration="700" data-aos-delay="'. round($count * 1) .'00" class="mini-disc-chain-list col-12 col-md-6 mx-0 px-0">' : '';
                    $close = $count % 4 == 3 ? '</ul>' : '';
                    $text = '<span class="h6">' . get_sub_field('text') . '</span>';
            
                    $output .= sprintf(__('
                        %s
                            <li class="mini-chain-item my-4">
                                ' . $text .'
                            </li>
                        %s

                    '), $open, $close);
                    $count++;
                endwhile;
            endif;
        $output .= __('</div>');
        $output .= __('<div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400" class="col-md-7"><img src="' . get_sub_field('image')['url'] . '" alt="'. get_sub_field('image')['alt'] . '" /></div>');
        return $output;
    }