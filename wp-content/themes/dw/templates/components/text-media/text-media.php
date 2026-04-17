<?php
$title = get_field('tm_title');
$text = get_field('tm_text');
$link = get_field('tm_link');
$image = get_field('tm_image');
$image_position = get_field('tm_image-position') ?: 'left';
?>

<?php
$falc = isset($_GET['falc']) ? sanitize_text_field($_GET['falc']) : '';
?>

<?php $falc
        ? get_template_part('templates/components/text-media/parts/text-media-falc')
        : get_template_part('templates/components/text-media/parts/text-media');
?>
