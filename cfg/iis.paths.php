<?php
/*! pimpmylog - 1.7.0 - a49933da56c3bf3b7dfc88cc6b81407468d39bdb*/
/*
 * pimpmylog
 * http://pimpmylog.com
 *
 * Copyright (c) 2014 Potsky, contributors
 * Licensed under the GPLv3 license.
 */
?>
<?php

/**
 * All possible paths where log files could be found
 *
 * @var  array
 */
$paths = array(
	'C:\\inetpub\\logs\\LogFiles\\W3SVC*\\',
	'C:\\WINDOWS\\system32\\LogFiles\\W3SVC*\\',
	'C:\\WINNT\\system32\\LogFiles\\W3SVC*\\',
);


/**
 * All possibles files for each type of log
 *
 * All files will be tried in all possibles paths above
 *
 * The order is important because it will be the order of log files for users.
 * eg: I want error log be the first because most users want to see error and not access logs
 *
 * @var  array
 */
$files = array(
	'access' => array(
		'*.log'
	),
);
