<?php

namespace BreakdanceCustomElements\Extensions\MouseCursors\InkMouseCursor;

add_filter( 'breakdance_element_dependencies', 'BreakdanceCustomElements\Extensions\MouseCursors\InkMouseCursor\addDependencies', 100, 1 );

/**
 * @param ElementDependenciesAndConditions[] $deps
 * @return ElementDependenciesAndConditions[]
 */
function addDependencies( $deps ) {
	$condition = "
		{% set cursorType = design.elements_hive.mouse_cursors.cursor_type %}
		return {{ cursorType == 'ink_cursor' ? true : false }};
	";
	$deps[] = [
		'frontendCondition' => $condition,
		'builderCondition' => $condition,
		'scripts' => [
			ELEMENTS_HIVE_DIR . 'extensions/mouse_cursors/ink_mouse_cursor/assets/js/eh_ink_mouse_cursor.min.js',
		],
	];

	$deps[] = [
		'frontendCondition' => $condition,
		'builderCondition' => $condition,
		'inlineStyles' => [
			'
			  .eh-ink-mouse-cursor {
			   position: fixed;
			   display: block;
			   border-radius: 0;
			   transform-origin: center center;
			   top: 0;
			   left: 0;
			   mix-blend-mode: difference;
			   pointer-events: none;
			}

			.eh-ink-mouse-cursor span {
				background-color: #ffffff;
				position: absolute;
			   display: block;
			   width: 26px;
			   height: 26px;
			   border-radius: 20px;
			   transform-origin: center center;
			   transform: translate(-50%, -50%);
			}
			.eh-ink-mouse-cursor__svg {
				display: none;
			 }

			 {% if design.elements_hive.mouse_cursors.ink_cursor.apply_to_page != "" %}
				{% if design.elements_hive.mouse_cursors.ink_cursor.apply_to_page  == false %}
					%%SELECTOR%% {
						cursor: none;
					}
				{% else %}
					body {
						cursor: none;
					}
				{% endif %}
			{% else %}
				%%SELECTOR%% {
					cursor: none;
				}
			{% endif %}
			',
		],
	];

	$deps[] = [
		'frontendCondition' => $condition,
		'builderCondition' => $condition,
		'inlineScripts' => [
			'
			 ( function() {

				const containerElement = document.querySelector("%%SELECTOR%%")
				document.querySelector(".eh-ink-mouse-cursor.eh-for--%%ID%%")?.remove()
				document.querySelector(".eh-ink-mouse-cursor__svg.eh-for--%%ID%%")?.remove()

				let parent = containerElement
				let isRelativeToPage = false

				function addMarkup() {

					const svgFilter = `
							<defs>
								<filter id="eh-ink-mouse-cursor__goo--%%ID%%">
									<feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
									<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 35 -15" result="goo" />
									<feComposite in="SourceGraphic" in2="goo" operator="atop"/>
								</filter>
							</defs>
					`
					const svgTag = document.createElement("svg")
					svgTag.classList.add("eh-ink-mouse-cursor__svg", "eh-for--%%ID%%")
					svgTag.innerHTML = svgFilter
					containerElement.append(svgTag)

					const containerTag = document.createElement("div")
					containerTag.classList.add("eh-ink-mouse-cursor", "eh-for--%%ID%%")
					containerElement.append(containerTag)

					{% if design.elements_hive.mouse_cursors.ink_cursor.apply_to_page != "" %}
						!{{ design.elements_hive.mouse_cursors.ink_cursor.apply_to_page|default(false) }} ? containerTag.style.visibility = "hidden" : null
					{% endif %}
				}

				function init() {

					{% if design.elements_hive.mouse_cursors.ink_cursor.apply_to_page != "" %}
						parent = {{ design.elements_hive.mouse_cursors.ink_cursor.apply_to_page|default(false) }} ? window : containerElement
						isRelativeToPage = {{ design.elements_hive.mouse_cursors.ink_cursor.apply_to_page|default(false) }}
					{% endif %}

					const options = {
						parent,
						container: containerElement.querySelector(".eh-ink-mouse-cursor"),
						isRelativeToPage,
						sizeFactor: {{ design.elements_hive.mouse_cursors.ink_cursor.size|default(1) }}
					}

					{% if design.elements_hive.mouse_cursors.ink_cursor.cursor_style|default("drop") == "drop" %}
						options.amount = 20
						options.sine = {% if design.elements_hive.mouse_cursors.ink_cursor.oscillate_on_idle %} 4 / options.sizeFactor; {% else %} 20; {% endif %}
						options.idleTimeout = 150
					{% elseif design.elements_hive.mouse_cursors.ink_cursor.cursor_style == "track" %}
						options.amount = 40
						options.sine = {% if design.elements_hive.mouse_cursors.ink_cursor.oscillate_on_idle %} 8 / options.sizeFactor; {% else %} 40; {% endif %}
						options.idleTimeout = 500
					{% elseif design.elements_hive.mouse_cursors.ink_cursor.cursor_style == "droplet" %}
						options.amount = 30
						options.sine = {% if design.elements_hive.mouse_cursors.ink_cursor.oscillate_on_idle %} 5 / options.sizeFactor; {% else %} 30; {% endif %}
						options.idleTimeout = 500
					{% endif %}

					new EhInkCursor(options)
				}

				addMarkup()
				init()
			}());
			',
		],
	];

	return $deps;
}
