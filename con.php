<?php
	// setup the database connect
	$con = mysql_connect('localhost', 'jcollyer', 'jcollyer');
	//$con = mysql_connect('plantaseedafricaorg.ipagemysql.com', 'jcollyer', 'jcollyer');
	if (!$con)
	    exit;
	mysql_select_db('pas', $con);
?>