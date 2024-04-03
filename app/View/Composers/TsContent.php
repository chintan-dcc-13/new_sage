<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TsContent extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        //
        '*',
    ];
    public function with()
    {
        return [
            'tsContentData' => $this->tsContentData(),
        ];
    }

    public function tsContentData()
    {
        $data = [];
        $flex_content = get_field('acf_flex_content');
        if ($flex_content) {
            foreach ($flex_content as $content) {
                if ($content['acf_fc_layout'] == 'product_listing') {
                    $select_cat = $content['select_product_category'];
                    $products = array();
                    $products_args = array(
                        'post_type' => 'products',
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                        'order' => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product-category',
                                'field'    => 'id',
                                'terms'    => $select_cat,
                            ),
                        )
                    );
                    $products_query = new \WP_Query($products_args);
                    if ($products_query->have_posts()) {
                        while ($products_query->have_posts()) : $products_query->the_post();
                            $fea_img = get_the_post_thumbnail_url(get_the_ID()) ? get_the_post_thumbnail_url(get_the_ID()) :  \Roots\asset('images/default.jpg')->uri();
                            $image_id = get_post_thumbnail_id(get_the_ID());
                            $img_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                            $img_alt = $img_alt ? $img_alt : get_the_title($image_id);
                            $products[] = array(
                                'title' => get_the_title(),
                                'url' => get_the_permalink(),
                                'image' => $fea_img,
                                'image_id' => $image_id,
                                'image_alt' => $img_alt,
                                'brand_name' => get_field('brand_name'),
                                'collection_name' => get_field('collection_name'),
                            );
                        endwhile;
                        wp_reset_postdata();
                    }
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'products' => $products,
                        'heading' => $content['heading'],
                        'select_product_category' => $content['select_product_category'],
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout'] == 'breadcrumb'){
                    $this_content = (object)[
                            'layout' => $content['acf_fc_layout'],
                            'bg_image' => $content['bg_image'],
                            'pre_heading' => $content['pre_heading'],
                            'heading' => $content['heading'],
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout'] == 'product_support_grid'){
                    $this_content = (object)[
                            'layout' => $content['acf_fc_layout'],
                            'heading' => $content['heading'],
                            'support_grid' => $content['support_grid'],
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout'] == 'product_support_form'){
                    $this_content = (object)[
                            'layout' => $content['acf_fc_layout'],
                            'background_color' => $content['background_color'],
                            'support_form' => $content['support_form'],
                            'heading' => $content['heading'],
                            'description' => $content['description'],
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout'] == 'cta'){
                    $this_content = (object)[
                            'layout' => $content['acf_fc_layout'],
                            'heading' => $content['heading'],
                            'button' => $content['button'],
                            'content' => $content['content'],
                    ];
                    array_push($data, $this_content);
                }
            }
        }
        return $data;
    }
}
