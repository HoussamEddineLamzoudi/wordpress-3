<?php

/*
 
Plugin Name: wp_footer_plugin
 
Plugin URI: https://github.com/HoussamEddineLamzoudi/wp_footer_pluging
 
Description: this is the best plugin footer you can use itwe create, we create it just for you
 
Version: 1.0.0
 
Author: Houssam Eddine
 
Author URI: https://github.com/HoussamEddineLamzoudi

 
*/

// 2éme couche du securité

defined('ABSPATH') or die('Hey, you can\t access this file, you silly human!');


//stocker les valeur obeteni par le dashboard

function footer_register_settings()
{

    register_setting('footer_options_group', 'email');

    register_setting('footer_options_group', 'copyright');

    register_setting('footer_options_group', 'facebook_url');

    register_setting('footer_options_group', 'twitter_url');

    register_setting('footer_options_group', 'linkedin_url');
}

add_action('admin_init', 'footer_register_settings');

function footer_setting_page()
{

    // add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '' , string $icon_url = '');


    add_menu_page('footer plugin', 'Footer Setting', 'manage_options', 'custom-plugin-setting-url', 'custom_page_html_form', plugins_url('custom-plugin/img/icon.png'));

    // custom_page_html_form is the function in which I have written the HTML for my footer plugin form.
}
add_action('admin_menu', 'footer_setting_page');

function custom_page_html_form()
{ ?>
    <div class="wrap">
        <h2>paramètre du plugin</h2>
        <p>gérer votre footer</p>
        <form method="post" action="options.php">
            <?php settings_fields('footer_options_group'); ?>

            <table class="form-table">

                <tr>
                    <th><label for="first_field_id">Enter Vos E-mail:</label></th>

                    <td>
                        <input type='text' class="regular-text" id="first_field_id" name="email" value="<?php echo get_option('email'); ?>">
                    </td>
                </tr>

                <tr>
                    <th><label for="second_field_id">Enter Vos text du Copyright:</label></th>
                    <td>
                        <input type='text' class="regular-text" id="second_field_id" name="copyright" value="<?php echo get_option('copyright'); ?>">
                    </td>
                </tr>

                <tr>
                    <th><label for="third_field_id">Enter Vos Home Url:</label></th>
                    <td>
                        <input type='text' class="regular-text" id="third_field_id" name="home_url" value="<?php echo get_option('home_url'); ?>">
                    </td>
                </tr>

                <tr>
                    <th><label for="third_field_id">Enter Vos blog Url:</label></th>
                    <td>
                        <input type='text' class="regular-text" id="third_field_id" name="blog_url" value="<?php echo get_option('blog_url'); ?>">
                    </td>
                </tr>

                <tr>
                    <th><label for="third_field_id">Enter Vos About Url:</label></th>
                    <td>
                        <input type='text' class="regular-text" id="third_field_id" name="about_url" value="<?php echo get_option('about_url'); ?>">
                    </td>
                </tr>

                <tr>
                    <th><label for="third_field_id">Enter Vos Contact Url:</label></th>
                    <td>
                        <input type='text' class="regular-text" id="third_field_id" name="contact_url" value="<?php echo get_option('contact_url'); ?>">
                    </td>
                </tr>

                <tr>
                    <th><label for="third_field_id">Enter Vos Facebook Url:</label></th>
                    <td>
                        <input type='text' class="regular-text" id="third_field_id" name="facebook_url" value="<?php echo get_option('facebook_url'); ?>">
                    </td>
                </tr>
                <tr>
                    <th><label for="fourth_field_id">Enter Vos Twitter Url:</label></th>
                    <td>
                        <input type='text' class="regular-text" id="fourth_field_id" name="twitter_url" value="<?php echo get_option('twitter_url'); ?>">
                    </td>
                </tr>
                <tr>
                    <th><label for="fifth_field_id">Enter Your Linkedin Url:</label></th>
                    <td>
                        <input type='text' class="regular-text" id="fifth_field_id" name="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>">
                    </td>
                </tr>
            </table>

            <?php submit_button(); ?>

    </div>
<?php } ?>

