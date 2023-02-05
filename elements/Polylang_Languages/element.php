<?php

namespace BreakdanceCustomElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakdanceCustomElements\\PolylangLanguages",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class PolylangLanguages extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">   <path fill-rule="evenodd" d="M8.4 2.4a1.2 1.2 0 0 1 1.2 1.2v1.2h3.6a1.2 1.2 0 1 1 0 2.4h-1.706a22.64 22.64 0 0 1-2.07 5.736c.349.425.716.835 1.098 1.231a1.202 1.202 0 0 1-.886 2.034 1.2 1.2 0 0 1-.842-.367 25.24 25.24 0 0 1-.665-.72 22.918 22.918 0 0 1-3.729 4.28 1.2 1.2 0 0 1-1.6-1.788 20.501 20.501 0 0 0 3.756-4.48 22.789 22.789 0 0 1-1.785-2.992A1.2 1.2 0 1 1 6.92 9.066c.281.564.587 1.114.917 1.646.5-1.12.902-2.295 1.196-3.512H3.6a1.2 1.2 0 1 1 0-2.4h3.6V3.6a1.2 1.2 0 0 1 1.2-1.2Zm7.2 7.2a1.2 1.2 0 0 1 1.073.664l3.589 7.178a.95.95 0 0 1 .024.044l1.188 2.376a1.2 1.2 0 1 1-2.148 1.074L18.46 19.2h-5.717l-.869 1.736a1.2 1.2 0 1 1-2.146-1.072l1.188-2.376.023-.046 3.588-7.178A1.2 1.2 0 0 1 15.6 9.6Zm-1.658 7.2h3.316L15.6 13.483 13.942 16.8Z" clip-rule="evenodd"></path> </svg>';
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
        return 'Polylang Languages';
    }

    static function className()
    {
        return 'bce-polylang-languages';
    }

    static function category()
    {
        return 'other';
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
        return false;
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
        "layout",
        "Layout",
        [c(
        "position",
        "Position",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'Horizontal', 'text' => 'Horizontal'], '1' => ['value' => 'vertical', 'text' => 'Vertical']], 'buttonBarOptions' => ['size' => 'small', 'layout' => 'default']],
        false,
        false,
        [],
      ), c(
        "gap",
        "Gap",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 50, 'step' => 1]],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "container",
        "Container",
        [c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Padding",
      "padding",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "typography",
        "Typography",
        [getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Name",
      "name",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Current",
      "current",
       ['type' => 'popout']
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
        "content",
        "Content",
        [c(
        "show_flags",
        "Show Flags",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "hide_name",
        "Hide Name",
        [],
        ['type' => 'toggle', 'layout' => 'inline', 'condition' => ['0' => ['0' => ['path' => 'content.content.show_flags', 'operand' => 'is set', 'value' => '']]]],
        false,
        false,
        [],
      ), c(
        "display_name_as",
        "Display Name as",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'name', 'text' => 'Name'], '1' => ['text' => 'Slug', 'value' => 'slug']], 'condition' => ['0' => ['0' => ['path' => 'content.content.hide_name', 'operand' => 'is not set', 'value' => '']]]],
        false,
        false,
        [],
      ), c(
        "hide_current",
        "Hide Current",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "force_link_to_home",
        "Force Link to Home",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
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
        return false;
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
        return false;
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return false;
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
        return 0;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['accepts' => 'query', 'path' => 'content.content.lang[].new_control'], '1' => ['accepts' => 'image_url', 'path' => 'design.container.background.layers[].image']];
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
        return ['content.content.show_flags', 'content.content.hide_current', 'content.content.force_link_to_home', 'content.content.hide_name', 'content.content.display_name_as'];
    }
}
