<?php

namespace BreakdanceCustomElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\ElementStudio\registerElementForEditing(
	'BreakdanceCustomElements\\WebglMediaHoverDistortion',
	\Breakdance\Util\getdirectoryPathRelativeToPluginFolder( __DIR__ )
);

class WebglMediaHoverDistortion extends \Breakdance\Elements\Element {

	static function uiIcon() {
		return 'ImageIcon';
	}

	static function tag() {
		 return 'div';
	}

	static function tagOptions() {
		return [];
	}

	static function tagControlPath() {
		return false;
	}

	static function name() {
		return 'WebGL Media Hover Distortion';
	}

	static function className() {
		return 'eh-webgl-media-hover-distortion';
	}

	static function category() {
		return 'proformat_elements';
	}

	static function badge() {
		return false;
	}

	static function slug() {
		return get_class();
	}

	static function template() {
		return file_get_contents( __DIR__ . '/html.twig' );
	}

	static function defaultCss() {
		return file_get_contents( __DIR__ . '/default.css' );
	}

	static function defaultProperties() {
		return ['content' => ['media' => ['default_media' => ['id' => 2615, 'filename' => 'ribbons-orange.webp', 'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-orange.webp', 'alt' => '', 'caption' => '', 'mime' => 'image/webp', 'type' => 'image', 'sizes' => ['thumbnail' => ['height' => 150, 'width' => 150, 'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-orange.webp', 'orientation' => 'landscape'], 'medium' => ['height' => 169, 'width' => 300, 'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-orange.webp', 'orientation' => 'landscape'], 'large' => ['height' => 576, 'width' => 1024, 'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-orange.webp', 'orientation' => 'landscape'], 'medium_large' => ['height' => 432, 'width' => 768, 'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-orange.webp', 'orientation' => 'landscape'], '1536x1536' => ['height' => 864, 'width' => 1536, 'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-orange.webp', 'orientation' => 'landscape'], 'full' => ['url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-orange.webp', 'height' => 1080, 'width' => 1920, 'orientation' => 'landscape']], 'attributes' => ['srcset' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-orange.webp 1920w,' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-orange.webp 300w,' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-orange.webp 1024w,' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-orange.webp 768w,' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-orange.webp 1536w', 'sizes' => '(max-width: 1920px) 100vw, 1920px']], 'hover_media' => ['id' => 2627, 'filename' => 'preview-image-ribbons-blue.webp', 'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-blue.webp', 'alt' => '', 'caption' => '', 'mime' => 'image/webp', 'type' => 'image', 'sizes' => ['thumbnail' => ['height' => 150, 'width' => 150, 'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-blue.webp', 'orientation' => 'landscape'], 'medium' => ['height' => 169, 'width' => 300, 'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-blue.webp', 'orientation' => 'landscape'], 'large' => ['height' => 576, 'width' => 1024, 'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-blue.webp', 'orientation' => 'landscape'], 'medium_large' => ['height' => 432, 'width' => 768, 'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-blue.webp', 'orientation' => 'landscape'], '1536x1536' => ['height' => 864, 'width' => 1536, 'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-blue.webp', 'orientation' => 'landscape'], 'full' => ['url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-blue.webp', 'height' => 1080, 'width' => 1920, 'orientation' => 'landscape']], 'attributes' => ['srcset' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-blue.webp 1920w,' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-blue.webp 300w,' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-blue.webp 1024w,' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-blue.webp 768w,' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/ribbons-blue.webp 1536w', 'sizes' => '(max-width: 1920px) 100vw, 1920px']], 'size' => 'full', 'default_media_dynamic_meta' => null, 'hover_media_dynamic_meta' => null], 'distortion_map' => ['use_custom_distortion_image' => false, 'custom_distortion_image' => null, 'default_distortions' => '4.jpg', 'custom_distortion_image_dynamic_meta' => null], 'distortion_effect' => ['distortion_intensity' => 1, 'distortion_angle' => '45', 'effect_duration_in' => ['number' => 1, 'unit' => 's', 'style' => '1s'], 'effect_duration_out' => ['number' => 1, 'unit' => 's', 'style' => '1s'], 'easing' => 'expo.inOut', 'angle' => '180']], 'design' => ['media' => ['width' => null, 'height' => [ 'breakpoint_base' => null ], 'border_radius' => null], 'spacing' => null]];
	}

