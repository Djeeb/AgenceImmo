<?php
add_filter('next_posts_link_attributes', function (string $attrs): string{
    return $attrs . ' class="btn"';
});

add_filter('nav_menu_css_class', function (array $classes): array {
    if (is_singular('property') || is_post_type_archive('property')) {
        $classes = array_filter($classes, function (string $class){
            return $class !== 'current_page_current';
        });
    }
    return $classes;
});

add_filter('wpcf7_form_elements', function(string $content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    $content = str_replace('<br />', '', $content);
    $content = str_replace('<p>', '', $content);
    $content = str_replace('</p>', '', $content);
    return $content;
});