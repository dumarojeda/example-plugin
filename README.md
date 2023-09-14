# Example Plugin

## Description

This is a plugin that registers a custom post type, adds a custom meta field, and displays it in the REST API.

## Folder Structure

```
├── includes
│   ├── controllers
│   │   ├── admin_roles.php
│   │   ├── example_api.php.php
│   │   ├── example_cpt.php
│   │   ├── example_meta.php
│   ├── models
│   │   ├── example.php
│   ├── views
│   │   ├── meta_box.php
├── example_plugin.php
├── index.php
└── .gitignore
```

## Use

1. Install and activate the “Example Plugin” plugin from the WordPress plugins section.

2. Once activated, it will create the Example CPT, it will now be available to add posts

3. You can review all posts created in the following endpoint:
   `wp-json/wp/v2/example/`

### Enjoy it.
