#!/usr/bin/php
<?php
echo("starting attendee import....\n\n");include(__DIR__.'/../lib/ConstellationFramework/lib/php/csn.php');
csn::init(__DIR__.'/../');



dbm::query('delete from attendees;');

$data = file_get_contents(__DIR__.'/reg_dump.csv');
$data = str_replace("\r",'',$data);
$data = explode("\n",$data);
array_shift($data);

$attendees = array();
$parse_count = 0;
foreach($data as $line)
{
	$line = str_getcsv($line);
	$count = array_shift($line);
	$charge = array_shift($line);
	for($i=1;$i<=$count;$i++)
	{
		$attendees[] = array(
			'name'=>array_shift($line),
			'dob'=>array_shift($line),
			'nickname'=>array_shift($line),
			'email'=>array_shift($line),
			'street_address'=>array_shift($line).' '.array_shift($line),
			'city'=>array_shift($line),
			'state'=>array_shift($line),
			'postal_code'=>array_shift($line),
			'contact_phone_nbr'=>array_shift($line),
		);
	}
	
	$parse_count++;
	#if($parse_count == 10)	exit(print_r($attendees,true));
}
ob_end_flush();
foreach($attendees as $attendee)
{
	echo("\t".$attendee['name']."\n");
	$model = dbm::model('attendees')->import($attendee)->save();
}

#print_r($attendees);

exit("complete!\n");


?>