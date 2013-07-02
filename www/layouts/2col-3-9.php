<?php

global $page,$config;

$page = bsc::page(jvc::get_response('title'))
	->javascript($__bsc['initial_js'])
	->description(jvc::get_response('description'))
	->description(jvc::get_response('keywords'))
	->description(jvc::get_response('author'))
	->css($config['bsc']['libs']['css'])
	->head_js($config['bsc']['libs']['head_js'])
	->foot_js($config['bsc']['libs']['foot_js'])
	->onload('csn.init();');

$page->add(
	jvc::get_response('top'),
	bsc::row()->add(
		bsc::div()->span(12)->add(
			bsc::navbar()->id('header')->add(jvc::get_response('header'))
		)
	),
	bsc::row()->add(
		bsc::div()->span(3)->id('left')->add(jvc::get_response('left')),
		bsc::div()->span(9)->id('center')->add(jvc::get_response('center'))
	),
	bsc::row()->add(
		bsc::div()->span(12)->add(
			bsc::navbar()->id('footer')->add(jvc::get_response('footer'))
		)
	),
	jvc::get_response('bottom')
);

?>
