<?php
global $config;
include(__DIR__.'/../lib/ConstellationFramework/lib/php/csn.php');
#echo('hi');
csn::init(__DIR__.'/../');
csn::process();
?>