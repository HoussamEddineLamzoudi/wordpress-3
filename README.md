# wp_footer_plugin


## création du plugin
```
<?php

/*
 
Plugin Name: wp_footer_plugin
 
Plugin URI: https://github.com/HoussamEddineLamzoudi/wp_footer_pluging
 
Description: this is the best plugin footer you can use itwe create, we create it just for you
 
Version: 1.0.0
 
Author: Ayoub Basidi
 
Author URI: https://github.com/HoussamEddineLamzoudi

 
*/

?>
```

## création du menu pour le plugin

# 01 ajouter le plugin dans le menu du dashpoard et mettere une icone du plugin

```
<?php

function footer_setting_page()
{

    // add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '' , string $icon_url = '');


    add_menu_page('footer plugin', 'Footer Setting', 'manage_options', 'custom-plugin-setting-url', 'custom_page_html_form', plugins_url('custom-plugin/img/icon.png'));

    // custom_page_html_form is the function in which I have written the HTML for my footer plugin form.
}
add_action('admin_menu', 'footer_setting_page');

?>
```


