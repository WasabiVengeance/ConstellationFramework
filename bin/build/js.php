#!/usr/bin/php
<?php
$input = '';
$base = __DIR__.'/../../';
include(__DIR__.'/../../lib/jsmin-php/jsmin.php');
echo("Building JS... ");

$files = array(
	'http://code.jquery.com/jquery-1.9.1.min.js',
	$base.'lib/TwitterBootstrap/js/affix.js',
	$base.'lib/TwitterBootstrap/js/alert.js',
	$base.'lib/TwitterBootstrap/js/button.js',
	$base.'lib/TwitterBootstrap/js/carousel.js',
	$base.'lib/TwitterBootstrap/js/collapse.js',
	$base.'lib/TwitterBootstrap/js/dropdown.js',
	$base.'lib/TwitterBootstrap/js/modal.js',
	#$base.'lib/TwitterBootstrap/js/popover.js',
	$base.'lib/TwitterBootstrap/js/scrollspy.js',
	$base.'lib/TwitterBootstrap/js/tab.js',
	$base.'lib/TwitterBootstrap/js/tooltip.js',
	$base.'lib/TwitterBootstrap/js/transition.js',
	$base.'lib/console.js/console.js',
	$base.'lib/jquery-hashchange/jquery.ba-hashchange.js',
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
	$base.'lib/ConstellationFramework/lib/js/csn.js',
);

foreach($files as $file)
{
	$input .= file_get_contents($file)."\n";
}

file_put_contents(__DIR__.'/../../www/media/combined.js',$input);
file_put_contents(__DIR__.'/../../www/media/combined.min.js',JSMin::minify($input));

echo("     COMPLETE!\n");
?>