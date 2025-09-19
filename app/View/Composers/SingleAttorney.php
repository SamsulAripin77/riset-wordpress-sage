<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SingleAttorney extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'single-attorneys',
    ];

    /**
     * Data to be passed to view.
     *
     * @return array
     */
    public function with()
    {
        return [
            'attorney_categories' => $this->getAttorneyCategories(),
        ];
    }

    /**
     * Get all attorney categories with their attorneys.
     *
     * @return array
     */
    public function getAttorneyCategories()
    {
        $attorney_categories = get_terms([
            'taxonomy' => 'attorney_category',
            'hide_empty' => true,
        ]);

        if (is_wp_error($attorney_categories) || empty($attorney_categories)) {
            return [];
        }

        foreach ($attorney_categories as $category) {
            $args = [
                'post_type' => 'attorneys',
                'posts_per_page' => -1,
                'tax_query' => [
                    [
                        'taxonomy' => 'attorney_category',
                        'field'    => 'term_id',
                        'terms'    => $category->term_id,
                    ],
                ],
                'orderby' => 'title',
                'order'   => 'ASC',
            ];
            $attorneys_query = new \WP_Query($args);
            $category->attorneys = $attorneys_query->posts;
        }

        return $attorney_categories;
    }
}