	static function defaultChildren() {
		 return false;
	}

	static function cssTemplate() {
		 $template = file_get_contents( __DIR__ . '/css.twig' );
		return $template;
	}

	static function designControls() {
		return [
		c(
			'media',
			'Media',
			[
			c(
				'width',
				'Width',
				[],
				['type' => 'unit', 'layout' => 'inline'],
				true,
				false,
				[],
			),
			c(
				'height',
				'Height',
				[],
				['type' => 'unit', 'layout' => 'inline'],
				true,
				false,
				[],
			),
			c(
				'border_radius',
				'Border Radius',
				[],
				['type' => 'border_radius', 'layout' => 'vertical'],
				true,
				false,
				[],
			),
			],
			[ 'type' => 'section' ],
			false,
			false,
			[],
		),
		getPresetSection(
			'EssentialElements\\spacing_margin_y',
			'Spacing',
			'spacing',
			[ 'type' => 'popout' ]
		),
		];
	}

	static function contentControls() {
		 return [
		c(
			'media',
			'Media',
			[
			c(
				'default_media',
				'Default Media',
				[],
				['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['0' => 'image', '1' => 'video'], 'multiple' => false]],
				false,
				false,
				[],
			),
			c(
				'hover_media',
				'Hover Media',
				[],
				['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['0' => 'image', '1' => 'video'], 'multiple' => false]],
				false,
				false,
				[],
			),
			c(
				'size',
				'Size',
				[],
				['type' => 'media_size_dropdown', 'layout' => 'vertical'],
				false,
				false,
				[],
			),
			],
			['type' => 'section', 'layout' => 'vertical'],
			false,
			false,
			[],
		),
		c(
			'distortion_map',
			'Distortion Map',
			[
			c(
				'default_distortions',
				'Default Distortions',
				[],
				['type' => 'dropdown', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => [ '0' => 'image' ], 'multiple' => false], 'condition' => ['path' => 'content.distortion_map.use_custom_distortion_image', 'operand' => 'is not set', 'value' => 'false'], 'items' => ['0' => ['value' => '1.jpg', 'text' => 'Distortion 1'], '1' => ['value' => '2.jpg', 'text' => 'Distortion 2'], '2' => ['value' => '3.jpg', 'text' => 'Distortion 3'], '3' => ['value' => '4.jpg', 'text' => 'Distortion 4'], '4' => ['value' => '5.jpg', 'text' => 'Distortion 5'], '5' => ['value' => '6.jpg', 'text' => 'Distortion 6'], '6' => ['value' => '7.jpg', 'text' => 'Distortion 7'], '7' => ['value' => '8.jpg', 'text' => 'Distortion 8'], '8' => ['value' => '9.jpg', 'text' => 'Distortion 9'], '9' => ['value' => '10.jpg', 'text' => 'Distortion 10'], '10' => ['value' => '11.jpg', 'text' => 'Distortion 11'], '11' => ['value' => '12.jpg', 'text' => 'Distortion 12'], '12' => ['value' => '13.jpg', 'text' => 'Distortion 13'], '13' => ['value' => '14.jpg', 'text' => 'Distortion 14'], '14' => ['value' => '15.jpg', 'text' => 'Distortion 15'], '15' => ['value' => '16.jpg', 'text' => 'Distortion 16'], '16' => ['value' => '17.jpg', 'text' => 'Distortion 17'], '17' => ['value' => '18.jpg', 'text' => 'Distortion 18'], '18' => ['value' => '19.jpg', 'text' => 'Distortion 19'], '19' => ['value' => '20.jpg', 'text' => 'Distortion 20']]],
				false,
				false,
				[],
			),
			c(
				'use_custom_distortion_image',
				'Use Custom Distortion Image',
				[],
				['type' => 'toggle', 'layout' => 'vertical'],
				false,
				false,
				[],
			),
			c(
				'custom_distortion_image',
				'Custom Distortion Image',
				[],
				['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => [ '0' => 'image' ], 'multiple' => false], 'condition' => ['path' => 'content.distortion_map.use_custom_distortion_image', 'operand' => 'is set', 'value' => 'true']],
				false,
				false,
				[],
			),
			],
			['type' => 'section', 'layout' => 'vertical'],
			false,
			false,
			[],
		),
		c(
			'distortion_effect',
			'Distortion Effect',
			[
			c(
				'distortion_angle',
				'Distortion Angle',
				[],
				['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => '45', 'text' => 'Left'], '1' => ['text' => 'Right', 'value' => '225'], '2' => ['text' => 'Top', 'value' => '135'], '3' => ['text' => 'Bottom', 'value' => '315'], '4' => ['text' => 'Bottom Left', 'value' => '0'], '5' => ['text' => 'Bottom Right', 'value' => '270'], '6' => ['text' => 'Top Left', 'value' => '90'], '7' => ['text' => 'Top Right', 'value' => '180']]],
				false,
				false,
				[],
			),
			c(
				'distortion_intensity',
				'Distortion Intensity',
				[],
				['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.1]],
				false,
				false,
				[],
			),
			c(
				'hover_in_duration',
				'Hover In Duration',
				[],
				['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 2, 'step' => 0.1], 'unitOptions' => ['types' => [ '0' => 's' ], 'defaultType' => 's']],
				false,
				false,
				[],
			),
			c(
				'hover_out_duration',
				'Hover Out Duration',
				[],
				['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => [ '0' => 's' ], 'defaultType' => 's'], 'rangeOptions' => ['min' => 0, 'max' => 2, 'step' => 0.1]],
				false,
				false,
				[],
			),
			c(
				'easing',
				'Easing',
				[],
				['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'none', 'text' => 'Linear'], '1' => ['text' => 'Power 1 In', 'value' => 'power1.in'], '2' => ['text' => 'Power 1 Out', 'value' => 'power1.out'], '3' => ['text' => 'Power 1 In Out', 'value' => 'power1.inOut'], '4' => ['text' => 'Power 2 In', 'value' => 'power2.in'], '5' => ['text' => 'Power 2 Out', 'value' => 'power2.out'], '6' => ['text' => 'Power 2 In Out', 'value' => 'power2.inOut'], '7' => ['text' => 'Power 3 In', 'value' => 'power3.in'], '8' => ['text' => 'Power 3 Out', 'value' => 'power3.out'], '9' => ['text' => 'Power 3 In Out', 'value' => 'power3.inOut'], '10' => ['text' => 'Power 4 In', 'value' => 'power4.in'], '11' => ['text' => 'Power 4 Out', 'value' => 'power4.out'], '12' => ['text' => 'Power 4 In Out', 'value' => 'power4.inOut'], '13' => ['text' => 'Expo In', 'value' => 'expo.in'], '14' => ['text' => 'Expo Out', 'value' => 'expo.out'], '15' => ['text' => 'Expo In Out', 'value' => 'expo.inOut'], '16' => ['text' => 'Slow', 'value' => 'slow (0.7, 0.7, false)'], '17' => ['text' => 'Circ In', 'value' => 'circ.in'], '18' => ['text' => 'Circ Out', 'value' => 'circ.out'], '19' => ['text' => 'Circ In Out', 'value' => 'circ.inOut'], '20' => ['text' => 'Sine In', 'value' => 'sine.in'], '21' => ['text' => 'Sine Out', 'value' => 'sine.out'], '22' => ['text' => 'Sine In Out', 'value' => 'sine.inOut']]],
				false,
				false,
				[],
			),
			],
			['type' => 'section', 'layout' => 'vertical'],
			false,
			false,
			[],
		),
		 ];
	}

	static function settingsControls() {
		return [];
	}

	static function dependencies() {
		return [
		'0' => [
		'title' => 'Init Builder',
		'inlineScripts' => [
		'( function() {

  const containerEl = document.querySelector(\'%%SELECTOR%%\')

  if (!containerEl ) return

  if ( window.EhInstancesManager.instanceExists(\'EhWebglMediaHoverEffect\', \'%%ID%%\') ) return

    const media1 = {
      type: \'{{content.media.default_media.type}}\',
      url: \'{{content.media.default_media.url}}\',
      texture: null
    }
    const media2 = {
      type: \'{{content.media.hover_media.type}}\',
      url: \'{{content.media.hover_media.url}}\',
      texture: null
    }

    let displacementImage = null
    const hasVideo = ( media1.type == \'video\' || media2.type == \'video\' ) ? true : false

    {% if content.distortion_map.use_custom_distortion_image != true %}
    displacementImage = \'{{getElementsHivePluginUrl()}}/assets/images/displacement-maps/{{content.distortion_map.default_distortions}}\'
    {% else %}
     	displacementImage = \'{{content.distortion_map.custom_distortion_image.url}}\'
    {% endif %}

    const options = {
      parent: containerEl,
      canvas: containerEl.querySelector(\'.eh-webgl-media-hover-distortion__canvas\'),
      mediaEl: containerEl.querySelector(\'img, video\'),
      intensity: {{content.distortion_effect.distortion_intensity|default(\'1\')}},
      angle: {{content.distortion_effect.distortion_angle|default(45)}} * (Math.PI / 180),
      speedIn: {{content.distortion_effect.hover_in_duration.number|default(1)}},
      speedOut: {{content.distortion_effect.hover_out_duration.number|default(1)}},
      easing: \'{{content.distortion_effect.easing|default("ease.inOut")}}\',
      media1,
      media2,
      hasVideo,
      displacementImage
    }

    try {
      const instance = new EhWebglMediaHoverEffect(options)
      window.EhInstancesManager.registerInstance(\'EhWebglMediaHoverEffect\', \'%%ID%%\', instance)

      const resizeObserver = new ResizeObserver( (entries) => {
        setTimeout( () => {
          instance.onResize()
          instance.render()
        }, 500 )
      })

      resizeObserver.observe(containerEl.parentElement);

    } catch (error) {
      console.log(\'Webgl Media Distort: Instance %%ID%% not created\', error)
    }


  }());',
		],
		'builderCondition' => 'return true;',
		'frontendCondition' => 'return false;',
		'scripts' => [ '%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/gsap@3.8.0/gsap.min.js', ELEMENTS_HIVE_DIR . 'assets/js/vendors/threejs/three.min.js', ELEMENTS_HIVE_DIR . 'assets/js/utils/eh_instances_manager.js', ELEMENTS_HIVE_DIR . 'elements/WebGL_Media_Hover_Distortion/assets/js/eh_webgl_media_hover_effect.min.js' ],
		],
		'1' => [
		'title' => 'Init Frontend',
		'inlineScripts' => [
		'( function() {

	const containerEl = document.querySelector(\'%%SELECTOR%%\')

    if (!containerEl ) return

    if ( "{{content.media.default_media.url}}" == "" || "{{content.media.hover_media.url}}" == "" ) return

  	const media1 = {
      type: \'{{content.media.default_media.type}}\',
      url: \'{{content.media.default_media.url}}\',
      texture: null
    }
    const media2 = {
      type: \'{{content.media.hover_media.type}}\',
      url: \'{{content.media.hover_media.url}}\',
      texture: null
    }

    let displacementImage = null
    const hasVideo = ( media1.type == \'video\' || media2.type == \'video\' ) ? true : false

    {% if content.distortion_map.use_custom_distortion_image != true %}

    displacementImage = \'{{getElementsHivePluginUrl()}}/assets/images/displacement-maps/{{content.distortion_map.default_distortions}}\'
    {% else %}
     	displacementImage = \'{{content.distortion_map.custom_distortion_image.url}}\'
    {% endif %}

    const options = {
      parent: containerEl,
      canvas: containerEl.querySelector(\'.eh-webgl-media-hover-distortion__canvas\'),
      mediaEl: containerEl.querySelector(\'img, video\'),
      intensity: {{content.distortion_effect.distortion_intensity|default(\'1\')}},
      angle: {{content.distortion_effect.distortion_angle|default(45)}} * (Math.PI / 180),
      speedIn: {{content.distortion_effect.hover_in_duration.number|default(1)}},
      speedOut: {{content.distortion_effect.hover_out_duration.number|default(1)}},
      easing: \'{{content.distortion_effect.easing|default("ease.inOut")}}\',
      media1,
      media2,
      hasVideo,
      displacementImage
    }

    const instance = new EhWebglMediaHoverEffect(options)


  }());',
		],
		'frontendCondition' => 'return true;',
		'builderCondition' => 'return false;',
		'scripts' => [ '%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/gsap@3.8.0/gsap.min.js', ELEMENTS_HIVE_DIR . 'assets/js/vendors/threejs/three.min.js', ELEMENTS_HIVE_DIR . 'elements/WebGL_Media_Hover_Distortion/assets/js/eh_webgl_media_hover_effect.min.js' ],
		],
		];
	}

	static function settings() {
		return [ 'dependsOnGlobalScripts' => true ];
	}

	static function addPanelRules() {
		return false;
	}

	public static function actions() {
		return [

		'onPropertyChange' => [
		[
		'script' => '( function() {

  const containerEl = document.querySelector(\'%%SELECTOR%%\')

  if (!containerEl ) return

  let instance = null
  if ( window.EhInstancesManager.instanceExists(\'EhWebglMediaHoverEffect\', \'%%ID%%\') ) {
    instance = window.EhInstancesManager.getInstance(\'EhWebglMediaHoverEffect\', \'%%ID%%\')
	update()
  }

  function update() {
    instance.intensity1 = instance.intensity2 = {{content.distortion_effect.distortion_intensity|default(\'1\')}}
    instance.commonAngle = instance.angle1 = {{content.distortion_effect.distortion_angle|default(45)}} * (Math.PI / 180)
	instance.angle2 = -instance.commonAngle * 3
    instance.speedIn = {{content.distortion_effect.hover_in_duration.number|default(1)}}
    instance.speedOut = {{content.distortion_effect.hover_out_duration.number|default(1)}}
    instance.easing = \'{{content.distortion_effect.easing|default("ease.inOut")}}\'
	{% if content.distortion_map.use_custom_distortion_image != true %}
    displacementImage = \'{{getElementsHivePluginUrl()}}/assets/images/displacement-maps/{{content.distortion_map.default_distortions}}\'
    {% else %}
     	displacementImage = \'{{content.distortion_map.custom_distortion_image.url}}\'
    {% endif %}
    if ( instance.displacementImage != displacementImage ) {
      instance.displacementImage = displacementImage
      instance.loadDisplacementTexture(true)
    }
    if ( instance.media1.url != \'{{content.media.default_media.url}}\' ) {
      instance.media1.url = \'{{content.media.default_media.url}}\'
      instance.media1.type = \'{{content.media.default_media.type}}\'
      instance.createTexture(instance.media1, "texture1", false, true)
    }
    if ( instance.media2.url != \'{{content.media.hover_media.url}}\' ) {
      instance.media2.url = \'{{content.media.hover_media.url}}\'
      instance.media2.type = \'{{content.media.hover_media.type}}\'
      instance.createTexture(instance.media2, "texture2", false)
    }
    setTimeout( () => {
      instance.mediaEl = containerEl.querySelector(\'img, video\')
      instance.onResize()
      instance.updateMaterial()
      instance.render()
    }, 500 )
  }


}());',
		],
		],

		'onBeforeDeletingElement' => [
		[
		'script' => '( function() {
  let instance = null
  if ( window.EhInstancesManager.instanceExists(\'EhWebglMediaHoverEffect\', \'%%ID%%\') ) {
    instance = window.EhInstancesManager.getInstance(\'EhWebglMediaHoverEffect\', \'%%ID%%\')
    instance.destroy()
    window.EhInstancesManager.deleteInstance(\'EhWebglMediaHoverEffect\', \'%%ID%%\')
  }

}());',
		],
		],

		'onMovedElement' => [
		[
		'script' => '( function() {

  const containerEl = document.querySelector(\'%%SELECTOR%%\')

  if (!containerEl || containerEl.classList.contains(\'breakdance--currently-dragging\')) return

  if ( "{{content.media.default_media.url}}" == "" || "{{content.media.hover_media.url}}" == "" ) return

  const mediaEl = containerEl.querySelector(\'img, video\')

  let instance = null
  if ( window.EhInstancesManager.instanceExists(\'EhWebglMediaHoverEffect\', \'%%ID%%\') ) {
    instance = window.EhInstancesManager.getInstance(\'EhWebglMediaHoverEffect\', \'%%ID%%\')
    instance.destroy()
    window.EhInstancesManager.deleteInstance(\'EhWebglMediaHoverEffect\', \'%%ID%%\')
    init()
  }

  function init() {
    const media1 = {
      type: \'{{content.media.default_media.type}}\',
      url: \'{{content.media.default_media.url}}\',
      texture: null
    }
    const media2 = {
      type: \'{{content.media.hover_media.type}}\',
      url: \'{{content.media.hover_media.url}}\',
      texture: null
    }

    let displacementImage = null
    const hasVideo = ( media1.type == \'video\' || media2.type == \'video\' ) ? true : false

    {% if content.distortion_map.use_custom_distortion_image != true %}
    displacementImage = \'{{getElementsHivePluginUrl()}}/assets/images/displacement-maps/{{content.distortion_map.default_distortions}}\'
    {% else %}
         displacementImage = \'{{content.distortion_map.custom_distortion_image.url}}\'
    {% endif %}

    const options = {
      parent: containerEl,
      canvas: containerEl.querySelector(\'.eh-webgl-media-hover-distortion__canvas\'),
      mediaEl: containerEl.querySelector(\'img, video\'),
      intensity: {{content.distortion_effect.distortion_intensity|default(\'1\')}},
      angle: {{content.distortion_effect.distortion_angle|default(45)}} * (Math.PI / 180),
      speedIn: {{content.distortion_effect.hover_in_duration.number|default(1)}},
      speedOut: {{content.distortion_effect.hover_out_duration.number|default(1)}},
      easing: \'{{content.distortion_effect.easing|default("ease.inOut")}}\',
      media1,
      media2,
      hasVideo,
      displacementImage
    }

    try {
      instance = new EhWebglMediaHoverEffect(options)
      window.EhInstancesManager.registerInstance(\'EhWebglMediaHoverEffect\', \'%%ID%%\', instance)

      const resizeObserver = new ResizeObserver( (entries) => {
        setTimeout( () => {
          instance.onResize()
          instance.render()
        }, 500 )
      })

      resizeObserver.observe(containerEl.parentElement);
    } catch (error) {
      console.log(\'Webgl Media Distort: Instance %%ID%% not created\', error)
    }

  }

}());',
		],
		],

		'onMountedElement' => [
		[
		'script' => '( function() {
  if( window.EhInstancesManager.instanceExists(\'EhWebglMediaHoverEffect\', \'%%ID%%\') ) {
    setTimeout( () => {
      window.EhInstancesManager.getInstance(\'EhWebglMediaHoverEffect\', \'%%ID%%\').onResize()
    }, 300)
  }
}())',
		],
		],
		];
	}

	static function nestingRule() {
		 return [ 'type' => 'final' ];
	}

	static function spacingBars() {
		 return ['0' => ['cssProperty' => 'margin-top', 'location' => 'outside-top', 'affectedPropertyPath' => 'design.spacing.margin_top.%%BREAKPOINT%%'], '1' => ['cssProperty' => 'margin-bottom', 'location' => 'outside-bottom', 'affectedPropertyPath' => 'design.spacing.margin_bottom.%%BREAKPOINT%%']];
	}

	static function attributes() {
		return false;
	}

	static function experimental() {
		return false;
	}

	static function order() {
		return 0;
	}

	static function dynamicPropertyPaths() {
		return ['0' => ['accepts' => 'image_url', 'path' => 'content.media.default_media'], '1' => ['accepts' => 'image_url', 'path' => 'content.media.hover_media'], '2' => ['accepts' => 'image_url', 'path' => 'content.distortion_map.custom_distortion_image']];
	}

	static function additionalClasses() {
		return false;
	}

	static function projectManagement() {
		return false;
	}

	static function propertyPathsToWhitelistInFlatProps() {
		 return [ 'design.media.width', 'design.media.height', 'content.media.image_scale' ];
	}

	static function propertyPathsToSsrElementWhenValueChanges() {
		return false;
	}
}
