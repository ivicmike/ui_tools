<?php

//echo rex_view::title(rex_i18n::msg('selectize_menu_entry'));

$file = rex_file::get(rex_path::addon('be_utilities/plugins/selectize/assets/selectize','README.md'));
$Parsedown = new Parsedown();

$content =  '<div id="be_utilities">'.$Parsedown->text($file);

$fragment = new rex_fragment();
$fragment->setVar('title', rex_i18n::msg('selectize_info'));
$fragment->setVar('body', $content, false);
echo $fragment->parse('core/page/section.php');