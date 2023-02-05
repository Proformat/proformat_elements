<?php

namespace BreakdanceCustomElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakdanceCustomElements\\WebglSlideshow",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class WebglSlideshow extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'ImageIcon';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return [];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'WebGL Slideshow';
    }

    static function className()
    {
        return 'eh-webgl-slideshow';
    }

    static function category()
    {
        return 'proformat_elements';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return get_class();
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return [
            'content' => [
                'images' => [
                    'images' => [
                        '0' => [
                            'id' => 2714,
                            'filename' => 'render_1.webp',
                            'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_1.webp',
                            'alt' => '',
                            'caption' => '',
                            'mime' => 'image/webp',
                            'type' => 'image',
                            'sizes' => [
                                'thumbnail' => [
                                    'height' => 150,
                                    'width' => 150,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_1.webp', 'orientation' => 'landscape'
                                ],
                                'medium' => [
                                    'height' => 200,
                                    'width' => 300,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_1.webp',
                                    'orientation' => 'landscape'
                                ],
                                'large' => [
                                    'height' => 684,
                                    'width' => 1024,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_1-1024-576.webp',
                                    'orientation' => 'landscape'
                                ],
                                'medium_large' => [
                                    'height' => 513,
                                    'width' => 768,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_1.webp',
                                    'orientation' => 'landscape'
                                ],
                                '1536x1536' => [
                                    'height' => 1026,
                                    'width' => 1536,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_1.webp',
                                    'orientation' => 'landscape'
                                ],
                                'full' => [
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_1.webp',
                                    'height' => 1282,
                                    'width' => 1920,
                                    'orientation' => 'landscape'
                                ]
                            ],
                            'attributes' => [
                                'srcset' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_1.webp' . '1920w, ' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_1.webp' . '300w, ' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_1.webp' . '1024w, ' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_1.webp' . '768w, ' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_1.webp' . '1536w',
                                'sizes' => '(max-width: 1920px) 100vw, 1920px'
                            ]
                        ],
                        '1' => [
                            'id' => 2713,
                            'filename' => 'render_2.webp',
                            'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_2.webp',
                            'alt' => '',
                            'caption' => '',
                            'mime' => 'image/webp',
                            'type' => 'image',
                            'sizes' => [
                                'thumbnail' => [
                                    'height' => 150,
                                    'width' => 150,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_2.webp', 'orientation' => 'landscape'
                                ],
                                'medium' => [
                                    'height' => 200,
                                    'width' => 300,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_2.webp',
                                    'orientation' => 'landscape'
                                ],
                                'large' => [
                                    'height' => 684,
                                    'width' => 1024,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_2.webp',
                                    'orientation' => 'landscape'
                                ],
                                'medium_large' => [
                                    'height' => 513,
                                    'width' => 768,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_2.webp',
                                    'orientation' => 'landscape'
                                ],
                                '1536x1536' => [
                                    'height' => 1026,
                                    'width' => 1536,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_2.webp',
                                    'orientation' => 'landscape'
                                ],
                                'full' => [
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_2.webp',
                                    'height' => 1282,
                                    'width' => 1920,
                                    'orientation' => 'landscape'
                                ]
                            ],
                            'attributes' => [
                                'srcset' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_2.webp' . '1920w, ' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_2.webp' . '300w, ' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_2.webp' . '1024w, ' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_2.webp' . '768w, ' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_2.webp' . '1536w',
                                'sizes' => '(max-width: 1920px) 100vw, 1920px'
                            ]
                        ],
                        '2' => [
                            'id' => 2714,
                            'filename' => 'render_3.webp',
                            'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_3.webp',
                            'alt' => '',
                            'caption' => '',
                            'mime' => 'image/webp',
                            'type' => 'image',
                            'sizes' => [
                                'thumbnail' => [
                                    'height' => 150,
                                    'width' => 150,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_3.webp', 'orientation' => 'landscape'
                                ],
                                'medium' => [
                                    'height' => 200,
                                    'width' => 300,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_3.webp',
                                    'orientation' => 'landscape'
                                ],
                                'large' => [
                                    'height' => 684,
                                    'width' => 1024,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_3.webp',
                                    'orientation' => 'landscape'
                                ],
                                'medium_large' => [
                                    'height' => 513,
                                    'width' => 768,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_3.webp',
                                    'orientation' => 'landscape'
                                ],
                                '1536x1536' => [
                                    'height' => 1026,
                                    'width' => 1536,
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_3.webp',
                                    'orientation' => 'landscape'
                                ],
                                'full' => [
                                    'url' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_3.webp',
                                    'height' => 1282,
                                    'width' => 1920,
                                    'orientation' => 'landscape'
                                ]
                            ],
                            'attributes' => [
                                'srcset' => ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_3.webp' . '1920w, ' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_3.webp' . '300w, ' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_3.webp' . '1024w, ' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_3.webp' . '768w, ' . ELEMENTS_HIVE_DIR . 'assets/images/placeholders/render_3.webp' . '1536w',
                                'sizes' => '(max-width: 1920px) 100vw, 1920px'
                            ]
                            ]
                        ],
                        'apply_cover' => true
                    ],
                    'effects' => [
                        'effect' => 'blend-wave',
                        'direction' => '0'
                    ],
                    'timing' => [
                        'transition_duration' => [
                            'number' => 1500,
                            'unit' => 'ms',
                            'style' => '1500ms'
                        ],
                        'transition_interval' => [
                            'number' => 3000,
                            'unit' => 'ms',
                            'style' => '3000ms'
                        ]
                    ]
                ]
            ];

    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [c(
        "container",
        "Container",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "height",
        "Height",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "border_radius",
        "Border Radius",
        [],
        ['type' => 'border_radius', 'layout' => 'inline'],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\spacing_margin_y",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     )];
    }

    static function contentControls()
    {
        return [c(
        "images",
        "Images",
        [c(
        "images",
        "Images",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['multiple' => true]],
        false,
        false,
        [],
      ), c(
        "apply_cover",
        "Apply Cover",
        [],
        ['type' => 'toggle', 'layout' => 'vertical'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "effects",
        "Effects",
        [c(
        "effect",
        "Effect",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'blend-wave', 'text' => 'Blend Wave'], '1' => ['text' => 'Blobs', 'value' => 'blobs'], '2' => ['text' => 'Circular Mask', 'value' => 'circular-mask'], '3' => ['text' => 'Color Mix', 'value' => 'color-mix']]],
        false,
        false,
        [],
      ), c(
        "direction",
        "Direction",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'condition' => ['0' => ['0' => ['path' => 'content.effects.effect', 'operand' => 'equals', 'value' => 'blend-wave']], '1' => ['0' => ['path' => 'content.effects.effect', 'operand' => 'equals', 'value' => 'circular-mask']]], 'items' => ['0' => ['value' => '0', 'text' => 'Center'], '1' => ['text' => 'Left', 'value' => '1'], '2' => ['text' => 'Right', 'value' => '2'], '3' => ['text' => 'Top', 'value' => '3'], '4' => ['text' => 'Bottom', 'value' => '4'], '5' => ['text' => 'Top Left', 'value' => '5'], '6' => ['text' => 'Top Right', 'value' => '6'], '7' => ['text' => 'Bottom Right', 'value' => '7'], '8' => ['text' => 'Bottom Left', 'value' => '8']]],
        false,
        false,
        [],
      ), c(
        "invert",
        "Invert",
        [],
        ['type' => 'toggle', 'layout' => 'vertical', 'condition' => ['0' => ['0' => ['path' => 'content.effects.effect', 'operand' => 'equals', 'value' => 'circular-mask']]]],
        false,
        false,
        [],
      ), c(
        "scale",
        "Scale",
        [],
        ['type' => 'unit', 'layout' => 'vertical', 'unitOptions' => ['types' => ['0' => 'custom']], 'rangeOptions' => ['min' => 0, 'max' => 10, 'step' => 0.1], 'condition' => ['0' => ['0' => ['path' => 'content.effects.effect', 'operand' => 'equals', 'value' => 'blobs']]]],
        false,
        false,
        [],
      ), c(
        "blur_level",
        "Blur Level",
        [],
        ['type' => 'unit', 'layout' => 'vertical', 'unitOptions' => ['types' => ['0' => 'custom']], 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.1], 'condition' => ['0' => ['0' => ['path' => 'content.effects.effect', 'operand' => 'equals', 'value' => 'blobs']]]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "timing",
        "Timing",
        [c(
        "transition_duration",
        "Transition Duration",
        [],
        ['type' => 'unit', 'layout' => 'vertical', 'unitOptions' => ['types' => ['0' => 'ms']]],
        false,
        false,
        [],
      ), c(
        "transition_interval",
        "Transition Interval",
        [],
        ['type' => 'unit', 'layout' => 'vertical', 'unitOptions' => ['types' => ['0' => 'ms']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return ['0' =>  ['inlineScripts' => ['( function() {

  const containerEl = document.querySelector(\'%%SELECTOR%%\')

  if (!containerEl ) return

  if ( window.EhInstancesManager.instanceExists(\'EhWebglSlideshow\', \'%%ID%%\') ) return

  const images = []

  {% for image in content.images.images %}
  	images.push(\'{{image.url}}\')
  {% endfor %}

  const options = {
    parent: containerEl.querySelector(\'.eh-webgl-slideshow__wrapper\'),
    canvas: containerEl.querySelector(\'.eh-webgl-slideshow__canvas\'),
    isCover: {% if content.images.apply_cover is empty %} false {% else %} true {% endif %},
    effect: \'{{content.effects.effect}}\',
    direction: {{content.effects.direction|default(0)}},
    invert: {{content.effects.invert|default(0)}},
    blurLevel: {{content.effects.blur_level.number|default(0)}},
    scale: {{content.effects.scale.number|default(10)}},
    duration: {{content.timing.transition_duration.number|default(1500)}},
	interval: {{content.timing.transition_interval.number|default(3000)}},
    images,
      id: %%ID%%
  }

   try {
     let instance = null
        instance = new EhWebglSlideShow(options)
 	 	window.EhInstancesManager.registerInstance(\'EhWebglSlideshow\', \'%%ID%%\', instance)


     const resizeObserver = new ResizeObserver( (entries) => {
       setTimeout( () => {
         instance.onResize()
       }, 300 )
     })

     resizeObserver.observe(containerEl.parentElement);

   } catch (error) {
     console.log(\'Webgl Slideshow Element: Instance %%ID%% not created\', error)
   }

}());'],'scripts' => [ELEMENTS_HIVE_DIR . 'assets/js/utils/eh_instances_manager.js', ELEMENTS_HIVE_DIR . 'elements/WebGL_Slideshow/assets/js/eh_webgl_slideshow.min.js'],'title' => 'Init Builder','builderCondition' => 'return true;','frontendCondition' => 'return false;',],'1' =>  ['inlineScripts' => ['( function() {

  const containerEl = document.querySelector(\'%%SELECTOR%%\')

  if (!containerEl ) return

  const images = []

  {% for image in content.images.images %}
  	images.push(\'{{image.url}}\')
  {% endfor %}

  const options = {
    parent: containerEl.querySelector(\'.eh-webgl-slideshow__wrapper\'),
    canvas: containerEl.querySelector(\'.eh-webgl-slideshow__canvas\'),
    isCover: {% if content.images.apply_cover is empty %} false {% else %} true {% endif %},
    effect: \'{{content.effects.effect}}\',
    direction: {{content.effects.direction|default(0)}},
    invert: {{content.effects.invert|default(0)}},
    blurLevel: {{content.effects.blur_level.number|default(0)}},
    scale: {{content.effects.scale.number|default(10)}},
    duration: {{content.timing.transition_duration.number|default(1500)}},
	interval: {{content.timing.transition_interval.number|default(3000)}},
    images
  }

   new EhWebglSlideShow(options)

}());'],'scripts' => [ELEMENTS_HIVE_DIR . 'elements/WebGL_Slideshow/assets/js/eh_webgl_slideshow.min.js'],'title' => 'Init Frontend','frontendCondition' => 'return true;','builderCondition' => 'return false;',],];
    }

    static function settings()
    {
        return false;
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return [

'onPropertyChange' => [['script' => '( function() {

  const containerEl = document.querySelector(\'%%SELECTOR%%\')

  if (!containerEl ) return

  let instance = null
  if ( window.EhInstancesManager.instanceExists(\'EhWebglSlideshow\', \'%%ID%%\') ) {
    instance = window.EhInstancesManager.getInstance(\'EhWebglSlideshow\', \'%%ID%%\')
	instance.destroy().then( () => {
      window.EhInstancesManager.deleteInstance(\'EhWebglSlideshow\', \'%%ID%%\')
      instance = null
      initEhSlideshow()
    })
  }

  function initEhSlideshow() {

    const images = []

    {% for image in content.images.images %}
      images.push(\'{{image.url}}\')
    {% endfor %}

    const options = {
      parent: containerEl.querySelector(\'.eh-webgl-slideshow__wrapper\'),
      canvas: containerEl.querySelector(\'.eh-webgl-slideshow__canvas\'),
      isCover: {{content.images.apply_cover|default(false)}},
      effect: \'{{content.effects.effect}}\',
      direction: {{content.effects.direction|default(0)}},
      invert: {{content.effects.invert|default(0)}},
      blurLevel: {{content.effects.blur_level.number|default(0)}},
      scale: {{content.effects.scale.number|default(10)}},
      duration: {{content.timing.transition_duration.number|default(1500)}},
      interval: {{content.timing.transition_interval.number|default(3000)}},
      images
    }

      instance = new EhWebglSlideShow(options)
      window.EhInstancesManager.registerInstance(\'EhWebglSlideshow\', \'%%ID%%\', instance)

  }

}());',
],],

'onMovedElement' => [['script' => '( function() {

  const containerEl = document.querySelector(\'%%SELECTOR%%\')

  if (!containerEl ) return

  let instance = null
  if ( window.EhInstancesManager.instanceExists(\'EhWebglSlideshow\', \'%%ID%%\') ) {
    instance = window.EhInstancesManager.getInstance(\'EhWebglSlideshow\', \'%%ID%%\')
	instance.destroy().then( () => {
      window.EhInstancesManager.deleteInstance(\'EhWebglSlideshow\', \'%%ID%%\')
      instance = null
      initEhSlideshow()
    })
  }

  function initEhSlideshow() {

    const images = []

    {% for image in content.images.images %}
      images.push(\'{{image.url}}\')
    {% endfor %}

    const options = {
      parent: containerEl.querySelector(\'.eh-webgl-slideshow__wrapper\'),
      canvas: containerEl.querySelector(\'.eh-webgl-slideshow__canvas\'),
      isCover: {{content.images.apply_cover|default(false)}},
      effect: \'{{content.effects.effect}}\',
      direction: {{content.effects.direction|default(0)}},
      invert: {{content.effects.invert|default(0)}},
      blurLevel: {{content.effects.blur_level.number|default(0)}},
      scale: {{content.effects.scale.number|default(10)}},
      duration: {{content.timing.transition_duration.number|default(1500)}},
      interval: {{content.timing.transition_interval.number|default(3000)}},
      images
    }



    setTimeout( () => {
      instance = new EhWebglSlideShow(options)
      window.EhInstancesManager.registerInstance(\'EhWebglSlideshow\', \'%%ID%%\', instance)
    }, 300)
  }




}());',
],],];
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return ['0' => ['cssProperty' => 'margin-top', 'location' => 'outside-top', 'affectedPropertyPath' => 'design.spacing.margin_top.%%BREAKPOINT%%'], '1' => ['cssProperty' => 'margin-bottom', 'location' => 'outside-bottom', 'affectedPropertyPath' => 'design.spacing.margin_bottom.%%BREAKPOINT%%']];
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 1;
    }

    static function dynamicPropertyPaths()
    {
        return false;
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return false;
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }

    }
