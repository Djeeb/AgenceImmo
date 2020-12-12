<?php
require_once('widgets/social.php');


add_action('widgets_init', function(){
    register_widget(Agencia_Social_Widget::class);
    register_sidebar([
        'id' => 'footer',
        'name' => __('Footer', 'agencia'),
        'before_title' => '<div class="footer__title">',
        'after_title' => '</div>',
        'before_widget' => '<div class="footer__col">',
        'after_widget' => '</div>'

    ]);
});

