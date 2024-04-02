<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ProductComposer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        //
        'partials.content-single-products',
        'partials.products.*',

    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'brand_name' => get_field('brand_name'),
            'collection_name' => get_field('collection_name'),
            'content' => get_field('content'),
            'gallery' => get_field('gallery'),
            'ProductsContent' => $this -> ProductsContent(),
        ];
        
    }
    public function ProductsContent(){
        $data= [];
        $flex_content = get_field('product_content');
        if($flex_content){
            foreach($flex_content as $content){
                if($content['acf_fc_layout'] == '2_column_list'){
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'title' => $content['title'],
                        'list' => $content['list'],
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout'] == 'table'){
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'background' => $content['background'],
                        'table' => $content['table'],
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout'] == 'table_with_image'){
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'background' => $content['background'],
                        'title' => $content['title'],
                        'table_image' => $content['table_image'],
                        'table' => $content['table'],
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout'] == 'image_icon_grid'){
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'title' => $content['title'],
                        'grid' => $content['grid'],
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout'] == '2_column_list_separate_title'){
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'data' => $content['data'],
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout'] == 'image_with_list'){
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'image' => $content['image'],
                        'list' => $content['list'],
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout'] == 'brouchers'){
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'background_type' => $content['background_type'],
                        'broucher_data' => $content['broucher_data'],
                    ];
                    array_push($data, $this_content);
                }
            }
            
        }
        return $data;
    }
}
