<?php

class dbm_model__base__attendees extends dbm_model
{
	public function __init_fields()
	{
		$this->__fields[] = new dbm_field('attendee_id','int',null,0,'');
		$this->__fields[] = new dbm_field('name','varchar',255,null,'');
		$this->__fields[] = new dbm_field('nick_name','varchar',255,null,'');
		$this->__fields[] = new dbm_field('email','varchar',255,null,'');
		$this->__fields[] = new dbm_field('street_address','varchar',255,null,'');
		$this->__fields[] = new dbm_field('city','varchar',255,null,'');
		$this->__fields[] = new dbm_field('postal_code','varchar',255,null,'');
		$this->__fields[] = new dbm_field('state_province','varchar',255,null,'');
		$this->__fields[] = new dbm_field('dob','bigint',null,0,'');
		$this->__fields[] = new dbm_field('creation_date','bigint',null,0,'');
		$this->__fields[] = new dbm_field('contact_phone_nbr','varchar',255,null,'');
		$this->__build_index();
	}
}

?>