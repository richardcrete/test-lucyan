<?php

get_header();
?>

<?php echo HomeSlider::getHomeSlider(
    [
        '/wp-content/uploads/2026/03/bandeau-slide1.jpg',
        '/wp-content/uploads/2026/03/bandeau-slide2.jpg',
        '/wp-content/uploads/2026/03/bandeau-slide3.jpg',
    ]
); ?>

<?php
get_footer();
