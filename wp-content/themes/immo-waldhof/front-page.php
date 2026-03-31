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
echo Spacer::getSpacer();
echo Services::getServices(
    [
        [
            "title" => "Estimez",
            "description" => "Lorem ipsum dolor sit amet, consectetur dipiscing elit. Aenean vitae congue arcu. hasellus llamcorper purus enim, non mollis libero facilisis vitae. Donec risus nulla.",
            "link" => "#",
        ],
        [
            "title" => "Vendez",
            "description" => "Lorem ipsum dolor sit amet, consectetur dipiscing elit. Aenean vitae congue arcu. hasellus llamcorper purus enim, non mollis libero facilisis vitae. Donec risus nulla.",
            "link" => "#",
        ],
        [
            "title" => "Louer",
            "description" => "Lorem ipsum dolor sit amet, consectetur dipiscing elit. Aenean vitae congue arcu. hasellus llamcorper purus enim, non mollis libero facilisis vitae. Donec risus nulla.",
            "link" => "#",
        ],
    ]
);
echo Spacer::getSpacer();
echo Properties::getProperties(
        [
            [],
            [],
            [],
            [],
            [],
            [],
        ]
);
echo Spacer::getSpacer();
echo Spacer::getSpacer();
echo Spacer::getSpacer();

echo BigCTA::getBigCTA(true, true);
echo Spacer::getSpacer(true);
echo Spacer::getSpacer(true);
echo Spacer::getSpacer(true);

echo InlineCTA::getInlineCTA(true);
echo Spacer::getSpacer(true);

echo Manifesto::getManifesto(true);
echo Spacer::getSpacer(true);

echo Reviews::getReviews(true);
echo Spacer::getSpacer(true);
?>

</main>

<?php

get_footer();
