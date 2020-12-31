<?php get_header() ?>
<?php
$isRent = get_query_var('property_category', 'buy') === _x('rent', 'URL', 'agence');
$cities = get_terms([
    'taxonomy' => 'property_city'
]);
$types = get_terms([
    'taxonomy' => 'property_type'
]);
$currentCity = get_query_var('city');
$currentPrice = get_query_var('price');
$currentType = get_query_var('property_type');
$currentRooms = get_query_var('rooms');
?>


<div class="container page-properties">
    <div class="search-form">
        <h1 class="search-form__title">
            <?= __('All our properties', 'agencia') ?>
            <?php if ($isRent): ?>
                <?= __('for rent', 'agencia') ?>
            <?php else: ?>
                <?= __('on sale', 'agencia') ?>
            <?php endif ?>
        </h1>
        <p>Find all our properties in the area of <strong>Montpellier</strong></p>
        <hr>
        <?php get_template_part('template-parts/searchform-property') ?>
    </div>



    <!-- 
            <img src="https://i.picsum.photos/id/37/802/220.jpg" alt=""> 
    -->
    <?php $i = 0;
    while (have_posts()) : the_post(); ?>
        <?php set_query_var('property-large', $i === 7); ?>
        <?php get_template_part('template-parts/property') ?>
    <?php $i++;
    endwhile; ?>


</div>

<?php if (get_query_var('paged', 1) > 1) : ?>
    <?= agencia_paginate() ?>
<?php elseif($nextPostLink = get_next_posts_link(__('More properties +', 'agencia'))) : ?>
    <div class="pagination">
        <?= $nextPostLink ?>
    </div>
<?php endif ?>


<?php get_footer() ?>