<?php

$config['csn']['stages']['qa'] = array(
	'database'=>'matsurireg_qa',
	'ssh-command'=>'ssh lo-web1',
	'path'=>'/var/www/qa',
);
$config['csn']['stages']['production'] = array(
	'database'=>'matsurireg_production',
	'ssh-command'=>'ssh lo-web1',
	'path'=>'/var/www/qa',
);
$config['csn']['stages']['testing'] = array(
	'database'=>'matsurireg_testing',
	'ssh-command'=>'ssh lo-web1',
	'path'=>'/var/www/qa',
);

# testing

$config['jvc']['commands-pre-page'][] = 'Navigation/Main_Nav';
$config['csn']['layout'] = '1col-12';

$config['dbm']['type'] = 'mysql';
$config['dbm']['hostname'] = 'localhost';
$config['dbm']['username'] = 'matsurireg';
$config['dbm']['password'] = 'matsurireg';
$config['dbm']['database'] = 'matsurireg';


?>