<?php

class jvc_controller_Registration extends jvc_controller 
{
	function Rules()
	{
		return dvr::ruleset(
			dvr::field('name')->rule('minlength','Please enter a value for Attendee Name',5),
			dvr::field('street_address')->rule('minlength','Please enter a value for Street Address',5),
			dvr::field('city')->rule('minlength','Please enter a value for City',2),
			dvr::field('state_province')->rule('minlength','Please enter a value for State',2),
			dvr::field('postal_code')->rule('minlength','Please enter a value for Zip Code',5),
			dvr::field('contact_phone_nbr')->rule('minlength','Please enter a value for Phone Number',10)
		);
	}
	
	function Process()
	{
		global $config;
		
		list($pass,$errors) = $this->Rules()->test();
		if(!$pass)
		{
			
		}
		dbm::model('attendees')->import()->save();
		
		$modal = bsc::modal('User Saved');
		$modal->add(bsc::text('Good job!'))->footer->add(
			bsc::modal_close('Close','primary')
		);
		jvc::set_response('js','document.regForm.reset();');
		jvc::set_response('js','$(\'#bsc_modal\').parent().parent().modal();');
		jvc::set_response('js','window.setTimeout(function(){ $(\'#bsc_modal\').parent().parent().modal(\'hide\');},1200);');
		jvc::set_response('bsc_modal',$modal);
	}
}

?>