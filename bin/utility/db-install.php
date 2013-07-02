#!/usr/bin/php
<?php
echo("Run the following SQL as root:\n\n");
include(__DIR__.'/../../lib/ConstellationFramework/lib/php/csn.php');
csn::init(__DIR__.'/../../',false);

switch($config['dbm']['type'])
{
	case 'mysql':
		echo("create user `".$config['dbm']['username']."`@`".$config['dbm']['hostname']."`");
		echo(" identified by  '".$config['dbm']['password']."';\n\n");
		echo("create database ".$config['dbm']['database'].";\n\n");
		echo("grant all privileges on ".$config['dbm']['database'].".* to `".$config['dbm']['username']."`@`".$config['dbm']['hostname']."`;\n\n");
		break;
}

echo("\n\nCOMPLETE!\n");
?>