<?php

/**
 * Plugin Name: Proformat Custom Elements
 * Plugin URI: https://breakdance.com/
 * Requires Plugins: advanced-custom-fields 
 * Description: ALPHA - NOT TO BE USED IN PRODUCTION
 * Author: Breakdance
 * Author URI: https://breakdance.com/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */


namespace BreakdanceCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

define('PROFORMAT_ELEMENTS_PLUGIN_DIR', plugin_dir_url(__FILE__));
define('PROFORMAT_ELEMENTS_DIR', __DIR__);
require PROFORMAT_ELEMENTS_DIR . '/src/bd_conditions.php';
require PROFORMAT_ELEMENTS_DIR . '/includes/custom_posty_types.php';
require PROFORMAT_ELEMENTS_DIR . '/includes/datatables.php';

defined( 'ABSPATH' ) or die( 'you do not have access to this page!' );
define( 'ELEMENTS_HIVE_DIR', plugin_dir_url( __FILE__ ) );

function register_plugin_categories() {

	\Breakdance\Elements\ElementCategoriesController::getInstance()->registerCategory( 'proformat_elements', 'Proformat' );

}


function register_save_locations() {

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'ProformatCustomElements',
        'element',
        'Proformat Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'ProformatCustomElements',
        'macro',
        'Proformat Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'ProformatCustomElements',
        'preset',
        'Proformat Presets',
        false,
    );
}

add_action('breakdance_loaded',
	function () {

		register_save_locations();

		register_plugin_categories();

		require_once __DIR__ . '/extensions/base.php';

		require_once __DIR__ . '/includes/twig_functions.php';

	},
	9
);