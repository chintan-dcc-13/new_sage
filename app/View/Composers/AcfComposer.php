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
                        'video_background' => $content['video_background'],
                        'is_image_title' => $content['is_image_title'],
                        'title_image' => $content['title_image'],

                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'image_content_loop') {
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'content_loop' => $content['content_loop']
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'image_card_grid') {
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'title' => $content['title'],
                        'sub_title' => $content['sub_title'],
                        'section_description' => $content['section_description'],
                        'image_cards' => $content['image_cards']

                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'advantages') {
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'title' => $content['title'],
                        'image' => $content['image'],
                        'section_description' => $content['section_description'],
                        'advantage' => $content['advantage']

                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'image_slider') {
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'slider_images' => $content['slider_images']
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'product_listing') {
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
                } elseif ($content['acf_fc_layout'] == 'breadcrumb') {
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'bg_image' => $content['bg_image'],
                        'pre_heading' => $content['pre_heading'],
                        'heading' => $content['heading'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'product_support_grid') {
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'support_grid' => $content['support_grid'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'product_support_form') {
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'background_color' => $content['background_color'],
                        'support_form' => $content['support_form'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'cta') {
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'button' => $content['button'],
                        'content' => $content['content'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'general_content') {
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'content' => $content['content'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'partner_grid') {
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'partner_grid' => $content['partner_grid'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'sales_team') {
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'team_member' => $content['team_member'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'blogs_listing') {
                    $blogs = array();
                    $blogs_args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                    );
                    $blogs_query = new \WP_Query($blogs_args);
                    $has_post = $blogs_query->max_num_pages > 1;
                    if ($blogs_query->have_posts()) {
                        while ($blogs_query->have_posts()) : $blogs_query->the_post();
                            $fea_img = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() :  \Roots\asset('images/default.jpg')->uri();
                            $image_id = get_post_thumbnail_id();
                            $img_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                            $img_alt = $img_alt ? $img_alt : get_the_title($image_id);
                            $blogs[] = array(
                                'title' => get_the_title(),
                                'url' => get_the_permalink(),
                                'img' => $fea_img,
                                'img_alt' => $img_alt,
                                'author' => get_the_author(),
                                'date' => get_the_date('m/d/Y'),
                                'category' => array_map(function ($item) {
                                    return [
                                        'id' => $item->term_id,
                                        'name' => $item->name,
                                        'slug' => $item->slug,
                                    ];
                                }, get_the_category()),
                                'excerpt_desc' => get_the_excerpt(),
                            );
                        endwhile;
                        wp_reset_postdata();
                    }
                    $this_content = (object)[
                        'layout' => $content['acf_fc_layout'],
                        'blogs' => $blogs,
                        'has_post' => $has_post,
                        'categories' => array_map(function ($item) {
                            return [
                                'id' => $item->term_id,
                                'name' => $item->name,
                                'slug' => $item->slug,
                            ];
                        }, get_categories()),
                    ];
                    array_push($data, $this_content);
                }
            }
        }
        return $data;
    }
}
