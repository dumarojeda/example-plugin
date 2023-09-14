<?php

namespace ExamplePlugin\Controllers;

/**
 * Example Meta Controller.
 */
class ExampleMetaController
{
    public function __construct()
    {
        add_action('add_meta_boxes', [$this, 'create_example_meta_box']);
        add_action('save_post', [$this, 'save_example_meta_box']);
    }

    /**
     * Add Example Metabox.
     */
    public function create_example_meta_box()
    {
        add_meta_box(
            'example_meta',
            'Example Meta',
            [$this, 'render_example_meta_box'],
            'example_cpt',
            'normal',
            'default'
        );
    }

    /**
     * Render Example Metabox.
     */
    public function render_example_meta_box($post)
    {
        $value = get_post_meta($post->ID, 'example_meta', true);

        require PLUGIN_PATH . 'includes/views/meta_box.php';
    }

    /**
     * Save Example Metabox.
     */
    public function save_example_meta_box($post_id)
    {

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }

        if (!isset($_POST['example_nonce']) || !wp_verify_nonce($_POST['example_nonce'], 'meta_example_nonce')) {
            return;
        }

        if (isset($_POST['example_meta'])) {
            update_post_meta($post_id, 'example_meta', esc_attr($_POST['example_meta']));
        }
    }
}
