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


file_put_contents(__DIR__.'/../../www/media/combined.css',$less->compile($to_compile));
$less->setFormatter("compressed");
file_put_contents(__DIR__.'/../../www/media/combined.min.css',$less->compile($to_compile));

echo("     COMPLETE!\n");
?>