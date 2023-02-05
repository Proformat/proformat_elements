<?php

namespace BreakdanceCustomElements\TwigFunctions;

use Breakdance\PluginsAPI;

/**
 * @return string
 */
function getElementsHivePluginUrl() {
	/**
	  * @var string $ELEMENTS_HIVE_DIR
	  */
	$ELEMENTS_HIVE_DIR = ELEMENTS_HIVE_DIR;

	return defined( 'ELEMENTS_HIVE_DIR' ) ? $ELEMENTS_HIVE_DIR : '';
}

\Breakdance\PluginsAPI\PluginsController::getInstance()->registerTwigFunction(
	'getElementsHivePluginUrl',
	'BreakdanceCustomElements\TwigFunctions\getElementsHivePluginUrl',
	'() => { return "' . getElementsHivePluginUrl() . '"; }',
	true
);
