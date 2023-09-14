<?php

namespace ExamplePlugin\Controllers;

/**
 * Example CPT Controller.
 */
class ExampleCPTController
{
    public function __construct()
    {
        add_action('init', [$this, 'create_example_cpt']);
    }

    /**
     * Add Example Custom Post Type.
     */
    public function create_example_cpt()
    {
        $labels = [
            'name' => __('Example CPT', 'example_plugin'),
            'singular_name' => __('Example CPT', 'example_plugin'),
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'supports' => ['title', 'editor'],
            'capability_type' => ['example', 'examples'],
            'map_meta_cap'    => true,
        ];

        register_post_type('example_cpt', $args);
    }
}
