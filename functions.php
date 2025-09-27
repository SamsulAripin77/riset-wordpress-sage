<?php

use Roots\Acorn\Application;

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

Application::configure()
    ->withProviders([
        App\Providers\ThemeServiceProvider::class,
    ])
    ->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

require_once get_stylesheet_directory() . '/app/ajax-hooks.php';

add_action('wp_enqueue_scripts', function () {
    $manifest_path = get_theme_file_path('public/build/manifest.json');

    if (!file_exists($manifest_path)) {
        return;
    }

    $manifest = json_decode(file_get_contents($manifest_path), true);

    // Misalnya kita ingin enqueue resources/js/custom-script.js
    $js_key = 'resources/js/loader.js';

    if (isset($manifest[$js_key]['file'])) {
        $js_file = $manifest[$js_key]['file'];
        $handle  = 'loader-script';

        wp_enqueue_script(
            $handle,
            get_theme_file_uri("public/build/{$js_file}"),
            [], // dependencies
            null,
            true // in_footer
        );
    }
});

add_action('wp_enqueue_scripts', function () {
    $handle = 'loader-script';
    handle_glboal_js_var($handle);
});

function handle_glboal_js_var($handle){
      global $post;
      $slug = '';
      if (is_a($post, 'WP_Post')) {
          $slug = $post->post_name;
      }
      $is_loggedin = false;
      $current_user = wp_get_current_user();

        if (is_user_logged_in()) {
            $is_loggedin 	= true;
        }

      wp_localize_script($handle, 'script_vars', [
        'ajaxurl'    => admin_url('admin-ajax.php'),
        'ajax_nonce' => wp_create_nonce("ajax_nonce_{$slug}"),
        'slug'  => $slug,
        'is_loggedin' => $is_loggedin,
        'site_url'     => get_site_url(),
        'home_url'     => home_url('/'),
        'locale'       => get_locale(),
        'is_rtl'       => is_rtl(),
        'is_frontpage' => is_front_page(),
        'is_archive'   => is_archive(),
        'is_single'    => is_single(),
        'is_page'      => is_page(),
        'is_home'      => is_home(),
    ]);
}

add_action('rest_api_init', 'register_custom_api_routes');

function register_custom_api_routes() {
    register_rest_route('ambara/v1', '/posts', [
        'methods' => 'GET',
        'callback' => 'get_blog_posts',
        'permission_callback' => '__return_true',
    ]);

    register_rest_route('ambara/v1', '/categories', [
        'methods' => 'GET',
        'callback' => 'get_post_categories',
        'permission_callback' => '__return_true',
    ]);

    register_rest_route('ambara/v1', '/tags', [
        'methods' => 'GET',
        'callback' => 'get_post_tags',
        'permission_callback' => '__return_true',
    ]);

    register_rest_route('ambara/v1', '/contact', [
        'methods' => 'POST',
        'callback' => 'handle_contact_form_submission',
        'permission_callback' => '__return_true',
    ]);
}

function get_blog_posts(WP_REST_Request $request) {
    $params = $request->get_params();
    $paged = isset($params['page']) ? intval($params['page']) : 1;
    $category = isset($params['category']) ? sanitize_text_field($params['category']) : '';
    $tag = isset($params['tag']) ? sanitize_text_field($params['tag']) : '';

    $args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $paged,
    ];

    $tax_query = [];
    if (!empty($category)) {
        $tax_query[] = [
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => $category,
        ];
    }

    if (!empty($tag)) {
        $tax_query[] = [
            'taxonomy' => 'post_tag',
            'field' => 'slug',
            'terms' => $tag,
        ];
    }

    if (count($tax_query) > 0) {
        $args['tax_query'] = $tax_query;
    }

    $query = new WP_Query($args);
    $posts = [];

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
            $post_tags = get_the_tags($post_id);
            $tags_list = [];
            if ($post_tags) {
                foreach ($post_tags as $t) {
                    $tags_list[] = [
                        'name' => $t->name,
                        'slug' => $t->slug,
                        'link' => get_tag_link($t->term_id),
                    ];
                }
            }

            $posts[] = [
                'id' => $post_id,
                'title' => get_the_title(),
                'link' => get_permalink(),
                'date' => get_the_date('j F Y'),
                'image' => get_the_post_thumbnail_url($post_id, 'large') ?: 'https://via.placeholder.com/800x600.png/f3f4f6/6b7280?text=No+Image',
                'desc' => wp_strip_all_tags(get_the_content()),
                'tags' => $tags_list,
            ];
        }
    }

    wp_reset_postdata();

    $total_posts = $query->found_posts;
    $max_pages = $query->max_num_pages;

    return new WP_REST_Response([
        'posts' => $posts,
        'total' => $total_posts,
        'max_pages' => $max_pages,
        'current_page' => $paged,
    ], 200);
}

