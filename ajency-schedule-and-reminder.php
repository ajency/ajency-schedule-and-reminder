<?php
/**
 * Ajency Schedule and Reminder
 *
 * Wordpress plugin for scheduling and reminding anything
 *
 * @package   ajency-schedule-and-reminder
 * @author    Team Ajency <team@ajency.in>
 * @license   GPL-2.0+
 * @link      http://ajency.in
 * @copyright 11-6-2014 Ajency.in
 *
 * @wp-plugin
 * Plugin Name: Ajency Schedule and Reminder
 * Plugin URI:  http://ajency.in
 * Description: Wordpress plugin for scheduling and reminding certain events
 * Author:      Team Ajency
 * Author URI:  http://ajency.in
 * Text Domain: ajency-schedule-and-reminder-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if (!defined("WPINC")) {
	die;
}

// include composer packages
require_once(plugin_dir_path(__FILE__) . "composer_packages/When/Valid.php");
require_once(plugin_dir_path(__FILE__) . "composer_packages/When/When.php");

require_once(plugin_dir_path(__FILE__) . "AjencyScheduleAndReminder.php");

// Register hooks that are fired when the plugin is activated, deactivated,
// and uninstalled, respectively.
register_activation_hook(__FILE__, array("AjencyScheduleAndReminder", "activate"));
register_deactivation_hook(__FILE__, array("AjencyScheduleAndReminder", "deactivate"));

AjencyScheduleAndReminder::get_instance();
