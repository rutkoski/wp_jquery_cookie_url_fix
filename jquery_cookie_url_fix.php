<?php
/*
 * Plugin Name: Fix jQuery Cookie Url Bug
 * Plugin URI:
 * Description: On some servers, the file jquery.cookie.min.js triggers a Mod Security issue in the form of WEB_ATTACK/XSS and the server blocks the script, causing a 406 NOT ACCEPTABLE http status.
 * Version: 0.1
 * Author: Rodrigo Rutkoski Rodrigues <rutkoski@gmail.com>
 * Author URI: http://devcafe.com.br/
 * License: GPL
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

add_action( 'admin_enqueue_scripts', 'jquery_cookie_url_fix' );

function jquery_cookie_url_fix() {
    wp_deregister_script('jquery-cookie');
    wp_register_script( 'jquery-cookie', plugins_url('jquery_cookie.min.js', __FILE__));
}