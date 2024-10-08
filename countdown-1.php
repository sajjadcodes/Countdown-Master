<!-- countdown-1.php -->

<div id="clockdiv" style="text-align: <?php echo $alignment; ?>;">

    <?php if (!empty($image_url)) : ?>
        <img src="<?php echo esc_attr($image_thumb_url[0]); ?>" alt="Uploaded Image">
    <?php endif; ?>
    <h1 style="color: <?php echo esc_attr($title_color); ?>; font-size: <?php echo esc_attr($title_font_size); ?>; font-weight: <?php echo esc_attr($title_weight); ?>; font-family: <?php echo esc_attr($font_setting); ?>; line-height: <?php echo esc_attr($title_line_height); ?>;"><?php echo esc_html($title); ?></h1>
    <?php if (in_array('days', $main_format)) : ?>
        <?php if ($days >= 100) : ?>
            <div style="background-color: <?php echo esc_attr($label_bg_color); ?>">
                <span style="color: <?php echo esc_attr($number_color); ?>; background-color: <?php echo esc_attr($number_bg_color); ?>; font-size: <?php echo esc_attr($number_font_size); ?>; font-weight: <?php echo esc_attr($number_weight); ?>; line-height: <?php echo esc_attr($number_line_height); ?>;" class="days"><?php echo sprintf('%03d', $days); ?></span>
                <?php if (in_array('labels', $labels_text)) : ?>
                    <div style="font-size: <?php echo esc_attr($label_font_size); ?>; color: <?php echo esc_attr($label_color); ?>; font-weight: <?php echo esc_attr($label_weight); ?>; line-height: <?php echo esc_attr($label_line_height); ?>;" class="smalltext">Days</div>
                <?php endif; ?>
            </div>
        <?php else : ?>
            <div style="background-color: <?php echo esc_attr($label_bg_color); ?>">
                <span style="color: <?php echo esc_attr($number_color); ?>; background-color: <?php echo esc_attr($number_bg_color); ?>; font-size: <?php echo esc_attr($number_font_size); ?>; font-weight: <?php echo esc_attr($number_weight); ?>; line-height: <?php echo esc_attr($number_line_height); ?>;" class="days"><?php echo sprintf('%02d', $days); ?></span>
                <?php if (in_array('labels', $labels_text)) : ?>
                    <div style="font-size: <?php echo esc_attr($label_font_size); ?>; color: <?php echo esc_attr($label_color); ?>; font-weight: <?php echo esc_attr($label_weight); ?>; line-height: <?php echo esc_attr($label_line_height); ?>;" class="smalltext">Days</div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>


    <?php if (in_array('hours', $main_format)) : ?>
        <div style="background-color: <?php echo esc_attr($label_bg_color); ?>">
            <span style="color: <?php echo esc_attr($number_color); ?>; background-color: <?php echo esc_attr($number_bg_color); ?>; font-size: <?php echo esc_attr($number_font_size); ?>; font-weight: <?php echo esc_attr($number_weight); ?>; line-height: <?php echo esc_attr($number_line_height); ?>;" class="hours"><?php echo sprintf('%02d', $hours); ?></span>
            <?php if (in_array('labels', $labels_text)) : ?>
                <div style="font-size: <?php echo esc_attr($label_font_size); ?>; color: <?php echo esc_attr($label_color); ?>; font-weight: <?php echo esc_attr($label_weight); ?>; line-height: <?php echo esc_attr($label_line_height); ?>;" class="smalltext">Hours</div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if (in_array('minutes', $main_format)) : ?>
        <div style="background-color: <?php echo esc_attr($label_bg_color); ?>">
            <span style="color: <?php echo esc_attr($number_color); ?>; background-color: <?php echo esc_attr($number_bg_color); ?>; font-size: <?php echo esc_attr($number_font_size); ?>; font-weight: <?php echo esc_attr($number_weight); ?>; line-height: <?php echo esc_attr($number_line_height); ?>;" class="minutes"><?php echo sprintf('%02d', $minutes); ?></span>
            <?php if (in_array('labels', $labels_text)) : ?>
                <div style="font-size: <?php echo esc_attr($label_font_size); ?>; color: <?php echo esc_attr($label_color); ?>; font-weight: <?php echo esc_attr($label_weight); ?>; line-height: <?php echo esc_attr($label_line_height); ?>;" class="smalltext">Minutes</div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if (in_array('seconds', $main_format)) : ?>
        <div style="background-color: <?php echo esc_attr($label_bg_color); ?>">
            <span style="color: <?php echo esc_attr($number_color); ?>; background-color: <?php echo esc_attr($number_bg_color); ?>; font-size: <?php echo esc_attr($number_font_size); ?>; font-weight: <?php echo esc_attr($number_weight); ?>; line-height: <?php echo esc_attr($number_line_height); ?>;" class="seconds"><?php echo sprintf('%02d', $seconds); ?></span>
            <?php if (in_array('labels', $labels_text)) : ?>
                <div style="font-size: <?php echo esc_attr($label_font_size); ?>; color: <?php echo esc_attr($label_color); ?>; font-weight: <?php echo esc_attr($label_weight); ?>; line-height: <?php echo esc_attr($label_line_height); ?>;" class="smalltext">Seconds</div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php $this->wpct_display_social_icons(); ?>

</div>

<script>
    initializeClock("clockdiv", "<?php echo $deadline->format('Y-m-d\TH:i:s\Z'); ?>");
</script>