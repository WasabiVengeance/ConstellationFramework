
DATE=$(shell date +%I:%M%p)
CHECK=\033[32m✔ Done\033[39m
HR=\033[37m--------------------------------------------------\033[39m


#
# BUILD 
#

# include build also does js/css/models.
includes:
	@php -f bin/build/includes.php

js:
	@php -f bin/build/includes-js.php
css:
	@php -f bin/build/includes-css.php
models:
	@php -f bin/build/includes-modles.php


# db build also does tables/views/functions/procedures/triggers
db:
	@php -f bin/build/db.php
tables:
	@php -f bin/build/db-tables.php
views:
	@php -f bin/build/db-views.php
functions:
	@php -f bin/build/db-functions.php
procedures:
	@php -f bin/build/db-procedures.php
	
triggers:
	@php -f bin/build/db-triggers.php
	
	
#
# RUN JSHINT & QUNIT TESTS IN PHANTOMJS
#

test:
	echo"not implemented yet"

#
# CLEANS THE ROOT DIRECTORY OF PRIOR BUILDS
#

clean:
	@rm www/media/combined.css
	@rm www/media/combined.min.css
	@rm www/media/combined.js
	@rm www/media/combined.min.js
	echo "done"