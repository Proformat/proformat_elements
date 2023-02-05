<?php

namespace BreakdanceCustomElements\Extensions\Backgrounds;

use function Breakdance\Elements\control;
use function Breakdance\Elements\controlSection;

/**
 * @return Control
 */
function controls() {
	/** @var Control */
	return controlSection(
		'backgrounds',
		'Backgrounds',
		[
			control(
				'background_type',
				'Background Type',
				[
					'type' => 'dropdown',
					'layout' => 'inline',
					'items' => [
						'0' => ['text' => 'WebGL Fluid', 'value' => 'webgl_fluid'],
						'1' => ['text' => 'WebGL Slideshow', 'value' => 'webgl_slideshow'],
					],
				],
			),
			\BreakdanceCustomElements\Extensions\Backgrounds\WebglFluid\controls(),
			\BreakdanceCustomElements\Extensions\Backgrounds\WebglSlideshow\controls(),
		],
		[ 'isExternal' => true ],
		'popout'
	);
}

