<?php

namespace BreakdanceCustomElements;

class GlueMenuButton extends \BreakdanceCustomElements\GlueButton {

	public static function name() {
		return 'Glue Menu Button';
	}

	public static function slug() {
		return get_class();
	}

	public static function nestingRule() {
		return ['type' => 'final', 'restrictedToBeADirectChildOf' => [ 'EssentialElements\MenuBuilder' ] ];
	}

}
