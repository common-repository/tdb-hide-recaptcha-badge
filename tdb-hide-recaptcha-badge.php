<?php
/*
 * Plugin Name: TDB Hide Recaptcha Badge
 * Version: 1.0.3
 * Plugin URI: https://wordpress.org/plugins/tdb-hide-recaptcha-badge/
 * Description: Hide Google Recaptcha V3 Badge in Contact Form 7 and other forms
 * Author: TodoBravo
 * Author URI: https://www.todobravo.es/
 * License: GPL v3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: tdb-hide-recaptcha-badge
 * Domain Path: /languages/
 *
 * Copyright 2024  TodoBravo
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
        die;
}

if ( ! function_exists( 'tdb_hide_recaptcha_badgeenqueue_css' ) ) :
        function tdb_hide_recaptcha_badgeenqueue_css() {
        ?>
<style type="text/css">
        .grecaptcha-badge {opacity: 0 !important;}
</style>
        <?php
        }
endif;
add_action('wp_head', 'tdb_hide_recaptcha_badgeenqueue_css',2);

?>