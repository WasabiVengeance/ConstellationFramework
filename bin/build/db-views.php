#!/usr/bin/php
<?php
echo("Building Views...");
include(__DIR__.'/../../lib/ConstellationFramework/lib/php/csn.php');
csn::init(__DIR__.'/../../');

$files = scandir(__DIR__.'/../../db/views/');
foreach($files as $file)
{
	if($file != '.' && $file != '..')
	{
		$ext = pathinfo($file);
		if(strtolower($ext['extension']) == 'sql')
			dbm::query(file_get_contents($file));
	}
}

echo("       COMPLETE!\n");
?>