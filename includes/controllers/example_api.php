<?php

namespace ExamplePlugin\Controllers;

use ExamplePlugin\Models\Example;

/**
 * Example CPT Controller.
 * 
 */
class ExampleAPIController
{
    public function __construct()
    {
        add_action('rest_api_init', [$this, 'register_example_routes']);
    }

    /**
     * Register routes for Example API.
     */
    public function register_example_routes()
    {
        register_rest_route('wp/v2', 'example', [
            'methods' => 'GET',
            'callback' => [$this, 'get_all_example'],
        ]);
    }

    /**
     * Get all Example Posts.
     */
    public function get_all_example()
    {
        $posts = Example::get_all();

        return rest_ensure_response($posts);
    }
}
