<?php

namespace BreakdanceCustomElements;

class LinkMediaRevealMenu extends \BreakdanceCustomElements\LinkMediaReveal {

	public static function name() {
		return 'Link Media Reveal Menu';
	}

	public static function slug() {
		return get_class();
	}

	public static function nestingRule() {
		return ['type' => 'final', 'restrictedToBeADirectChildOf' => [ 'EssentialElements\MenuBuilder' ] ];
	}

}
