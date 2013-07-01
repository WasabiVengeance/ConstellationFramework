#!/usr/bin/php
<?php
echo("Starting build process...\n");
echo("-----------------------------\n");
echo shell_exec('php -f bin/build/css.php');
echo shell_exec('php -f bin/build/js.php');
echo shell_exec('php -f bin/build/models.php');
echo("-----------------------------\n");
echo("Build complete!\n");
?>