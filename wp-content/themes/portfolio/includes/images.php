<?php
add_action('after_setup_theme', function () {
    set_post_thumbnail_size(250,250,true);
    add_image_size('work-carousel', 1920, 1080, true);
    add_image_size('work_cover', 300, 300, true);
});