<?php
$data = dbm::model('attendees');

$table = bsc::data_table('attendees','Lookup/Landing',$data,'name','asc');
$table->add(
	bsc::data_column('Name','name','20%',true,'{name}'),
	bsc::data_column('Street Address','street_address','25%',true,'{street_address}'),
	bsc::data_column('City','city','15%',true,'{city}'),
	bsc::data_column('DOB','dob','15%',true,'{dob}'),
	bsc::data_column('Emergency Nbr','contact_phone_nbr','15%',true,'{contact_phone_nbr}')
);
$obj = bsc::input_text()->placeholder('Search')->append('<i class="icon-search"></i>');
$table->add_filter('name','%',$obj);
$table->send_data();

jvc::set_response('center',$table);
?>