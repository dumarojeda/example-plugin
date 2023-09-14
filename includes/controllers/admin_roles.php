<?php

namespace ExamplePlugin\Controllers;

/**
 * Admin Roles Controller.
 * 
 */
class AdminRolesController
{
    private static $custom_capabilities = array(
        ['singular' => 'example', 'plural' => 'examples'],
    );

    /**
     * Add example capabilities for Administrator user on activation.
     */
    public static function add_admin_capabilities()
    {
        $role = get_role('administrator');

        foreach (self::$custom_capabilities as $capability) {

            $singular = $capability['singular'];
            $plural = $capability['plural'];

            $role->add_cap("edit_{$singular}");
            $role->add_cap("edit_{$plural}");
            $role->add_cap("edit_others_{$plural}");
            $role->add_cap("publish_{$plural}");
            $role->add_cap("read_{$singular}");
            $role->add_cap("read_private_{$plural}");
            $role->add_cap("delete_{$singular}");
            $role->add_cap("delete_{$plural}");
            $role->add_cap("delete_private_{$plural}");
            $role->add_cap("delete_others_{$plural}");
            $role->add_cap("edit_published_{$plural}");
            $role->add_cap("edit_private_{$plural}");
            $role->add_cap("delete_published_{$plural}");
        }
    }

    /**
     * Remove example capabilities for Administrator user on deactivation.
     */
    public static function remove_admin_capabilities()
    {
        $role = get_role('administrator');

        foreach (self::$custom_capabilities as $capability) {

            $singular = $capability['singular'];
            $plural = $capability['plural'];

            $role->remove_cap("edit_{$singular}");
            $role->remove_cap("edit_{$plural}");
            $role->remove_cap("edit_others_{$plural}");
            $role->remove_cap("publish_{$plural}");
            $role->remove_cap("read_{$singular}");
            $role->remove_cap("read_private_{$plural}");
            $role->remove_cap("delete_{$singular}");
            $role->remove_cap("delete_{$plural}");
            $role->remove_cap("delete_private_{$plural}");
            $role->remove_cap("delete_others_{$plural}");
            $role->remove_cap("edit_published_{$plural}");
            $role->remove_cap("edit_private_{$plural}");
            $role->remove_cap("delete_published_{$plural}");
        }
    }
}
