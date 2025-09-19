<?php

add_action('rest_api_init', function () {
  register_rest_route('ambara/v1', '/attorneys', [
    'methods' => 'GET',
    'callback' => 'get_all_attorneys_by_category',
    'permission_callback' => '__return_true' // Public endpoint
  ]);
});

function get_all_attorneys_by_category() {
    $all_categories = get_terms([
        'taxonomy' => 'attorney_category',
        'hide_empty' => false,
    ]);

    $attorneys_by_cat = [];
    $display_categories = [];

    foreach ($all_categories as $category) {
        $args = [
            'post_type' => 'attorneys',
            'posts_per_page' => -1,
            'tax_query' => [
                [
                    'taxonomy' => 'attorney_category',
                    'field' => 'term_id',
                    'terms' => $category->term_id,
                ],
            ],
        ];
        $query = new WP_Query($args);

        if ($query->have_posts()) {
            $display_categories[] = $category;

            $attorneys_by_cat[$category->slug] = [
                'name' => $category->name,
                'slug' => $category->slug,
                'attorneys' => [],
            ];
            while ($query->have_posts()) {
                $query->the_post();
                $attorneys_by_cat[$category->slug]['attorneys'][] = [
                    'id' => get_the_ID(),
                    'title' => get_the_title(),
                    'link' => get_permalink(),
                    'image' => get_the_post_thumbnail_url(get_the_ID(), 'large') ?: 'https://via.placeholder.com/400x500',
                ];
            }
            wp_reset_postdata();
        }
    }

    $data = [
        'categories' => $display_categories,
        'attorneys' => $attorneys_by_cat,
    ];

    return new WP_REST_Response($data, 200);
}