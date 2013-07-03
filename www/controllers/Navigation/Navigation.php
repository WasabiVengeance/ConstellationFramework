<?php

class jvc_controller_Navigation extends jvc_controller 
{
	function Main_Nav()
	{
		$nav_top = bsc::navbar('fixed-top','Matsuricon','',true);
		$nav_top->add(
			bsc::list_item()->add(bsc::anchor('Registration','#!Registration-Landing','file-text-alt')),
			bsc::list_item()->add(bsc::anchor('Lookup','#!Lookup-Landing','search')),
			bsc::list_item()->add(bsc::anchor('Configuration','#!Configuration-Landing','gear'))
		);
		jvc::set_response('top',$nav_top);
	}
}

?>