<?php

class dbm_model__base__badge_types extends dbm_model
{
	public function __init_fields()
	{
		$this->__fields[] = new dbm_field('badgetype_id','int',null,0,'');
		$this->__fields[] = new dbm_field('description','varchar',50,null,'');
		$this->__fields[] = new dbm_field('price','decimal',null,2,'');
		$this->__fields[] = new dbm_field('order_by','int',null,0,'');
		$this->__build_index();
	}
}

?>