function get_post_categories() {
    $categories = get_terms(['taxonomy' => 'category', 'hide_empty' => true]);
    return new WP_REST_Response($categories, 200);
}

function get_post_tags() {
    $tags = get_terms(['taxonomy' => 'post_tag', 'hide_empty' => true]);
    return new WP_REST_Response($tags, 200);
}




// Register Custom Post Type for Attorneys
function create_attorney_cpt() {
    $labels = array(
        'name' => __('Attorneys', 'sage'),
        'singular_name' => __('Attorney', 'sage'),
        'menu_name' => __('Attorneys', 'sage'),
        'all_items' => __('All Attorneys', 'sage'),
        'add_new_item' => __('Add New Attorney', 'sage'),
        'add_new' => __('Add New', 'sage'),
        'new_item' => __('New Attorney', 'sage'),
        'edit_item' => __('Edit Attorney', 'sage'),
        'update_item' => __('Update Attorney', 'sage'),
        'view_item' => __('View Attorney', 'sage'),
        'search_items' => __('Search Attorney', 'sage'),
    );
    $args = array(
        'label' => __('attorney', 'sage'),
        'description' => __('Post Type for Attorneys', 'sage'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-businessperson',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('attorneys', $args);
}
add_action('init', 'create_attorney_cpt', 0);

// Register Custom Taxonomy for Attorney Categories
function create_attorney_taxonomy() {
    $labels = array(
        'name' => _x('Attorney Categories', 'taxonomy general name'),
        'singular_name' => _x('Attorney Category', 'taxonomy singular name'),
        'search_items' => __('Search Attorney Categories'),
        'all_items' => __('All Attorney Categories'),
        'parent_item' => __('Parent Attorney Category'),
        'parent_item_colon' => __('Parent Attorney Category:'),
        'edit_item' => __('Edit Attorney Category'),
        'update_item' => __('Update Attorney Category'),
        'add_new_item' => __('Add New Attorney Category'),
        'new_item_name' => __('New Attorney Category Name'),
        'menu_name' => __('Attorney Categories'),
    );

    register_taxonomy('attorney_category', array('attorneys'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'attorney-category'),
    ));
}
add_action('init', 'create_attorney_taxonomy', 0);

function handle_contact_form_submission(WP_REST_Request $request) {
    $params = $request->get_json_params();
    $name = isset($params['name']) ? sanitize_text_field($params['name']) : '';
    $email = isset($params['email']) ? sanitize_email($params['email']) : '';
    $message = isset($params['message']) ? sanitize_textarea_field($params['message']) : '';

    // Server-side validation
    if (empty($name)) {
        return new WP_Error('missing_field', 'Name is required.', ['status' => 400]);
    }
    if (empty($email) || !is_email($email)) {
        return new WP_Error('invalid_email', 'A valid email is required.', ['status' => 400]);
    }
    if (empty($message)) {
        return new WP_Error('missing_field', 'Message is required.', ['status' => 400]);
    }

    // Create a new post in the 'contacts' CPT
    $post_id = wp_insert_post([
        'post_title' => 'Contact from ' . $name,
        'post_type' => 'contacts',
        'post_status' => 'publish',
    ]);

    if (is_wp_error($post_id)) {
        return new WP_Error('post_creation_failed', 'Failed to save submission.', ['status' => 500]);
    }

    // Save ACF fields
    $contact_fields = [
        'name' => $name,
        'email' => $email,
        'message' => $message,
    ];
    update_field('contacts', $contact_fields, $post_id);

    // Data for the Blade template
    $data = [
        'name'    => $name,
        'email'   => $email,
        'message' => $message,
    ];

    // Render the Blade component into an HTML string
    $email_body = \Roots\view('components.email-notification', $data)->render();

    // Send email notification
    $to = 'contact.samsularipin@gmail.com';
    $subject = 'New Contact Form Submission from ' . $name;
    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];

    wp_mail($to, $subject, $email_body, $headers);

    return new WP_REST_Response(['success' => true, 'message' => 'Your message has been sent successfully!'], 200);
}
