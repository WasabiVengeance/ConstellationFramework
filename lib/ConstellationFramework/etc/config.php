<?php


global $config;

# create log hook functions
$default_log = function($string){	lgr::write($string,'default'); };
$page_log   = function($string){	jvc::set_response('footer',$string.'<br />','prepend'); };
$sql_log     = function($string){	lgr::write($string,'sql'); };

$config = array(
	'lgr'=>array(
		'logs'=>array(
			'default'=>'/tmp/dev-default.log',
			'sql'=>'/tmp/dev-sql.log',
			'error'=>'/tmp/dev-error.log',
		)
	),	
	'bsc'=>array(
		'hooks'=>array(
			'log'=>$default_log,
			'translator'=>function($text){ return lng::translate($text); },
		),
		'libs'=>array(
			'css'=>array(
				'/media/css/combined.min.css',
				#'//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css',
				#'//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css',
				#'/lib/BootstrapConstructor/lib/css/data-table.css',
			),
			'js'=>array(
				'/media/js/combined.min.js',
				#'//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
				#'/lib/BootstrapConstructor/lib/js/bsc.widget.dataTable.js',
				#'//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js',
				#'/media/js/combined.js',
				#'/lib/jQueryHashchange/jquery.ba-hashchange.js',
				#'/lib/JsonVC/lib/js/jvc.js',
			),
		),
		'initial_js'=>"
			jvc['afterAjaxResponseJS'] = '$(\'[rel=popover]\').popover();$(\'[rel=tooltip]\').tooltip();';
			jvc['beforeAjaxSubmit'] = dvr.validate;
			jvc['showFormErrors'] = bsc.form.showErrors;
			jvc['clearFormErrors'] = bsc.form.clearErrors;
		",
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
			'base'=>__DIR__,
		),
		'config_file'=>'config.php',
		#'commands-pre-page'=>array('test/navigation'),
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