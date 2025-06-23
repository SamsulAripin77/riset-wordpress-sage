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
  if (!is_page()) return;

  global $post;
  $slug = $post->post_name;

  $manifest_path = get_theme_file_path('public/build/manifest.json');

  if (!file_exists($manifest_path)) return;

  $manifest = json_decode(file_get_contents($manifest_path), true);

  // JS key
  $js_key = "resources/js/{$slug}.js";
  $css_key = "resources/css/{$slug}.css"; // untuk backup pengecekan CSS langsung

  // Enqueue JS
  if (isset($manifest[$js_key]['file'])) {
    $js_file = $manifest[$js_key]['file'];
    $handle  = "page-script-{$slug}";

    wp_enqueue_script(
      $handle,
      get_theme_file_uri("public/build/{$js_file}"),
      [],
      null,
      true
    );

    // Localize
    wp_localize_script($handle, 'script_vars', [
      'ajaxurl'     => admin_url('admin-ajax.php'),
      'ajax_nonce'  => wp_create_nonce("ajax_nonce_{$slug}"),
    ]);

    // Enqueue related CSS (jika ada dalam entry JS)
    if (!empty($manifest[$js_key]['css'])) {
      foreach ($manifest[$js_key]['css'] as $css_file) {
        wp_enqueue_style(
          "page-style-{$slug}",
          get_theme_file_uri("public/build/{$css_file}"),
          [],
          null
        );
      }
    }
  }

  // Fallback: langsung cek file CSS mandiri (resources/css/login.css)
  if (isset($manifest[$css_key]['file'])) {
    $css_file = $manifest[$css_key]['file'];

    wp_enqueue_style(
      "page-style-{$slug}-direct",
      get_theme_file_uri("public/build/{$css_file}"),
      [],
      null
    );
  }
});


