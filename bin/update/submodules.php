#!/usr/bin/php
<?php

echo shell_exec('git submodule foreach git pull');

?>