<?php
class WidgetRegister
{
    public static function my_sidebar()
    {
        register_sidebar([
            'name' => __('Blog sidebar'),
            'id' => 'blog-sidebar',
            'before_widget' => '<div class="widget-item">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ]);
    }
}
add_action('widgets_init', [WidgetRegister::class, 'my_sidebar']);