<?php

# Create a new connection to the database
$db = new mysqli('104.37.190.203','xavierth_itsxok','Fromthedark!','xavierth_portfolio_site');

# If there was an error connecting to the database
if ($db->connect_error) {
	$error = $db->connect_error;
	echo $error;
}

# Set the character encoding of the database connection to UTF-8
$db->set_charset('utf8');