<?php

namespace BreakdanceCustomElements\Extensions;

use function Breakdance\Elements\control;
use function Breakdance\Elements\controlSection;

add_filter( 'breakdance_element_controls', 'BreakdanceCustomElements\Extensions\addControls', 69, 2 );


/**
 * @param Control[] $controls
 * @param Element   $element
 * @return Control[]
 */
function addControls( $controls, $element ) {
	$slug = $element->slug();

	/**
	 * Sections Extensions
	 */
	if ( 'EssentialElements\\Section' === $slug ) {

		$controls['designSections'][] = controlSection(
			'elements_hive',
			'Proformat',
			[
				\BreakdanceCustomElements\Extensions\Backgrounds\controls(),
				\BreakdanceCustomElements\Extensions\MouseCursors\controls(),

			],
			[ 'isExternal' => true ]
		);
	}

	/** @var Control[] $controls */
	return $controls;
}


