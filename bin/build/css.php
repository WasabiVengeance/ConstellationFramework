#!/usr/bin/php
<?php

# startup lessc and add all import dirs
include(__DIR__.'/../../lib/lessphp/lessc.inc.php');
$less = new lessc();
$less->addImportDir(__DIR__."/../../lib/TwitterBootstrap/less/");
$less->addImportDir(__DIR__."/../../lib/BootstrapConstructor/lib/less/");
$less->addImportDir(__DIR__."/../../www/media/less/");
echo("Building CSS...");

# build a list of imports
$to_compile .= '@import "bootstrap";'."\n";
$to_compile .= '@import "data-table";'."\n";
if(file_exists(__DIR__.'/../../www/media/less/customizations.less'))
{
	$to_compile .= '@import "customizations";'."\n";
}


$fontawesome = file_get_contents(__DIR__.'/../../lib/FontAwesome/build/assets/font-awesome/css/font-awesome.css');
$fontawesome_min = file_get_contents(__DIR__.'/../../lib/FontAwesome/build/assets/font-awesome/css/font-awesome.min.css');
$fontawesome = str_replace('../font/','fonts/',$fontawesome);
$fontawesome_min = str_replace('../font/','fonts/',$fontawesome_min);

file_put_contents(
	__DIR__.'/../../www/media/combined.css',
	$less->compile($to_compile)."\n".$fontawesome
);
$less->setFormatter("compressed");
file_put_contents(
	__DIR__.'/../../www/media/combined.min.css',
	$less->compile($to_compile)."\n".$fontawesome_min
);

copy(__DIR__.'/../../lib/FontAwesome/build/assets/font-awesome/font/fontawesome-webfont.eot',__DIR__.'/../../www/media/fonts/fontawesome-webfont.eot');
copy(__DIR__.'/../../lib/FontAwesome/build/assets/font-awesome/font/fontawesome-webfont.svg',__DIR__.'/../../www/media/fonts/fontawesome-webfont.svg');
copy(__DIR__.'/../../lib/FontAwesome/build/assets/font-awesome/font/fontawesome-webfont.ttf',__DIR__.'/../../www/media/fonts/fontawesome-webfont.ttf');
copy(__DIR__.'/../../lib/FontAwesome/build/assets/font-awesome/font/fontawesome-webfont.woff',__DIR__.'/../../www/media/fonts/fontawesome-webfont.woff');
copy(__DIR__.'/../../lib/FontAwesome/build/assets/font-awesome/font/FontAwesome.otf',__DIR__.'/../../www/media/fonts/FontAwesome.otf');


echo("     COMPLETE!\n");
?>