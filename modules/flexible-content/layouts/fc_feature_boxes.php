<?php
/*
    Feature Boxes
*/

$per_row_class = '';
if(get_sub_field('feature_boxes_per_row')) { 
    $per_row_class = get_sub_field('feature_boxes_per_row');
}

$bg_class = '';
if(get_sub_field('feature_boxes_bg')) { 
    $bg_class = ' with-bg';
}
?>

<div class="fc_feature_boxes_wrapper">
    <?php
        while(have_rows('feature_boxes')) : the_row();

        $gf_id = '';
    ?>
        <article class="<?php echo $per_row_class.$bg_class; ?>">
            <div class="fc__feature__box__inner">
                <h3>
                    <?php if(get_sub_field('feature_box_icon')): ?><figure><i class="<?php the_sub_field('feature_box_icon'); ?>"></i></figure><?php endif; ?>
                    <?php if(get_sub_field('feature_box_button_url')): ?><a href="<?php the_sub_field('feature_box_button_url'); ?>" title="<?php the_sub_field('feature_box_heading'); ?>"><?php endif; ?>
                        <?php the_sub_field('feature_box_heading'); ?>
                    <?php if(get_sub_field('feature_box_button_url')): ?></a><?php endif; ?>
                </h3>
                
                <?php if(get_sub_field('feature_box_button_url')): ?><a href="<?php the_sub_field('feature_box_button_url'); ?>"><?php endif; ?>
                    <?php the_sub_field('feature_box_content'); ?>
                <?php if(get_sub_field('feature_box_button_url')): ?></a><?php endif; ?>

                <?php
                    if(get_sub_field('feature_box_button_url') && get_sub_field('feature_box_button_label')):
                ?>
                    <a href="<?php the_sub_field('feature_box_button_url'); ?>" class="link animate-icon">
                        <?php the_sub_field('feature_box_button_label'); ?> <i class="fa fa-chevron-right"></i>
                    </a>
                <?php endif; ?>
            </div><!-- fc__feature__box__inner -->
        </article>
    <?php endwhile; ?>
</div><!-- fc_feature_boxes_wrapper -->
