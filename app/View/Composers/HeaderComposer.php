<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class HeaderComposer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'sections.header',
        'sections.footer',
        '404',
    ];
    public function with(){
        return[

            //Header
            'header_logo' => get_field('header_logo','option'),
            'dealer_button_link' => get_field('dealer_button_link','option'),
            'request_a_quote' => get_field('request_a_quote','option'),
            
            //Announcement
            'show' => get_field('show','option'),
            'message_slider' => get_field('message_slider','option'),
            'phone_number' => get_field('phone_number','option'),
            'email' => get_field('email','option'),

            //Footer
            'footer_logo' => get_field('footer_logo', 'option'),
            'news_letter_title' => get_field('news_letter_title', 'option'),
            'news_letter_description' => get_field('news_letter_description', 'option'),
            'form_shortcode' => get_field('form_shortcode', 'option'),
            'social_media_item' => get_field('social_media_item', 'option'),
            'copy_right' => get_field('copy_right', 'option'),
            
            //404
            'page_404_image' => get_field('page_404_image', 'option'),
            
        ];
    }
}


