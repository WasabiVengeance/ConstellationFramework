<?php

class jvc_controller_ConstellationInfo extends jvc_controller 
{
	function show_info()
	{
		global $config;
		jvc::set_response('header','header');
		jvc::set_response('footer','footer');
		jvc::set_response('left','left');
		jvc::set_response('center','center');
	}
}

?>