<?php

/**
 * Plugin Name:   Example Plugin
 * Plugin URI:    https://github.com/dumarojeda/example-plugin
 * Description:   This is a plugin that registers a custom post type, adds a custom meta field, and displays it in the REST API.
 * Author:        Dumar Ojeda
 * Author URI:    https://gitlab.com/dumarojeda/
 * Version:       1.0.0
 * Text Domain:   example_plugin
 */


/* Exit if accessed directly. */

if (!defined('ABSPATH')) {
    exit;
}

/* Plugin constants. */

define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN_VERSION', '1.0.0');

/* Load Controllers. */
require PLUGIN_PATH . 'includes/controllers/example_cpt.php';
require PLUGIN_PATH . 'includes/controllers/admin_roles.php';
require PLUGIN_PATH . 'includes/controllers/example_meta.php';
require PLUGIN_PATH . 'includes/controllers/example_api.php';

/* Load Models. */
require PLUGIN_PATH . 'includes/models/example.php';


/* Initialize Controllers. */
new ExamplePlugin\Controllers\ExampleCPTController;
new ExamplePlugin\Controllers\AdminRolesController;
new \ExamplePlugin\Controllers\ExampleMetaController;
new \ExamplePlugin\Controllers\ExampleApiController;

/* Register and deactivation. */
register_activation_hook(__FILE__, ['ExamplePlugin\Controllers\AdminRolesController', 'add_admin_capabilities']);
register_deactivation_hook(__FILE__, ['ExamplePlugin\Controllers\AdminRolesController', 'remove_admin_capabilities']);
