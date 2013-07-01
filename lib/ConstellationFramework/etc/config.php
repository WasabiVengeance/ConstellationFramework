<?php


global $config;

# create log hook functions
$default_log = function($string){	lgr::write($string,'default'); };
$page_log   = function($string){	jvc::set_response('footer',$string.'<br />','prepend'); };
$sql_log     = function($string){	lgr::write($string,'sql'); };

$config = array(
	'csn'=>array(
		'layout'=>'2col-3-9',
		'stage'=>'',
	),
	'lgr'=>array(
		'logs'=>array(
			'default'=>__DIR__.'/../../../var/log/default.log',
			'sql'=>__DIR__.'/../../../var/log/sql.log',
			'error'=>__DIR__.'/../../../var/log/error.log',
		)
	),	
	'bsc'=>array(
		'hooks'=>array(
			'log'=>$default_log,
			'translator'=>function($text){ return lng::translate($text); },
		),
		'libs'=>array(
			'css'=>array(
				'/media/combined.min.css',
			),
			'head_Js'=>array(
			),
			'foot_js'=>array(
				'/media/combined.min.js',
			),
		),
		'initial_js'=>"",
	),
	'dbm'=>array(
		'type'=>'mysql',
		'hostname'=>'localhost',
		'username'=>'dbm_testuser',
		'password'=>'dbm_testuser',
		'database'=>'dbm_testdb',
		'hooks'=>array('log'=>$sql_log),
		'model_path'=>__DIR__.'/models/',
	),
	'dvr'=>array(
		'hooks'=>array('log'=>$default_log),
	),
	'dfm'=>array(
		'hooks'=>array('log'=>$default_log),
	),
	'jvc'=>array(
		'hooks'=>array(
			'log'=>$default_log,
			'deinit'=>function(){
				ssm::deinit();
				lng::deinit();
				dfm::deinit();
				dvr::deinit();
				dbm::deinit();
				bsc::deinit();
				lgr::deinit();
			}
		),
		'paths'=>array(
			'base'=>__DIR__.'/../../../www/',
		),
		'config_file'=>'config.php',
	),
	'lng'=>array(
		'hooks'=>array('log'=>$default_log),
		'language'=>'en',
		'variant'=>'us',
		'paths'=>array(__DIR__.'/dictionaries/'),
	),
	'ssm'=>array(
		'hooks'=>array('log'=>$default_log),
	),
);

?>