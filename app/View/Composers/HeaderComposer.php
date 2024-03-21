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
        ];
    }
}


