<?php
if (function_exists('pll_the_languages')) {
$showname = (bool) ($propertiesData['content']['content']['hide_name'] ?? false);
$showflags = (bool) ($propertiesData['content']['content']['show_flags'] ?? false);
$hidecurrent = (bool) ($propertiesData['content']['content']['hide_current'] ?? false);
$forcehome = (bool) ($propertiesData['content']['content']['force_link_to_home'] ?? false);
$nameas = (string) ($propertiesData['content']['content']['display_name_as'] ?? 'name');
?>
<ul>
<?php pll_the_languages( array( 
'show_names' => !$showname,
'show_flags' => $showflags,
'hide_current' => $hidecurrent,
'force_home' => $forcehome,
'display_names_as' => $nameas,
) ); ?>
</ul>
<?php }

