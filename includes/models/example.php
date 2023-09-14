<?php

namespace ExamplePlugin\Models;

/**
 * Example Model.
 */
class Example
{
    /**
     * Get all Example Posts.
     */
    public static function get_all()
    {
        $args = [
            'post_type'        => 'example_cpt',
            'post_status'      => 'publish',
            'orderby'          => 'date',
            'order'            => 'DESC',
            'posts_per_page'   => -1,
            'offset'           => 0,
            'suppress_filters' => true,
        ];

        $posts = get_posts($args);

        if (!empty($posts)) {
            foreach ($posts as $post) {
                $post = self::add_metadata($post);
            }
        }

        return $posts;
    }

    /**
     * Adding Metabox to posts.
     */
    public static function add_metadata($post)
    {
        $post->example_meta = get_post_meta($post->ID, 'example_meta', true);
    }
}
