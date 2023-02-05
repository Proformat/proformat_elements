<?php

/**
 * Plugin Name: Proformat Custom Elements
 * Plugin URI: https://breakdance.com/
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

require 'src/bd_conditions.php';

add_action('breakdance_loaded', function () {
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
},
    // register elements before loading them
    9
);
