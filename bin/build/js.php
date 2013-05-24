#!/usr/bin/php
<?php
$input = '';
$base = __DIR__.'/../../';
include(__DIR__.'/../../lib/jsmin-php/jsmin.php');

$files = array(
	'http://code.jquery.com/jquery-1.9.1.min.js',
	$base.'lib/TwitterBootstrap/js/affix.js',
	$base.'lib/TwitterBootstrap/js/alert.js',
	$base.'lib/TwitterBootstrap/js/button.js',
	$base.'lib/TwitterBootstrap/js/carousel.js',
	$base.'lib/TwitterBootstrap/js/collapse.js',
	$base.'lib/TwitterBootstrap/js/dropdown.js',
	$base.'lib/TwitterBootstrap/js/modal.js',
	$base.'lib/TwitterBootstrap/js/popover.js',
	$base.'lib/TwitterBootstrap/js/scrollspy.js',
	$base.'lib/TwitterBootstrap/js/tab.js',
	$base.'lib/TwitterBootstrap/js/tooltip.js',
	$base.'lib/TwitterBootstrap/js/transition.js',
	$base.'lib/BootstrapConstructor/lib/js/bsc.js',
	$base.'lib/BootstrapConstructor/lib/js/bsc.form.js',
	$base.'lib/BootstrapConstructor/lib/js/bsc.widget.js',
	$base.'lib/BootstrapConstructor/lib/js/bsc.widget.dataTable.js',
	$base.'lib/DatabaseManager/lib/js/dbm.js',
	$base.'lib/DataValidator/lib/js/dvr.js',
	$base.'lib/JsonVC/lib/js/jvc.js',
	$base.'lib/LanguageHelper/lib/js/lng.js',
	$base.'lib/Logger/lib/js/lgr.js',
	$base.'lib/SessionManager/lib/js/ssm.js',
);

foreach($files as $file)
{
	$input .= file_get_contents($file).';';
}

echo JSMin::minify($input);

?>