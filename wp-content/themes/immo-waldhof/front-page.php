<?php

get_header();

echo HomeSlider::getHomeSlider(
    [
        '/wp-content/uploads/2026/03/bandeau-slide1.jpg',
        '/wp-content/uploads/2026/03/bandeau-slide2.jpg',
        '/wp-content/uploads/2026/03/bandeau-slide3.jpg',
    ]
);
?>

<main>

<?php
echo SearchForm::getSearchForm(3);
?>

</main>

<?php

get_footer();
