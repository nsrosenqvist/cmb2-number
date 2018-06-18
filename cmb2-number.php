<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
Plugin Name: CMB2 Number
Description: A number input field for CMB2
Version: 1.0.0
Author: Niklas Rosenqvist
Author URI: https://www.nsrosenqvist.com/
*/

if (! class_exists('CMB2_Number')) {
    class CMB2_Number
    {
        static function init()
        {
            if (! class_exists('CMB2')) {
                return;
            }

            // Include files
            require_once __DIR__ .'/src/Integration.php';

            // Initalize plugin
            \NSRosenqvist\CMB2\NumberField\Integration::init();
        }
    }
}
add_action('init', [CMB2_Number::class, 'init']);