<?php
function footer_plugin_css()
{
?>
    <style>

        .footer-distributed {
        background-color: #292c2f;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: normal 16px sans-serif;
        padding: 45px 50px;
        }

        .footer-distributed .footer-left p {
        color: #8f9296;
        font-size: 14px;
        margin: 0;
        }
        /* Footer links */

        .footer-distributed p.footer-links {
        font-size: 18px;
        font-weight: bold;
        color: #ffffff;
        margin: 0 0 10px;
        padding: 0;
        transition: ease .25s;
        }

        .footer-distributed p.footer-links a {
        display: inline-block;
        line-height: 1.8;
        text-decoration: none;
        color: inherit;
        transition: ease .25s;
        }

        .footer-distributed .footer-links a:before {
        content: "·";
        font-size: 20px;
        left: 0;
        color: #fff;
        display: inline-block;
        padding-right: 5px;
        }

        .footer-distributed .footer-links .link-1:before {
        content: none;
        }

        .footer-distributed .footer-right {
        float: right;
        margin-top: 6px;
        max-width: 180px;
        }

        .footer-distributed .footer-right a {
        display: inline-block;
        width: 35px;
        height: 35px;
        /* background-color: #33383b; */
        border-radius: 2px;
        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;
        margin-left: 3px;
        transition:all .25s;
        }

        .footer-distributed .footer-right a:hover{transform:scale(1.1); -webkit-transform:scale(1.1);}

        .footer-distributed p.footer-links a:hover{text-decoration:underline;}

        .footer-center{
        color: #fff;
        top: -10%;
        }
        .footer-container{
        display: flex;
        flex-direction: row;
        justify-content: space-between;

        }
        .footer-center .email {
        text-align: center;
        font-weight: bold;
        }

        /* Media Queries */

        @media (max-width: 600px) {
        .footer-container{
        flex-direction: column;
        }
        .footer-distributed .footer-left, .footer-distributed .footer-right, .footer-distributed .footer-center {
        text-align: center;
        }
        .footer-distributed .footer-right {
        float: none;
        margin: 0 auto 20px;
        }
        .footer-distributed .footer-left p.footer-links {
        line-height: 1.8;
        }
        }
    </style>
<?php
}

add_action('wp_head', 'footer_plugin_css', 100);



add_action('wp_footer', 'footer_plugin_html');


function footer_plugin_html()
{

    echo ('<footer class="footer-distributed">
            <div class="footer-container">  
                <div class="footer-left">
                    <p class="footer-links">
                        <a class="link-1" href=');

    echo get_option("home_url");

    echo ('>Home</a>
            <a href=');

    echo get_option("blog_url");

    echo ('>Blog</a>
            <a href=');

    echo get_option("about_url");

    echo ('>About</a>
            <a href=');

    echo get_option("contact_url");
    
    echo ('>Contact</a>
            </p>
            <p>');
    
    echo get_option("copyright");

    echo ('</p>
        </div>
        <div class="footer-center">
        <p class="email">Email</p>
        <p>');

    echo get_option("email");

    echo ('</p>
            </div>
            <div class="footer-right">
                <a href=');
    
    echo get_option("facebook_url");

    echo('><img src="https://img.icons8.com/ios-filled/344/ffffff/facebook-new.png" alt="facebook" width="30px"></a>
    <a href=');

    echo get_option("twitter_url");

    echo ('><img src="https://img.icons8.com/ios-filled/344/ffffff/twitter-circled.png" alt="twitter" width="30px"></a>
    <a href=');

    echo get_option("linkedin_url");

    echo ('><img src="https://img.icons8.com/ios-filled/344/ffffff/linkedin-circled.png" alt="linkedin" width="30px"></a></div>
    </div>
    </footer>');


}
