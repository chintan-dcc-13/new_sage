<?php



namespace App\View\Composers;

use Illuminate\Support\Arr;
use Roots\Acorn\View\Composer;

class AcfComposer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // '*',
        'partials.content-acf',
    ];

    /**
     * 
     * 
     * @return array
     */
    public function with()
    {
        return [
            'acfdata' => $this->getFlexContent(),

        ];
    }

    /**
     * 
     * 
     * @return array
     */

    public function getFlexContent()
    {
        $data = [];
        $flexibleContent = get_field('acf_flex_content');
        if ($flexibleContent) {
            foreach ($flexibleContent as $content) {
                
                if ($content['acf_fc_layout'] == 'home_page_banner') {
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'title' => $content['title'],
                        'sub_title' => $content['sub_title'],
                        'button_label' => $content['button_label'],
                        'button_url' => $content['button_url'],
                        'background_image' => $content['background_image'],
                        'is_image_title' => $content['is_image_title'],
                        'title_image' => $content['title_image'],

                    ];
                    array_push($data, $this_content);
                }elseif($content['acf_fc_layout'] == 'image_content_loop'){
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'content_loop' => $content['content_loop']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout'] == 'image_card_grid'){
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'title' => $content['title'],
                        'sub_title' => $content['sub_title'],
                        'section_description' => $content['section_description'],
                        'image_cards' => $content['image_cards']

                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout'] == 'advantages'){
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'title' => $content['title'],
                        'image' => $content['image'],
                        'section_description' => $content['section_description'],
                        'advantage' => $content['advantage']

                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout'] == 'image_slider'){
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'slider_images' => $content['slider_images']
                    ];
                    array_push($data, $this_content);
                }
            }
        }
        return $data;
    }
}
