#!/usr/bin/php
<?php
echo("Run the following SQL as root:\n\n");
include(__DIR__.'/../../lib/ConstellationFramework/lib/php/csn.php');
csn::init(__DIR__.'/../../',false);

switch($config['dbm']['type'])
{
	case 'mysql':
		echo("drop user `".$config['dbm']['username']."`@`".$config['dbm']['hostname']."`;\n");
		echo("drop database ".$config['dbm']['database'].";\n");
		break;
}

echo("\n\nCOMPLETE!\n");
?>