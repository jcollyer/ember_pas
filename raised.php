<?php
	  include "con.php";
// 	function post($key) {
// 	    if (isset($_POST[$key]))
// 	        return $_POST[$key];
// 	    return false;
// 	}



	// check if we can get hold of the form field
	// if (!post('donation'))
	//     exit;

	// let make sure we escape the data
	// $val = mysql_real_escape_string(post('donation'), $cxn);

	// lets setup our insert query
		// $sql = sprintf("INSERT INTO %s (donation) VALUES '%s';",
		//                 'twodollar',
		//                 $val
		// );

//////////////////////////////

	$get = mysql_query("UPDATE twodollar SET donation=donation+2 WHERE id = 1");
	if (!$get) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
//////////////////////////////

 //  //$donation = $_POST['donation'];
 //  $newvalue = $_POST['newvalue'];
 //  //$sammy = $_POST['sammy'];
 //  //echo 'Hello ' . htmlspecialchars($_POST["sammy"]) . '!';

 //  //echo '<h1>'+$donation+'</h1>';
 //    echo '<h4>'+$newvalue+'</h4>';
 //  $query=mysql_query("INSERT INTO twodollar(donation) VALUES('$newvalue')");
 //  if($query){
 //  echo "Data for  inserted successfully!";
 //  }
 //  else{ echo "An error occurred!"; }


	// // lets run our query
	// // $result = mysql_query($sql, $cxn);

	// // // setup our response "object"
	// // $resp = new stdClass();
	// // $resp->success = false;
	// // if($get) {
	// //     $resp->success = true;
	// // }

	// // print json_encode($resp);



//mysql_close($con);
?>