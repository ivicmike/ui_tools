<?php

//echo rex_view::title(rex_i18n::msg('selectize_menu_entry'));

$file = rex_file::get(rex_path::addon('be_utilities/plugins/selectize/assets/selectize','LICENSE'));
$Parsedown = new Parsedown();

$content =  '<div id="be_utilities">'.$Parsedown->text($file).'</div>';

$fragment = new rex_fragment();
$fragment->setVar('title', rex_i18n::msg('selectize_license'));
$fragment->setVar('body', $content, false);
echo $fragment->parse('core/page/section.php');
