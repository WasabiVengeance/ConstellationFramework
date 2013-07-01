
DATE=$(shell date +%I:%M%p)
CHECK=\033[32m✔ Done\033[39m
HR=\033[37m--------------------------------------------------\033[39m


#
# BUILD 
#

build:
	@php -f bin/build/all.php
	
	
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